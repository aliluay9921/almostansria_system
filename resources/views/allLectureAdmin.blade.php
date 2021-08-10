@extends('layouts.adminlayout')

@section('admincont')
    <div class="back">
        <a href="{{ route('owner') }}" class="btn btn-info"> <i class="fas fa-arrow-left"></i> رجوع</a>
    </div>
    <div class="container mt-5">
        <div class="row">
            @foreach ($infolecture as $lecture)
                <div class="col-md-3 m-3  ">

                    <div class="card rounded " style="width: 18rem; height:400px">
                        <img class="card-img-top" src='/image/{{ $lecture->image }}' width="100px" height="150px"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $lecture->title }}</h5>
                            <p class="card-text">{{ $lecture->desc }}</p>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('download', $lecture->code) }}"
                                class=" btn btn-primary btn-lg btn-block ">تحميل
                                الكود</a>
                        </div>
                    </div>
                </div>




            @endforeach
        </div>
    </div>

@endsection
