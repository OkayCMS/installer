<?php
class ControllerStep_3 extends Controller {
    
    public function __construct() {
        $this->model = new ModelStep_3('step_3.php');
        parent::__construct();
    }
    
    public function action_index() {

        if (isset($_POST['set_settings'])) {
            $_SESSION['user_pass'] = $_POST['user_pass'];
            $_SESSION['admin'] = $_POST['user_login'];
            $_SESSION['show_learn'] = 1;
            $this->design_vars->errors = $this->model->set_settings();
            
            if (empty($this->design_vars->errors)) {
                header('Location: '.$this->url_request(array('route'=>'Step_4')));
            }
        }
        
        $this->design_vars->backend_langs = [
            'ru' => $this->design_vars->lang->lang_ru,
            'en' => $this->design_vars->lang->lang_en,
            'ua' => $this->design_vars->lang->lang_ua,
        ];

        $this->design_vars->site_langs = $this->model->get_site_languages();
        $this->design_vars->site_currencies = $this->model->get_site_currencies();
        
        $this->design->fetch('step_3.php');
    }
}