<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
	public $name;
	public $email;
	public $user;
	public $sex;
	public $hobby;
	public $edu;
	public function rules()
	{
		return [
				[['name', 'email','user','sex','edu'], 'required'],
				['email', 'email'],
		];
	}
}