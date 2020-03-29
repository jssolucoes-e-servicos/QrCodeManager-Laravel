<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ScanCreateRequest;
use App\Http\Requests\ScanUpdateRequest;
use App\Repositories\ScanRepository;
use App\Validators\ScanValidator;

/**
 * Class ScansController.
 *
 * @package namespace App\Http\Controllers;
 */
class ScansController extends Controller
{
    /**
     * @var ScanRepository
     */
    protected $repository;

    /**
     * @var ScanValidator
     */
    protected $validator;

    /**
     * ScansController constructor.
     *
     * @param ScanRepository $repository
     * @param ScanValidator $validator
     */
    public function __construct(ScanRepository $repository, ScanValidator $validator)
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
        $scans = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $scans,
            ]);
        }

        return view('scans.index', compact('scans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ScanCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ScanCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $scan = $this->repository->create($request->all());

            $response = [
                'message' => 'Scan created.',
                'data'    => $scan->toArray(),
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
        $scan = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $scan,
            ]);
        }

        return view('scans.show', compact('scan'));
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
        $scan = $this->repository->find($id);

        return view('scans.edit', compact('scan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ScanUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ScanUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $scan = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Scan updated.',
                'data'    => $scan->toArray(),
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
                'message' => 'Scan deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Scan deleted.');
    }
}
