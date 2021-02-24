<?php
class Design {
    private $data;
    
    public function __construct($data) {
        $this->data = $data;
    }
    
    public function fetch($content, $wrapper = '') {
        if(empty($wrapper)) {
            $wrapper = 'wrapper.php';
        }
        
        if(is_object($this->data)) {
            $this->data = (array)$this->data;
            extract($this->data);
        }
        
        include "design/html/" . $wrapper;
    }
}