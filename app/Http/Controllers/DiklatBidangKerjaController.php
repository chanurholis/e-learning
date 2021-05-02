<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiklatBidangKerjaRequest;
use App\Http\Requests\UpdateDiklatBidangKerjaRequest;
use App\Repositories\DiklatBidangKerjaRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\DiklatBidangPelatihan;
use Illuminate\Http\Request;
use App\Models\DiklatJenis;
use Response;
use Flash;

class DiklatBidangKerjaController extends AppBaseController
{
    /** @var  DiklatBidangKerjaRepository */
    private $diklatBidangKerjaRepository;

    public function __construct(DiklatBidangKerjaRepository $diklatBidangKerjaRepo)
    {
        $this->diklatBidangKerjaRepository = $diklatBidangKerjaRepo;
    }

    /**
     * Display a listing of the DiklatBidangKerja.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $diklatBidangKerjas = $this->diklatBidangKerjaRepository->all();

        return view('diklat_bidang_kerjas.index')
            ->with('diklatBidangKerjas', $diklatBidangKerjas);
    }

    /**
     * Show the form for creating a new DiklatBidangKerja.
     *
     * @return Response
     */
    public function create()
    {
        $diklatJenis  = DiklatJenis::where('status_aktif', 'Y')->get();
        $diklatBidang = DiklatBidangPelatihan::where('status_aktif', 'Y')->get();

        return view('diklat_bidang_kerjas.create', [
            'diklatJenis'  => $diklatJenis,
            'diklatBidang' => $diklatBidang
        ]);
    }

    /**
     * Store a newly created DiklatBidangKerja in storage.
     *
     * @param CreateDiklatBidangKerjaRequest $request
     *
     * @return Response
     */
    public function store(CreateDiklatBidangKerjaRequest $request)
    {
        $input = $request->all();

        $diklatBidangKerja = $this->diklatBidangKerjaRepository->create($input);

        Flash::success('Bidang Kerja berhasil ditambahkan.');

        return redirect(route('diklatBidangKerjas.index'));
    }

    /**
     * Display the specified DiklatBidangKerja.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $diklatBidangKerja = $this->diklatBidangKerjaRepository->find($id);

        if (empty($diklatBidangKerja)) {
            Flash::error('Bidang Kerja tidak ditemukan.');

            return redirect(route('diklatBidangKerjas.index'));
        }

        return view('diklat_bidang_kerjas.show')->with('diklatBidangKerja', $diklatBidangKerja);
    }

    /**
     * Show the form for editing the specified DiklatBidangKerja.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $diklatBidangKerja = $this->diklatBidangKerjaRepository->find($id);

        if (empty($diklatBidangKerja)) {
            Flash::error('Bidang Kerja tidak ditemukan.');

            return redirect(route('diklatBidangKerjas.index'));
        }

        return view('diklat_bidang_kerjas.edit')->with('diklatBidangKerja', $diklatBidangKerja);
    }

    /**
     * Update the specified DiklatBidangKerja in storage.
     *
     * @param int $id
     * @param UpdateDiklatBidangKerjaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDiklatBidangKerjaRequest $request)
    {
        $diklatBidangKerja = $this->diklatBidangKerjaRepository->find($id);

        if (empty($diklatBidangKerja)) {
            Flash::error('Bidang Kerja tidak ditemukan.');

            return redirect(route('diklatBidangKerjas.index'));
        }

        $diklatBidangKerja = $this->diklatBidangKerjaRepository->update($request->all(), $id);

        Flash::success('Bidang Kerja berhasil diperbarui.');

        return redirect(route('diklatBidangKerjas.index'));
    }

    /**
     * Remove the specified DiklatBidangKerja from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $diklatBidangKerja = $this->diklatBidangKerjaRepository->find($id);

        if (empty($diklatBidangKerja)) {
            Flash::error('Bidang Kerja tidak ditemukan.');

            return redirect(route('diklatBidangKerjas.index'));
        }

        $this->diklatBidangKerjaRepository->delete($id);

        Flash::success('Bidang Kerja berhasil dihapus.');

        return redirect(route('diklatBidangKerjas.index'));
    }

    public function format_import()
    {
        return redirect('/format-import/bidangkerja.xls');
    }

    public function showFormImport()
    {
        return view('diklat_bidang_kerjas.import');
    }

    public function import(Request $request)
    {
        # code...
    }
}
