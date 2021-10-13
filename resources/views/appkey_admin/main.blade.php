@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        
        <div class="row mt-5">
            <div class="col-xl-12 mb-6 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Data Sekolah</h3>
                            </div>
                            <div class="col text-right">
                                <a href="/appkey_admin/add"><button class="btn btn-primary mb-3">Tambah Sekolah</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No. </th>
                                    <th scope="col">Nama Sekolah</th>
                                    <th scope="col">Akreditasi</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Daerah</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $datas)
                                <tr>
                                    <td>{{ $datas->id }}</td>
                                    <th scope="row">{{ $datas->name }}</th>
                                    <td>{{ $datas->accreditation->accreditation }}</td>
                                    <td>{{ $datas->category_school->category }}</td>
                                    <td>{{ $datas->school_status->status }}</td>
                                    <td>{{ $datas->province->nama }}</td>
                                    <td>
                                    <a href="/appkey_admin/edit/{{ $datas->id }}"><button class="btn btn-success">Edit</button></a>
                                    <a href="/appkey_admin/delete/{{ $datas->id }}"><button class="btn btn-danger">Hapus</button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$data->links()}}
                </div>
            </div>
            
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush




