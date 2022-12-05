@extends('layouts.main')

@section('konten')

<div class="banner-image3 w-100">
    <div class="container-xl header-image">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-6">
                <h1>Show Berita</h1>
            </div>
        </div>
    </div>
</div>

<div class="content-overlay py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="d-inline"><img src="{{ asset('images/berita/' . $data1->image)  }}" alt=""
                                class="img-fluid d-inline" style="Height:auto;"> 
                            <h1><b> {{$berita->title}} </b></h1>
                        </div>
                    </div>
                    <br>
                    {!! $berita->body !!}
                </div>
            </div>
        </div>
    </div>
</div>



@endsection