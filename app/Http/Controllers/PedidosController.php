<?php

namespace App\Http\Controllers;

use Flash;
use App\User;
use Response;
use App\Models\Users;
use App\Http\Requests;
use App\Models\Estados;
use App\Models\Pedidos;
use Illuminate\Support\Str;
use App\DataTables\PedidosDataTable;
use Illuminate\Support\Facades\Auth;

use App\Repositories\PedidosRepository;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreatePedidosRequest;
use App\Http\Requests\UpdatePedidosRequest;
use Illuminate\Http\File;



class PedidosController extends AppBaseController
{
    /** @var  PedidosRepository */
    private $pedidosRepository;

    public function __construct(PedidosRepository $pedidosRepo)
    {
        $this->pedidosRepository = $pedidosRepo;
    }

    /**
     * Display a listing of the Pedidos.
     *
     * @param PedidosDataTable $pedidosDataTable
     * @return Response
     */
    public function index(PedidosDataTable $pedidosDataTable)
    {



        return $pedidosDataTable->render('pedidos.index');
    }

    /**
     * Show the form for creating a new Pedidos.
     *
     * @return Response
     */
    public function create()
    {

$taller = $this->taller();

$estado = $this->estado();

        return view('pedidos.create', ['taller'=>$taller, 'estado'=>$estado]);
    }

    /**
     * Store a newly created Pedidos in storage.
     *
     * @param CreatePedidosRequest $request
     *
     * @return Response
     */
    public function store(CreatePedidosRequest $request)
    {
        $input = $request->all();

        $path_medidas = $path_boceto = $path_adjuntos = [];

        if($request->file('medidas') != null ){
            foreach($request->file('medidas') as $media){

                $destinationPath = "./medidas";
                $destinationPath1 = "/medidas";
                $profileImage = date('YmdHis') . "." . $media->getClientOriginalName();
                $media->move($destinationPath, $profileImage);
                $path_medidas[] = $destinationPath1."/".$profileImage;


            }
        }

        if($request->file('boceto') != null ){
            foreach ($request->file('boceto') as $boceto) {

                $destinationPath = "./boceto";
                $destinationPath1 = "/boceto";
                $profileImage = date('YmdHis') . "." . $boceto->getClientOriginalName();
                $boceto->move($destinationPath, $profileImage);
                $path_boceto[] = $destinationPath1."/".$profileImage;


            }
        }

        if ($request->file('adjuntos') != null) {
            foreach ($request->file('adjuntos') as $adjuntos) {
                $destinationPath = "./adjuntos";
                $destinationPath1 = "/adjuntos";
                $profileImage = date('YmdHis') . "." . $adjuntos->getClientOriginalName();
                $adjuntos->move($destinationPath, $profileImage);
                $path_adjuntos[] = $destinationPath1."/".$profileImage;


            }
        }

        $input['medidas'] = json_encode($path_medidas);
        $input['boceto'] = json_encode($path_boceto);
        $input['adjuntos'] = json_encode($path_adjuntos);


        $pedidos = $this->pedidosRepository->create($input);

        Flash::success('Pedidos saved successfully.');

        return redirect(route('pedidos.index'));
    }

    /**
     * Display the specified Pedidos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pedidos = Pedidos::select(
            'pedidos.id',
            'pedidos.cliente',
            'users.name',
            'pedidos.express',
            'pedidos.boceto',
            'pedidos.medidas',
            'pedidos.adjuntos',
            'pedidos.notas',
            'pedidos.estado',
            'pedidos.created_at',
            'pedidos.updated_at')
            ->join('users', 'pedidos.taller', '=', 'users.id')
            ->where('pedidos.id', '=', $id)
            ->first();


        if (empty($pedidos)) {
            Flash::error('Pedidos not found');

            return redirect(route('pedidos.index'));
        }

        return view('pedidos.show')->with('pedidos', $pedidos);
    }

    /**
     * Show the form for editing the specified Pedidos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedidos = $this->pedidosRepository->find($id);

        if (empty($pedidos)) {
            Flash::error('Pedidos not found');

            return redirect(route('pedidos.index'));
        }

        $taller = $this->taller();

        $estado = $this->estado();

        return view('pedidos.edit', ['taller'=>$taller, 'estado'=>$estado] )->with('pedidos', $pedidos);
    }

    /**
     * Update the specified Pedidos in storage.
     *
     * @param  int              $id
     * @param UpdatePedidosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePedidosRequest $request)
    {
        $pedidos = $this->pedidosRepository->find($id);

        if (empty($pedidos)) {
            Flash::error('Pedidos not found');

            return redirect(route('pedidos.index'));
        }


        $input = $request->all();



        $path_medidas = $path_boceto = $path_adjuntos = [];

        if($request->file('medidas') != null ){
            foreach($request->file('medidas') as $media){
                $name = "public/medidas";
                $path_medidas[] = Storage::putFile($name,$media);
            }
        }

        if($request->file('boceto') != null ){
            foreach ($request->file('boceto') as $media) {
                $name = "public/boceto";
                $path_boceto[] = Storage::putFile($name, $media);
            }
        }

        if ($request->file('adjuntos') != null) {
            foreach ($request->file('adjuntos') as $media) {
                $name = "public/adjuntos";
                $path_adjuntos[] = Storage::putFile($name, $media);
            }
        }


        if(count($path_medidas) > 0){
            $input['medidas'] = json_encode($path_medidas);
        }else{
            unset($input['medidas']);
        }

        if(count($path_boceto) > 0){
            $input['boceto'] = json_encode($path_boceto);
        }else{
            unset($input['boceto']);
        }

        if(count($path_adjuntos) > 0){
            $input['adjuntos'] = json_encode($path_adjuntos);
        }else{
            unset($input['adjuntos']);
        }



        $pedidos = $this->pedidosRepository->update($input, $id);



        Flash::success('Pedidos updated successfully.');

        return redirect(route('pedidos.index'));
    }

    /**
     * Remove the specified Pedidos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedidos = $this->pedidosRepository->find($id);

        if (empty($pedidos)) {
            Flash::error('Pedidos not found');

            return redirect(route('pedidos.index'));
        }

        $this->pedidosRepository->delete($id);

        Flash::success('Pedidos deleted successfully.');

        return redirect(route('pedidos.index'));
    }





    public function taller(){
       return Users::select(
	            'model_has_roles.role_id',
                'users.name',
                'users.id')
                ->join('model_has_roles', 'users.id',  '=', 'model_has_roles.model_id')
                ->where('model_has_roles.role_id', '=', '3')
                ->pluck('users.name','users.id' );
    }


    public function estado(){
        return Estados::pluck('estado','id' );
     }




     public function pdf($id)
     {


        $pedidos = Pedidos::select(
            'pedidos.id',
            'pedidos.cliente',
            'users.name',
            'pedidos.express',
            'pedidos.boceto',
            'pedidos.medidas',
            'pedidos.notas',
            'pedidos.estado',
            'pedidos.created_at',
            'pedidos.updated_at')
            ->join('users', 'pedidos.taller', '=', 'users.id')
            ->where('pedidos.id', '=', $id)
            ->first();






        $pdf = app('dompdf.wrapper');
        $pdf->loadView('pedidos.pdf', ['pedidos' => $pedidos ])
        ->setPaper('letter', 'portrait');
         return $pdf->stream('pdf.pdf');
       //  return view('pedidos.pdf', ['pedidos' => $pedidos ]);






     }

}
