<!-- 
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/appkey_admin/kategori_process">
    @csrf
        <div class="form-group">
            <label>Nama Sekolah</label>
            <input type="text" class="form-control" value="" name="nama_kategori" placeholder="Nama Kategori">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="15" placeholder="Deskripsi">
            </textarea>
        </div>
</div>



<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
    <div class="form-group">
        <label>Simpan</label>
        <input type="submit" class="form-control btn btn-primary" value="Simpan">
    </div>
</div>
</form> -->

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
                                <h3 class="mb-0">Tambah data</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="post" action="/appkey_admin/kategori_process">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" class="form-control" value="" name="category" placeholder="Nama Sekolah">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <label>Simpan</label>
                     <input type="submit" class="form-control btn btn-primary" value="Simpan">
                    </div>
                    </form>
                    </div>
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




