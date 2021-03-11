<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index($slug = '')
	{
		$data = [
			'title'		=> "Ma'ruf Robani & Poho aran | Wedding Invitation",
			'namaTamu'	=> str_replace('_', ' ', $slug),
		];

		return view('home', $data);
	}
}
