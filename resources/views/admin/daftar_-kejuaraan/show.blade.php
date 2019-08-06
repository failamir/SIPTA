@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Daftar_Kejuaraan {{ $daftar_kejuaraan->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/daftar_-kejuaraan') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/daftar_-kejuaraan/' . $daftar_kejuaraan->id . '/edit') }}" title="Edit Daftar_Kejuaraan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/daftar_kejuaraan' . '/' . $daftar_kejuaraan->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Daftar_Kejuaraan" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $daftar_kejuaraan->id }}</td>
                                    </tr>
                                    <tr><th> Id Kejuaraan </th><td> {{ $daftar_kejuaraan->id_kejuaraan }} </td></tr><tr><th> Id Anggota </th><td> {{ $daftar_kejuaraan->id_anggota }} </td></tr><tr><th> Id Cabang </th><td> {{ $daftar_kejuaraan->id_cabang }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
