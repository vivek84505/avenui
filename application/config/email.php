<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    $CI=& get_instance();
    $CI->load->database();

    // $config['protocol']  =$CI->db->get_where('general_settings', array('type' => 'mail_status'))->row()->value;
    // $config['mailtype']  ='html';

    // if($config['protocol'] == 'smtp'){
    //     $config['smtp_host'] = $CI->db->get_where('general_settings',array('type'=>'smtp_host'))->row()->value;
    //     $config['smtp_port'] = $CI->db->get_where('general_settings',array('type'=>'smtp_port'))->row()->value;
    //     $config['smtp_user'] = $CI->db->get_where('general_settings',array('type'=>'smtp_user'))->row()->value;
    //     $config['smtp_pass'] = $CI->db->get_where('general_settings',array('type'=>'smtp_pass'))->row()->value;
    // }

    $config = array(
    'protocol'  =>  'smtp',
    'smtp_host' =>  'ssl://mail.avenui.net',
    'smtp_user' =>  'vivektest@avenui.net',
    'smtp_pass' =>  '~Hu(PNoa!5-P',
    'smtp_port' =>  '465'
);
