@extends('layouts.userlayout')

@section('usercontent')


    <div class="container">
        <div class="row">
            @foreach ($get as $program)

                <div class="col-md-4 ">

                    <div class="card d-flex justify-content-end  flex-direction-column" style="width: 18rem; height:400px;">
                        <img class="card-img-top" src="/image_program/{{ $program->image }}" height="200px"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $program->title }}</h5>
                        </div>

                        <div class="card-body  ">
                            <a href="{{ $program->link }}" class="btn btn-info btn-block">تحميل البرنامج</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




@endsection
