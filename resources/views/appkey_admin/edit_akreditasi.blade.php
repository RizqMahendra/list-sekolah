
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
                                <h3 class="mb-0">Edit Kategori</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="post" action="/appkey_admin/akreditasi_edit">
                    @csrf
                    <input type="hidden" value="{{$data->id}}" name="id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Nama Akreditasi</label>
                            <input type="text" class="form-control" value="{{$data->accreditation}}" name="accreditation" placeholder="Nama Akreditasi">
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





