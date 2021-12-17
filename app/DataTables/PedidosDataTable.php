<?php

namespace App\DataTables;

use App\User;
use App\Models\Pedidos;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;

class PedidosDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable
        ->editColumn('created_at', function($data) {
            return  \Carbon\Carbon::parse($data->created_at)->format('d/m/Y');
        })
        ->editColumn('updated_at', function($data) {
            return  \Carbon\Carbon::parse($data->updated_at)->format('d/m/Y');
        })
        ->editColumn('estado_name', function($data) {
           return "<p style='color:".$data->color.";'>".$data->estado_name."</p>";
        })
        ->escapeColumns('active')

        ->addColumn('action', 'pedidos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Pedidos $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pedidos $model)
    {
        // return $model->newQuery();
        $user = User::with('roles')->where('id', '=', Auth::id())->first();

       if ($user->roles[0]->name == 'taller') {
           return $model->select(
               'pedidos.id',
               'pedidos.cliente',
               'pedidos.taller',
               'pedidos.express',
               'pedidos.notas',
               'pedidos.estado',
               'estados.estado as estado_name',
               'estados.color',
               'users.name',
               'pedidos.created_at',
               'pedidos.updated_at'
           )
                    ->join('estados', 'pedidos.estado', '=', 'estados.id')
                    ->join('users', 'pedidos.taller', '=', 'users.id')
                    ->where('users.id', '=', Auth::id())
                    ->orderBy('created_at', 'desc');
       }
       if (($user->roles[0]->name == 'root') or ($user->roles[0]->name == 'admin')) {
            return $model->select(
                'pedidos.id',
                'pedidos.cliente',
                'pedidos.taller',
                'pedidos.express',
                'pedidos.notas',
                'pedidos.estado',
                'estados.estado as estado_name',
                'estados.color',
                'users.name',
                'pedidos.created_at',
                'pedidos.updated_at'
            )
                 ->join('estados', 'pedidos.estado', '=', 'estados.id')
                 ->join('users', 'pedidos.taller', '=', 'users.id')
                 ->orderBy('created_at', 'desc');

        }


    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false,'title' => 'ACTION' ])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' =>['title' => 'ID'],
            'cliente' =>['title' => 'CUSTOMER'],
            'express'=>['title' => 'EXPRESS'],
            'created_at' => ['name' => 'created_at', 'data'=>'created_at', 'title' => 'DATE'],
            // 'fecha',
            // 'taller'  => ['name' => 'taller', 'data'=>'taller', 'title' => 'Taller'],
             'taller_name'  => ['name' => 'users.name', 'data'=>'name', 'title' => 'FACTORY'],
             'estado'  => [
                    'name' => 'estados.estado',
                    'data'=>'estado_name',
                    'title' => 'STATUS'

                ],
            // 'boceto',
            // 'medidas',
            // 'NOTES',
            // 'adjuntos',
            'updated_at' => ['name' => 'updated_at', 'data'=>'updated_at', 'title' => 'LAST UPDATE'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'pedidos_datatable_' . time();
    }
}
