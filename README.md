
<h1 align="center">Laravel Base core ui Infyom</h1>
<p>Pasos para instalar </p>
<ul>
    <li>git clone</li>
    <li>composer install</li>
    <li>cp .env.example .env</li>
    <ul>
        <li>Cambiar datos de conexión a base de datos</li>
    </ul>
    <li>php artisan key:generate</li>
    <li>php artisan storage:link</li>
    <li>php artisan passport:keys</li>
    <li>php artisan migrate:refresh --seed</li>
</ul>

<p>Instalaciones ya configuradas</p>

<ul>
        <li>"spatie/laravel-permission": "^3.17", <b> manejo de roles de usuario </b></li>
    <li>"yajra/laravel-datatables-buttons": "*", <b>datatables</b>  </li>
        <li>"yajra/laravel-datatables-html": "*", <b>  datatables </b> </li>
        <li>"yajra/laravel-datatables-oracle": "~9.0",  <b>datatables</b> </li>
        <li>"laravel/passport": "^9.3",     <b> para accesos apis </b></li>
        <li>"laravel/telescope": "*",        <b> monitoreo de acciones en el sistema errores, tiempos de consultas, X </b></li>
    </ul>
    
 <p>Comandos Básicos para hacer scaffold</p>
 <ul>
    <li>php artisan infyom:scaffold (Nombre Modelo) --fromTable --tableName=(nombre tabla) <b> solo web </b></li>
    <li>php artisan infyom:api_scaffold<b> si se quiere conn api también</b></li>
    <li>php artisan infyom:api  <b> solo el api</b></li>
  </ul>
  
  
  
  
  
  https://github.com/InfyOmLabs/laravel-generator/issues/972#issuecomment-892144825
  How I did it (with a little modification in yajra/datables-html/builler - see Step 5)

0-https://datatables.net/examples/api/multi_filter.html
◦ reference example
1-php artisan infyom.publish:templates
2-resources/infyom/infyom-generator-templates/scaffold/views/datatable_body.stub
datatable_body.stub 
@section('third_party_stylesheets')
    @include('layouts.datatables_css')
@endsection

{{-- $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) --}}
{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered'],true) !!}  {{-- drawFooter --}}
3 config/datatables-html.php
<?php
return [
    /*
     * The script template used by infyom datatable
     */
    # 'script' => 'datatables::script',
    'script' => 'layouts/script',
];
4 resources/views/layouts/script.blade.php
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $("#dataTableBuilder tfoot th").each( function () {
        var title = $(this).text();
        $(this).html( "<input type=\'text\' placeholder=\"Search\" />" );
    } );
});

$(function(){window.{{ config('datatables-html.namespace', 'LaravelDataTables') }}=window.{{ config('datatables-html.namespace', 'LaravelDataTables') }}||{};window.{{ config('datatables-html.namespace', 'LaravelDataTables') }}["%1$s"]=$("#%1$s").DataTable(%2$s
        ,initComplete: function () {
            // Apply the search
		this.api().columns().every( function () {
                var that = this;	
                $( "input", this.footer() ).on( "keyup change clear", function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
	} ); }
);
5 • vendor/yajra/laravel-datatables-html/src/Html/Builder.php
    public function generateScripts()
    {
        $parameters = $this->generateJson();
$parameters=substr($parameters,0,strlen($parameters)-1);	# remove the last } in order to add a parameter
        return new HtmlString(
            sprintf($this->template(), $this->getTableAttribute('id'), $parameters)
        );
    }
