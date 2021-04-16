<?php

namespace App\Controllers;

class Home extends BaseController
{


	public function index()
	{
		$data = [
			'profile' => $this->ProfileModel->findAll()
		];
		return view('index', $data);
	}

	public function dp1()
	{
		return view('dp1');
	}

	public function dp2()
	{
		return view('dp2');
	}

	//==========================	href home	=====================================//
	public function interior()
	{
		return view('/home/interior');
	}

	public function develop()
	{
		return view('/home/develop');
	}
	public function commer()
	{
		return view('/home/commer');
	}

	public function bla()
	{
		return view('/home/bla');
	}
}
