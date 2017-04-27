<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function home()
	{
		$links = [
			'https://en.wikipedia.org/wiki/Mikoyan_MiG-29' => 'Mikoyan MiG-29',
			'https://en.wikipedia.org/wiki/Mikoyan_MiG-29K' => 'Mikoyan MiG-29K'
		];
		return view('welcome', [
			// 'origin' => 'Mikoyan',
			'links' => $links,
		]);
	}

	public function aboutUs()
	{
		return view('about');
	}
}
