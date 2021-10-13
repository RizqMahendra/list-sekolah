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
                                <h3 class="mb-0">Edit data</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('admin.edit_process') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$data->id}}" name="id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Nama Sekolah</label>
                            <input type="text" class="form-control" value="{{$data->name}}" name="nama_sekolah" placeholder="Nama Sekolah">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" name="deskripsi_sekolah" rows="15" placeholder="Deskripsi">{{$data->description}}
                            </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Akreditasi</label><br>
                            <select name="akreditasi" class="form-control custom-select mb-3">
                            @foreach($akreditasi as $a)
                            <option value="{{ $a->id }}"
                                @if($a->id === $data->accreditation->id)
                                selected="selected"
                                @endif
                                >{{ $a->accreditation }}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Status</label><br>
                            <select name="status" class="form-control custom-select mb-3">
                            @foreach($status as $a)
                            <option value="{{ $a->id }}" @if($a-> id === $data->school_status->id)
                            selected
                            @endif >{{ $a->status }}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label>Kategori</label><br>
                            <select name="kategori" class="form-control custom-select mb-3">
                            @foreach($kategori as $a)
                            <option value="{{ $a->id }}" @if($a-> id === $data->category_school->id)
                            selected @endif >
                            {{ $a->category }}</option>
                             @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Provinsi/Daerah</label>
                            <select name="daerah_sekolah" class="form-control custom-select mb-3">
                            @foreach($daerah_sekolah as $a)
                            <option value="{{ $a->id }}"
                             @if ($a->id === $data->province->id)
                            selected
                            @endif>{{ $a->nama }}</option>
                            @endforeach
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Logo</label>
                            <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" value="{{$data->school_logo}}" name="school_logo" placeholder="Logo">
                            <label class="custom-file-label" for="exampleInputFile">{{$data->school_logo}}</label>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Foto 1</label><br>
                            <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="school_photo[0]" placeholder="Foto 1">
                            <label class="custom-file-label" for="exampleInputFile"></label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Foto 2</label>
                            <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="school_photo[1]" placeholder="Foto 2">
                            <label class="custom-file-label" for="exampleInputFile"></label>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Foto 3</label><br>
                            <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="school_photo[2]" placeholder="Foto 3">
                            <label class="custom-file-label" for="exampleInputFile"></label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="address" rows="15" placeholder="Alamat">{{$data->address}}
                            </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label>No. Telp</label>
                        <input type="text" class="form-control" value="{{$data->phone}}" name="no_telp" placeholder="No Telp">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Alamat Facebook</label>
                            <input type="text" class="form-control" value="{{$data->socials[0]}}" name="socials[0]" placeholder="Link Facebook">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label>Alamat Instagram</label>
                        <input type="text" class="form-control" value="{{$data->socials[2]}}" name="socials[1]" placeholder="Link Instagram">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Alamat Twitter</label>
                            <input type="text" class="form-control" value="{{$data->socials[1]}}" name="socials[2]" placeholder="Link Twitter">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Alamat Website</label>
                        <input type="text" class="form-control" value="{{$data->website}}" name="website" placeholder="Alamat Website">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control" value="{{$data->majors}}" name="majors" placeholder="Jurusan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="operational_hour" class="col-sm-3 col-form-label font-weight-bold">Jam Operasional</label>
                                <div class="col-sm-9">
                                    <div id="hours">
                                    @foreach (["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"] as $index => $day)
                                    <x-time-toggler class="mb-2" :day="$day" :key=$day name="operational_hour[{{ strtolower($day) }}]" onclick="$('div#input-{{$day}}').toggleClass('d-none') && $('div#input-{{$day}} input#time').val('')" />
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="operational_hour" class="font-weight-bold">Lokasi</label>
                                <div id='map' style='width: 400px; height: 300px;'></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" id="long" class="form-control" value="" name="lattitude" placeholder="Lattitude" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="lat" class="form-control" value="" name="longtitude" placeholder="Longtitude" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="costs" class="font-weight-bold">Biaya</label>
                                <div class="col-sm-9">
                                    <label>Biaya Semester Minimal</label>
                                    <input type="text" name="costs[0]" value="{{$data->costs[0]}}" class="form-control" id="cost" placeholder="Rp.0 - Rp.0 /">
                                    <label>Biaya Semester Maksimal</label>
                                    <input type="text" name="costs[1]" value="{{$data->costs[1]}}" class="form-control" id="cost" placeholder="Rp.0 - Rp.0 /">
                                    <label>Biaya Rata-rata Tahunan</label>
                                    <input type="text" name="costs[2]" value="{{$data->costs[2]}}" class="form-control" id="cost" placeholder="Rp.0 - Rp.0 /">
                                    <label>Biaya Rata-rata Keseluruhan</label>
                                    <input type="text" name="costs[3]" value="{{$data->costs[3]}}" class="form-control" id="cost" placeholder="Rp.0 - Rp.0 /">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="costs" class="font-weight-bold">Waktu Pendaftaran</label>
                                <div class="col-sm-9">
                                    <label>Tanggal Mulai</label>
                                    <input type="date" name="registration_time[0]" value="{{$data->costs[0]}}" class="form-control datepicker" id="registration_time" placeholder="">
                                    <label>Tanggal Berakhir</label>
                                    <input type="date" name="registration_time[1]" value="{{$data->costs[1]}}" class="form-control datepicker" id="registration_time" placeholder="">
                                </div>
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
    <script>

    const defaultLocation = [115.1276067,-8.4888678]

    mapboxgl.accessToken = 'pk.eyJ1IjoibWFoZW5kcmEtYXBwa2V5IiwiYSI6ImNrcG5wdXlrNDAxa2Eyb3BrZXJ6dHlxMjAifQ.hvt-tpvmdd3h-8bcobZqOw';
    var map = new mapboxgl.Map({
    container: 'map',
    center: defaultLocation,
    zoom : 10,
    style: 'mapbox://styles/mapbox/streets-v11'
    });

    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        placeholder: 'Lokasi Kampus',
        marker: {color: 'orange'},
        mapboxgl: mapboxgl
        });

        map.addControl(geocoder);
        map.addControl(new mapboxgl.NavigationControl())

        this.marker = new mapboxgl.Marker();
        this.map.on('click', this.add_marker.bind(this));

        function add_marker (event) {
        var coordinates = event.lngLat;

        document.getElementById("lat").value = event.lngLat.lat;
        document.getElementById("long").value = event.lngLat.lng;
        this.marker.setLngLat(coordinates).addTo(this.map);
        }

        map.on('click', add_marker);

// Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
</script>
@endpush




