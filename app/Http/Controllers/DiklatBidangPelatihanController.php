<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiklatBidangPelatihanRequest;
use App\Http\Requests\UpdateDiklatBidangPelatihanRequest;
use App\Repositories\DiklatBidangPelatihanRepository;
use App\Imports\DiklatBidangPelatihanImport;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\DiklatJenis;
use Response;
use Flash;
use Excel;

class DiklatBidangPelatihanController extends AppBaseController
{
    /** @var  DiklatBidangPelatihanRepository */
    private $diklatBidangPelatihanRepository;

    public function __construct(DiklatBidangPelatihanRepository $diklatBidangPelatihanRepo)
    {
        $this->diklatBidangPelatihanRepository = $diklatBidangPelatihanRepo;
    }

    /**
     * Display a listing of the DiklatBidangPelatihan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $diklatBidangPelatihans = $this->diklatBidangPelatihanRepository->all();

        return view('diklat_bidang_pelatihans.index')
            ->with('diklatBidangPelatihans', $diklatBidangPelatihans);
    }

    /**
     * Show the form for creating a new DiklatBidangPelatihan.
     *
     * @return Response
     */
    public function create()
    {
        $diklatJenis = DiklatJenis::where('status_aktif', 'Y')->get();

        return view('diklat_bidang_pelatihans.create', [
            'diklatJenis' => $diklatJenis
        ]);
    }

    /**
     * Store a newly created DiklatBidangPelatihan in storage.
     *
     * @param CreateDiklatBidangPelatihanRequest $request
     *
     * @return Response
     */
    public function store(CreateDiklatBidangPelatihanRequest $request)
    {
        $input = $request->all();

        $diklatBidangPelatihan = $this->diklatBidangPelatihanRepository->create($input);

        Flash::success('Bidang Pelatihan berhasil ditambahkan.');

        return redirect(route('diklatBidangPelatihans.index'));
    }

    /**
     * Display the specified DiklatBidangPelatihan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $diklatBidangPelatihan = $this->diklatBidangPelatihanRepository->find($id);

        if (empty($diklatBidangPelatihan)) {
            Flash::error('Bidang Pelatihan tidak ditemukan.');

            return redirect(route('diklatBidangPelatihans.index'));
        }

        return view('diklat_bidang_pelatihans.show')->with('diklatBidangPelatihan', $diklatBidangPelatihan);
    }

    /**
     * Show the form for editing the specified DiklatBidangPelatihan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $diklatJenis = DiklatJenis::where('status_aktif', 'Y')->get();
        $diklatBidangPelatihan = $this->diklatBidangPelatihanRepository->find($id);

        if (empty($diklatBidangPelatihan)) {
            Flash::error('Bidang Pelatihan tidak ditemukan.');

            return redirect(route('diklatBidangPelatihans.index'));
        }

        return view('diklat_bidang_pelatihans.edit', [
            'diklatBidangPelatihan' => $diklatBidangPelatihan,
            'diklatJenis'           => $diklatJenis
        ]);
    }

    /**
     * Update the specified DiklatBidangPelatihan in storage.
     *
     * @param int $id
     * @param UpdateDiklatBidangPelatihanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDiklatBidangPelatihanRequest $request)
    {
        $diklatBidangPelatihan = $this->diklatBidangPelatihanRepository->find($id);

        if (empty($diklatBidangPelatihan)) {
            Flash::error('Bidang Pelatihan tidak ditemukan.');

            return redirect(route('diklatBidangPelatihans.index'));
        }

        $diklatBidangPelatihan = $this->diklatBidangPelatihanRepository->update($request->all(), $id);

        Flash::success('Bidang Pelatihan berhasil diperbarui.');

        return redirect(route('diklatBidangPelatihans.index'));
    }

    /**
     * Remove the specified DiklatBidangPelatihan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $diklatBidangPelatihan = $this->diklatBidangPelatihanRepository->find($id);

        if (empty($diklatBidangPelatihan)) {
            Flash::error('Bidang Pelatihan tidak ditemukan.');

            return redirect(route('diklatBidangPelatihans.index'));
        }

        $this->diklatBidangPelatihanRepository->delete($id);

        Flash::success('Bidang Pelatihan berhasil dihapus.');

        return redirect(route('diklatBidangPelatihans.index'));
    }

    public function format_import()
    {
        return redirect('/format-import/bidangpelatihan.xls');
    }

    public function showFormImport()
    {
        return view('diklat_bidang_pelatihans.import');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName   = date("dmY") . $file->getClientOriginalName();

            $file->move('diklatBidangPelatihanFile', $fileName);

            Excel::import(new DiklatBidangPelatihanImport, public_path('/diklatBidangPelatihanFile/' . $fileName));

            Flash::success('Bidang Pelatihan berhasil diimpor.');

            return redirect(route('diklatBidangPelatihans.index'));
        }
    }
}
