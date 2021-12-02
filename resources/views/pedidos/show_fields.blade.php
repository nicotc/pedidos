<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $pedidos->id }}</p>
</div>

<!-- Cliente Field -->
<div class="form-group">
    {!! Form::label('cliente', 'Cliente:') !!}
    <p>{{ $pedidos->cliente }}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $pedidos->fecha }}</p>
</div>

<!-- Taller Field -->
<div class="form-group">
    {!! Form::label('taller', 'Taller:') !!}
    <p>{{ $pedidos->taller }}</p>
</div>

<!-- Express Field -->
<div class="form-group">
    {!! Form::label('express', 'Express:') !!}
    <p>{{ $pedidos->express }}</p>
</div>

<!-- Boceto Field -->
<div class="form-group">
    {!! Form::label('boceto', 'Boceto:') !!}
    @php
        $bocetos = json_decode($pedidos->boceto);

        foreach ($bocetos as $boceto) {
            $boceto =  str_replace('public/', '/storage/', $boceto);
            echo "<img width='200' src=".$boceto.">";
        }

    @endphp

</div>

<!-- Medidas Field -->
<div class="form-group">
    {!! Form::label('medidas', 'Medidas:') !!}
    @php
    $medidas = json_decode($pedidos->medidas);

    foreach ($medidas as $medida) {
        $medida =  str_replace('public/', '/storage/', $medida);
        echo "<img width='200' src=".$medida.">";
    }
    @endphp

</div>

<!-- Notas Field -->
<div class="form-group">
    {!! Form::label('notas', 'Notas:') !!}
    <p>{{ $pedidos->notas }}</p>
</div>

<!-- Adjuntos Field -->
<div class="form-group">
    {!! Form::label('adjuntos', 'Adjuntos:') !!}
    @php
    $adjuntos = json_decode($pedidos->adjuntos);

    foreach ($adjuntos as $adjunto) {
        $adjunto =  str_replace('public/', '/storage/', $adjunto);
        echo "<a href='".$adjunto."'>adjuntos</a><br>";
    }
    @endphp

</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pedidos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pedidos->updated_at }}</p>
</div>

