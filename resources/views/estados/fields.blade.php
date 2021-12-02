<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">

    {!! Form::label('color', 'Color:') !!}
    {!! Form::select('color', $colores,  null,  ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
<div class="row">
    @foreach($colores as $color_key => $color_value)
        <div class="form-group col-sm-1" style="background-color: {{ $color_key }}">
            {{ $color_value }}
        </div>
    @endforeach
</div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('estados.index') }}" class="btn btn-secondary">Cancel</a>
</div>
