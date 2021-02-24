<?php


class Model {
    protected $default_language = 'ru';
    protected $lang_label;
    protected $translation;
    protected $lang_file;
    protected $config_file;
    
    public function __construct($lang_file) {
        $this->lang_file = $lang_file;

        $this->config_file = dirname(dirname(__DIR__ )) . '/config/config.local.php';
        
        if(!isset($_SESSION['lang_label'])) {
            $_SESSION['lang_label'] = $this->default_language;
        }
        
        $this->lang_label = $_SESSION['lang_label'];
        try {
            if(!@include_once(dirname(__DIR__) . "/language/" . $this->lang_label . "/" . $this->lang_file)) {
                throw new Exception("<b>\"$this->lang_label\"</b> is incorrect language");
            }
            include_once(dirname(__DIR__) . "/language/" . $this->lang_label . "/general.php");
        } catch (Exception $e){
            $_SESSION['lang_label'] = $this->default_language;
            die($e->getMessage());
        }
        
        $this->translation = (object)$_;
    }
    
    public function get_lang_label() {
        return $this->lang_label;
    }
    
    public function get_translation($field = null) {
        if($field){
            return $this->translation->$field;
        }
        return (object)$this->translation;
    }
    
    public function check_ssl() {
        if(strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https') {
            return true;
        } else if($_SERVER["SERVER_PORT"] == 443) {
            return true;
        } else if (isset($_SERVER['HTTPS']) && (($_SERVER['HTTPS'] == 'on') || ($_SERVER['HTTPS'] == '1'))) {
            return true;
        } else if (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
            return true;
        }
        return false;
    }
}