@extends('layouts.app')

@section('content')

<div class="container">

    <div class="col-md-12 col-md-offset-2">
        <h2>{{ $post->name }}</h2>



        <div class="card">

            <div class="card-header">
                Categoría
                <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
            </div>

            <div class="card-body">

                @if($post->file)
                <div class="box">
                    <img src="{{ $post->file }}" alt="">
                </div>
                @endif

                {{ $post->excerpt }}

                <hr>

                {!! $post->body !!}

                <hr>

                Etiquetas
                @foreach ($post->tags as $tags)
                    <a href="{{ route('tag', $tags->slug) }}">{{ $tags->name }}</a>
                @endforeach

            </div>

        </div>




    </div>

</div>


@endsection
