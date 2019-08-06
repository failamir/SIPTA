<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
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
            $cabang = Cabang::where('cabangKode', 'LIKE', "%$keyword%")
                ->orWhere('cabangNama', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cabang = Cabang::latest()->paginate($perPage);
        }

        return view('admin.cabang.index', compact('cabang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.cabang.create');
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
        
        Cabang::create($requestData);

        return redirect('admin/cabang')->with('flash_message', 'Cabang added!');
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
        $cabang = Cabang::findOrFail($id);

        return view('admin.cabang.show', compact('cabang'));
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
        $cabang = Cabang::findOrFail($id);

        return view('admin.cabang.edit', compact('cabang'));
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
        
        $cabang = Cabang::findOrFail($id);
        $cabang->update($requestData);

        return redirect('admin/cabang')->with('flash_message', 'Cabang updated!');
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
        Cabang::destroy($id);

        return redirect('admin/cabang')->with('flash_message', 'Cabang deleted!');
    }
}
