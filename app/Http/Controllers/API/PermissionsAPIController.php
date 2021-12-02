<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePermissionsAPIRequest;
use App\Http\Requests\API\UpdatePermissionsAPIRequest;
use App\Models\Permissions;
use App\Repositories\PermissionsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PermissionsController
 * @package App\Http\Controllers\API
 */

class PermissionsAPIController extends AppBaseController
{
    /** @var  PermissionsRepository */
    private $permissionsRepository;

    public function __construct(PermissionsRepository $permissionsRepo)
    {
        $this->permissionsRepository = $permissionsRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/permissions",
     *      summary="Get a listing of the Permissions.",
     *      tags={"Permissions"},
     *      description="Get all Permissions",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Permissions")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $permissions = $this->permissionsRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($permissions->toArray(), 'Permissions retrieved successfully');
    }

    /**
     * @param CreatePermissionsAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/permissions",
     *      summary="Store a newly created Permissions in storage",
     *      tags={"Permissions"},
     *      description="Store Permissions",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Permissions that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Permissions")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Permissions"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreatePermissionsAPIRequest $request)
    {
        $input = $request->all();

        $permissions = $this->permissionsRepository->create($input);

        return $this->sendResponse($permissions->toArray(), 'Permissions saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/permissions/{id}",
     *      summary="Display the specified Permissions",
     *      tags={"Permissions"},
     *      description="Get Permissions",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Permissions",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Permissions"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var Permissions $permissions */
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            return $this->sendError('Permissions not found');
        }

        return $this->sendResponse($permissions->toArray(), 'Permissions retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdatePermissionsAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/permissions/{id}",
     *      summary="Update the specified Permissions in storage",
     *      tags={"Permissions"},
     *      description="Update Permissions",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Permissions",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Permissions that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Permissions")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Permissions"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdatePermissionsAPIRequest $request)
    {
        $input = $request->all();

        /** @var Permissions $permissions */
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            return $this->sendError('Permissions not found');
        }

        $permissions = $this->permissionsRepository->update($input, $id);

        return $this->sendResponse($permissions->toArray(), 'Permissions updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/permissions/{id}",
     *      summary="Remove the specified Permissions from storage",
     *      tags={"Permissions"},
     *      description="Delete Permissions",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Permissions",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var Permissions $permissions */
        $permissions = $this->permissionsRepository->find($id);

        if (empty($permissions)) {
            return $this->sendError('Permissions not found');
        }

        $permissions->delete();

        return $this->sendSuccess('Permissions deleted successfully');
    }
}
