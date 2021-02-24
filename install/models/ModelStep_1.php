<?php
class ModelStep_1 extends Model {
    
    private $min_php_version = '7.0';
    private $required_extensions = array(
                                    "MySQLi"=> array(),
                                    "ZLIB"=> array(),
                                    "ZIP"=> array(),
                                    "PDO"=> array(),
                                );
    private $additional_extensions = array(
                                    "GD"=> array(),
                                    "cURL"=> array(),
                                    "Imagick"=> array(),
                                    "MBString"=> array()
                                );
    
    
    private $required_active_php_params = [
        'allow_url_fopen' => [],
    ];
    
    private $total_result = true;
    
    public function __construct($lang_file) {
        parent::__construct($lang_file);
    }
    
    public function test_server() {
        $result['extensions'] = $this->check_loaded_extensions(array_keys($this->required_extensions),true);
        $result['extensions'] = array_merge($result['extensions'],$this->check_loaded_extensions(array_keys($this->additional_extensions),false));
        $result['php'] = $this->test_php_version();
        $result['php_ini_params'] = $this->check_php_ini_params(array_keys($this->required_active_php_params));
        $result['working_dir'] = $this->test_working_dir();
        $result['total_result'] = $this->total_result;
        
        return $result;
    }
    
    private function test_working_dir(){
        $current_dir = dirname(dirname(__DIR__));
        if (!preg_match("~[/\\\\]install$~", dirname(__DIR__))) {
            $result['status'] = 'error';
            $result['message'] = strtr($this->get_translation('error_install_folder_missed'), array('{$current_dir}'=>$current_dir));
            $this->total_result = false;
            return $result;
        }

        if(@!mkdir($current_dir."/test", 0755)) {
            $result['status'] = 'error';
            $result['message'] = strtr($this->get_translation('error_create_dir'), array('{$current_dir}'=>$current_dir));
            $this->total_result = false;
            return $result;
        }
        
        if(@!file_put_contents($current_dir."/test/test.txt", "test")) {
            $result['status'] = 'error';
            $result['message'] = strtr($this->get_translation('error_create_file'), array('{$current_dir}'=>$current_dir));
            $this->total_result = false;
            return $result;
        }
        
        if(@!chmod($current_dir."/test/test.txt", 0644)) {
            $result['status'] = 'error';
            $result['message'] = strtr($this->get_translation('error_chmod'), array('{$current_dir}'=>$current_dir));
            $this->total_result = false;
            return $result;
        }
        
        if(@!unlink($current_dir."/test/test.txt")) {
            $result['status'] = 'error';
            $result['message'] = strtr($this->get_translation('error_unlink'), array('{$current_dir}'=>$current_dir));
            $this->total_result = false;
            return $result;
        }
        
        if(@!rmdir($current_dir."/test")) {
            $result['status'] = 'error';
            $result['message'] = strtr($this->get_translation('error_rmdir'), array('{$current_dir}'=>$current_dir));
            $this->total_result = false;
            return $result;
        }
    }
    
    private function test_php_version() {
        if (phpversion() < $this->min_php_version) {
            $result['status'] = 'error';
            $result['message'] = strtr($this->get_translation('error_php_version'), array('{$php_version}'=>$this->min_php_version));
            $this->total_result = false;
        } else {
            $result['status'] = 'success';
            $result['message'] = $this->get_translation('success_php_version');
        }
        return $result;
    }
    
    private function check_loaded_extensions($extensions,$required) {

        $result = array();
        foreach($extensions as $extension) {
            
            $result[$extension]['name'] = $this->get_translation('extension') . " <b>\"$extension\"</b>";

            if(extension_loaded($extension)){
                if ($extension === 'PDO') {
                    $available_drivers = PDO::getAvailableDrivers();
                    if (!in_array('mysql', $available_drivers)) {
                        $result[$extension]['status'] = 'error';
                        $result[$extension]['message'] = $this->get_translation('pdo_driver_not_exists');
                        $this->total_result = false;
                        continue;
                    }
                }

                $result[$extension]['status'] = 'success';
                $result[$extension]['message'] = $this->get_translation('extension_installed');
            } else if ($required) {
                $result[$extension]['status'] = 'error';
                $result[$extension]['message'] = $this->get_translation('extension_not_installed');
                $this->total_result = false;
            } else {
                $result[$extension]['status'] = 'warning';
                $result[$extension]['message'] = $this->get_translation('extension_warning');
            }
        }
        return $result;
    }
    
    private function check_php_ini_params($need_params) {

        $result = array();
        foreach ($need_params as $need_param) {
            if (($iniParam = ini_get($need_param)) === false || ($iniParam != '1' && strtolower($iniParam) != 'on')) {
                $result[$need_param]['name'] = $this->get_translation('ini_param') . " <b>\"$need_param\"</b>";
                $result[$need_param]['status'] = 'error';
                $result[$need_param]['message'] = $this->get_translation('ini_param_is_disabled');
                $this->total_result = false;
            }
        }
        return $result;
    }
}
