<?php
/*
Package         :   Bidibidi Origin
Filename        :   routes.php
Descriptions    :   Routes for pages. You can add or change path your pages. 

*/

if ( (config('bidibidi-origin-config.origin-pages-active')) == '1' )  {
// Active or passive this settings in config pages. 
Route::get(config('bidibidi-origin-config.route-index'),   'Bidibidi\Origin\Controllers\BidibidiOriginController@startPage')->name('index');
Route::get(config('bidibidi-origin-config.route-aboutus'), 'Bidibidi\Origin\Controllers\BidibidiOriginController@aboutus')->name('aboutus');
Route::get(config('bidibidi-origin-config.route-contact'), 'Bidibidi\Origin\Controllers\BidibidiOriginController@contact')->name('contact');
Route::get(config('bidibidi-origin-config.route-sitemap'), 'Bidibidi\Origin\Controllers\BidibidiOriginController@sitemap')->name('sitemap');
Route::get(config('bidibidi-origin-config.route-faq'),	   'Bidibidi\Origin\Controllers\BidibidiOriginController@faq')->name('faq');
Route::get(config('bidibidi-origin-config.route-privacy'), 'Bidibidi\Origin\Controllers\BidibidiOriginController@privacy')->name('privacy');
Route::get(config('bidibidi-origin-config.route-terms'),   'Bidibidi\Origin\Controllers\BidibidiOriginController@terms')->name('terms');
}