@extends('layouts.app')


@section('content')

@include('admin.includes.errors')

<div class="panel panel-default">
    <div class="panel-heading">
        Editar seu perfil
    </div>
    
    <div class="panel-body">
        <form action="{{ route('user.profile.update') }}" method='post' enctype="multipart/form-data">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control">
            </div>
             <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Nova Senha</label>
                <input type="password" name="password"  class="form-control">
            </div>
              <div class="form-group">
                <label for="avatar">Atualizar avatar</label>
                <input type="file" name="avatar" value="{{ $user->profile->avatar }}" class="form-control">
            </div>
             <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
            </div>
             <div class="form-group">
                <label for="youtube">YouTube</label>
                <input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="about">Bio</label>
                <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
            </div>
            <div class="form-group">
               <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Adicionar
                    </button>
               </div>
            </div>
        </form>
    </div>
</div>

@stop