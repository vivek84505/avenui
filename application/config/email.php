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


    $config['useragent'] = 'CodeIgniter';
    $config['protocol'] = 'smtp';
    //$config['mailpath'] = '/usr/sbin/sendmail';
    $config['smtp_host'] = 'ssl://mail.avenui.net';
    $config['smtp_user'] = 'vivektest@avenui.net';
    $config['smtp_pass'] = '~Hu(PNoa!5-P';
    $config['smtp_port'] = 465; 
    $config['smtp_timeout'] = 5;
    $config['wordwrap'] = TRUE;
    $config['wrapchars'] = 76;
    $config['mailtype'] = 'text/plain';
    $config['charset'] = 'utf-8';
    $config['validate'] = FALSE;
    $config['priority'] = 3;
    $config['crlf'] = "\r\n";
    $config['newline'] = "\r\n";
    $config['bcc_batch_mode'] = FALSE;
    $config['bcc_batch_size'] = 200;