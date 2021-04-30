<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiklatRequest;
use App\Http\Requests\UpdateDiklatRequest;
use App\Repositories\DiklatRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DiklatController extends AppBaseController
{
    /** @var  DiklatRepository */
    private $diklatRepository;

    public function __construct(DiklatRepository $diklatRepo)
    {
        $this->diklatRepository = $diklatRepo;
    }

    /**
     * Display a listing of the Diklat.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $diklats = $this->diklatRepository->all();

        return view('diklats.index')
            ->with('diklats', $diklats);
    }

    /**
     * Show the form for creating a new Diklat.
     *
     * @return Response
     */
    public function create()
    {
        return view('diklats.create');
    }

    /**
     * Store a newly created Diklat in storage.
     *
     * @param CreateDiklatRequest $request
     *
     * @return Response
     */
    public function store(CreateDiklatRequest $request)
    {
        $input = $request->all();

        $diklat = $this->diklatRepository->create($input);

        Flash::success('Diklat berhasil ditambahkan.');

        return redirect(route('diklats.index'));
    }

    /**
     * Display the specified Diklat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $diklat = $this->diklatRepository->find($id);

        if (empty($diklat)) {
            Flash::error('Diklat tidak ditemukan');

            return redirect(route('diklats.index'));
        }

        return view('diklats.show')->with('diklat', $diklat);
    }

    /**
     * Show the form for editing the specified Diklat.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $diklat = $this->diklatRepository->find($id);

        if (empty($diklat)) {
            Flash::error('Diklat not found');

            return redirect(route('diklats.index'));
        }

        return view('diklats.edit')->with('diklat', $diklat);
    }

    /**
     * Update the specified Diklat in storage.
     *
     * @param int $id
     * @param UpdateDiklatRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDiklatRequest $request)
    {
        $diklat = $this->diklatRepository->find($id);

        if (empty($diklat)) {
            Flash::error('Diklat not found');

            return redirect(route('diklats.index'));
        }

        $diklat = $this->diklatRepository->update($request->all(), $id);

        Flash::success('Diklat berhasil diperbarui.');

        return redirect(route('diklats.index'));
    }

    /**
     * Remove the specified Diklat from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $diklat = $this->diklatRepository->find($id);

        if (empty($diklat)) {
            Flash::error('Diklat not found');

            return redirect(route('diklats.index'));
        }

        $this->diklatRepository->delete($id);

        Flash::success('Diklat deleted successfully.');

        return redirect(route('diklats.index'));
    }
}
