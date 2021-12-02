<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Smalot\PdfParser;
// use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpSpreadsheet\IOFactory;
// use PhpOffice\PhpWord\Writer\HTML;
use PhpOffice\PhpSpreadsheet;
use Spatie\Permission\Models\Role;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // $users = User::role('root')->get();

        // dd($users);
        return view('home');




//         $inputFileName = '2020.xls';
// // $helper->log('Loading file ' . pathinfo($inputFileName, PATHINFO_BASENAME) . ' using IOFactory to identify the format');
// $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);
// $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
// $i=0;
// foreach($sheetData as $row){
//     //Para obtener Titulos
//     if(
//         ($row['A'] != '') and
//         ($row['B'] == '') and
//         ($row['C'] == '') and
//         ($row['D'] == '') and
//         ($row['E'] == '') and
//         ($row['F'] == '') and
//         ($row['G'] == '') and
//         ($row['H'] == '') and
//         ($row['I'] == '')
//     ){
//         if(strlen($row['A']) != 1){
//             $new[]['titulo'] = $row['A'];
//         }

//     }else if(
//         ($row['A'] != '') and
//         ($row['B'] == '') and
//         ($row['C'] == 'ARANCEL PARTICULAR') and
//         ($row['D'] == '') and
//         ($row['G'] == '') and
//         ($row['H'] == '') and
//         ($row['I'] == '')
//     ){
//         $new[]['categoria'] = $row['A'];
//     }else if(
//         ($row['A'] == 'CODIGO') and
//         ($row['B'] == 'GLOSA') and
//         ($row['C'] == 'AMBULATORIO') and
//         ($row['D'] == 'HOSPITALARIO') and
//         ($row['E'] == 'FONASA NIVEL 3') and
//         ($row['F'] == 'ISAPRE') and
//         ($row['G'] == '') and
//         ($row['H'] == '') and
//         ($row['I'] == '')
//         or
//         ($row['A'] == '') and
//         ($row['B'] == '') and
//         ($row['C'] == '') and
//         ($row['D'] == '') and
//         ($row['E'] == '') and
//         ($row['F'] == '') and
//         ($row['G'] == '') and
//         ($row['H'] == '') and
//         ($row['I'] == '')
//     ){
//         // $new[]['categoria'] = $row['A'];
//     }else{
//         $new[]['registro'] = $row;
//     }

// }


// echo "<pre>";
// // print_r($new);

// $a = 0;
// foreach($new as $ordenar){

//     // dump($ordenar);


//     if(isset($ordenar['titulo'])){
//         $aux_titulo = $ordenar['titulo'];
//          $a = $a+1;
//     }

//     if(isset($ordenar['categoria'])){
//         $aux_categoria = $ordenar['categoria'];
//     }

//     if(isset($ordenar['registro'])){

//      $registro['codigo'] = $ordenar['registro']['A'];
//      $registro['glosa'] = $ordenar['registro']['B'];
//      $registro['ambulatorio'] = $ordenar['registro']['C'];
//      $registro['hospitalario'] = $ordenar['registro']['D'];



//         $res[$a][$aux_titulo][$aux_categoria][] = $ordenar['registro'];
//     }




// }

//  print_r($res);


// die;
        // $source = "2020.docx";
        // $phpWord = \PhpOffice\PhpWord\IOFactory::load($source);
        // $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord);
        // dd($htmlWriter);
        // $htmlWriter->save('test1doc.html');
//    return $htmlWriter;
    }
}
