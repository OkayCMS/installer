<?php


class ControllerStep_1 extends Controller {
    
    public function __construct() {
        $this->model = new ModelStep_1('step_1.php');
        parent::__construct();
    }
    
    public function action_index() {
        $this->design_vars->test_server = $this->model->test_server();
        $this->design->fetch('step_1.php');
    }
}