@extends('layouts.app')

@section('content')
    <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                          Lista de etiquetas
                          <a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
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
                                    @foreach($tags as $tag)
                                        <tr>
                                            <td width="30px">{{ $tag->id }}</td>
                                            <td>{{ $tag->name }}</td>

                                            <td>
                                                <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-outline-secondary btn-sm">Ver</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-outline-secondary btn-sm">Editar</a>
                                            </td>
                                            <td>
                                                {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-outline-danger btn-sm">Eliminar</button>
                                                {!! Form::close() !!}
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>

                    {{ $tags->render() }}

                </div>
            </div>

    </div>




@endsection
