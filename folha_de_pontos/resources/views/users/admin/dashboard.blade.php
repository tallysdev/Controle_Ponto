@extends('layouts.admin')

@section('title')
Dashboard de administração
@endsection

@section('content-admin')
	<h1 class="text-center">Dashboard</h1>

	<ul class="list-group rounded-3 mb-5 mt-5">
	  <li class="list-group-item active text-center fs-5" aria-current="true">Autenticação e Autorização</li>
	  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="{{ route('admin.business.list') }}"><p class="">Empresas</p></a><button class="btn btn-sm btn-secundary-m">Adicionar</button></li>
	  <li class="list-group-item d-flex  justify-content-between "><a href="{{ route('admin.employe.list') }}">Funcionários</a><button class="btn btn-sm btn-secundary-m">Adicionar</button></li>
	</ul>

	<ul class="list-group rounded-3">
	  <li class="list-group-item active text-center fs-5" aria-current="true">Gerenciamento</li>
	  <li class="list-group-item d-flex  justify-content-between align-items-center"><a href="{{ route('admin.sector.list') }}">Setores</a><button class="btn btn-sm btn-secundary-m">Adicionar</button></li>
	  <li class="list-group-item d-flex  justify-content-between align-items-center"><a href="{{ route('admin.position.list') }}">Cargos</a><button class="btn btn-sm btn-secundary-m">Adicionar</button></li>
	  <li class="list-group-item d-flex  justify-content-between align-items-center"><a href="#">Pontos</a><button class="btn btn-sm btn-secundary-m">Adicionar</button></li>
	</ul>

@endsection