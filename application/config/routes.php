<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome/index';

$route['admin_register'] = 'admin_controller/admin_register';
$route['a_reg_db'] = 'admin_controller/a_reg_db';

$route['admin_login'] = 'admin_controller/admin_login';
$route['admin_login_check'] = 'admin_controller/admin_login_check';


$route['admin_dashboard'] = 'admin_controller/admin_dashboard';

$route['product_add'] = 'product_controller/product_add';
$route['product_db'] = 'product_controller/product_db';

$route['view_product'] = 'product_controller/view_product';

$route['edit_product/(.+)'] = 'product_controller/edit_product/$1';

$route['update_product/(.+)'] = 'product_controller/update_product/$1';

$route['delete_product/(.+)'] = 'product_controller/delete_product/$1';




$route['data_save'] = 'welcome/data_save';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['user-login'] = 'welcome/user_login';
