@extends('layout.second')

@section('title' , 'Jajan | Daftar')

@section('container')


<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-sm-6">
            <div class="img-dftr">
                <img src="/img/banner/gambar_lain/undraw_dreamer_gxxi.svg" alt="">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="daftar justify-content-center">
                <form action="" class="form-daftar">
                    <div class="form-group col-md-8">
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-md-8">
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection()