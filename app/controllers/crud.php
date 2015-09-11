<?php

	/**
	*  class Crud by Yuana, Andhika
	*  2015 September 11
	*/	
	class Crud extends Controller{

		public function __construct(){

			parent::__construct();
		}

		public function index(){

			$users = User::all();

			$this->renderPartial('index',['users'=>$users]);
		}

		public function create(){

			$this->renderPartial('create');
		}

		public function store(){

			$username = Request::post('username');
			$email = Request::post('email');

			User::create([
					'username'=>$username,
					'email'=>$email
				]);

			Redirect::to('crud/index');
		}

		public function show($id){

			$user = User::find($id);

			$this->renderPartial('show',['user'=>$user]);
		}

		public function edit($id){

			$user = User::find($id);

			$this->renderPartial('edit',['id'=>$id,'user'=>$user]);
		}

		public function update($id){

			$username = Request::post('username');
			$email = Request::post('email');

			User::find($id)->update([
					'username'=>$username,
					'email'=>$email
				]);

			Redirect::to('crud/index');
		}

		public function delete($id){

			User::find($id)->delete();

			Redirect::to('crud/index');

		}

		
	}