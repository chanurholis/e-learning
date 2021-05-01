<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDiklatJenisKegiatanRequest;
use App\Http\Requests\UpdateDiklatJenisKegiatanRequest;
use App\Repositories\DiklatJenisKegiatanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class DiklatJenisKegiatanController extends AppBaseController
{
    /** @var  DiklatJenisKegiatanRepository */
    private $diklatJenisKegiatanRepository;

    public function __construct(DiklatJenisKegiatanRepository $diklatJenisKegiatanRepo)
    {
        $this->diklatJenisKegiatanRepository = $diklatJenisKegiatanRepo;
    }

    /**
     * Display a listing of the DiklatJenisKegiatan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $diklatJenisKegiatans = $this->diklatJenisKegiatanRepository->all();

        return view('diklat_jenis_kegiatans.index')
            ->with('diklatJenisKegiatans', $diklatJenisKegiatans);
    }

    /**
     * Show the form for creating a new DiklatJenisKegiatan.
     *
     * @return Response
     */
    public function create()
    {
        return view('diklat_jenis_kegiatans.create');
    }

    /**
     * Store a newly created DiklatJenisKegiatan in storage.
     *
     * @param CreateDiklatJenisKegiatanRequest $request
     *
     * @return Response
     */
    public function store(CreateDiklatJenisKegiatanRequest $request)
    {
        $input = $request->all();

        $diklatJenisKegiatan = $this->diklatJenisKegiatanRepository->create($input);

        Flash::success('Jenis Kegiatan berhasil ditambahkan.');

        return redirect(route('diklatJenisKegiatans.index'));
    }

    /**
     * Display the specified DiklatJenisKegiatan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $diklatJenisKegiatan = $this->diklatJenisKegiatanRepository->find($id);

        if (empty($diklatJenisKegiatan)) {
            Flash::error('Jenis Kegiatan tidak ditemukan.');

            return redirect(route('diklatJenisKegiatans.index'));
        }

        return view('diklat_jenis_kegiatans.show')->with('diklatJenisKegiatan', $diklatJenisKegiatan);
    }

    /**
     * Show the form for editing the specified DiklatJenisKegiatan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $diklatJenisKegiatan = $this->diklatJenisKegiatanRepository->find($id);

        if (empty($diklatJenisKegiatan)) {
            Flash::error('Jenis Kegiatan tidak ditemukan.');

            return redirect(route('diklatJenisKegiatans.index'));
        }

        return view('diklat_jenis_kegiatans.edit')->with('diklatJenisKegiatan', $diklatJenisKegiatan);
    }

    /**
     * Update the specified DiklatJenisKegiatan in storage.
     *
     * @param int $id
     * @param UpdateDiklatJenisKegiatanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDiklatJenisKegiatanRequest $request)
    {
        $diklatJenisKegiatan = $this->diklatJenisKegiatanRepository->find($id);

        if (empty($diklatJenisKegiatan)) {
            Flash::error('Jenis Kegiatan tidak ditemukan.');

            return redirect(route('diklatJenisKegiatans.index'));
        }

        $diklatJenisKegiatan = $this->diklatJenisKegiatanRepository->update($request->all(), $id);

        Flash::success('Jenis Kegiatan berhasil diperbarui.');

        return redirect(route('diklatJenisKegiatans.index'));
    }

    /**
     * Remove the specified DiklatJenisKegiatan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $diklatJenisKegiatan = $this->diklatJenisKegiatanRepository->find($id);

        if (empty($diklatJenisKegiatan)) {
            Flash::error('Jenis Kegiatan tidak ditemukan.');

            return redirect(route('diklatJenisKegiatans.index'));
        }

        $this->diklatJenisKegiatanRepository->delete($id);

        Flash::success('Jenis Kegiatan berhasil dihapus.');

        return redirect(route('diklatJenisKegiatans.index'));
    }
}
