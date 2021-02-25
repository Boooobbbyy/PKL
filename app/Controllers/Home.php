<?php

namespace App\Controllers;

use App\Models\PerusahaanModel;

class Home extends BaseController
{
	protected $perusahaanModel;


	public function __construct()
	{
		$this->perusahaanModel = new PerusahaanModel();
	}

	public function index()
	{
		$data['perusahaan'] = $this->perusahaanModel->get()->getRowArray();
		$data['validation'] = \config\services::validation();

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
