@extends('layouts.app')

@section('title','Dashboard')

@section('contents')

<div class="row">
                        
<!-- Counting -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Jumlah Propsal</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $q1 }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Proposal Sudah Direview</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $q2 }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Jumlah Proposal Sudah Direview</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $q3 }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Progress Review Proposal Kerma</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <label for="search" class="col-form-label">
                    Search
                </label>
                    <div class="col-sm-2">
                    <form action="/dashboard" method="GET">
                    <input type="search" class="form-control border border-primary" name="search" id="search">
                    </form>
                    </div>
            </div>  
        </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>IDKERMA</th>
                        <th>JUDUL</th>
                        <th>PROGRESS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @php($no = 1)    
                @foreach ($barang as $key => $row)
                    <tr>
                        <th>{{ $barang->firstitem() + $key }}</th>
                        <td>{{ $row->idkerma }}</td>
                        <td>{{ $row->judul }}</td>
                        <td>{{ $row->progress }}</td>
                        <td>
                            <a href="{{ route('barang.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>   
                @endforeach
                </tbody>     
            </table>
            {{ $barang->links() }}
        </div>
    </div>
</div>


@endsection