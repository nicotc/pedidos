<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstadosRequest;
use App\Http\Requests\UpdateEstadosRequest;
use App\Repositories\EstadosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EstadosController extends AppBaseController
{
    /** @var  EstadosRepository */
    private $estadosRepository;

    public function __construct(EstadosRepository $estadosRepo)
    {
        $this->estadosRepository = $estadosRepo;
    }

    /**
     * Display a listing of the Estados.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $estados = $this->estadosRepository->paginate(10);

        return view('estados.index')
            ->with('estados', $estados);
    }

    /**
     * Show the form for creating a new Estados.
     *
     * @return Response
     */
    public function create()
    {

        $colores = $this->colores();
        return view('estados.create', ['colores' => $colores]);
    }

    /**
     * Store a newly created Estados in storage.
     *
     * @param CreateEstadosRequest $request
     *
     * @return Response
     */
    public function store(CreateEstadosRequest $request)
    {
        $input = $request->all();

        $estados = $this->estadosRepository->create($input);

        Flash::success('Estados saved successfully.');

        return redirect(route('estados.index'));
    }

    /**
     * Display the specified Estados.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estados = $this->estadosRepository->find($id);

        if (empty($estados)) {
            Flash::error('Estados not found');

            return redirect(route('estados.index'));
        }

        return view('estados.show')->with('estados', $estados);
    }

    /**
     * Show the form for editing the specified Estados.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estados = $this->estadosRepository->find($id);

        if (empty($estados)) {
            Flash::error('Estados not found');

            return redirect(route('estados.index'));
        }
        $colores = $this->colores();


        return view('estados.edit',  ['colores' => $colores])->with('estados', $estados);
    }

    /**
     * Update the specified Estados in storage.
     *
     * @param int $id
     * @param UpdateEstadosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstadosRequest $request)
    {
        $estados = $this->estadosRepository->find($id);

        if (empty($estados)) {
            Flash::error('Estados not found');

            return redirect(route('estados.index'));
        }

        $estados = $this->estadosRepository->update($request->all(), $id);

        Flash::success('Estados updated successfully.');

        return redirect(route('estados.index'));
    }

    /**
     * Remove the specified Estados from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estados = $this->estadosRepository->find($id);

        if (empty($estados)) {
            Flash::error('Estados not found');

            return redirect(route('estados.index'));
        }

        $this->estadosRepository->delete($id);

        Flash::success('Estados deleted successfully.');

        return redirect(route('estados.index'));
    }


    public function colores(){
        return $colores = [
            '#20a8d8' => 'Azul',
            '#a4b7c1' => 'Gris',
            '#4dbd74' => 'Verde',
            '#f86c6b' => 'Rojo',
            '#ffc107' => 'Amarillo',
            '#63c2de' => 'Azul Info',
            '#f0f3f5' => 'Claro',
            '#29363d' => 'Oscuro',
            '#6610f2' => 'Morado',
        ];
    }
}
