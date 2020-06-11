<div class="form-group">
    {{ Form::label('name', 'Nombre de la etiqueta') }}
    {{ Form::text('name', null, ['class'=> 'form-control', 'id' => 'name']) }}
    {{-- form errors --}}
    @if ($errors->has('name'))
        <p class="error">{{ $errors->first('name') }}</p>
    @endif
</div>

<div class="form-group">
    {{ Form::label('slug', 'Url Amigable') }}
    {{ Form::text('slug', null, ['class'=> 'form-control', 'id' => 'slug']) }}
    {{-- form errors --}}
    @if ($errors->has('slug'))
        <p class="error">{{ $errors->first('slug') }}</p>
    @endif
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')

<script src="{{ asset('vendor/stringtoslug/jquery.stringtoslug.min.js') }}"></script>

<script>
    //Urll amigable, transforma el campo nombre en un slug nombre-
    $(document).ready(function(){
        $("#name, #slug").stringToSlug({
            callback: function(text){
                $("#slug").val(text);
            }
        });
    });

</script>



@endsection
