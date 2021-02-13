@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Artículo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form 
                        action="{{ route('posts.store') }}"
                        method="post"
                        enctype="multipart/form-date"
                    >
                        <div class="form-group">
                            <label for="title">Título*</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="file" name="file" id="file">
                        </div>
                        <div class="form-group">
                            <label for="title">Contenido*</label>
                            <textarea name="body" id="body" rows="6" class="form-control" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="title">Contenido Embebido</label>
                            <textarea name="iframe" id="iframe" class="form-control"></textarea>
                        </div>

                        @csrf
                        <input type="submit" value="Enviar" class="btn btn-sm btn-primary">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
