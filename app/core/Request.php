<?php
	/**
	*  class Request by Yuana, Andhika
	*  2015 Agustus 12
	*/
	class Request
	{
		/**
		*  function post
		*  @param $key
		*/
		public static function post($key){

			if (isset($_POST[$key])) {
				return $_POST[$key];
			}
		}

		/**
		*  function post
		*  @param $key
		*/
		public static function get($key){
			
			if (isset($_GET[$key])) {
	            return $_GET[$key];
	        }
		}

	}