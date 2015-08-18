<?php
	/**
	*  class Controller by Yuana, Andhika
	*  2015 Agustus 12
	*/
	class Controller{

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
		public function render($view, $data = null){

			if (isset($data)) {

				foreach ($data as $key => $value) {
				
					${$key} = $value;
				
				}
			
			}

			$viewFolder = strtolower($this->getControllerName());

			require_once TPL_HEAD;

			require_once '../app/views/'.$viewFolder.'/'.$view.'.php';

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
		*  @param $data
		*/
		public function createUrl($controller_action='', $data = null){

			if ($data) {

				$url = '?';
				
				$i = 1;

				foreach ($data as $key => $value) {

					if ($i!=count($data)) {

						$url .= $key . '=' . $value . "&";

					} else {

						$url .= $key . '=' . $value;

					}

					$i++;
				}

				$newurl = PUBLIC_DIR . $controller_action . $url;
			}
			else{

				$newurl = PUBLIC_DIR . $controller_action;
			}

			return $newurl;
		}
	}