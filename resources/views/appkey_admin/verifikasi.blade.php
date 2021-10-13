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
                                <h3 class="mb-0">Verifikasi Sekolah</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">No. </th>
                                    <th scope="col">Nama Pengirim</th>
                                    <th scope="col">Nama Sekolah</th>
                                    <th scope="col">Akreditasi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $datas)
                                <tr>
                                    <td>{{ $datas->id }}</td>
                                    <td>{{$datas->sender_name}}</td>
                                    <th scope="row">{{ $datas->school_name }}</th>
                                    <td>{{ $datas->school_accreditation }}</td>
                                    <td>
                                    <form action="{{ route('school_verification', ['id' => $datas->id]) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Verifikasi</button>
                                    </form>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#viewModal{{$datas->id}}"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                    <a href="/appkey_admin/delete_verifikasi/{{ $datas->id }}"><button class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i> Tolak</button></a>
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
        @foreach($data as $datas)
        <div class="modal fade" id="viewModal{{$datas->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Data Verifikasi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div class="box">
                    <h2 class="label-info" style="padding-top : 20px; padding-bottom : 20px;">Data Pengirim</h2>
                    <div class="info-detail">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                <h5 class="label-info">Nama Pengirim</h4>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                <h5 class="label-info">{{$datas->sender_name}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                <h5 class="label-info">Nama Sekolah</h4>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                <h5 class="label-info">{{$datas->school_name}}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="info-detail">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                <h5 class="label-info">Jabatan/Posisi</h4>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                <h5 class="label-info">{{$datas->position}}</h5>
                            </div>
                        </div>
                    </div>
                </div>


                    <div class="box">
                        <h2 class="label-info" style="padding-top : 20px; padding-bottom : 20px;">Data Sekolah</h2>
                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">Logo Sekolah</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    <img src="{{$datas->school_logo === null ? asset('public/images.jpg') : asset('/storage/'. $datas->school_logo)}}">
                                </div>
                            </div>
                        </div>

                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">Nama Sekolah</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    <h5 class="label-info">{{$datas->school_name}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">Akreditasi</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    <h5 class="label-info">{{$datas->school_accreditation}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">Alamat</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    <h5 class="label-info">{{$datas->school_address}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">Deskripsi Sekolah</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    <h5 class="label-info">{{$datas->school_description}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">Jurusan</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    <h5 class="label-info">{{$datas->majors}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">No Telepon</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    <h5 class="label-info">{{$datas->school_phone}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">Web Sekolah</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    <h5 class="label-info">{{$datas->school_website}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">Jam Operasional Sekolah</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    @unless(is_object($datas->operational_hour))
                                           {!! $datas->operational_hour !!}
                                        @else
                                            @foreach ($datas->operational_hour as $index => $day)
                                                <h5>{{ucfirst($index)}} <span>{{ $day[0] }} - {{ $day[1] }}</span> </h5>
                                            @endforeach
                                        @endunless
                                </div>
                            </div>
                        </div>

                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">Social Media</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    <h5 class="label-info">Facebook : <span> {{$datas->socials[0]}} </span></h5>
                                    <h5 class="label-info">Twitter  : <span> {{$datas->socials[1]}} </span></h5>
                                    <h5 class="label-info">Instagram: <span> {{$datas->socials[2]}} </span></h5>
                                    <h5 class="label-info">WhatsApp : <span> {{$datas->socials[3]}} </span></h5>
                                </div>
                            </div>
                        </div>

                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">Biaya</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    <h5 class="label-info">Biaya Semester Minimal  :<br><span> {{$datas->costs[0]}} </span></h5>
                                    <h5 class="label-info">Biaya Semester Maksimal :<br><span> {{$datas->costs[1]}} </span></h5>
                                    <h5 class="label-info">Biaya Rata-rata Tahunan :<br><span> {{$datas->costs[2]}} </span></h5>
                                    <h5 class="label-info">Biaya Rata-rata Keseluruhan :<br><span> {{$datas->costs[3]}} </span></h5>
                                </div>
                            </div>
                        </div>

                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">Tanggal Pendaftaran</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    <h5 class="label-info">{{$datas->registration_time[0]}} s/d {{$datas->registration_time[1]}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="info-detail">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                    <h5 class="label-info">Tanggal Pendaftaran</h4>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                    <div class="feature-img">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                @if ($datas->school_photo)
                                                    @forelse ($datas->school_photo as $photo)
                                                        @if (empty($photo))
                                                                <img class="d-block w-100" style="height : 250px; object-fit: cover;" src="{{ asset('/storage/images/images.jpg') }}" alt="Second slide">
                                                            @break
                                                        @else
                                                            <div class="carousel-item @if ($loop->first) active @endif ">
                                                                <img class="d-block w-100" style="height : 250px; object-fit: cover;" src="{{ asset('/storage/'. $photo) }}" alt="First slide">
                                                            </div>
                                                        @endif
                                                    @empty
                                                        <img class="d-block w-100" style="height : 250px; object-fit: cover;" src="{{ asset('/storage/images/images.jpg') }}" alt="Second slide">
                                                    @endforelse
                                                @endif
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        @endforeach

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush

