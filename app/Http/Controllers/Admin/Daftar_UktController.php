<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Daftar_Ukt;
use Illuminate\Http\Request;

class Daftar_UktController extends Controller
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
            $daftar_ukt = Daftar_Ukt::where('id_ukt', 'LIKE', "%$keyword%")
                ->orWhere('id_anggota', 'LIKE', "%$keyword%")
                ->orWhere('duSabukUjian', 'LIKE', "%$keyword%")
                ->orWhere('duStatus', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $daftar_ukt = Daftar_Ukt::latest()->paginate($perPage);
        }

        return view('admin.daftar_-ukt.index', compact('daftar_ukt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.daftar_-ukt.create');
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
        
        Daftar_Ukt::create($requestData);

        return redirect('admin/daftar_-ukt')->with('flash_message', 'Daftar_Ukt added!');
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
        $daftar_ukt = Daftar_Ukt::findOrFail($id);

        return view('admin.daftar_-ukt.show', compact('daftar_ukt'));
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
        $daftar_ukt = Daftar_Ukt::findOrFail($id);

        return view('admin.daftar_-ukt.edit', compact('daftar_ukt'));
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
        
        $daftar_ukt = Daftar_Ukt::findOrFail($id);
        $daftar_ukt->update($requestData);

        return redirect('admin/daftar_-ukt')->with('flash_message', 'Daftar_Ukt updated!');
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
        Daftar_Ukt::destroy($id);

        return redirect('admin/daftar_-ukt')->with('flash_message', 'Daftar_Ukt deleted!');
    }
}
