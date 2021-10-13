@include('css')

<body>
    @include('header')
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @if ($detail->school_photo)
                                        @forelse ($detail->school_photo as $photo)
                                            @if (empty($photo))
                                                    <img class="d-block w-100" style="height : 550px; object-fit: cover;" src="{{ asset('/storage/images/images.jpg') }}" alt="Second slide">
                                                @break
                                            @else
                                                <div class="carousel-item @if ($loop->first) active @endif ">
                                                    <img class="d-block w-100" style="height : 550px; object-fit: cover;" src="{{ asset('/storage/'. $photo) }}" alt="First slide">
                                                </div>
                                            @endif
                                        @empty
                                            <img class="d-block w-100" style="height : 550px; object-fit: cover;" src="{{ asset('/storage/images/images.jpg') }}" alt="Second slide">
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
                        <div class="blog_details">
                            <div class="blog_item">
                                <div class="blog_details">
                                    <div class="info-kampus d-flex">
                                        <img src="{{$detail->school_logo === null ? asset('public/images.jpg') : asset('/storage/'. $detail->school_logo)}}">
                                        <div>
                                            <div class="d-flex title">
                                                <h4>{{$detail->name}}</h4>
                                            </div>
                                            <i class="fa fa-map-marker" style="padding-right: 10px;"></i><span class="desc">Alamat : {{$detail->address}}</span><br>
                                            <i class="fa fa-phone" style="padding-right: 10px;"></i><span class="desc">Kontak : {{$detail->phone}}</span><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <h3>Tentang Sekolah</h3>
                                <span class="more">
                                    {{$detail->description}}
                                </span>
                            </div>
                            <div class="box">
                                <h3>Informasi Sekolah</h3>
                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                            <h4 class="label-info">Akreditasi</h4>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                            <h4 class="label-info">{{$detail->accreditation->accreditation}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                            <h4 class="label-info">Status</h4>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                            <h4 class="label-info">{{$detail->school_status->status}}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                            <h4 class="label-info">Kategori</h4>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                            <h4 class="label-info">{{$detail->category_school->category}}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                            <h4 class="label-info">Jurusan yang Tersedia</h4>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                            <h4 class="label-info">{{$detail->majors}}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                            <h4 class="label-info">Daerah</h4>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                            <h4 class="label-info">{{$detail->province->nama}}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                            <h4 class="label-info">Sosial Media</h4>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-6 col-6">
                                            <a href="{{$detail->socials[0] ?? 'data belum lengkap'}}" class="sns-icon">
                                                <img src="{{ asset('asset/fbicon.png') }}">
                                            </a>
                                            <a href="{{$detail->socials[1] ?? 'data belum lengkap'}}" class="sns-icon">
                                                <img src="{{ asset('asset/igicon.png') }}">
                                            </a>
                                            <a href="{{$detail->socials[2] ?? 'data belum lengkap'}}" class="sns-icon">
                                                <img src="{{ asset('asset/twicon.png') }}">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                            <h4 class="label-info">Website</h4>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-6 col-6 t-web">
                                            <a href="{{$detail->website}}" target="_Blank">Kunjungi <i class="fa fa-external-link-square"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                            <h4 class="label-info">Jam Operasional</h4>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-6 col-6 t-web">
                                        @unless(is_object($operational_hour))
                                           {!! $operational_hour !!}
                                        @else
                                            @foreach ($operational_hour as $index => $day)
                                                <h4>{{ucfirst($index)}} <span>{{ $day[0] }} - {{ $day[1] }}</span> </h4>
                                            @endforeach
                                        @endunless

                                        </div>
                                    </div>
                                </div>

                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                            <h4 class="label-info">Lokasi</h4>
                                        </div>
                                        <div id='map' style='width: 400px; height: 300px;'></div>
                                    </div>
                                </div>

                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-12 col-12">
                                            <h4 class="label-info">Biaya</h4>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-12 col-12 t-web">
                                        <table class="table table-striped">
                                            <tr>
                                                <th scope="row">Biaya Semester Minimal</th>
                                                <td>{{$detail->costs[0]}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Biaya Semester Maksimal</th>
                                                <td>{{$detail->costs[1]}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Biaya Rata-rata Tahunan</th>
                                                <td>{{$detail->costs[2]}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Biaya Rata-rata Keseluruhan</th>
                                                <td>{{$detail->costs[3]}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    </div>
                                </div>

                                <div class="info-detail">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5 col-md-6 col-6">
                                            <h4 class="label-info">Waktu Pendaftaran</h4>
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-12 col-12 t-web">
                                           <h4><span>{{$detail->registration_time[0]}} s/d {{$detail->registration_time[1]}}</span></h4>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <div class="single_sidebar_widget">
                            <form action="{{ route('home.filter') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="select-province" class="form-label"><b>Provinsi</b></label>
                                    <div class="form-select form-filter">
                                        <select id="select-province" name="province">
                                            <option value="0" selected>Pilih Provinsi</option>
                                            @foreach ($provinces as $province)
                                            <option value="{{ $province->id }}">{{ $province->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="search-school" class="form-label"><b>Nama Sekolah</b></label>
                                    <input type="text" class="form-control form-control-lg" placeholder='Cari sekolah' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari nama sekolah'" name="school_name" id="search-school">
                                </div>
                                <div class="form-group">
                                    <label for="select-school-type" class="form-label"><b>Kategori Sekolah</b></label>
                                    <div class="form-select form-filter">
                                        <select id="select-school-type" name="category">
                                            <option value="0" selected>Pilih kategori</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select-school-majors" class="form-label"><b>Status Sekolah</b></label>
                                    <div class="form-select form-filter">
                                        <select id="select-school-majors" name="status">
                                            <option value="0" selected>Pilih status</option>
                                            @foreach ($status as $item)
                                            <option value="{{ $item->id }}">{{ $item->status }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select-school-accreditation" class="form-label"><b>Akreditasi Sekolah</b></label>
                                    <div class="form-select form-filter">
                                        <select id="select-school-accreditation" name="accreditation">
                                            <option value="0" selected>Pilih akreditasi</option>
                                            @foreach ($accreditations as $accreditation)
                                            <option value="{{ $accreditation->id }}">{{ $accreditation->accreditation }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button class="button rounded-0 btn-submit text-white w-100 btn_1 boxed-btn" type="submit">Cari sekolah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Lengkapi Data</h2>
                <span>
                    <p class="mb-0">Anda dapat melengkapi data sekolah</p>
                    <p>Dengan mengisi formulir pada menu disamping</p>
                </span>
            </div>

            <div class="col-md-4 align-self-center">
                <button class="button rounded-0 btn-submit text-white w-100 btn_1 boxed-btn" data-toggle="modal" data-target="#exampleModal">
                    Lengkapi Data
                </button>
            </div>
        </div>
    </div>

    <x-modal title="Formulir Data Sekolah">
        <form action="{{ route('school_verification.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="school_id" value="{{ $detail->id }}">
            <label for="sender_name" class="h00">Data Pengirim</label>
            <div id="sender">
                <div class="form-group row">
                    <label for="sender_name" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" name="sender_name" class="form-control" id="sender_name" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="school_name" class="col-sm-3 col-form-label">Nama Sekolah</label>
                    <div class="col-sm-9">
                        <input type="text" name="school_name" class="form-control" id="school_name" placeholder="Nama sekolah / Instansi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="position" class="col-sm-3 col-form-label">Jabatan</label>
                    <div class="col-sm-9">
                        <input type="text" name="position" class="form-control" id="position" placeholder="Jabatan Kepala sekolah/guru/staff">
                    </div>
                </div>
            </div>

            <label for="school_name2" class="h00">Data Sekolah</label>
            <div id="sender">
                <div class="form-group row">
                    <label for="school_name2" class="col-sm-3 col-form-label">Nama Sekolah</label>
                    <div class="col-sm-9">
                        <input type="text" name="school_name" class="form-control" id="school_name2" placeholder="Nama sekolah / Instansi">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="school_accreditation" class="col-sm-3 col-form-label">Akreditasi</label>
                    <div class="col-sm-9">
                        <select name="school_accreditation" id="">
                            <option value="">-- Pilih Akreditasi --</option>
                            @foreach($accreditations as $a)
                            <option value="{{$a->id}}">{{ $a->accreditation }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="school_address" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" name="school_address" class="form-control" id="school_address" placeholder="Alamat sekolah">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="school_phone" class="col-sm-3 col-form-label">No. Telp</label>
                    <div class="col-sm-9">
                        <input type="phone" name="school_phone" class="form-control" id="school_phone" placeholder="No. Telp">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="operational_hour" class="col-sm-3 col-form-label">Jam Operasional</label>
                    <div class="col-sm-9">
                        <div id="hours">
                            @foreach (["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"] as $index => $day)
                            <x-time-toggler class="mb-2" :day="$day" :key=$day name="operational_hour[{{ strtolower($day) }}]" onclick="$('div#input-{{$day}}').toggleClass('d-none') && $('div#input-{{$day}} input#time').val('')" />
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="school_logo" class="col-sm-3 col-form-label">Logo Sekolah</label>
                    <div class="col-sm-9">
                        <input type="file" name="school_logo" class="form-control-file" id="school_logo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="school_photo" class="col-sm-3 col-form-label">Foto Sekolah</label>
                    <div class="col-sm-9">
                        <input type="file" name="school_photo[0]" class="form-control-file mb-1" id="school_photo">
                        <input type="file" name="school_photo[1]" class="form-control-file mb-1" id="school_photo">
                        <input type="file" name="school_photo[2]" class="form-control-file mb-1" id="school_photo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="school_description" class="col-sm-3 col-form-label">Deskripsi Sekolah</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="school_description" id="school_description" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="costs" class="col-sm-3 col-form-label">Biaya</label>
                    <div class="col-sm-9">
                        <label for="costs" class="col-sm-3 col-form-label">Biaya Semester Minimal</label>
                        <input type="text" name="costs[0]" class="form-control" id="cost" placeholder="Rp.0 - Rp.0 /">
                        <label for="costs" class="col-sm-3 col-form-label">Biaya Semester Maksimal</label>
                        <input type="text" name="costs[1]" class="form-control" id="cost" placeholder="Rp.0 - Rp.0 /">
                        <label for="costs" class="col-sm-3 col-form-label">Biaya Rata-rata Tahunan</label>
                        <input type="text" name="costs[2]" class="form-control" id="cost" placeholder="Rp.0 - Rp.0 /">
                        <label for="costs" class="col-sm-3 col-form-label">Biaya Rata-rata Keseluruhan</label>
                        <input type="text" name="costs[3]" class="form-control" id="cost" placeholder="Rp.0 - Rp.0 /">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="school_website" class="col-sm-3 col-form-label">Website sekolah</label>
                    <div class="col-sm-9">
                        <input type="text" name="school_website" class="form-control" id="school_website" placeholder="Website sekolah">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sosmed" class="col-sm-3 col-form-label">Sosmed / SNS</label>
                    <div class="col-sm-9">
                        <input type="text" name="socials[0]" class="form-control" id="sosmed" placeholder="Facebook">
                        <input type="text" name="socials[1]" class="form-control" id="sosmed" placeholder="Twitter">
                        <input type="text" name="socials[2]" class="form-control" id="sosmed" placeholder="Instagram">
                        <input type="text" name="socials[3]" class="form-control" id="sosmed" placeholder="WhatsApp">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="majors" class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-9">
                        <input type="text" name="majors" class="form-control" id="majors" placeholder="Jurusan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="registration_time" class="col-sm-3 col-form-label">Waktu pendaftaran</label>
                    <div class="col-sm-9">
                        <label for="registration_time" class="form-label">Waktu pendaftaran dimulai</label>
                        <input type="date" name="registration_time[0]" class="form-control" id="registration_time" placeholder="Waktu pendaftaran mulai">
                        <label for="registration_time" class="form-label">Waktu pendaftaran berakhir</label>
                        <input type="date" name="registration_time[1]" class="form-control" id="registration_time" placeholder="Waktu pendaftaran berakhir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="test_result" class="col-sm-3 col-form-label">Pengumuman hasil tes</label>
                    <div class="col-sm-9">
                        <input type="text" name="test_results" class="form-control" id="test_result" placeholder="Pengumuman hasil tes">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-secondary btn-lg btn-block">Kirim Data</button>
        </form>
    </x-modal>

    @include('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

            var detailLocation = [{{$detail->lattitude}},{{$detail->longtitude}}];

            mapboxgl.accessToken = 'pk.eyJ1IjoibWFoZW5kcmEtYXBwa2V5IiwiYSI6ImNrcG5wdXlrNDAxa2Eyb3BrZXJ6dHlxMjAifQ.hvt-tpvmdd3h-8bcobZqOw';
            var map = new mapboxgl.Map({
            container: 'map',
            center: detailLocation,
            zoom : 14,
            style: 'mapbox://styles/mapbox/streets-v11'
            });

            map.addControl(new mapboxgl.NavigationControl())

            var marker = new mapboxgl.Marker()
            .setLngLat(detailLocation)
            .addTo(map);

            $(document).ready(function() {
            $('#sender > div:nth-child(2) > div > div').hide()
            var showChar = 500;
            var ellipsestext = "...";
            var moretext = "Baca Selengkapnya";
            var lesstext = "Baca Lebih Sedikit";

            $('.more').each(function() {
                var content = $(this).html();

                if (content.length > showChar) {

                    var c = content.substr(0, showChar);
                    var h = content.substr(showChar, content.length - showChar);

                    var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                    $(this).html(html);
                }

            });

            $(".morelink").click(function() {
                if ($(this).hasClass("less")) {
                    $(this).removeClass("less");
                    $(this).html(moretext);
                } else {
                    $(this).addClass("less");
                    $(this).html(lesstext);
                }
                $(this).parent().prev().toggle();
                $(this).prev().toggle();
                return false;
            });
        });
    </script>
    @include('script')
</body>
