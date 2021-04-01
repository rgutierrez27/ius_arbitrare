@extends('layouts.layout')

@section('title')
Ius Arbitrare Editor
@endsection

@section('Content')
<h4 class="card-title">
	GESTOR DE CONTENIDOS
	<p class="category"> {{ (isset($publication))?'Editar':'Nueva' }} Publicación</p>
</h4>
<div class="card-body pt-0" id="app">
	<content-manager-editor publication='{{json_encode($publication??null)}}'></content-manager-editor>
</div>

@endsection

@section('scripts')
<script src='/js/app.js'></script>
@endsection
