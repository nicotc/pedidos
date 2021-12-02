<?php

namespace App\Http\Controllers;

use App\DataTables\PersontypeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePersontypeRequest;
use App\Http\Requests\UpdatePersontypeRequest;
use App\Repositories\PersontypeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PersontypeController extends AppBaseController
{
    /** @var  PersontypeRepository */
    private $persontypeRepository;

    public function __construct(PersontypeRepository $persontypeRepo)
    {
        $this->persontypeRepository = $persontypeRepo;
    }

    /**
     * Display a listing of the Persontype.
     *
     * @param PersontypeDataTable $persontypeDataTable
     * @return Response
     */
    public function index(PersontypeDataTable $persontypeDataTable)
    {
        return $persontypeDataTable->render('persontypes.index');
    }

    /**
     * Show the form for creating a new Persontype.
     *
     * @return Response
     */
    public function create()
    {
        return view('persontypes.create');
    }

    /**
     * Store a newly created Persontype in storage.
     *
     * @param CreatePersontypeRequest $request
     *
     * @return Response
     */
    public function store(CreatePersontypeRequest $request)
    {
        $input = $request->all();

        $persontype = $this->persontypeRepository->create($input);

        Flash::success('Persontype saved successfully.');

        return redirect(route('persontypes.index'));
    }

    /**
     * Display the specified Persontype.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $persontype = $this->persontypeRepository->find($id);

        if (empty($persontype)) {
            Flash::error('Persontype not found');

            return redirect(route('persontypes.index'));
        }

        return view('persontypes.show')->with('persontype', $persontype);
    }

    /**
     * Show the form for editing the specified Persontype.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $persontype = $this->persontypeRepository->find($id);

        if (empty($persontype)) {
            Flash::error('Persontype not found');

            return redirect(route('persontypes.index'));
        }

        return view('persontypes.edit')->with('persontype', $persontype);
    }

    /**
     * Update the specified Persontype in storage.
     *
     * @param  int              $id
     * @param UpdatePersontypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePersontypeRequest $request)
    {
        $persontype = $this->persontypeRepository->find($id);

        if (empty($persontype)) {
            Flash::error('Persontype not found');

            return redirect(route('persontypes.index'));
        }

        $persontype = $this->persontypeRepository->update($request->all(), $id);

        Flash::success('Persontype updated successfully.');

        return redirect(route('persontypes.index'));
    }

    /**
     * Remove the specified Persontype from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $persontype = $this->persontypeRepository->find($id);

        if (empty($persontype)) {
            Flash::error('Persontype not found');

            return redirect(route('persontypes.index'));
        }

        $this->persontypeRepository->delete($id);

        Flash::success('Persontype deleted successfully.');

        return redirect(route('persontypes.index'));
    }
}
