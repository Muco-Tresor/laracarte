<?php

use App\Mail\ContactMessageCreated;

Route::get('/', "PagesController@home")->name('home_path');

Route::get('/about', "PagesController@about")->name('about_path');

Route::get('/contact', "ContactController@create")->name('contact_path');

Route::post('/contact', "ContactController@store")->name('post_contact_path');

Route::get('/email', function()
{
    	return new ContactMessageCreated("Muco Tresor", "mucyotreasure@gmail.com", "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.");
	
});