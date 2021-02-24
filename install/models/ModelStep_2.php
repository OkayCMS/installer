<?php


class ModelStep_2 extends Model {

    private $sql_file;

    private $dbhost = 'localhost';
    private $dbname = '';
    private $dbuser = '';
    private $dbpassword = '';

    private $dbc = '';
    private $result = array();

    public function __construct($lang_file) {
        parent::__construct($lang_file);

        $this->sql_file = dirname(__DIR__ ) . '/source/okay_clean.sql';

        if(isset($_POST['dbhost']) && !empty($_POST['dbhost'])) {
            $this->dbhost = trim($_POST['dbhost']);
        }
        if(isset($_POST['dbname']) && !empty($_POST['dbname'])) {
            $this->dbname = trim($_POST['dbname']);
        }
        if(isset($_POST['dbuser']) && !empty($_POST['dbuser'])) {
            $this->dbuser = trim($_POST['dbuser']);
        }
        if(isset($_POST['dbpassword'])) {
            $this->dbpassword = addcslashes(html_entity_decode(trim($_POST['dbpassword'])), "\"\\");
        }
    }

    public function dbconfig() {

        $this->result['dbhost'] = $this->dbhost;
        $this->result['dbname'] = $this->dbname;
        $this->result['dbuser'] = $this->dbuser;
        $this->result['dbpassword'] = $this->dbpassword;

        if(empty($this->dbname)) {
            $this->result['errors'][] = $this->get_translation('error_empty_dbname');
        }

        if(empty($this->dbuser)) {
            $this->result['errors'][] = $this->get_translation('error_empty_dbuser');
        }

        if(!empty($this->dbuser) && !empty($this->dbname)) {
            if(!$this->dbc = @mysqli_connect($this->dbhost, $this->dbuser, stripcslashes($this->dbpassword))) {
                $this->result['errors'][] = $this->get_translation('error_mysql_connect');
            } else if(!mysqli_select_db($this->dbc, $this->dbname)) {
                $this->result['errors'][] = strtr($this->get_translation('error_dbname_doest_exist'), array('{$dbname}'=>$this->dbname));
            } else if(!mysqli_query($this->dbc, 'SET NAMES utf8')) {
                $this->result['errors'][] = $this->get_translation('error_mysql_connect');
            }

            if(!is_readable($this->sql_file)) {
                $this->result['errors'][] = $this->get_translation('error_sql_file_not_found');
            }

            file_put_contents($this->config_file, '');
            if(!is_writable($this->config_file)) {
                $this->result['errors'][] = $this->get_translation('error_config_file_not_writable');
            }

            if(empty($this->result['errors'])) {
                $this->set_config();
                $this->mysql_restore_dump();
                $this->result['db_configured'] = true;
            }
        }

        return $this->result;
    }

    private function set_config() {
        $conf = ";<? exit(); ?>\r\n \r\n";
        $conf .= "[database]\r\n \r\n";
        $conf .= ";Сервер базы данных\r\n" . "db_server = ".$this->dbhost."\r\n \r\n";
        $conf .= ";Пользователь базы данных\r\n" . "db_user = ".$this->dbuser."\r\n \r\n";
        $conf .= ";Пароль к базе\r\n" . "db_password = \"".$this->dbpassword."\"\r\n \r\n";
        $conf .= ";Имя базы\r\n" . "db_name = ".$this->dbname."\r\n \r\n";

        file_put_contents($this->config_file, $conf);
    }

    private function mysql_restore_dump() {
        $sql_query = '';
        $fp = fopen($this->sql_file, 'r');

        if($fp) {
            while(!feof($fp)) {
                $line = fgets($fp);

                if (substr($line, 0, 2) != '--' && $line != '') {
                    $sql_query .= $line;

                    if (substr(trim($line), -1, 1) == ';') {

                        if(!@mysqli_query($this->dbc, $sql_query)) {
                            $this->result['errors'][] = mysqli_error($this->dbc);
                        }
                        $sql_query = '';
                    }
                }
            }
        }

        fclose($fp);
    }
    
    public function unzip() {
        $res = false;

        $zip = new ZipArchive();
        
        if($zip->open(dirname(__DIR__) . '/source/okaycms.zip') === true) {
            $res = @$zip->extractTo(dirname(dirname(__DIR__ )));
            $zip->close();
        }
        
        $this->set_access(dirname(dirname(__DIR__)));
        if($res) {
            return true;
        } else {
            return false;
        }
    }
    
    private function set_access($dir, $level = 0) {
        if(is_dir($dir)) {
            $objects = scandir($dir);
            foreach($objects as $object) {
                if($object != "." && $object != ".." && $object != "install" && !is_link($dir . "/" . $object)) {
                    if(is_dir($dir."/".$object)) {
                        chmod($dir . "/" . $object, 0755);
                        $this->set_access($dir . "/" . $object, $level+1);
                    } else {
                        chmod($dir . "/" . $object, 0644);
                    }
                }
            }
        }
    }
}
