<?php
	// User by Yuana, Andhika
	// 2015 Agustus 12

	use Illuminate\Database\Eloquent\Model as Eloquent;

	class User extends Eloquent{

		public $name;

		public $timestamp = [];

		protected $fillable = ['username','email'];

	}