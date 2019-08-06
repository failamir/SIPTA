<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Kejuaraan;
use Illuminate\Http\Request;

class KejuaraanController extends Controller
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
            $kejuaraan = Kejuaraan::where('kejNama', 'LIKE', "%$keyword%")
                ->orWhere('kejTglBatas', 'LIKE', "%$keyword%")
                ->orWhere('kejDeskripsi', 'LIKE', "%$keyword%")
                ->orWhere('kejStatus', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $kejuaraan = Kejuaraan::latest()->paginate($perPage);
        }

        return view('admin.kejuaraan.index', compact('kejuaraan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.kejuaraan.create');
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
        
        Kejuaraan::create($requestData);

        return redirect('admin/kejuaraan')->with('flash_message', 'Kejuaraan added!');
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
        $kejuaraan = Kejuaraan::findOrFail($id);

        return view('admin.kejuaraan.show', compact('kejuaraan'));
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
        $kejuaraan = Kejuaraan::findOrFail($id);

        return view('admin.kejuaraan.edit', compact('kejuaraan'));
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
        
        $kejuaraan = Kejuaraan::findOrFail($id);
        $kejuaraan->update($requestData);

        return redirect('admin/kejuaraan')->with('flash_message', 'Kejuaraan updated!');
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
        Kejuaraan::destroy($id);

        return redirect('admin/kejuaraan')->with('flash_message', 'Kejuaraan deleted!');
    }
}
