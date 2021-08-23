<?php

Class Fungsi {

    protected $ci;  

     function __construct(){
        $this->ci =& get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('user_m');// load model dulu
        $user_id = $this->ci->session->userdata('userid'); // ambil userid dari sesi aktif
        $user_data = $this->ci->user_m->get($user_id)->row(); // get data user dari model
        return $user_data;

    } 
}