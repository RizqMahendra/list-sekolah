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
                                <h3 class="mb-0">Data Kategori</h3>
                            </div>
                            <div class="col text-right">
                                <a href="/appkey_admin/add_kategori"><button class="btn btn-primary mb-3">Tambah Kategori</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No. </th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $datas)
                                <tr>
                                    <td>{{ $datas->id }}</td>
                                    <th scope="row">{{ $datas->category }}</th>
                                    <td>{{ $datas->category}}</td>
                                    <td>
                                    <a href="/appkey_admin/edit_kategori/{{ $datas->id }}"><button class="btn btn-success">Edit</button></a>
                                    <a href="/appkey_admin/delete_kategori/{{ $datas->id }}"><button class="btn btn-danger">Hapus</button></a>
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






