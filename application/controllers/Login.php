<?php 
class Page extends CI_controller{
    function __construct(){
        parent::__construct();
        if($this-> session->userdata('logged_in') !== TRUE){
            redirect('login');
    }
}
}