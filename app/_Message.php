<?php
namespace App;

class _Message
{
	public $data;
	public $message;
	public $success;
	public function __construct($data, $message = null, $success = false){
		$this->data = $data;
		$this->message = $message;
		$this->success = $success;
	}
	public static function send($data = null, $message = '', $success = true){
		$msj = new _Message($data, $message, $success);
		return json_encode($msj);
	}
}
