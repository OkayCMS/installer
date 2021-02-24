<?php


class ModelStep_3 extends Model {

    private $dbc;
    private $okay_lang_id;
    
    public function __construct($lang_file) {
        parent::__construct($lang_file);
        $this->init_db_connect();
        $this->determine_okay_lang_id();
    }
    
    public function set_settings()
    {
        mysqli_query($this->dbc, "DELETE FROM ok_managers;");
        $manager_insert = "INSERT INTO ok_managers SET lang='{$_POST['backend_lang']}',
                            login='{$_POST['user_login']}',
                            email='{$_POST['user_email']}',
                            password='{$this->crypt_apr1_md5($_POST['user_pass'])}',
                            permissions=null
                            ";
        mysqli_query($this->dbc, $manager_insert);
        if (!empty($_POST['backend_lang'])) {
            mysqli_query($this->dbc, "UPDATE ok_settings SET value='{$_POST['backend_lang']}' WHERE param='email_lang';");
        }
        mysqli_query($this->dbc, "UPDATE ok_settings SET value='{$_POST['notify_email']}' WHERE param='order_email' OR param='comment_email' OR param='notify_from_email';");
        mysqli_query($this->dbc, "UPDATE ok_settings SET value='{$_POST['email_for_site']}' WHERE param='site_email';");
        mysqli_query($this->dbc, "UPDATE ok_settings SET value='{$_POST['phone_default_region']}' WHERE param='phone_default_region';");

        $phones = [];
        foreach (explode(',', $_POST['phones']) as $k=>$phone) {
            $phones[$k] = trim($phone);
        }
        $phones = serialize($phones);
        mysqli_query($this->dbc, "UPDATE ok_settings SET value='{$phones}' WHERE param='site_phones';");
        
        mysqli_query($this->dbc, "UPDATE ok_settings_lang SET value='{$_POST['site_name']}' WHERE param='site_name';");
        
        if ($site_lang_id = $_POST['main_language']) {
            mysqli_query($this->dbc, "UPDATE ok_languages SET enabled=1, position=1 WHERE id = {$site_lang_id};");
            mysqli_query($this->dbc, "UPDATE ok_languages SET enabled=0, position=`id`+1 WHERE id != {$site_lang_id};");
        }
        
        if ($new_main_currency_id = $_POST['main_currency']) {
            $this->update_main_currency($new_main_currency_id);
        }
        
    }
    
    private function update_main_currency($new_currency_id)
    {
        $res = mysqli_query($this->dbc, 'SELECT * FROM ok_currencies ORDER BY position LIMIT 1;');
        $main_currency = mysqli_fetch_object($res);
        mysqli_query($this->dbc, "UPDATE ok_currencies SET enabled=1, position=1 WHERE id = {$new_currency_id};");
        mysqli_query($this->dbc, "UPDATE ok_currencies SET enabled=0, position=`id`+1 WHERE id != {$new_currency_id};");
        
        if ($main_currency->id != $new_currency_id) {

            $res = mysqli_query($this->dbc, 'SELECT * FROM ok_currencies WHERE id='.$new_currency_id.' LIMIT 1;');
            $new_currency = mysqli_fetch_object($res);

            mysqli_query($this->dbc, "UPDATE ok_currencies SET rate_from=1.0*rate_from*$new_currency->rate_to/$main_currency->rate_to;");
            mysqli_query($this->dbc, "UPDATE ok_currencies SET rate_to=1.0*rate_to*$new_currency->rate_from/$main_currency->rate_from;");
            mysqli_query($this->dbc, "UPDATE ok_currencies SET rate_to = rate_from WHERE id=$new_currency->id;");
            mysqli_query($this->dbc, "UPDATE ok_currencies SET rate_to = 1, rate_from = 1 WHERE id=$new_currency->id;");
            
        }
    }
    
    public function get_site_currencies() {
        
        $res = mysqli_query($this->dbc, 'SELECT currency_id as id, l.name, c.code FROM ok_lang_currencies l
                LEFT JOIN ok_currencies c ON c.id=l.currency_id
                WHERE lang_id = '.$this->okay_lang_id);
        $result = [];
        while($row = mysqli_fetch_object($res)) {
            $result[] = $row;
        }
        return $result;
    }
    
    public function get_site_languages() {
        
        $res = mysqli_query($this->dbc, 'SELECT language_id as id, ll.name, l.label, l.href_lang FROM ok_lang_languages ll
                LEFT JOIN ok_languages l ON l.id=ll.language_id
                WHERE lang_id = '.$this->okay_lang_id);
        $result = [];
        while($row = mysqli_fetch_object($res)) {
            $result[] = $row;
        }
        return $result;
    }

    // Определение языка сайта в соответствии с выбранным языком установщика
    private function determine_okay_lang_id() {
        $langLabel = mysqli_real_escape_string($this->dbc, $this->lang_label);
        
        $res = mysqli_query($this->dbc, 'SELECT id FROM ok_languages WHERE label = "' . $langLabel . '" OR href_lang = "' . $langLabel . '" LIMIT 1');
        
        if ($lang = mysqli_fetch_object($res)) {
            $this->okay_lang_id = $lang->id;
        } else {

            $res = mysqli_query($this->dbc, 'SELECT id FROM ok_languages WHERE label = "en" LIMIT 1');

            if ($lang = mysqli_fetch_object($res)) {
                $this->okay_lang_id = $lang->id;
            }
        }
    }
    
    private function init_db_connect() {
        $config = (object)parse_ini_file($this->config_file);

        $this->dbc = mysqli_connect($config->db_server, $config->db_user, $config->db_password);
        mysqli_select_db($this->dbc, $config->db_name);
        mysqli_query($this->dbc, 'SET NAMES utf8');
    }

    private function crypt_apr1_md5($plainpasswd, $salt = '') {
        if (empty($salt)) {
            $salt = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 8);
        }
        $len = strlen($plainpasswd);
        $text = $plainpasswd.'$apr1$'.$salt;
        $bin = pack("H32", md5($plainpasswd.$salt.$plainpasswd));
        for($i = $len; $i > 0; $i -= 16) { $text .= substr($bin, 0, min(16, $i)); }
        for($i = $len; $i > 0; $i >>= 1) { $text .= ($i & 1) ? chr(0) : $plainpasswd[0]; }
        $bin = pack("H32", md5($text));
        for($i = 0; $i < 1000; $i++) {
            $new = ($i & 1) ? $plainpasswd : $bin;
            if ($i % 3) $new .= $salt;
            if ($i % 7) $new .= $plainpasswd;
            $new .= ($i & 1) ? $bin : $plainpasswd;
            $bin = pack("H32", md5($new));
        }
        $tmp = '';
        for ($i = 0; $i < 5; $i++) {
            $k = $i + 6;
            $j = $i + 12;
            if ($j == 16) $j = 5;
            $tmp = $bin[$i].$bin[$k].$bin[$j].$tmp;
        }
        $tmp = chr(0).chr(0).$bin[11].$tmp;
        $tmp = strtr(strrev(substr(base64_encode($tmp), 2)),
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",
            "./0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz");
        return "$"."apr1"."$".$salt."$".$tmp;
    }
}