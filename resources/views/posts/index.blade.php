@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h3>Artículos</h3>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary float-right">Nuevo Artículo</a>
                      </div>
                  </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                
                                <tr>
                                    <td><em><u>{{ $loop->index+1 }}</u></em></td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-xl mb-2">
                                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-block btn-warning">
                                                    Editar
                                                </a>
                                            </div>
                                            <div class="col-xl">
                                                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" value="Eliminar" class="btn btn-block btn-danger" onclick="return confirm('Desea Eliminar ... ?')">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
