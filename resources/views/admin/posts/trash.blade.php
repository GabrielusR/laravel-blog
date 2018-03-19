@extends('layouts.app')

@section('content')
<div class="panel panel-default">
   <div class="panel-heading">
       Posts
   </div>
    <div class="panel-body">
          <table class="table table-hover">
            <thead>
                <th>
                   Imagem
                </th>
                <th>
                    Título
                </th>
                <th>
                    Editar
                </th>
                <th>
                    Restaurar
                </th>
                <th>
                    Deletar
                </th>
            </thead>
            <tbody>
              @if($posts->count() > 0)
              
               @foreach($posts as $post)
                   <tr>
                       <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
                       <td>{{ $post->title }}</td>
                       <td>Editar</td>
                       <td>
                           <a href="{{ route('post.restore', ['id' => $post->id ]) }}" class="btn btn-sm btn-success"> Restaurar </a>
                       </td>
                       <td>
                           <a href="{{ route('post.kill', ['id' => $post->id ]) }}" class="btn btn-sm btn-danger"> Deletar </a>
                       </td>
                   </tr>
               @endforeach
               
               @else
                   <tr>
                       <th colspan="5" class="text-center">Nenhum post na lixeira.</th>
                   </tr>
               @endif
            </tbody>
        </table>  
    </div>
</div>
@stop