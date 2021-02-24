<?php
class ControllerStep_2 extends Controller {
    
    public function __construct() {
        $this->model = new ModelStep_2('step_2.php');
        parent::__construct();
    }
    
    public function action_index() {

        if(isset($_POST['dbconfig'])) {
            $has_errors = false;
            foreach($this->model->dbconfig() as $key_result=>$result) {
                if($key_result == 'errors') {
                    $has_errors = true;
                }
                $this->design_vars->$key_result = $result;
            }
            
            // Если моделька не прислала ошибок, перекидываем на следующий шаг
            if ($has_errors === false) {
                header('Location: '.$this->url_request(array('route'=>'Step_3')));
            }
        } else {
            if (!file_exists(dirname(__DIR__) . '/source/okaycms.zip')) {
                $this->design_vars->error = $this->model->get_translation('zip_file_not_found');
            } else {
                if (!$this->model->unzip()) {
                    $this->design_vars->error = $this->model->get_translation('can_not_unzip');
                } else {
                    $this->design_vars->success = strtr($this->model->get_translation('zip_unzipped'), array('{$dir}' => dirname(dirname(__DIR__))));
                }
            }
        }
        
        $this->design->fetch('step_2.php');
    }
}