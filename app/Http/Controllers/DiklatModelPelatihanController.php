<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiklatModelPelatihanRequest;
use App\Http\Requests\UpdateDiklatModelPelatihanRequest;
use App\Repositories\DiklatModelPelatihanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DiklatModelPelatihanController extends AppBaseController
{
    /** @var  DiklatModelPelatihanRepository */
    private $diklatModelPelatihanRepository;

    public function __construct(DiklatModelPelatihanRepository $diklatModelPelatihanRepo)
    {
        $this->diklatModelPelatihanRepository = $diklatModelPelatihanRepo;
    }

    /**
     * Display a listing of the DiklatModelPelatihan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $diklatModelPelatihans = $this->diklatModelPelatihanRepository->all();

        return view('diklat_model_pelatihans.index')
            ->with('diklatModelPelatihans', $diklatModelPelatihans);
    }

    /**
     * Show the form for creating a new DiklatModelPelatihan.
     *
     * @return Response
     */
    public function create()
    {
        return view('diklat_model_pelatihans.create');
    }

    /**
     * Store a newly created DiklatModelPelatihan in storage.
     *
     * @param CreateDiklatModelPelatihanRequest $request
     *
     * @return Response
     */
    public function store(CreateDiklatModelPelatihanRequest $request)
    {
        $input = $request->all();

        $diklatModelPelatihan = $this->diklatModelPelatihanRepository->create($input);

        Flash::success('Model Pelatihan berhasil ditambahkan.');

        return redirect(route('diklatModelPelatihans.index'));
    }

    /**
     * Display the specified DiklatModelPelatihan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $diklatModelPelatihan = $this->diklatModelPelatihanRepository->find($id);

        if (empty($diklatModelPelatihan)) {
            Flash::error('Model Pelatihan tidak ditemukan.');

            return redirect(route('diklatModelPelatihans.index'));
        }

        return view('diklat_model_pelatihans.show')->with('diklatModelPelatihan', $diklatModelPelatihan);
    }

    /**
     * Show the form for editing the specified DiklatModelPelatihan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $diklatModelPelatihan = $this->diklatModelPelatihanRepository->find($id);

        if (empty($diklatModelPelatihan)) {
            Flash::error('Model Pelatihan tidak ditemukan.');

            return redirect(route('diklatModelPelatihans.index'));
        }

        return view('diklat_model_pelatihans.edit')->with('diklatModelPelatihan', $diklatModelPelatihan);
    }

    /**
     * Update the specified DiklatModelPelatihan in storage.
     *
     * @param int $id
     * @param UpdateDiklatModelPelatihanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDiklatModelPelatihanRequest $request)
    {
        $diklatModelPelatihan = $this->diklatModelPelatihanRepository->find($id);

        if (empty($diklatModelPelatihan)) {
            Flash::error('Model Pelatihan tidak ditemukan.');

            return redirect(route('diklatModelPelatihans.index'));
        }

        $diklatModelPelatihan = $this->diklatModelPelatihanRepository->update($request->all(), $id);

        Flash::success('Model Pelatihan berhasil diperbarui.');

        return redirect(route('diklatModelPelatihans.index'));
    }

    /**
     * Remove the specified DiklatModelPelatihan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $diklatModelPelatihan = $this->diklatModelPelatihanRepository->find($id);

        if (empty($diklatModelPelatihan)) {
            Flash::error('Model Pelatihan tidak ditemukan.');

            return redirect(route('diklatModelPelatihans.index'));
        }

        $this->diklatModelPelatihanRepository->delete($id);

        Flash::success('Model Pelatihan berhasil dihapus.');

        return redirect(route('diklatModelPelatihans.index'));
    }
}
