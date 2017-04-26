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

Route::get('/', function () {
    $links = [
				'https://en.wikipedia.org/wiki/Mikoyan_MiG-29' => 'Mikoyan MiG-29',
				'https://en.wikipedia.org/wiki/Mikoyan_MiG-29K' => 'Mikoyan MiG-29K'
		];
		return view('welcome', [
			// 'origin' => 'Mikoyan',
			'links' => $links,
		]);
});

Route::get('/about', function () {
	return view('about');
});
