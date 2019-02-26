<?php

//Website
Route::get('/', 'WebsiteController@home')->name('website.home');
Route::get('about', 'WebsiteController@about')->name('website.about');
Route::get('learning-management-system', 'WebsiteController@lms')->name('website.lms');
Route::get('contact', 'WebsiteController@contact')->name('website.contact');

//list of categories
Route::get('product-categories', 'WebsiteController@productCategories')->name('website.product_categories'); 
//products under sub-categories/categories
Route::get('product-categories/{category}', 'WebsiteController@subCategories')->name('website.sub_categories'); 
//products under a specific sub-category
Route::get('product-categories/{category}/sub-category/{sub_category}/products', 'WebsiteController@products')->name('website.products');
Route::get('product/{slug}', 'WebsiteController@product')->name('website.product');
Route::get('search', 'WebsiteController@search')->name('website.search');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
  Route::get('/dashboard', 'AuthController@redirectDashboard')->name('redirectDashboard');
});

Route::group(['middleware' => 'auth', 'prefix' => 'cms'], function() {
  Route::resource('category', 'CMS\CategoryController');
  Route::resource('sub-category', 'CMS\SubCategoryController');
  Route::resource('product', 'CMS\ProductController');
});

Route::get('/home', 'HomeController@index')->name('home');


