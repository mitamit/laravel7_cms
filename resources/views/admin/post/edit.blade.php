@extends('layouts.app')

@section('content')
    <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                          Editar Entrada
                        </div>

                        <div class="card-body">
                            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => 'true']) !!}
                                @include('admin.post.partials.form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

    </div>




@endsection
