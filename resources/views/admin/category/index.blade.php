@extends('layouts.app')

@section('content')
    <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                          Lista de categorías
                          <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>

                                        <th width="30px">ID</th>
                                        <th width="60%">Nombre</th>
                                        <th colspan="3"></th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td width="30px">{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>

                                            <td>
                                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-outline-secondary btn-sm">Ver</a>

                                            </td>
                                            <td>
                                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-outline-secondary btn-sm">Editar</a>

                                            </td>
                                                <td>
                                                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-outline-danger btn-sm">Eliminar</button>
                                                    {!! Form::close() !!}
                                                </td>




                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>

                    {{ $categories->render() }}

                </div>
            </div>

    </div>




@endsection
