<?php

// Route::get('/', function () {
//     return view('welcome');
// });


//Login & Register
Route::get('/','loginController@index');
Route::get('/registration','loginController@register');
Route::get('/contact','loginController@contact');






Route::group(['middleware' => 'auth'], function () {
    
    //Newsfeed Routs
    Route::get('/home','newsfeedController@index')->name('homepage');
    //chatroom
    Route::get('/chatroom','HomeController@index')->name('chatroom');
    
    Route::get('/message/{id}', 'HomeController@getMessage')->name('message');
    Route::post('message', 'HomeController@sendMessage');
    
    //profile
    Route::get('/users/{id}','profileController@show')->name('single-user');
    Route::get('/my_profile','profileController@my_profile');
    Route::get('/about_profile','profileController@about_profile');
    Route::get('/album','profileController@album');
    Route::get('/profile_friend','profileController@profile_friend');
    Route::get('/my_repositories','profileController@my_repositories');
    Route::post('/user/profile_pic/store','loginController@store');

    //Post create
    Route::post('/user/post/store','postController@store')->name('post.store');
    Route::get('/user/post/destroy/{id}','postController@destroy')->name('post.destroy');
    Route::post('/user/post/update/{id}','postController@update');

    // send friend request
    Route::post('/users/send-friend-request/{id}','profileController@sendFriendRequest')->name('send-friend-request');
    Route::post('/users/accept-friend-request/{id}','profileController@acceptFrienRequest')->name('accept-friend-request');
    Route::post('/users/cancel-friend-request/{id}','profileController@cancelFriendRequest')->name('cancel-friend-request');
    Route::post('/users/remove-friend-request/{id}','profileController@removeFriendRequest')->name('remove-friend-request');
    Route::post('/users/remove-friend/{id}','profileController@removeFriend')->name('remove-friend');

    //Settings 
    Route::get('/account_settings','settingsController@account_settings');
    Route::get('/profile_settings','settingsController@profile_settings');
    Route::post('/profile-settings/update','settingsController@updateSettings')->name('update-settings');
    Route::get('/security','settingsController@security');
    Route::get('/contact_us','settingsController@contact_us');

    //Left Sidebars Items
    Route::get('/friends','leftbarController@people_nearby')->name('friends');
    Route::get('/friend-requests','leftbarController@friendRequest')->name('friend-request');
    Route::get('/all_images','leftbarController@all_images');
    Route::get('/all_papers','leftbarController@all_papers');
    Route::get('/all_videos','leftbarController@all_videos');

    Route::post('/search','HomeController@search')->name('search');
});






//Repositories
Route::get('/all_repositories','repositoriesController@all_repositories');
Route::get('/new_repositories','repositoriesController@new_repositories');
Route::get('/repositories_settings','repositoriesController@repositories_settings');





//Admin Dashboard
Route::get('/admin','adminController@index');
Route::get('/admin/categories/add','categoriesController@add');
Route::get('/admin/categories/manage','subCategoryController@manage');
Route::post('/admin/categories/store','categoriesController@store');
Route::get('/admin/categories/destroy/{id}','categoriesController@destroy');
Route::post('/admin/categories/update/{id}','categoriesController@update');
Route::post('/admin/subcategories/store','subCategoryController@store');
Route::get('/admin/subcategories/destroy/{id}','subCategoryController@destroy');
Route::post('/admin/subcategories/update/{id}','subCategoryController@update');
Route::post('/admin/purchase/store','productsController@store');

Route::get('/admin/customerlist','customerController@customer');
Route::get('/admin/orders/confirm','orderController@confirm');
Route::get('/admin/orders/request','orderController@request');
Route::get('/admin/products/sold','productsController@sold');
Route::get('/admin/products/unsold','productsController@unsold');
Route::get('/admin/products/manage','productsController@manage');
Route::get('/admin/purchase/add','purchaseController@add');
Route::get('/admin/purchase/due','purchaseController@due');
Route::get('/admin/purchase/manage','purchaseController@manage');
Route::get('/admin/suppliers/add','suppliersController@add');
Route::post('/admin/suppliers/store','suppliersController@store');
Route::get('/admin/suppliers/destroy/{id}','suppliersController@destroy');
Route::get('/admin/suppliers/due','suppliersController@due');
Route::get('/admin/suppliers/manage','suppliersController@manage');

//storing category

Route::resource('categories','CategoryController');






Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/message/{id}', 'HomeController@getMessage')->name('message');
Route::post('message', 'HomeController@sendMessage');
