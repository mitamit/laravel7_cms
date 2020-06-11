@extends('layouts.app')

@section('content')

<div class="container">

    <div class="col-md-12 col-md-offset-2">
        <h2>Lista de artículos</h2>

        @foreach ($posts as $post)

        <div class="card">
            <div class="card-header">
                {{ $post->name }}
            </div>
            <div class="card-body">
                @if($post->file)
                <div class="box">
                    <img src="{{ $post->file }}" class="" alt="{{ $post->slug }}">
                </div>

                @endif
                <p class="card-text"> {{ $post->excerpt }}</p>
                <a href="{{ route('post', $post->slug) }}" class="pull-rigth">Leer más</a>
            </div>
          </div>
          <br>
        @endforeach
        {{ $posts->render() }}

    </div>

</div>


@endsection
