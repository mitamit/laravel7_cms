@extends('layouts.app')

@section('content')
    <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                          Crear Categoría
                        </div>

                        <div class="card-body">
                            {!! Form::open(['route' => 'categories.store']) !!}
                                @include('admin.category.partials.form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

    </div>




@endsection
