<?php

 
    Route::group(['middleware'=>'auth'], function() {
        Route::get( '/logout',	  [ 'as' => 'frontend.logout.get',  'uses' => 'UserController@getLogout']);
        Route::get( '/home'   , [ 'as' => 'frontend.home2.get'   , 'uses' => 'PageController@getHome2'   ]);
        Route::get( '/add-post'   , [ 'as' => 'frontend.addpost.get'   , 'uses' => 'PostController@addPost'   ]);
        Route::post( '/add-post'   , [ 'as' => 'frontend.addpost.post'   , 'uses' => 'PostController@create']);
        Route::get( '/map'   , [ 'as' => 'frontend.map.get'   , 'uses' => 'PostController@getMap'   ]);
        
    });


    Route::get( '/login',	  [ 'as' => 'frontend.login.get', 	 'uses' => 'Auth\AuthController@getLogin']);
    Route::post( '/register',	  [ 'as' => 'frontend.register.post', 	 'uses' => 'UserController@register']);
    Route::post( '/login',	  [ 'as' => 'frontend.login.post',  'uses' => 'UserController@postLogin']);
    Route::get( '/security',	  [ 'as' => 'frontend.security.get',  'uses' => 'HomeController@getSecurity']);


    Route::get( '/'        , [ 'as' => 'frontend.home.get'    , 'uses' => 'PageController@getHome'    ]);
    Route::get( '/customer-care'   , [ 'as' => 'frontend.customer.get'   , 'uses' => 'PageController@getcustomer'   ]);
    // Route::get( '/products'   , [ 'as' => 'frontend.about.get'   , 'uses' => 'PageController@getAbout'   ]);
    // Route::get( '/applicatons'   , [ 'as' => 'frontend.about.get'   , 'uses' => 'PageController@getAbout'   ]);
    // Route::get( '/customer-care'   , [ 'as' => 'frontend.about.get'   , 'uses' => 'PageController@getAbout'   ]);
    Route::get( '/products/{type}' , [ 'as' => 'frontend.product.get' , 'uses' => 'PageController@getProduct' ]);
    

    Route::get( '/about' , [ 'as' => 'frontend.about.get' , 'uses' => 'AboutController@getAbout' ]);
    Route::post( '/about' , [ 'as' => 'frontend.about.post' , 'uses' => 'AboutController@postAbout' ]);
    Route::get( '/contact' , [ 'as' => 'frontend.contact.get' , 'uses' => 'ContactController@getContact' ]);
    Route::post( '/contact' , [ 'as' => 'frontend.contact.post' , 'uses' => 'ContactController@postContact' ]);
    // Route::get( '/blog'    , [ 'as' => 'frontend.blog.get' , 'uses' => 'BlogController@getBlog' ]);
    // Route::get( '/blog/{slug}'    , [ 'as' => 'frontend.blog.single.get' , 'uses' => 'BlogController@getSingleWork' ]);
    // Route::get( '/face'    , [ 'as' => 'frontend.face.get' , 'uses' => 'FaceController@getFace' ]);
    // Route::get( '/face/{slug}'    , [ 'as' => 'frontend.face.single.get' , 'uses' => 'FaceController@getSingleFace' ]);
    // Route::get( '/body'    , [ 'as' => 'frontend.body.get' , 'uses' => 'BodyController@getBody' ]);
    // Route::get( '/body/{slug}'    , [ 'as' => 'frontend.body.single.get' , 'uses' => 'BodyController@getSingleBody' ]);
    // Route::get( '/breast'    , [ 'as' => 'frontend.breast.get' , 'uses' => 'BreastController@getBreast' ]);
    // Route::get( '/breast/{slug}'    , [ 'as' => 'frontend.breast.single.get' , 'uses' => 'BreastController@getSingleBreast' ]);
    // Route::get( '/burn'    , [ 'as' => 'frontend.burn.get' , 'uses' => 'BurnController@getBurn' ]);
    // Route::get( '/burn/{slug}'    , [ 'as' => 'frontend.burn.single.get' , 'uses' => 'BurnController@getSingleBurn' ]);



