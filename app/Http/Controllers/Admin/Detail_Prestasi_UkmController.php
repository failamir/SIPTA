<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Detail_Prestasi_Ukm;
use Illuminate\Http\Request;

class Detail_Prestasi_UkmController extends Controller
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
            $detail_prestasi_ukm = Detail_Prestasi_Ukm::where('id_restasi', 'LIKE', "%$keyword%")
                ->orWhere('dpJuara', 'LIKE', "%$keyword%")
                ->orWhere('dpMedali', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $detail_prestasi_ukm = Detail_Prestasi_Ukm::latest()->paginate($perPage);
        }

        return view('admin.detail_-prestasi_-ukm.index', compact('detail_prestasi_ukm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.detail_-prestasi_-ukm.create');
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
        
        Detail_Prestasi_Ukm::create($requestData);

        return redirect('admin/detail_-prestasi_-ukm')->with('flash_message', 'Detail_Prestasi_Ukm added!');
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
        $detail_prestasi_ukm = Detail_Prestasi_Ukm::findOrFail($id);

        return view('admin.detail_-prestasi_-ukm.show', compact('detail_prestasi_ukm'));
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
        $detail_prestasi_ukm = Detail_Prestasi_Ukm::findOrFail($id);

        return view('admin.detail_-prestasi_-ukm.edit', compact('detail_prestasi_ukm'));
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
        
        $detail_prestasi_ukm = Detail_Prestasi_Ukm::findOrFail($id);
        $detail_prestasi_ukm->update($requestData);

        return redirect('admin/detail_-prestasi_-ukm')->with('flash_message', 'Detail_Prestasi_Ukm updated!');
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
        Detail_Prestasi_Ukm::destroy($id);

        return redirect('admin/detail_-prestasi_-ukm')->with('flash_message', 'Detail_Prestasi_Ukm deleted!');
    }
}
