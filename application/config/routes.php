<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	https://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There are three reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router which controller/method to use if those

| provided in the URL cannot be matched to a valid route.

|

|	$route['translate_uri_dashes'] = FALSE;

|

| This is not exactly a route, but allows you to automatically route

| controller and method names that contain dashes. '-' isn't a valid

| class or method name character, so it requires translation.

| When you set this option to TRUE, it will replace ALL dashes in the

| controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

|		my-controller/my-method	-> my_controller/my_method

*/
$route['default_controller'] = 'instantkash';
$route['trend'] = 'admin_ikash/trend';
$route['logout'] = 'user/logout';
$route['quiz_winner'] = 'instantkash/quiz_winner';
$route['hook'] = 'instantkash/hook';
$route['index'] = 'instantkash/index';
$route['edit_account'] = 'user/edit_account';
$route['payment_set'] = 'user/payment_set';
$route['memberzone'] = 'user/memberzone';
$route['change_pwd'] = 'user/change_pwd';
$route['goodyplan'] = 'user/goodyplan';
$route['sendcode'] = 'user/sendcode';
$route['sponsoredpost'] = 'user/sponsoredpost';
$route['withdrawal'] = 'user/withdrawal';
$route['promotip'] = 'user/promotip';
$route['login'] = 'instantkash/login';
$route['how_it_works'] = 'instantkash/how_it_works';
$route['callbacks'] = 'instantkash/callbacks';
$route['autopay'] = 'instantkash/autopay';
$route['forgetPassword'] = 'instantkash/forgetPassword';
$route['subscription'] = 'instantkash/subscription';
$route['pages/(:any)'] = 'instantkash/pages/$1';
$route['reset/(:any)'] = 'instantkash/reset/$1';
$route['category/(:any)'] = 'instantkash/category/$1';
$route['featured/(:any)'] = 'instantkash/featured/$1';
$route['forum/(:any)'] = 'instantkash/forum/$1';
$route['news/(:any)'] = 'instantkash/news/$1';
$route['ne/(:any)'] = 'instantkash/ne/$1';
$route['zone/(:any)'] = 'user/zone/$1';
$route['sponsored_ads/(:any)'] = 'instantkash/sponsored_ads/$1';
$route['register/(:any)'] = 'instantkash/register/$1';
$route['adds/(:any)'] = 'instantkash/adds/$1';
$route['register'] = 'instantkash/register';
$route['register2'] = 'instantkash/register2';
$route['ikash'] = 'instantkash/ikash';
$route['testimony'] = 'instantkash/testimony';
$route['dashboard'] = 'user/dashboard2';
$route['dashboard2'] = 'user/dashboard2';
$route['nars'] = 'user/nars';
$route['advert'] = 'user/advert';
$route['submitpost'] = 'user/submitpost';
$route['sponsored'] = 'user/sponsored';
$route['history'] = 'user/history';
$route['dailyquiz'] = 'user/dailyquiz';
$route['addtestimonial'] = 'user/addtestimonial';
$route['referral-links'] = 'user/referral_links';
$route['referrals'] = 'user/referrals';
$route['sars-to-coupon'] = 'user_withdraw/sars_to_coupon';
$route['sars-to-cash'] = 'user_withdraw/sars_to_cash';
$route['top_earners'] = 'instantkash/top_earners';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
