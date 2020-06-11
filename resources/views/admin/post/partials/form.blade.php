{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('category_id', 'Categorías') }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Elija una categoría..']) }}
   {{--  form-error --}}
    @if ($errors->has('category_id'))
        <p class="error">{{ $errors->first('category_id') }}</p>
    @endif
</div>

<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
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
    {{ Form::label('file', 'Imagen') }}
    {{ Form::file('file') }}
</div>

<div class="form-group">

    <label>
        {{  Form::radio('status', 'DRAFT') }} Borrador
    </label>
    <label style="margin-left: 3%;">
        {{  Form::radio('status', 'PUBLISHED') }} Publicado
    </label>
    {{-- form errors --}}
    @if ($errors->has('status'))
        <p class="error">{{ $errors->first('status') }}</p>
    @endif

</div>

<div class="form-group">
    {{ Form::label('tags', 'Etiquetas') }}
    <div>

        @foreach($tags as $tag)
        <label class="etiquetas">
            {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
        </label>
        @endforeach
    </div>
    {{-- form errors --}}
    @if ($errors->has('tags'))
        <p class="error">{{ $errors->first('tags') }}</p>
    @endif
</div>

<div class="form-group">
    {{ Form::label('excerpt', 'Extracto') }}
    {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
    {{-- form errors --}}
    @if ($errors->has('excerpt'))
        <p class="error">{{ $errors->first('excerpt') }}</p>
    @endif
</div>


<div class="form-group">
    {{ Form::label('body', 'Descripción') }}
    {{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => '8'])  }}
    {{-- form errors --}}
    @if ($errors->has('body'))
        <p class="error">{{ $errors->first('body') }}</p>
    @endif
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


@section('scripts')

<script src="{{ asset('vendor/stringtoslug/jquery.stringtoslug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>


<script>
    //Urll amigable, transforma el campo nombre en un slug nombre-
    $(document).ready(function(){
        $("#name, #slug").stringToSlug({
            callback: function(text){
                $("#slug").val(text);
            }
        });
    });

    CKEDITOR.config.height = 'auto';
    CKEDITOR.config.width = 'auto';

    CKEDITOR.replace('body');



</script>



@endsection
