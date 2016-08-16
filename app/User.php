<?php

namespace Pruebas;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{

	protected $fillable = [
		'name', 'email', 'password',
	];

	protected $hidden = [
		'password', 'remember_token',
	];

	public function rules(){
		return [
			'name' => 'required',
			'email' => 'required',
			'password' => 'required',
		];
	}
}
