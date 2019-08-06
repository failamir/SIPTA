<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sabuk;
use Illuminate\Http\Request;

class SabukController extends Controller
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
            $sabuk = Sabuk::where('SabukKode', 'LIKE', "%$keyword%")
                ->orWhere('SabukNama', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $sabuk = Sabuk::latest()->paginate($perPage);
        }

        return view('admin.sabuk.index', compact('sabuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.sabuk.create');
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
        
        Sabuk::create($requestData);

        return redirect('admin/sabuk')->with('flash_message', 'Sabuk added!');
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
        $sabuk = Sabuk::findOrFail($id);

        return view('admin.sabuk.show', compact('sabuk'));
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
        $sabuk = Sabuk::findOrFail($id);

        return view('admin.sabuk.edit', compact('sabuk'));
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
        
        $sabuk = Sabuk::findOrFail($id);
        $sabuk->update($requestData);

        return redirect('admin/sabuk')->with('flash_message', 'Sabuk updated!');
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
        Sabuk::destroy($id);

        return redirect('admin/sabuk')->with('flash_message', 'Sabuk deleted!');
    }
}
