@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Pedidos</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             Pedidos
                             <a class="pull-right" href="{{ route('pedidos.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                             @include('pedidos.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

@section('js')
  <script>
   function acualizar_estado(id){
    var estado =   $('#estado_'+id+' option:selected').val();
    var url = "/api/pedidos?id="+id+"&estado="+estado;
     $.ajax({
       url: url,
       type: "POST",
       data: {
         id: id,
         estado: estado
         },
        success: function(data){
            location.href = "/pedidos";

        },
        error: function(data){
          alert("ocurrio un error");
        }
    });
   }
</script>
@endsection

