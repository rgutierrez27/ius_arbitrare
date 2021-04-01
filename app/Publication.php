<?php

namespace App;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class Publication extends Model
{
	protected $table = 'publication';
	protected $primaryKey = 'idpublication';
	protected $fillable = [
		'idpublication',
		'iduser',
		'idcategory',
		'title',
		'content',
		'files',
		'publication_date',
		'priority',
		'slide_active',
		'url_youtube',
		'url_redirect',
		'unique_name',
		'state'
	];

	protected $casts = [
		'publication_date' => 'datetime:d/m/Y h:i a'
	];


	private static $ACTIVE = 'A';
	private static $PROGRAMMED = 'P';
	private static $SAVED = 'S';
	private static $DELETED = 'D';
	private static $TXT_ACTIVE = 'Publicado';
	private static $TXT_PROGRAMMED = 'Programado';
	private static $TXT_SAVED = 'Guardado';

	private static $ITEMS_PAGE = 10;


	public static function register($publication)
	{
		try {

			$unique_name = $publication['title'];
			$unique_name = substr($unique_name, 0, 25);

			do {
				$unique_name = str_replace('  ', ' ', $unique_name, $count);
			} while ($count > 0);

			$unique_name = trim($unique_name); //quitar espacios a izquierda y derecha

			do {
				$unique_name = str_replace(' ', '-', $unique_name, $count);
			} while ($count > 0);

			$unique_name = strtolower(utf8_decode($unique_name)); //minuscula
			if ($publication['priority'] == 1) {
				Publication::where('priority', true)
				->update(['priority' => false]);
			}
			$_publication = static::create([
				'iduser' => 6,
				'idcategory' => $publication['idcategory'],
				'title' => $publication['title'],
				'content' => $publication['content'] ?? '',
				'files' => json_encode($publication['files']),
				'publication_date' => $publication['datetime'],
				'url_redirect' => $publication['url_redirect'] ?? '-',
				'priority' => $publication['priority'],
				'slide_active' => $publication['slide_active'],
				'url_youtube' => $publication['url_youtube'] ?? '-',
				'unique_name' => '',
				'state' => $publication['state']
			]);
			$unique_name =  Controller::quitar_tildes($unique_name);
			$_publication->unique_name = Controller::quitar_tildes($unique_name . '-' . $_publication->idpublication);
			$_publication->save();
			return $_publication;
		} catch (\Exception $th) {
			return null;
		}
	}

	public static function modify($idpublication, $publication)
	{
		if ($publication['priority'] == 1) {
			Publication::where('priority', true)
			->update(['priority' => false]);
		}
		$_publication = static::find($idpublication);
		$_publication->idcategory = $publication['idcategory'];
		$_publication->title = $publication['title'];
		$_publication->content = $publication['content'] ?? '';
		$_publication->files = $publication['files'];
		$_publication->publication_date = $publication['datetime'];
		$_publication->url_redirect = $publication['url_redirect'] ?? '-';
		$_publication->url_youtube = $publication['url_youtube'] ?? '-';
		$_publication->priority = $publication['priority'];
		$_publication->slide_active = $publication['slide_active'];
		$_publication->state = $publication['state'];
		$_publication->save();
		return $_publication;
	}

	public static function getPublication($idpublication)
	{
		$_publication = static::find($idpublication);
		return $_publication;
	}

	public static function refreshStatePublications()
	{
		//return;
		Publication::where('state', static::$PROGRAMMED)
			//->whereRaw("publication_date <= NOW()", [])//SI ESTA EN DESARROLLO
			->whereRaw("DATE_ADD(publication_date, INTERVAL +1 HOUR) <= NOW()", [])//SI ESTA EN HOSTING
			->update(['state' => static::$ACTIVE]);
	}

	public static function listPublications($page)
	{
		$where['publication.state'] = static::$ACTIVE;
		$where['publication.state'] = static::$PROGRAMMED;
		$where['publication.state'] = static::$SAVED;
		// return Publication::Where('publication.state', static::$ACTIVE)
		// 	->orWhere('publication.state', static::$PROGRAMMED)
		// 	->orWhere('publication.state', static::$SAVED)
		// 	->select(
		// 		'publication.idpublication',
		// 		'publication.idcategory',
		// 		'category.name as category_name',
		// 		'publication.title',
		// 		'publication.publication_date',
		// 		'publication.priority',
		// 		'publication.unique_name',
		// 		'publication.state',
		// 		DB::raw("(CASE
		// 			WHEN publication.state = '" . static::$ACTIVE . "' THEN '" . static::$TXT_ACTIVE . "'
		// 			WHEN publication.state = '" . static::$PROGRAMMED . "' THEN '" . static::$TXT_PROGRAMMED . "'
		// 			WHEN publication.state = '" . static::$SAVED . "' THEN '" . static::$TXT_SAVED . "'
		// 			ELSE '' END) AS state_txt")
		// 	)
		// 	->join('category', 'category.idcategory', '=', 'publication.idcategory')
		// 	->skip(static::$ITEMS_PAGE * ($page))
		// 	->take(static::$ITEMS_PAGE)
		// 	->get();
		return FacadesDB::table('publication')
			->join('category', 'category.idcategory', '=', 'publication.idcategory')
			->select(
				'publication.idpublication',
				'publication.idcategory',
				'category.name as category_name',
				'publication.title',
				'publication.publication_date',
				'publication.priority',
				'publication.unique_name',
				'publication.unique_name',
				'publication.state',
				'publication.slide_active',
				'publication.url_redirect',
				'publication.url_youtube',
				FacadesDB::raw("(CASE
					WHEN publication.state = '" . static::$ACTIVE . "' THEN '" . static::$TXT_ACTIVE . "'
					WHEN publication.state = '" . static::$PROGRAMMED . "' THEN '" . static::$TXT_PROGRAMMED . "'
					WHEN publication.state = '" . static::$SAVED . "' THEN '" . static::$TXT_SAVED . "'
					ELSE '' END) AS state_txt")
			)
			->where('publication.state', '=', static::$ACTIVE)
			->orWhere('publication.state', static::$PROGRAMMED)
			->orWhere('publication.state', static::$SAVED)
			->orderBy('publication.idpublication', 'desc')
			->paginate(20);
			//->paginate(static::$ITEMS_PAGE, [], '', $page);
	}

	public static function getPublications($page)
	{
		$let = static::listPublications($page);
		return [
			'publications' => $let
		];
	}

	public static function deletePublication($idpublication)
	{
		return Publication::where('idpublication', $idpublication)
			->update(['state' => static::$DELETED]);
	}
}