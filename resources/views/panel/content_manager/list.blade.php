@extends('layouts.layout')

@section('title')
Ius Arbitrare Listar
@endsection

@section('Content')
<h4 class=" text-dark">
	GESTOR DE CONTENIDOS
	<p >Listar Publicaciones</p>
</h4>
<div class="card-body pt-0">
	<content-manager-list></content-manager-list>
</div>
@endsection

@section('scripts')
<script src='/js/app.js'></script>
@endsection
