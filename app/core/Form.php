<?php
	/**
	*  class Form by Yuana, Andhika
	*  2015 Agustus 18
	*/
	class Form{

		/**
		*  function open
		*  <form>
		*  @param $name
		*  @param $attributes
		*/
		public function open($name, $attributes = array()){
			$attributes = self::getAttributes($attributes);
			return '<form name="'.$name.'" id="'.$name.'" '.$attributes.' accept-charset="UTF-8">';
		}

		/**
		*  function close
		*  </form>
		*/
		public function close(){
			return '</form>';
		}

		/**
		*  function label
		*  <label></label>
		*  @param $name
		*  @param $text
		*  @param $attributes
		*/
		public function label($name, $text, $attributes = array()){
			$attributes = self::getAttributes($attributes);
			return '<label for="'.$name.'" '.$attributes.'>'.$text.'</label>';
		}	

		/**
		*  function text
		*  <input type="text">
		*  @param $name
		*  @param $value
		*  @param $attributes
		*/
		public function text($name, $value = null, $attributes = array()){
			$attributes = self::getAttributes($attributes);
			return '<input type="text" name="'.$name.'" id="'.$name.'" value="'.$value.'" '.$attributes.'>';
		}

		/**
		*  function password
		*  <input type="password">
		*  @param $name
		*  @param $attributes
		*/
		public function password($name, $attributes = array()){
			$attributes = self::getAttributes($attributes);
			return '<input type="password" name="'.$name.'" id="'.$name.'" '.$attributes.'>';
		}

		/**
		*  function area
		*  <textarea></textarea>
		*  @param $name
		*  @param $value
		*  @param $attributes
		*/
		public function textarea($name, $value = null, $attributes = array()){
			$attributes = self::getAttributes($attributes);
			return '<textarea name="'.$name.'" id="'.$name.'" '.$attributes.' rows="5" cols="50"></textarea>';
		}

		/**
		*  function select
		*  <select><option></option></select>
		*  @param $name
		*  @param $data
		*  @param $attributes
		*/
		public function select($name, $data = array(), $attributes=array()){
			$attributes = self::getAttributes($attributes);
			$opt = '';
			foreach ($data as $key => $value) {
				$opt .= '<option value="'.$key.'">'.$value.'</option>';
			}
			return '<select name="'.$name.'" id="'.$name.'" '.$attributes.'>'.$opt.'</select>';
		}

		/**
		*  function submit
		*  <button type=""submit></button>
		*  @param $name
		*  @param $text
		*  @param $attributes
		*/
		public function submit($name, $text, $attributes = array()){
			$attributes = self::getAttributes($attributes);
			return '<button name="'.$name.'" type="submit" '.$attributes.'>'.$text.'</button>';
		}

		/**
		*  function getAttributes
		*  @param $attributes
		*/
		public function getAttributes($attributes = array()){
			return implode(' ', array_map(function ($v, $k) { return $k . '=' . '"'.$v.'"'; }, $attributes, array_keys($attributes)));;
		}

	}