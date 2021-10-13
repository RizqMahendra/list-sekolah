<div class="entry-header clearfix" style="background-color: #4ed7a8;">
    <div class="container">
        <div class="entry-title-left">
            <div class="entry-title">
                <h1>Daftar Sekolah Bahasa Jepang di Indonesia</h1>
            </div>
        </div>
        <div class="entry-title-right">
        </div>
    </div>
</div>
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @forelse ($schools as $school)
                    <article class="blog_item">
                        <div class="blog_details">
                            <div class="info-kampus d-flex">
                                <img src="{{$school->school_logo === null ? asset('public/images.jpg') : asset('/storage/'. $school->school_logo)}}">
                                <div>
                                    <div class="d-flex title">
                                        <a href="/detail/{{ $school->name }}">
                                            <h4>{{$school->name}}</h4>
                                        </a>
                                    </div>
                                    <span class="desc"><b>Akreditasi :</b> {{$school->accreditation->accreditation}}</span><br>
                                    <span class="desc"><b>Alamat :</b> {{$school->address}}</span><br>
                                    <span class="desc"><b>Kategori :</b> {{$school->category_school->category}}</span><br>
                                    <span class="desc"><b>Status :</b> {{$school->school_status->status}}</span><br>
                                    <span class="desc"><b>Sosial Media : </b></span>
                                    <div class="sns-icon-list">
                                        <span><a href="{{$school->socials[0]}}"><img src="{{ asset('asset/fbicon.png') }}"></a>
                                            <span><a href="{{$school->socials[1]}}"><img src="{{ asset('asset/igicon.png') }}"></a>
                                                <span><a href="{{$school->socials[2]}}"><img src="{{ asset('asset/twicon.png') }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    @empty
                    <article class="blog_item">
                        <h1>Data yang dicari tidak ada!</h1>
                    </article>
                    @endforelse
                    <div class="d-flex justify-content-center">
                        {!! $schools->links() !!}
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
