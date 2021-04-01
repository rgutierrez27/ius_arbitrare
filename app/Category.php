<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class Category extends Model
{
	protected $table = 'category';
	protected $primaryKey = 'idcategory';
	protected $fillable = [
		'idcategory',
		'name',
		'state'
	];
	/*
	protected $casts = [
		'ultimafecha' => 'datetime:d/m/Y h:i a'
	];
	*/
	public static function createCategory($category)
	{
		return Category::create(
			[
				'name' => $category['name'],
				'state' => 1
			]
		);
	}

	public static function showCategory()
	{
		return Category::where('state', '1')->get();
	}
	public static function showCategoryforFront()
	{
		$let = FacadesDB::table('category')
			->selectRaw('category.name')
			->where([
				['category.state', '=', 1],
				['category.idcategory', '!=', 6]
			])
			->get();
		$array = array();
		foreach ($let as $key => $value) {
			array_push($array,json_decode(json_encode(array('name'=>$value->name,'state'=>true,'childs'=>null,'path'=>'/news/'.$value->name))));
		}
		return $array;
	}

	public static function updateCategory($category)
	{
		return Category::where('idcategory', $category['idcategory'])
			->update(
				[
					'name' => $category['name'],
					'state' => $category['state']
				]
			);
	}
}
