<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;
use App\_Message;
use App\Category;
use Illuminate\Support\Facades\DB;

class PublicationController extends Controller
{
	// public function __construct(){
	// 	$this->middleware('auth');
	// }

	protected function index(Request $request){
		return view("panel.index");
	}

	protected function content_manager(Request $request){
		return view("panel.content_manager.list");
	}

	protected function content_manager_new(Request $request){
		return view("panel.content_manager.edit");
	}

	protected function content_manager_edit(Request $request, $id){
		$publication = Publication::getPublication($id);
		return view("panel.content_manager.edit")->with('publication', $publication);
	}

	public static function content_manager_list(Request $request, $page = 1){
		try {
			Publication::refreshStatePublications();
			$data = Publication::getPublications($page);
		}
		catch (\Exception $e) {
			return $e->getMessage();
			return _Message::send(null, 'Hubo un error al cargar las publicaciones, intente nuevamente', false);
		}
		return _Message::send($data ?? null);
	}

	protected function content_manager_delete(Request $request, $id){
		try {
			$success = true;
			if (Publication::deletePublication($id) == 0){
				$success = false;
				$message = 'Hubo un error al eliminar, por favor, contacte con el administrador del sistema';
			}
		}
		catch (\Exception $e) {
			dd($e);
			$success = false;
			$message = 'Hubo un error al eliminar, intente nuevamente';
		}
		return _Message::send(null, $message ?? '', $success);
	}

	private static function createFromFormat($time, $format){
		$is_pm = (stripos($time, 'PM') !== false);
		$time = str_replace(array('AM', 'PM'), '', $time);
		$format = str_replace('A', '', $format);
		$date = \DateTime::createFromFormat(trim($format), trim($time));
		if ($is_pm) {
			$date->modify('+12 hours');
		}
		return $date;
	}

	protected function content_manager_save(Request $request)
	{
		$publication = $request->obj;
		$idpublication = $publication['idpublication'] ?? null;
		DB::beginTransaction();
		try {
			$datetime = $publication['date'] . ' ' . $publication['time'];
			//dd($datetime);
			$publication['datetime'] = static::createFromFormat($datetime, 'Y-m-d h:i A');
			$publication['files'] = array_merge($publication['files'], $publication['files_uploading']);
			//dd($publication['files']);
			//dd($idpublication == null);
			if ($idpublication == null)
				$data = Publication::register($publication);
			else
				$data = Publication::modify($idpublication, $publication);		
			foreach ($publication['files_uploading'] as $file) {
				ExtrasController::movefileupload($file['name']);
			}
			DB::commit();
		} catch (\Exception $e) {
			DB::rollback();
			return _Message::send(null,$e->getMessage(), false);
		}
		//dd($data);
		return _Message::send($data ?? null);
	}

	protected function formCategories(Request $request){
		return view("panel.content_manager.categories");
	}

	protected function createCategory(Request $request){
		try {
			return _Message::send(Category::createCategory($request), 'Hecho', true);
		} catch (\Exception $e) {
			return _Message::send(null, 'Hubo un error, intente nuevamente más tarde', false);
		}
	}

	protected function showCategory(){
		try {
			return _Message::send(Category::showCategory(), 'Hecho', true);
		} catch (\Exception $e) {
			return _Message::send(null, 'Hubo un error, intente nuevamente más tarde', false);
		}
	}

	protected function updateCategory(Request $request){
		try {
			return _Message::send(Category::updateCategory($request), 'Hecho', true);
		} catch (\Exception $e) {
			return _Message::send(null, 'Hubo un error, intente nuevamente más tarde', false);
		}
	}
}
