<?php
class ControllerStep_4 extends Controller {

    public function __construct() {
        $this->model = new Model('step_4.php');
        parent::__construct();
    }

    public function __destruct() {
        $this->rrmdir(dirname(__DIR__));
    }

    public function action_index() {
        $url = ($this->model->check_ssl() ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].preg_replace("~/install/*$~", "", dirname($_SERVER['REQUEST_URI']));
        $this->design_vars->url = $url;
        $this->design_vars->errors[] = $this->model->get_translation('error_delete_source');

        $this->design->fetch('step_4.php');
    }

    private function rrmdir($dir, $level = 0) {
        /* if(is_dir($dir)) {
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
        } */
    }
}