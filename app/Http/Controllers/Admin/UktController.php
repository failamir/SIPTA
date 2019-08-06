<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ukt;
use Illuminate\Http\Request;

class UktController extends Controller
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
            $ukt = Ukt::where('uktKode', 'LIKE', "%$keyword%")
                ->orWhere('uktPeriode', 'LIKE', "%$keyword%")
                ->orWhere('uktDeskripsi', 'LIKE', "%$keyword%")
                ->orWhere('uktTglDeskripsi', 'LIKE', "%$keyword%")
                ->orWhere('uktStatus', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ukt = Ukt::latest()->paginate($perPage);
        }

        return view('admin.ukt.index', compact('ukt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.ukt.create');
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
        
        Ukt::create($requestData);

        return redirect('admin/ukt')->with('flash_message', 'Ukt added!');
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
        $ukt = Ukt::findOrFail($id);

        return view('admin.ukt.show', compact('ukt'));
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
        $ukt = Ukt::findOrFail($id);

        return view('admin.ukt.edit', compact('ukt'));
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
        
        $ukt = Ukt::findOrFail($id);
        $ukt->update($requestData);

        return redirect('admin/ukt')->with('flash_message', 'Ukt updated!');
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
        Ukt::destroy($id);

        return redirect('admin/ukt')->with('flash_message', 'Ukt deleted!');
    }
}
