<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiklatJenisRequest;
use App\Http\Requests\UpdateDiklatJenisRequest;
use App\Repositories\DiklatJenisRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DiklatJenisController extends AppBaseController
{
    /** @var  Diklat-JenisRepository */
    private $diklatJenisRepository;

    public function __construct(DiklatJenisRepository $diklatJenisRepo)
    {
        $this->diklatJenisRepository = $diklatJenisRepo;
    }

    /**
     * Display a listing of the Diklat-Jenis.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $diklatJenis = $this->diklatJenisRepository->all();

        return view('diklat-jenis.index')
            ->with('diklatJenis', $diklatJenis);
    }

    /**
     * Show the form for creating a new Diklat-Jenis.
     *
     * @return Response
     */
    public function create()
    {
        return view('diklat-jenis.create');
    }

    /**
     * Store a newly created Diklat-Jenis in storage.
     *
     * @param CreateDiklat-JenisRequest $request
     *
     * @return Response
     */
    public function store(CreateDiklatJenisRequest $request)
    {
        $input = $request->all();

        $diklatJenis = $this->diklatJenisRepository->create($input);

        Flash::success('Jenis Diklat berhasil ditambahkan.');

        return redirect(route('diklatJenis.index'));
    }

    /**
     * Display the specified Diklat-Jenis.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $diklatJenis = $this->diklatJenisRepository->find($id);

        if (empty($diklatJenis)) {
            Flash::error('Jenis Diklat tidak ditemukan.');

            return redirect(route('diklatJenis.index'));
        }

        return view('diklat-jenis.show')->with('diklatJenis', $diklatJenis);
    }

    /**
     * Show the form for editing the specified Diklat-Jenis.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $diklatJenis = $this->diklatJenisRepository->find($id);

        if (empty($diklatJenis)) {
            Flash::error('Jenis Diklat tidak ditemukan.');

            return redirect(route('diklatJenis.index'));
        }

        return view('diklat-jenis.edit')->with('diklatJenis', $diklatJenis);
    }

    /**
     * Update the specified Diklat-Jenis in storage.
     *
     * @param int $id
     * @param UpdateDiklat-JenisRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDiklatJenisRequest $request)
    {
        $diklatJenis = $this->diklatJenisRepository->find($id);

        if (empty($diklatJenis)) {
            Flash::error('Jenis Diklat tidak ditemukan.');

            return redirect(route('diklatJenis.index'));
        }

        $diklatJenis = $this->diklatJenisRepository->update($request->all(), $id);

        Flash::success('Jenis Diklat berhasil diperbarui.');

        return redirect(route('diklatJenis.index'));
    }

    /**
     * Remove the specified Diklat-Jenis from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $diklatJenis = $this->diklatJenisRepository->find($id);

        if (empty($diklatJenis)) {
            Flash::error('Jenis Diklat tidak ditemukan.');

            return redirect(route('diklatJenis.index'));
        }

        $this->diklatJenisRepository->delete($id);

        Flash::success('Jenis Diklat berhasil dihapus.');

        return redirect(route('diklatJenis.index'));
    }
}
