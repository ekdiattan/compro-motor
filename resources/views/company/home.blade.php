@extends('partials.navbarcompro')

@section('content')
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>{{$home->Name}} <span clsas="d-block">Indonesia</span></h1>
                    <p class="mb-4">{{$home->Slogan}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Testimonial Slider -->
<div class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">Kata Pengantar</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">
                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">
                                    <div class="testimonial-block text-center">
                                        <blockquote class="mb-5">
                                            <p>&ldquo;{{$home->KataPengantar}}&rdquo;</p>
                                        </blockquote>
                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src=""Maria Jonesclass="img-fluid">
                                            </div>
                                                <h3 class="font-weight-bold">{{$home->NamaOrang}}</h3>
                                                <span class="position d-block mb-3">{{$home->Jabatan}}</span>
                        </div>
                </div>
            </div>
        </div>
    <!-- END item -->
@endsection
