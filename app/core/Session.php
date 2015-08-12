<?php
	/**
	*  class Session by Yuana, Andhika
	*  2015 Agustus 12
	*/
	class Session
	{
		/**
		*  function init session
		*/
		public static function init(){

			if (empty(session_id())) {
				session_start();
			}
		}

		/**
		*  function set session
		*  @param $key
		*  @param $value
		*/
		public static function set($key, $value){

			$_SESSION[$key] = $value;
		}

		/**
		*  function get session
		*  @param $key
		*/
		public static function get($key){

			if (isset($_SESSION[$key])) {
				return $_SESSION[$key];
			}
		}

		/**
		*  function del session
		*  @param $key
		*/
		public static function del($key){

			unset($_SESSION[$key]);
		}

		/**
		*  function destroy session
		*/
		public static function destroy(){

			session_destroy();
		}
	}