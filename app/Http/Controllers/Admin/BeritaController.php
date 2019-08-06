<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Beritum;
use Illuminate\Http\Request;

class BeritaController extends Controller
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
            $berita = Beritum::where('beritaJudul', 'LIKE', "%$keyword%")
                ->orWhere('beritaTgl', 'LIKE', "%$keyword%")
                ->orWhere('beritaIsi', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $berita = Beritum::latest()->paginate($perPage);
        }

        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.berita.create');
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
        
        Beritum::create($requestData);

        return redirect('admin/berita')->with('flash_message', 'Beritum added!');
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
        $beritum = Beritum::findOrFail($id);

        return view('admin.berita.show', compact('beritum'));
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
        $beritum = Beritum::findOrFail($id);

        return view('admin.berita.edit', compact('beritum'));
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
        
        $beritum = Beritum::findOrFail($id);
        $beritum->update($requestData);

        return redirect('admin/berita')->with('flash_message', 'Beritum updated!');
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
        Beritum::destroy($id);

        return redirect('admin/berita')->with('flash_message', 'Beritum deleted!');
    }
}
