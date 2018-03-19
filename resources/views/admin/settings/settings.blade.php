@extends('layouts.app')


@section('content')

@include('admin.includes.errors')

<div class="panel panel-default">
    <div class="panel-heading">
        Editar configurações do site
    </div>
    
    <div class="panel-body">
        <form action="{{ route('settings.update') }}" method='post'>
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="site_name">Nome do site</label>
                <input type="text" name="site_name" value="{{ $settings->site_name }}"class="form-control">
            </div>
             <div class="form-group">
                <label for="address">Endereço</label>
                <input type="text" name="address" value="{{ $settings->address }}"class="form-control">
            </div>
            <div class="form-group">
                <label for="contact_number">Telefone</label>
                <input type="text" name="contact_number" value="{{ $settings->contact_number }}"class="form-control">
            </div>
            <div class="form-group">
                <label for="contact_email">Email</label>
                <input type="text" name="contact_email" value="{{ $settings->contact_email }}"class="form-control">
            </div>
            <div class="form-group">
               <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Atualizar
                    </button>
               </div>
            </div>
        </form>
    </div>
</div>

@stop