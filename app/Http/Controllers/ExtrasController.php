<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    public function __construct()
	{
		//$this->middleware('auth');
	}

	private static $rutaFotoTemporal = 'temp/';
	private static $rutaFoto = 'img/';
	private static $rutaFoto_empresa = 'img/logos-empresas/';

	public static function movefileupload_empresa($ruta){
		return static::movefileupload($ruta, static::$rutaFoto_empresa);
	}

	public static function movefileupload($ruta, $destino = null){
		if ($destino == null)
			$destino = static::$rutaFoto;
		$destino .= $ruta;
		try {
			rename(static::$rutaFotoTemporal.$ruta, $destino);
			return true;
		} catch (\Exception $e) {
			return false;
		}
	}
	protected function fileupload(Request $request){
		if(count($_FILES) == 0)
			return;
		$nombreArchivo = $_FILES["file"]['name'];
		$extension = explode(".", $nombreArchivo);
		$extension = $extension[count($extension) - 1];
		$nombreArchivoFinal =
			date("y"). //años
			date("m"). //mes
			date("d"). //dia
			date("H"). //hora 24h
			date("i"). //minutos
			date("s"). //segundos
			date("_").
			substr(microtime(),2,4).
			'.'.$extension;
		$rutaArchivoSubido = static::$rutaFotoTemporal.$nombreArchivoFinal;
		move_uploaded_file($_FILES["file"]['tmp_name'], $rutaArchivoSubido);
		return $nombreArchivoFinal;
	}
}
