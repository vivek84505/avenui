<?php

$CI=& get_instance();
$CI->load->database();

$config['googleplus']['application_name'] = $CI->db->get_where('third_party_settings',array('type'=>'g_application_name'))->row()->value;
$config['googleplus']['client_id'] 	= $CI->db->get_where('third_party_settings',array('type'=>'g_client_id'))->row()->value;
$config['googleplus']['client_secret'] = $CI->db->get_where('third_party_settings',array('type'=>'g_client_secret'))->row()->value;
$config['googleplus']['redirect_uri'] = $CI->db->get_where('third_party_settings',array('type'=>'g_redirect_uri'))->row()->value;
$config['googleplus']['api_key'] = $CI->db->get_where('third_party_settings',array('type'=>'g_api_key'))->row()->value;
/*
$config['googleplus']['application_name'] = 'Super Shop';
$config['googleplus']['client_id'] 	= '878887909081-m50hquiaehb24gkimro8ignmvc44lgt2.apps.googleusercontent.com';
$config['googleplus']['client_secret'] = 'iNQkQgsYHSWRi0tX6nTu8AFg';
$config['googleplus']['redirect_uri'] = 'http://localhost/active_supershop/home/login_set';
$config['googleplus']['api_key'] = 'AIzaSyAQW5Gqx-hFeL-oWEyiXXFyV-GTznk3wsc';
*/
?>
