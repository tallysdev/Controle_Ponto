@extends('layouts.admin')

@section('title')
Criar funcionário
@endsection

@section('content-admin')
<h1 class="text-center">Criar novo funcionário</h1>

<div class="mt-5">

	<form action="{{ route('admin.employe.store') }}" method="POST">
		@csrf
		<input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Nome" name="name" value="{{ old('name') }}" required maxlength="191">
		@if($errors->has('name'))
		<div class="invalid-feedback">
			@error('name') {{ $message }} @enderror
		</div>
		@endif
	
		<input type="email" class="form-control @if($errors->has('email')) is-invalid @endif mt-2" placeholder="Email" name="email" value="{{ old('email') }}" required>
		@if($errors->has('email'))
		<div class="invalid-feedback">
			@error('email') {{ $message }} @enderror
		</div>
		@endif
	
		<input type="text" class="form-control @if($errors->has('cpf')) is-invalid @endif mt-2" placeholder="Cpf" name="cpf" value="{{ old('cpf') }}" required maxlength="191">
		@if($errors->has('cpf'))
		<div class="invalid-feedback">
			@error('cpf') {{ $message }} @enderror
		</div>
		@endif
	
		<input type="number" class="form-control @if($errors->has('matricula')) is-invalid @endif mt-2" placeholder="Matricula" value="{{ old('matricula') }}" name="matricula" maxlength="25">
		@if($errors->has('matricula'))
		<div class="invalid-feedback">
			@error('matricula') {{ $message }} @enderror
		</div>
		@endif
	
		<select class="form-select @if($errors->has('business')) is-invalid @endif mt-2" name="business">
			@foreach($businesss as $business)
				<option value="{{ $business->id }}">{{ $business->name }}</option>
			@endforeach
		</select>
		@if($errors->has('business'))
		<div class="invalid-feedback">
			@error('business') {{ $message }} @enderror
		</div>
		@endif
	
		<select class="form-select @if($errors->has('position')) is-invalid @endif mt-2" name="position">
			@foreach($positions as $position)
				<option value="{{ $position->id }}">{{ $position->name }}</option>
			@endforeach
		</select>
		@if($errors->has('position'))
		<div class="invalid-feedback">
			@error('position') {{ $message }} @enderror
		</div>
		@endif
	
		<select class="form-select @if($errors->has('role')) is-invalid @endif mt-2" name="role">
			<option value="0">Super usuário</option>
			<option value="1">Administrador</option>
			<option value="2">Empregado</option>
		</select>
		@if($errors->has('role'))
		<div class="invalid-feedback">
			@error('role') {{ $message }} @enderror
		</div>
		@endif
	
		<input type="password" class="form-control @if($errors->has('password')) is-invalid @endif mt-2" placeholder="Senha" name="password" required maxlength="191">
		@if($errors->has('password'))
		<div class="invalid-feedback">
			@error('password') {{ $message }} @enderror
		</div>
		@endif
	
		<input type="password" class="form-control @if($errors->has('password')) is-invalid @endif mt-2" placeholder="Confirmar senha" name="password_confirmation" required maxlength="191">
		@if($errors->has('password'))
		<div class="invalid-feedback">
			@error('password') {{ $message }} @enderror
		</div>
		@endif
		<div class="text-center">
			<button class="btn btn-secundary-m mt-3">Criar Funcionário</button>
		</div>
	
	</form>
</div>

@endsection