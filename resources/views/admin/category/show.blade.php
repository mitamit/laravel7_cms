@extends('layouts.app')

@section('content')
    <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                          Ver Categoría
                        </div>

                        <div class="card-body">

                            <p><strong>Nombre: </strong> {{ $category->name }}</p>
                            <p><strong>Slug: </strong> {{ $category->slug }}</p>
                            <p><strong>Descripción: </strong> {{ $category->body }}</p>

                        </div>
                    </div>
                </div>
            </div>

    </div>




@endsection

