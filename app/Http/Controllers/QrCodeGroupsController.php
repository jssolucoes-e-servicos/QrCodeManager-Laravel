<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\QrCodeGroupCreateRequest;
use App\Http\Requests\QrCodeGroupUpdateRequest;
use App\Repositories\QrCodeGroupRepository;
use App\Validators\QrCodeGroupValidator;

/**
 * Class QrCodeGroupsController.
 *
 * @package namespace App\Http\Controllers;
 */
class QrCodeGroupsController extends Controller
{
    /**
     * @var QrCodeGroupRepository
     */
    protected $repository;

    /**
     * @var QrCodeGroupValidator
     */
    protected $validator;

    /**
     * QrCodeGroupsController constructor.
     *
     * @param QrCodeGroupRepository $repository
     * @param QrCodeGroupValidator $validator
     */
    public function __construct(QrCodeGroupRepository $repository, QrCodeGroupValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $qrCodeGroups = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $qrCodeGroups,
            ]);
        }

        return view('qrCodeGroups.index', compact('qrCodeGroups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  QrCodeGroupCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(QrCodeGroupCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $qrCodeGroup = $this->repository->create($request->all());

            $response = [
                'message' => 'QrCodeGroup created.',
                'data'    => $qrCodeGroup->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $qrCodeGroup = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $qrCodeGroup,
            ]);
        }

        return view('qrCodeGroups.show', compact('qrCodeGroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qrCodeGroup = $this->repository->find($id);

        return view('qrCodeGroups.edit', compact('qrCodeGroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  QrCodeGroupUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(QrCodeGroupUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $qrCodeGroup = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'QrCodeGroup updated.',
                'data'    => $qrCodeGroup->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'QrCodeGroup deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'QrCodeGroup deleted.');
    }
}
