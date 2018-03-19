@extends('layouts.app')



@section('content')
    
    <div class="panel panel-default">
        <h1 class="text-center">
            Dashboard
        </h1>
    </div>
    <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                POSTADOS
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $posts_count }}</h1>
            </div>            
        </div>
    </div>
      <div class="col-lg-3">
        <div class="panel panel-danger">
            <div class="panel-heading text-center">
               LIXEIRA
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $trashed_count }}</h1>
            </div>            
        </div>
    </div>
      <div class="col-lg-3">
        <div class="panel panel-success">
            <div class="panel-heading text-center">
                USUÁRIOS
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $users_count }}</h1>
            </div>            
        </div>
    </div>
      <div class="col-lg-3">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                CATEGORIAS
            </div>
            <div class="panel-body">
                <h1 class="text-center">{{ $categories_count }}</h1>
            </div>            
        </div>
    </div>
@stop