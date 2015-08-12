<?php

	/**
	*  class Home by Yuana, Andhika
	*  2015 Agustus 12
	*/	
	class Home extends Controller{

		public function __construct(){

			parent::__construct();
		}

		public function index($name=''){
	
			$user = $this->model('User');
			$user->name = $name;

			$this->view('index',['name'=>$user->name]);
		}

		public function create($username='', $email=''){

			User::create([
					'username'=>$username,
					'email'=>$email
				]);
		}

		public function about(){

			$this->view('about',['nama'=>APP_NAME]);
		}

		public function contact(){

			Redirect::to('home/about');

			$this->view('contact');
		}

		public function register(){

			echo 'ini register ya';
		}

		public function login($username=''){

			Session::set('username',$username);

			echo 'anda berhasil login';
		}

		public function beranda(){

			$login = Session::get('username');
			if (empty($login)) {
				echo 'anda belum login, silakan login dulu';
			}
			else{
				echo 'anda login sebagai '.$login;
			}
		}

		public function logout(){

			Session::del('username');
			echo 'berhasil logout';
		}

	}