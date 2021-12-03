<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    {{-- <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> --}}
    <link rel="stylesheet" href="{{ URL::to('/').'/bootstrap.min.css' }}" >
    <link rel="stylesheet" href="{{ URL::to('/').'/pdf.css' }}" >

    @dd(URL::to('/').'/bootstrap.min.css', URL::to('/').'/pdf.css')
 <style>
     .imglogo{
         width:5cm;

     }
     /* table, tr, td, th, tbody, thead, tfoot {
        page-break-inside: avoid !important;
    } */

    </style>
</head>

<body>
    <header>
        <table class="table borderless head">
            <tr>
                <th style="width: 7cm; text-align: left  vertical-align: middle;">
                    <img class='imglogo' src="{{ public_path('/ag10logo.png') }}">
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
                    <th style="width: 3.5cm; font-weight: bold; text-align: center; color:black; font-size: 9pt !important;">
                        FECHA<br>CARGA:
                    </th>
                    <th style="width: 2.5cm; text-align: center; font-size: 9pt !important;">
                        {{ \Carbon\Carbon::parse($pedidos->created_at)->format('d/m/Y') }}
                    </th>
                    <th style="width: 2.5cm; font-weight: bold; text-align: center; color:black; font-size: 9pt !important;">TALLER:</th>
                    <th style="width: 5cm; text-align: center; font-size: 9pt !important; text-transform: uppercase;">
                        {{ $pedidos->name }}
                    </th>

                    <th style="width: 2.5cm; font-weight: bold; text-align: center; color:black; font-size: 9pt !important;">EXPRESS:</th>
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
        <hr style="border: 1px solid #000000; margin-top: -0.25cm !important; margin-bottom: 0.35cm " >


                @forelse ($bocetos as  $boceto)
                    @php
                        $boceto =  str_replace('public/', '/storage/', $boceto);
                    @endphp
                    <table class="table borderless head"  id="categorias-table" style="margin-top: 1.5cm">
                     <tr>
                        <td style="width: 100%; font-weight: bold; text-align: center; color:Black; font-size: 11pt !important;">
                            <img src="{{ public_path($boceto) }}" style="width: 10cm;">
                        </td>
                    </tr>
                </table>
                <div class="page-break"></div>
                @empty

                @endforelse

        <table class="table borderless head"  id="categorias-table">
            <tr>
                <td style="width: 100%; font-weight: bold; text-align: center; color:Black; font-size: 11pt !important;">MEDIDAS</td>
            </tr>
        </table>

        <hr style="border: 1px solid #000000; margin-top: -0.25cm !important; margin-bottom: 0.35cm " >

                @forelse ($medidas as  $medida)
                    @php
                        $medida =  str_replace('public/', '/storage/', $medida);
                    @endphp
                    <table class="table borderless head"  id="categorias-table"  style="margin-top: 1.5cm">
                    <tr>
                        <td style="width: 100%; font-weight: bold; text-align: center; color:Black; font-size: 11pt !important;">
                            <img src="{{ public_path($medida) }}" style="width:10cm;">
                        </td>
                    </tr>
                </table>
                <div class="page-break"></div>
                @empty

                @endforelse

                <table class="table borderless head"  id="categorias-table">
                    <tr>
                        <td style="width: 100%; font-weight: bold; text-align: center; color:Black; font-size: 11pt !important;">NOTAS</td>
                    </tr>
                </table>

                <hr style="border: 1px solid #000000; margin-top: -0.25cm !important; margin-bottom: 0.35cm " >

                <table class="table borderless head" id="categorias-table" style="margin-bottom:0.5cm" >
                    <tr>

                        <td style="width: 80%; text-align: left !important; color:black; font-size: 9pt !important;">
                            {{ $pedidos->notas }}
                        </td>
                    </tr>

                </table>

    </main>
</body>


</html>



