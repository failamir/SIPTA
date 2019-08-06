<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Anggotum;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $anggota = Anggotum::where('id_cabang', 'LIKE', "%$keyword%")
                ->orWhere('id_sabuk', 'LIKE', "%$keyword%")
                ->orWhere('id_dp', 'LIKE', "%$keyword%")
                ->orWhere('anggotaNama', 'LIKE', "%$keyword%")
                ->orWhere('anggotaNim', 'LIKE', "%$keyword%")
                ->orWhere('anggotaPassword', 'LIKE', "%$keyword%")
                ->orWhere('anggotaRiwayatPenyakit', 'LIKE', "%$keyword%")
                ->orWhere('anggotaTglLahir', 'LIKE', "%$keyword%")
                ->orWhere('anggotaHp', 'LIKE', "%$keyword%")
                ->orWhere('anggotaAngkatan', 'LIKE', "%$keyword%")
                ->orWhere('anggotaJK', 'LIKE', "%$keyword%")
                ->orWhere('anggotaJur', 'LIKE', "%$keyword%")
                ->orWhere('duStatus', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $anggota = Anggotum::latest()->paginate($perPage);
        }

        return view('admin.anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Anggotum::create($requestData);

        return redirect('admin/anggota')->with('flash_message', 'Anggotum added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $anggotum = Anggotum::findOrFail($id);

        return view('admin.anggota.show', compact('anggotum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $anggotum = Anggotum::findOrFail($id);

        return view('admin.anggota.edit', compact('anggotum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $anggotum = Anggotum::findOrFail($id);
        $anggotum->update($requestData);

        return redirect('admin/anggota')->with('flash_message', 'Anggotum updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Anggotum::destroy($id);

        return redirect('admin/anggota')->with('flash_message', 'Anggotum deleted!');
    }
}
