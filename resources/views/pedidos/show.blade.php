@extends('layouts.app')


@section('css')


<style>
 .imglogo{
     width:5cm;

 }

table.borderless td,table.borderless th{
    border: none !important;
    border-top: 0 !important;
    border-bottom: 0 !important;
    line-height: 0.4 !important;
}

table.fullborder th, table.fullborder td {
border: 1.5px solid black !important;
border-top: 1.5px solid black !important;
border-left: 1.5px solid black !important;
border-right: 1.5px solid black !important;
vertical-align: middle !important;
text-align: center !important;
font-size: 10px !important;
}


</style>
@endsection

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('pedidos.index') }}">Pedidos</a>
    </li>
    <li class="breadcrumb-item active">Detail</li>
</ol>

    <div class="container" style="background-color: white">
        <div class="col-md-12 ">
            <header>
                <table class="table borderless head">
                    <tr>
                        <th style="width: 7cm; text-align: left  vertical-align: middle;">
                            <img class='imglogo' src="/ag10logo.png">
                        </th>
                        <th style="width: 7cm; text-align: center  vertical-align: middle;">
                            <h4>Sistema de Gestión de Proyectos</h4>
                        </th>
                        <th style="width: 5cm; text-align: right !important; vertical-align: middle; " >
                            <b>No. {{ str_pad($pedidos->id, 5, "0", STR_PAD_LEFT)  }}
                        </td>
                    </tr>
                </table>

            </header>
            <main>

                    <table class="table fullborder head" id="categorias-table">
                        <tr>
                            <th style="width: 10%; font-weight: bold; text-align: center; color:black; font-size: 9pt !important;">
                                FECHA<br>CARGA:
                            </th>
                            <th style="width: 20%; text-align: center; font-size: 9pt !important;">
                                {{ \Carbon\Carbon::parse($pedidos->created_at)->format('d/m/Y') }}
                            </th>
                            <th style="width: 10%; font-weight: bold; text-align: center; color:black; font-size: 9pt !important;">TALLER:</th>
                            <th style="width: 20%; text-align: center; font-size: 9pt !important; text-transform: uppercase;">
                                {{ $pedidos->name }}
                            </th>

                            <th style="width: 20%; font-weight: bold; text-align: center; color:black; font-size: 9pt !important;">EXPRESS:</th>
                            <th style="width: 20%; text-align: center; font-size: 9pt !important; border-right: 1.5px solid black !important;">
                                @if($pedidos->express == 0){
                                    NO
                                @else
                                    SI
                                @endif
                            </th>
                        </tr>
                        <tr>
                            <th style="font-weight: bold; text-align: center; color:black; font-size: 9pt !important;">FECHA<br>ACTUALIZACIÓN:</th>
                            <th style="text-align: center; font-size: 9pt !important;">
                                {{ \Carbon\Carbon::parse($pedidos->updated_at)->format('d/m/Y') }}
                            </th>
                            <th style=" font-weight: bold; text-align: center; color:black; font-size: 9pt !important;">CLIENTE:</th>
                            <th colspan="3" style="width: 25%; text-align: center; font-size: 9pt !important; text-transform: uppercase;">
                                {{ $pedidos->name }}
                            </th>
                        </tr>
                    </table>




                    @php
                        $bocetos = json_decode($pedidos->boceto);
                        $medidas = json_decode($pedidos->medidas);


                    @endphp

                <table class="table borderless head"  id="categorias-table">
                    <tr>
                        <td style="width: 100%; font-weight: bold; text-align: center; color:Black; font-size: 11pt !important;">BOCETOS</td>
                    </tr>
                </table>
                <hr style="border: 1px solid #000000; margin-top: -20px !important; margin-bottom:  " >


                        @forelse ($bocetos as  $boceto)
                            @php
                                $boceto =  str_replace('public/', '/storage/', $boceto);
                            @endphp
                            <table class="table borderless head"  id="categorias-table" style="margin-top: 1.5cm">
                            <tr>
                                <td style="width: 100%; font-weight: bold; text-align: center; color:Black; font-size: 11pt !important;">
                                    <img src="{{ $boceto }}" style="width: 12cm;">
                                </td>
                            </tr>
                        </table>

                        @empty

                        @endforelse

                <table class="table borderless head"  id="categorias-table">
                    <tr>
                        <td style="width: 100%; font-weight: bold; text-align: center; color:Black; font-size: 11pt !important;">MEDIDAS</td>
                    </tr>
                </table>
                <hr style="border: 1px solid #000000; margin-top: -20px !important; " >

                <hr style="border: 1px solid #000000; margin-top: -20px !important; " >

                        <table class="table borderless head"  id="categorias-table">
                            <tr>
                                <td style="width: 100%; font-weight: bold; text-align: center; color:Black; font-size: 11pt !important;">NOTAS</td>
                            </tr>
                        </table>
                        <hr style="border: 1px solid #000000; margin-top: -20px !important; " >

                        <table class="table borderless head" id="categorias-table" style="margin-bottom:0.5cm" >
                            <tr>

                                <td style="width: 80%; text-align: left !important; color:black; font-size: 9pt !important;">
                                    {{ $pedidos->notas }}
                                </td>
                            </tr>

                        </table>


                        <table class="table borderless head"  id="categorias-table">
                            <tr>
                                <td style="width: 100%; font-weight: bold; text-align: center; color:Black; font-size: 11pt !important;">ARCHIVOS ADJUNTOS</td>
                            </tr>
                        </table>
                        <hr style="border: 1px solid #000000; margin-top: -20px !important; " >


                        @php
                        $adjuntos = json_decode($pedidos->adjuntos);
                        @endphp
                        @forelse ($adjuntos as  $adjunto)
                            @php
                                $adjunto =  str_replace('public/', '/storage/', $adjunto);
                            @endphp
                            <table class="table borderless head"  id="categorias-table" style="margin-top: 1.5cm">
                            <tr>
                                <td style="width: 100%; font-weight: bold; text-align: center; color:Black; font-size: 11pt !important;">
                                    <a href='{{ $adjunto }}'>Adjunto </a>
                                </td>
                            </tr>
                            </table>

                    @empty

                    @endforelse





            </main>
        </div>
    </div>


     {{-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('pedidos.index') }}">Pedidos</a>
            </li>
            <li class="breadcrumb-item active">Detail</li>
     </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                 @include('coreui-templates::common.errors')
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-header">
                                 <strong>Details</strong>
                                  <a href="{{ route('pedidos.index') }}" class="btn btn-light">Back</a>
                             </div>
                             <div class="card-body">
                                 @include('pedidos.show_fields')
                             </div>
                         </div>
                     </div>
                 </div>
          </div>
    </div> --}}
@endsection
