<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Models\Categories;

Route::group(['Public'],function () {


        Route::get('/', function () {    $category_header=Categories::all();
            return view('home',compact('category_header'));  });
        Route::get('/home', 'HomeController@index')->name('home');



    Route::group(['CategoriesController'], function () {

//        Route::get('category-detail/{id}','CategoriesController@categoryDetail')->name('categoryDetail');
        Route::get('categorydetail{id}','CategoriesController@categoryDetail')->name('categorydetail');

        Route::get('/check', function (){return view('cart'); });




    });

    Route::group(['ProductController'], function () {

        Route::get('addtoCart{id}','ProductController@addtoCart')->name('addtoCart');
        Route::get('cartView','ProductController@viewCart')->name('viewCart');



    });

});

Auth::routes();




Route::group(['Private'],function () {

    Route::get('/denied', function () {return view('404');})->name('denied');


    Route::group(['Customer', 'middleware' => 'usertypechecking:' . 'customer'], function () {

        Route::group(['OrderController'], function () {

            Route::get('/checkout', 'OrderController@checkout')->name('checkout');
            Route::get('/Order-received', 'OrderController@OrderReceived')->name('OrderReceived');

        });



    });





    Route::group(['Admin', 'middleware' => 'usertypechecking:' . 'admin'], function () {

       Route::group(['AdmindashController'],function () {
        Route:: get('/admindashboard','AdmindashController@index')->name('admin_dash');

    });


       //                            ===============ProductController=============

    Route::group(['ProductController'], function () {
        Route::get('/add-product', 'ProductController@add_product')->name('add_product');
        Route::post('/add-product', 'ProductController@create')->name('add_product');
        Route::get('/product-list', 'ProductController@product_list')->name('product_list');
        Route::get('/product/delete/{id}', 'ProductController@product_delete')->name('product_delete');
        Route::get('/product/edit/{id}', 'ProductController@edit_product')->name('edit_product');
        Route::post('/product-update', 'ProductController@product_update')->name('product_update');


    });

//                            ===============CatagoriesController=============

    Route::group(['CatagoriesController'], function () {
        Route::get('/add-category', 'CategoriesController@add_category')->name('add_category');
        Route::post('/add-category', 'CategoriesController@create')->name('add_category');
        Route::get('/category-list', 'CategoriesController@category_list')->name('category_list');
        Route::get('/category/delete/{id}', 'CategoriesController@category_delete')->name('category_delete');
        Route::get('/category/edit/{id}', 'CategoriesController@category_edit')->name('category_edit');
        Route::post('/category-update', 'CategoriesController@category_update')->name('category_update');

    });

    Route::group(['UserController'], function(){

       Route::get('/user-list' , 'UserController@user_list')->name('user_list') ;

    });


    });

    });
