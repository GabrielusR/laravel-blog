@extends('layouts.app')

@section('content')
<div class="panel panel-default">
   <div class="panel-heading">
       Categorias
   </div>
    <div class="panel-body">
          <table class="table table-hover">
            <thead>
                <th>
                    Nome
                </th>
                <th>
                    Editar
                </th>
                <th>
                    Deletar
                </th>
            </thead>
            <tbody>
               @if($categories->count() > 0)
                @foreach($categories as $category)
                    <tr>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            <a href="{{ route('category.edit', ['id'=>$category->id]) }}" class="btn btn-info btn-sm">Editar</a>
                        </td>
                        <td>
                            <a href="{{ route('category.delete', ['id'=>$category->id]) }}" class="btn btn-danger btn-sm">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                
                @else
                    <tr>
                       <th colspan="5" class="text-center">Nenhuma categoria criada.</th>
                   </tr>
                @endif
            </tbody>
        </table>  
    </div>
</div>
@stop