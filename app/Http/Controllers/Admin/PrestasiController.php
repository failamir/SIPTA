<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
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
            $prestasi = Prestasi::where('id_kejuaraan', 'LIKE', "%$keyword%")
                ->orWhere('prestasiTgl', 'LIKE', "%$keyword%")
                ->orWhere('prestasiTingkat', 'LIKE', "%$keyword%")
                ->orWhere('prestasiJmlMedali', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $prestasi = Prestasi::latest()->paginate($perPage);
        }

        return view('admin.prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.prestasi.create');
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
        
        Prestasi::create($requestData);

        return redirect('admin/prestasi')->with('flash_message', 'Prestasi added!');
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
        $prestasi = Prestasi::findOrFail($id);

        return view('admin.prestasi.show', compact('prestasi'));
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
        $prestasi = Prestasi::findOrFail($id);

        return view('admin.prestasi.edit', compact('prestasi'));
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
        
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->update($requestData);

        return redirect('admin/prestasi')->with('flash_message', 'Prestasi updated!');
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
        Prestasi::destroy($id);

        return redirect('admin/prestasi')->with('flash_message', 'Prestasi deleted!');
    }
}
