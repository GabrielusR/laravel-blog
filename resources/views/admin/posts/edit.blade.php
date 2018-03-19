@extends('layouts.app')


@section('content')

@if(count($errors) > 0)
    <ul class="list-group">
        @foreach($errors->all() as $error)
            <li class="list-group-item text-danger">
                {{ $error }}
            </li>
        @endforeach
    </ul>
@endif

<div class="panel panel-default">
    <div class="panel-heading">
        Editar post: {{ $post->title }}
    </div>
    
    <div class="panel-body">
        <form action="{{ route('post.update', ['id' => $post->id]) }}" method='post' enctype='multipart/form-data'>
            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="featured">Featured image</label>
                <input type="file" name="featured" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Selecione uma categoria</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                        <option value=" {{ $category->id }} "
                            @if($category->id == $post->category->id)
                                selected
                            @endif
                        >{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="tags">Selecione as tags</label>
               @foreach($tags as $tag)
                    <div class="checkbox">
                        <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}" 
                        
                        @foreach($post->tags as $t)
                            @if($tag->id == $t->id)
                                checked
                            @endif
                        @endforeach
                        
                        >{{ $tag->tag }}</label>
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="content">Texto</label>
                <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
            </div>
            
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit"> Atualizar </button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop

@section('styles')

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

@stop


@section('scripts')

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
    $(document).ready(function() {
       $("#content").summernote();
    });
</script>

@stop