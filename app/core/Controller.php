<?php
	/**
	*  class Controller by Yuana, Andhika
	*  2015 Agustus 12
	*/
	class Controller{

		protected $viewFolder;

		function __construct(){

			Session::init();
		}

		/**
		*  function model
		*  @param $model
		*/
		public function model($model){

			require_once '../app/models/'.$model.'.php';

			return new $model();
		}

		/**
		*  function view
		*  @param $view
		*  @param $data
		*/
		public function view($view, $data = []){

			$this->viewFolder = strtolower($this->getControllerName());

			require_once TPL_HEAD;

			require_once '../app/views/'.$this->viewFolder.'/'.$view.'.php';

			require_once TPL_FOOT;
		}

		/**
		*  function getControllerName
		*/
		public function getControllerName(){
			return get_called_class();
		}

		/**
		*  function createUrl
		*  @param controller/action
		*/
		public function createUrl($controller_action=''){
			
			return PUBLIC_DIR . $controller_action;
		}
	}