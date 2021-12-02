<div class="table-responsive-sm">
    <table class="table table-striped" id="estados-table">
        <thead>
            <tr>
                <th>Estado</th>
                <th>Color</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($estados as $estados)
            <tr>
                <td>{{ $estados->estado }}</td>
                <td style="color:{{ $estados->color  }}">{{ $estados->color }}</td>
                <td>
                    {!! Form::open(['route' => ['estados.destroy', $estados->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('estados.show', [$estados->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('estados.edit', [$estados->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
