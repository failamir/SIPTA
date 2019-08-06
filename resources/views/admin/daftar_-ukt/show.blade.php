@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Daftar_Ukt {{ $daftar_ukt->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/daftar_-ukt') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/daftar_-ukt/' . $daftar_ukt->id . '/edit') }}" title="Edit Daftar_Ukt"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/daftar_ukt' . '/' . $daftar_ukt->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Daftar_Ukt" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $daftar_ukt->id }}</td>
                                    </tr>
                                    <tr><th> Id Ukt </th><td> {{ $daftar_ukt->id_ukt }} </td></tr><tr><th> Id Anggota </th><td> {{ $daftar_ukt->id_anggota }} </td></tr><tr><th> DuSabukUjian </th><td> {{ $daftar_ukt->duSabukUjian }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
