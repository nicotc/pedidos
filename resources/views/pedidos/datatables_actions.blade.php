<select name="estado" id="estado_{{ $id }}" onchange="acualizar_estado({{ $id }})">
    @foreach (session()->get('estados') as $estado_id => $estado)
        @if(session()->get('pedidos')[$id] == $estado_id)
            <option selected value="{{ $estado_id }}" selected>{{ $estado }}</option>
        @else
            <option value="{{ $estado_id }}">{{ $estado }}</option>
        @endif
    @endforeach
</select>
{!! Form::open(['route' => ['pedidos.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('pedidos_pdf', $id) }}" class='btn btn-ghost-success'>
       <i class="fa fa-file-pdf-o"></i>
    </a>
    <a href="{{ route('pedidos.show', $id) }}" class='btn btn-ghost-success'>
       <i class="fa fa-eye"></i>
    </a>
    </a>

    <a href="{{ route('pedidos.edit', $id) }}" class='btn btn-ghost-info'>
       <i class="fa fa-edit"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-ghost-danger',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
