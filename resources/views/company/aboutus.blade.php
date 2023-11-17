@extends('partials.navbarcompro')

@section('content')
<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title">{{$aboutUs->Judul}}</h2>
                <p>{{$aboutUs->Deskripsi}}</p>

                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            @foreach ($about as $item)
                                <h3>{{$item->JudulDetail}}</h3>
                                <p>{{$item->DeskripsiDetail}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="img-wrap">
                    {{-- <img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid"> --}}
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Why Choose Us Section -->

<!-- Start Team Section -->
<div class="untree_co-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center">
                <h2 class="section-title">Our Team</h2>
            </div>
        </div>

        <div class="row">
            <!-- Start Column 1 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="images/person_1.jpg" class="img-fluid mb-5">
                <h3 clas><a href="#"><span class=""></span>Hadyan Yuma E</a></h3>
                    <span class="d-block position mb-4">Ketua Honda Scoopy Indonesia</span>
                    <p>
                        Hadyan yang telah mendedikasikan dirinya untuk menginspirasi perubahan melalui kepemimpinan yang kuat dalam dunia organisasi. Dilahirkan di kota kecil di Jawa Barat, Hadyan menemukan hasratnya untuk berdampak pada usia yang muda dan kecintaan nya di otomotif.
                    </p>
                    <p class="mb-0"><a href="#" class="more dark"><span class="icon-arrow_forward"></span></a></p>                
            </div> 
            <!-- End Column 1 -->

            <!-- Start Column 1 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="images/person_4.jpg" class="img-fluid mb-5">
                <h3 clas><a href="#"><span class=""></span>Annisa</a></h3>
                    <span class="d-block position mb-4">Wakil Ketua Honda Scoopy Indonesia</span>
                    <p>Annisa adalah seorang yang bersemangat dalam menggerakkan perubahan melalui pengorganisasian dan kepemimpinan yang kuat. Dilahirkan pada tahun 1985 di Kalimantan Barat, Annisa sejak awal menunjukkan minatnya pada kepemimpinan dan pengembangan komunitas.</p>
                    <p class="mb-0"><a href="#" class="more dark"><span class="icon-arrow_forward"></span></a></p>                
            </div> 
            <!-- End Column 1 -->

            <!-- Start Column 1 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="https://akcdn.detik.net.id/visual/2021/09/23/song-hye-kyoinstagramcomkyo1122_11.jpeg?w=480&q=90" class="img-fluid mb-5">
                <h3 clas><a href="#"><span class=""></span>Sarah</a></h3>
                    <span class="d-block position mb-4">Sekretaris Honda Scoopy Indonesia</span>
                    <p>Sebagai Sekretaris Honda Scoopy Indonesia, Sarah bertanggung jawab dalam menyelenggarakan pertemuan, mempersiapkan agenda rapat, dan mendukung kegiatan administratif sehari-hari dari tim manajemen utama. Selama sepuluh tahun pengabdiannya, dia telah menjadi tulang punggung dari operasi administratif perusahaan, memastikan kelancaran berbagai proses dan memastikan komunikasi yang efektif antara berbagai departemen.</p>
                    <p class="mb-0"><a href="#" class="more dark"><span class="icon-arrow_forward"></span></a></p>                
            </div> 
            <!-- End Column 1 -->

            <!-- Start Column 1 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="images/person_2.jpg" class="img-fluid mb-5">
                <h3 clas><a href="#"><span class=""></span>Dimas</a></h3>
                    <span class="d-block position mb-4">Bendahara</span>
                    <p>Sebagai seorang yang teliti dan berorientasi pada detail, Budi memulai perjalanannya di Honda Scoopy Indonesia sebagai seorang bendahara. Perannya sebagai bendahara tidak hanya tentang mengelola keuangan, tetapi juga menjadi tulang punggung dalam menyusun dan memelihara struktur keuangan perusahaan.</p>
                    <p class="mb-0"><a href="#" class="more dark"><span class="icon-arrow_forward"></span></a></p>                
            </div> 
            <!-- End Column 1 -->
        </div>
    </div>
</div>
<!-- End Team Section -->


@endsection
