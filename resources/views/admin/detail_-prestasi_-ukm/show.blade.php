@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Detail_Prestasi_Ukm {{ $detail_prestasi_ukm->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/detail_-prestasi_-ukm') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/detail_-prestasi_-ukm/' . $detail_prestasi_ukm->id . '/edit') }}" title="Edit Detail_Prestasi_Ukm"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/detail_prestasi_ukm' . '/' . $detail_prestasi_ukm->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Detail_Prestasi_Ukm" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $detail_prestasi_ukm->id }}</td>
                                    </tr>
                                    <tr><th> Id Restasi </th><td> {{ $detail_prestasi_ukm->id_restasi }} </td></tr><tr><th> DpJuara </th><td> {{ $detail_prestasi_ukm->dpJuara }} </td></tr><tr><th> DpMedali </th><td> {{ $detail_prestasi_ukm->dpMedali }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
