<?php
	
	/**
	*  class Login by Yuana, Andhika
	*  2015 Agustus 13
	*/	
	class Login extends Controller{
		
		public function __construct(){
			parent::__construct();
		}

		public function index(){

			$this->render('index');
		}

		public function auth(){

			$email = Request::post('email');

			$password = Request::post('password');

			$this->render('index',[
				'email'=>$email,
				'password'=>$password
				]);
		}

	}