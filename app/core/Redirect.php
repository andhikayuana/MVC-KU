<?php
	/**
	*  class Redirect by Yuana, Andhika
	*  2015 Agustus 12
	*/
	class Redirect extends Controller
	{
		/**
		*  function home
		*/
		public function home(){
			header('location:'.$this->createUrl('home/index'));
		}

		/**
		*  function to
		*/
		public function to($controller_action){
			header('location:'.$this->createUrl($controller_action));
		}

	}