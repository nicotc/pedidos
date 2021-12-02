<!-- Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente', 'Cliente:') !!}
    {!! Form::text('cliente', null, ['class' => 'form-control']) !!}
</div>




<!-- Taller Field -->
<div class="form-group col-sm-6">
    {!! Form::label('taller', 'Taller:') !!}
    {!! Form::select('taller', $taller, null, ['class' => 'form-control']) !!}
</div>

<!-- Express Field -->
<div class="form-group col-sm-6">
    {!! Form::label('express', 'Express:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('express', 0) !!}
        {!! Form::checkbox('express', '1', null) !!}
    </label>
</div>


<!-- Boceto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('boceto', 'Boceto:') !!}
    {!! Form::file('boceto[]', ['multiple', 'id'=>'Boceto' ]) !!}
</div>
<div class="clearfix"></div>

<!-- Medidas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medidas', 'Medidas:') !!}
    {!! Form::file('medidas[]', ['multiple', 'id'=>'Medidas']) !!}
</div>
<div class="clearfix"></div>

<!-- Notas Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::textarea('notas', null, ['class' => 'form-control']) !!}
</div>

<!-- Adjuntos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adjuntos', 'Adjuntos:') !!}
    {!! Form::file('adjuntos[]', ['multiple', 'id'=>'Adjuntos']) !!}
</div>



<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::select('estado', $estado,  null, ['class' => 'form-control']) !!}
</div>


<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
