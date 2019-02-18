<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pageController extends Controller
{
     //for login and sign up page
	public function admin() {
		return view ('admin.login');
	}
	//Master Layout for dashboard
	public function dashboard() {
		return view ('admin.dashboard');
	}
	//Add Admin Function
	public function addadmin() {
		return view ('admin.addadmin');
	}
	//Admin List
	public function list() {
		return view ('admin.adminlist');
	}
	//Item Pending List
	public function items() {
		return view ('admin.item');
	}

	public function about() {
		return view ('admin.about');
	}
}
