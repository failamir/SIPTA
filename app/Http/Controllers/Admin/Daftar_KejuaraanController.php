<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Daftar_Kejuaraan;
use Illuminate\Http\Request;

class Daftar_KejuaraanController extends Controller
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
            $daftar_kejuaraan = Daftar_Kejuaraan::where('id_kejuaraan', 'LIKE', "%$keyword%")
                ->orWhere('id_anggota', 'LIKE', "%$keyword%")
                ->orWhere('id_cabang', 'LIKE', "%$keyword%")
                ->orWhere('dkTinggiBadan', 'LIKE', "%$keyword%")
                ->orWhere('dkBeratBadan', 'LIKE', "%$keyword%")
                ->orWhere('duStatus', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $daftar_kejuaraan = Daftar_Kejuaraan::latest()->paginate($perPage);
        }

        return view('admin.daftar_-kejuaraan.index', compact('daftar_kejuaraan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.daftar_-kejuaraan.create');
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
        
        Daftar_Kejuaraan::create($requestData);

        return redirect('admin/daftar_-kejuaraan')->with('flash_message', 'Daftar_Kejuaraan added!');
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
        $daftar_kejuaraan = Daftar_Kejuaraan::findOrFail($id);

        return view('admin.daftar_-kejuaraan.show', compact('daftar_kejuaraan'));
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
        $daftar_kejuaraan = Daftar_Kejuaraan::findOrFail($id);

        return view('admin.daftar_-kejuaraan.edit', compact('daftar_kejuaraan'));
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
        
        $daftar_kejuaraan = Daftar_Kejuaraan::findOrFail($id);
        $daftar_kejuaraan->update($requestData);

        return redirect('admin/daftar_-kejuaraan')->with('flash_message', 'Daftar_Kejuaraan updated!');
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
        Daftar_Kejuaraan::destroy($id);

        return redirect('admin/daftar_-kejuaraan')->with('flash_message', 'Daftar_Kejuaraan deleted!');
    }
}
