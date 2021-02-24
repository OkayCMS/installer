<?php
class ModelStep_4 extends Model {
    
    private $result = array();
    
    public function __construct($lang_file){
        parent::__construct($lang_file);
    }
    
    public function delete_installer(){
        $this->rrmdir(dirname(__DIR__));
        
        if(is_dir(dirname(__DIR__))) {
            $this->result['errors'][] = $this->get_translation('error_delete_source');
        }
        
        $url = ($this->check_ssl() ? 'https://' : 'http://').$_SERVER['HTTP_HOST'];
        $this->result['url'] = $url;
        
        return $this->result;
    }
    
    private function rrmdir($dir, $level = 0) {
         if(is_dir($dir)) {
            $objects = scandir($dir);
            foreach($objects as $object) {
                if($object != "." && $object != "..") {
                    if(is_dir($dir."/".$object)) {
                        $this->rrmdir($dir . "/" . $object, $level+1);
                    } else {
                        unlink($dir . "/" . $object);
                    }
                }
            }
            if($level > 0) {
                rmdir($dir);
            }
         }
    }
}
