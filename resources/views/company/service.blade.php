@extends('partials.navbarcompro')

@section('content')
<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
    <div class="container">
        <div class="row my-5">
            @foreach ($service as $item )
            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">   
                    <h3>{{$item->Judul}}</h3>
                    <p>{{$item->Deskripsi}}</p>
                </div>
            </div>
            @endforeach
    </div>
</div>
<!-- End Why Choose Us Section -->
@endsection