@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Prestasi {{ $prestasi->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/prestasi') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/prestasi/' . $prestasi->id . '/edit') }}" title="Edit Prestasi"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/prestasi' . '/' . $prestasi->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Prestasi" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $prestasi->id }}</td>
                                    </tr>
                                    <tr><th> Id Kejuaraan </th><td> {{ $prestasi->id_kejuaraan }} </td></tr><tr><th> PrestasiTgl </th><td> {{ $prestasi->prestasiTgl }} </td></tr><tr><th> PrestasiTingkat </th><td> {{ $prestasi->prestasiTingkat }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
