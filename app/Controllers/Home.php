<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title'		=> "Ma'ruf Robani & Poho aran | Wedding Invitation",
		];

		return view('home', $data);
	}
}
