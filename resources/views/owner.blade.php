@extends('layouts.adminlayout')

@section('admincont')


    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="https://uomustansiriyah.edu.iq/" class="brand-link">
            <img src="/image/Logoo2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: 0.8" />
            <span class="brand-text font-weight-light">الجامعة المستنصرية</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/user_image/{{ auth()->user()->image }}" width="50px" height="50px"
                        class="brand-image img-circle elevation-3 " />
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ auth()->user()->name }}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                        aria-label="Search" />
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                الصفخة الرئيسية
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                قسم الاضافة
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if (auth()->user()->role === 1)
                                <li class="nav-item">
                                    <a type="button" class="nav-link" data-toggle="modal" data-target="#Material">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>اضافة مادة </p>
                                    </a>
                                </li>
                            @endif
                            @if (auth()->user()->role === 2)
                                <li class="nav-item">
                                    <a type="button" class="nav-link" data-toggle="modal" data-target="#lecture">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>اضافة محاضرة</p>
                                    </a>
                                </li>
                            @endif


                            @if (auth()->user()->role === 1)
                                <li class="nav-item">
                                    <a type="button" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>اضافة تدريسي</p>
                                    </a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <a type="button" class="nav-link" data-toggle="modal" data-target="#program">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>اضافة برنامج</p>
                                </a>
                            </li>


                            @if (auth()->user()->role === 2)
                                <li class="nav-item">
                                    <a type="button" class="nav-link" data-toggle="modal" data-target="#addrefrence">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>اضافة مرجع</p>
                                    </a>
                                </li>
                            @endif


                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('allProgramAdmin') }}" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                كل البرامج
                            </p>
                        </a>
                    </li>
                    @if (auth()->user()->role === 1)
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <p>
                                    المواد الدراسية
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @foreach ($stages as $stage)
                                    <li class="nav-item">
                                        <a href="{{ route('getmatiralAdmin', ['stage_id' => $stage->id, 'branch_id' => -1]) }}"
                                            type=" button" class="nav-link">

                                            <i class="far fa-circle nav-icon"></i>
                                            <p>{{ $stage->name }} </p>
                                        </a>
                                    </li>
                                @endforeach


                            </ul>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 document.getElementById('logout-form').submit();">
                            تسجيل خروج
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>




                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <!-- small box -->
                    @if (auth()->user()->id === 1)
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $material->count() }}</h3>

                                    <p>المواد الدراسية</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endif
                    @if (auth()->user()->role === 2)
                        <div class="col-lg-6 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ auth()->user()->materials()->count() }}</h3>
                                    <p>المواد الدراسية</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endif


                    <!-- ./col -->
                    @if (auth()->user()->role === 1)
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $countprograms->count() }}<sup style="font-size: 20px"></sup></h3>

                                    <p>البرامج </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endif
                    @if (auth()->user()->role === 2)
                        <div class="col-lg-6 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3 id="lectureCount">{{ auth()->user()->lecturs()->count() }}
                                    </h3>

                                    <p>المحاضرات </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endif
                    <!-- ./col -->
                    @if (auth()->user()->role === 1)
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">

                                    <h3 id="userscount">{{ $countusers->count() }}</h3>


                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endif
                    <!-- ./col -->
                    @if (auth()->user()->role === 1)
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $lectures->count() }}</h3>

                                    <p>عدد المحاضرات الكلي</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    @endif
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Button trigger modal -->



        <!-- اضافة تدريسي -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافة تدريسي</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="alert alert-success text-center" id="successmsg" role="alert" style="display:none">
                            <h3> تم الحفظ بنجاح</h3>
                        </div>
                        <form id="formuser" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="exampleFormControlInput1">fullName</label>
                                <input type="text" name="fullName" id="fullName" class="form-control"
                                    placeholder="fullName">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">Password</label>
                                <input type="Password" name="password" id="password" class="form-control"
                                    placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">image</label>
                                <input type="file" name="image" id="image" class="form-control-file"
                                    id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">المرحلة الدراسية</label>
                                <select name="stage_id[]" class="form-control" id="exampleFormControlSelect1" multiple>
                                    <option value="">اختر المرحلة</option>
                                    @foreach ($stages as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        {{-- تعديل تدريسي --}}
        <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تعديل معلومات المدرس</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="alert alert-success text-center" id="successmsg" role="alert" style="display:none">
                            <h3> تم الحفظ بنجاح</h3>
                        </div>
                        <form id="editFormUser" method="PUT" action="{{ route('updateUser') }}">
                            @csrf
                            {{ method_field('PUT') }}
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">fullName</label>
                                <input type="text" name="fullName" id="fullName" class="form-control"
                                    placeholder="fullName">
                            </div>
                            <div class="form-group">
                                <label>image</label>
                                <input type="file" name="photo" id="photo" class="form-control-file">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>


                            <div class="form-group">
                                <label for="exampleFormControlInput1">phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="name@example.com">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">المرحلة الدراسية</label>
                                <select name="stage_id[]" id="stage_id" class="form-control" multiple>
                                    <option>اختر المرحلة</option>
                                    @foreach ($stages as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>




        {{-- اضافة مادة --}}

        <div class="modal " id="Material" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافة مادة</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="alert alert-success text-center" id="msgsucc" role="alert" style="display:none">
                            <h3> تم الحفظ بنجاح</h3>
                        </div>
                        <form id="formmaterial" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">اسم المادة </label>
                                <input type="text" name="title" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">وصف</label>
                                <textarea class="form-control" name="desc" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">اختر تدريسي</label>
                                <select name="user_id" class="form-control" id="exampleFormControlSelect1">
                                    <option value="">اختر تدريسي</option>
                                    @foreach ($countusers as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>المرحلة الدراسية</label>
                                <select name="stage_id" class="form-control" id="stageMatiral">
                                    <option>اختر المرحلة</option>
                                    @foreach ($stages as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" id="branchMaterial" style="display:none">
                                <label for="exampleFormControlSelect1">المرحلة الدراسية</label>
                                <select name="branch_id" class="form-control">
                                    <option value="">اختر الفرع</option>
                                    @foreach ($branch as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">البرنامج المخصص</label>
                                <select name="program_id" class="form-control" id="exampleFormControlSelect1">
                                    <option>اختر برنامج</option>
                                    @foreach ($countprograms as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">اضافة مادة</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        {{-- اضافة برنامج --}}


        <div class="modal fade" id="program" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافة البرنامج</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="alert alert-success text-center" id="msgprog" role="alert" style="display:none">
                            <h3> تم الحفظ بنجاح</h3>
                        </div>
                        <form id="formprogram" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">اسم البرنامج </label>
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">رابط التحميل </label>
                                <input type="text" name="link" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlFile1">صورة البرنامج</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">اضافة برنامج</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        {{-- اضافة محاضرة --}}



        <div class="modal fade" id="lecture" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافة محاضرة</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" id="errormsg" style="display:none"></div>
                        <div class="alert alert-success text-center" id="successmsglec" role="alert" style="display:none">
                            <h3> تم الحفظ بنجاح </h3>
                        </div>
                        <form id="fromlecture" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">عنوان المحاضرة </label>
                                <input type="text" id="title" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">رابط المحاضرة </label>
                                <input type="text" id="link" name="link" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">الوصف </label>
                                <input type="text" id="desc" name="desc" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">الكود المحاضرة</label>
                                <input type="file" id="file" name="file" class="form-control-file"
                                    id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">صورة تعريفية</label>
                                <input type="file" id="image" name="image" class="form-control-file"
                                    id="exampleFormControlFile1">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">المادة</label>
                                <select name="material_id" id="material_id" class="form-control"
                                    id="exampleFormControlSelect1">
                                    <option value="">اختر مادة </option>
                                    @foreach ($material as $item)
                                        @if (auth()->user()->id == $item->user_id)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endif

                                    @endforeach
                                </select>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">اضافة محاضرة</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        {{-- اضافة مرجع --}}

        <div class="modal fade" id="addrefrence" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافة مرجع </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="alert alert-success text-center" id="msgsucc" role="alert" style="display:none">
                            <h3> تم الحفظ بنجاح</h3>
                        </div>
                        <form id="form_ref">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">عنوان المرجع </label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">رابط المرجع </label>
                                <input type="text" name="link" id="link" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">المادة</label>
                                <select name="material_id" id="material_id" class="form-control"
                                    id="exampleFormControlSelect1" required>
                                    <option value="">اختر مادة</option>
                                    @foreach ($material as $item)
                                        @if (auth()->user()->id == $item->user_id)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">اضافة مرجع</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>







        {{-- table  show --}}
        @if (auth()->user()->role === 1)
            <div class="container-fluid m-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="alert alert-danger text-center" id="deletemsg" role="alert" style="display:none">
                            <h3> تم الحذف بنجاح</h3>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">التدريسين </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">التسلسل</th>
                                            <th scope="col">اسم التدريسي</th>
                                            <th scope="col">البريد الالكتروني</th>
                                            <th scope="col">الصورة</th>
                                            <th scope="col">المرحلة </th>
                                            <th scope="col">رقم الهاتف </th>
                                            <th scope="col">وقت الاضافة </th>
                                            <th scope="col">عمليات </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablebody">
                                        <?php $i = 1; ?>
                                        @foreach ($countusers as $doctor)
                                            <tr class="offerRow{{ $doctor->id }}">
                                                <th> {{ $i++ }}</th>
                                                <td>{{ $doctor->name }}</td>
                                                <td>{{ $doctor->email }}</td>
                                                <td> <img class="brand-image img-circle elevation-3"
                                                        src="/user_image/{{ $doctor->image }}" width="50px"
                                                        height="50px"></td>
                                                <td>
                                                    @foreach ($doctor->stages as $stage)
                                                        {{ $stage->name }} <br>
                                                    @endforeach
                                                </td>
                                                <td>{{ $doctor->phone }}</td>
                                                <td>{{ $doctor->created_at->format('d/m/Y') }}</td>
                                                <td>
                                                    <a type="button" href="" data-name="{{ $doctor->name }}"
                                                        data-email="{{ $doctor->email }}"
                                                        data-stages="{{ $doctor->stages }}"
                                                        data-phone="{{ $doctor->phone }}" data-id="{{ $doctor->id }}"
                                                        class="btn btn-success" data-toggle="modal"
                                                        data-target="#editUser">تعديل</a>
                                                    <a href="#" offer_id="{{ $doctor->id }}"
                                                        class=" delete_btn btn btn-danger">حذف</a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (auth()->user()->role === 2)
            <div class="container-fluid m-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="alert alert-danger text-center" id="deletemsg" role="alert" style="display:none">
                            <h3> تم الحذف بنجاح</h3>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">التدريسين </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">التسلسل</th>
                                            <th scope="col">عنوان المحاضرة</th>
                                            <th scope="col">وصف المحاضرة</th>
                                            <th scope="col">المادة</th>
                                            <th scope="col">الصورة</th>
                                            <th scope="col">الكود </th>
                                            <th scope="col">تأريخ الاضافة </th>
                                            <th scope="col">عمليات </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablebody">
                                        <?php $i = 1; ?>
                                        @foreach ($lectures as $lecture)
                                            @if (auth()->user()->id == $lecture->user_id)

                                                <tr class="offerRow{{ $lecture->id }}">
                                                    <th> {{ $i++ }}</th>
                                                    <td>{{ $lecture->title }}</td>
                                                    <td class="w-25">{{ $lecture->desc }}</td>
                                                    <td>{{ $lecture->materials->title }}</td>

                                                    <td> <img class="brand-image img-circle elevation-3"
                                                            src="/image/{{ $lecture->image }}" width="50px"
                                                            height="50px">
                                                    </td>

                                                    <td>{{ $lecture->code }}</td>
                                                    <td>{{ $lecture->created_at->format('d/m/Y') }}
                                                    </td>
                                                    <td>
                                                        <a href=" #" class="btn btn-success">تعديل
                                                        </a>
                                                        <a href="#" offer_id="{{ $lecture->id }}"
                                                            class=" delete_lecture btn btn-danger"> حذف

                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif

                                        @endforeach


                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>



        @endif
    @endsection
    @section('script')





        <script type="text/javascript">
            $(document).ready(function() {
                $('#form_ref').on('submit', function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "{{ route('add.reference') }}",
                        type: 'POST',
                        data: $('#form_ref').serialize(),

                        success: function(response) {
                            if (response.errors) {
                                $('.alert-danger').html('');
                                $.each(response.errors, function(key, value) {
                                    $('.alert-danger').show();
                                    $('.alert-danger').append('<li>' + value + '</li>');
                                });
                            } else {
                                $('.alert-danger').hide();

                                $('#msgsucc').show();
                                setTimeout(function() {
                                    $('#msgsucc').hide();
                                }, 2000);
                                setTimeout(function() {
                                    $('#addrefrence').modal('hide');
                                }, 2000);
                                $("#name").val("");
                                $("#link").val("");
                                $("#material_id").val("اختر مادة  ");
                            }
                        },
                    });
                });
            });

        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#fromlecture').on('submit', function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "{{ route('add.lecture') }}",
                        type: 'POST',
                        //  enctype: 'multipart/form-data',
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function(response) {
                            if (response.errors) {
                                $('.alert-danger').html('');
                                $.each(response.errors, function(key, value) {
                                    $('.alert-danger').show();
                                    $('.alert-danger').append('<li>' + value + '</li>');
                                    setTimeout(function() {
                                        $('.alert-danger').hide();
                                    }, 2000)
                                });
                            } else {
                                $('.alert-danger').hide();

                                setTimeout(function() {
                                    $('#lecture').modal('hide');
                                }, 2000)
                                $('#successmsglec').show();
                                setTimeout(function() {
                                    $('#successmsg').hide();
                                }, 2000)
                                var tablerow = '';
                                $('#tablebody').innerHTML;
                                tablerow =
                                    '<tr class="offerRow' + response.data.id +
                                    ' "><td> New Lecture </td><td>' +
                                    response.data.title + '</td><td>' + response.data.desc +
                                    ' </td><td>' + response.material.title +
                                    ' </td><td><img width="50px" height="50px"   class="brand-image img-circle elevation-3" src="/image/' +
                                    response.data.image + '"/></td><td>' +
                                    response.data.code + '</td><td>' + response.data
                                    .created_at +
                                    '</td> <td ><a href="" class="btn btn-success">تعديل</a> <a href="" offer_id=" ' +
                                    response.data.id +
                                    ' "  class="delete_lecture btn btn-danger">حذف</a> </td> </tr>';
                                $('#tablebody').append(tablerow);

                                var lectureCount = document.getElementById('lectureCount')
                                    .innerHTML;
                                $('#lectureCount').text(++lectureCount);

                                $("#title").val("");
                                $("#link").val("");
                                $("#desc").val("");
                                $("#file").val("");
                                $("#material_id").val("اختر مادة  ");
                            }
                        },
                    });


                });
            });

        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#formprogram').on('submit', function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "{{ route('add.program') }}",
                        type: 'POST',
                        //  enctype: 'multipart/form-data',
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function(response) {
                            if (response.errors) {
                                $('.alert-danger').html('');
                                $.each(response.errors, function(key, value) {
                                    $('.alert-danger').show();
                                    $('.alert-danger').append('<li>' + value + '</li>');
                                });
                            } else {
                                $('.alert-danger').hide();
                                setTimeout(function() {
                                    $('#program').modal('hide');
                                }, 2000)
                                $('#msgprog').show();
                                setTimeout(function() {
                                    $('#msgprog').hide();
                                }, 2000)
                                $("#title").val("");
                                $("#link").val("");
                                $("#image").val("");

                            }
                        },
                    });


                });
            });

        </script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#formmaterial').on('submit', function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "{{ route('addMaterial') }}",
                        type: 'POST',
                        data: $('#formmaterial').serialize(),

                        success: function(response) {
                            if (response.errors) {
                                $('.alert-danger').html('');
                                $.each(response.errors, function(key, value) {
                                    $('.alert-danger').show();
                                    $('.alert-danger').append('<li>' + value + '</li>');
                                });
                            } else {
                                $('.alert-danger').hide();

                                $('#msgsucc').show();
                                setTimeout(function() {
                                    $('#msgsucc').hide();
                                }, 2000);
                                setTimeout(function() {
                                    $('#Material').modal('hide');
                                }, 2000);
                                $("#title").val("");
                                $("#desc").val("");
                                $("#material_id").val("اختر مادة  ");
                                $("#user_id").val("اختر تدريسي  ");
                                $("#stage_id").val("اختر مرحلة دراسية  ");
                            }
                        },
                    });
                });
            });

        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#formuser').on('submit', function(e) {
                    e.preventDefault();
                    $.ajax({
                        url: "{{ route('adduser') }}",
                        type: 'POST',
                        //  enctype: 'multipart/form-data',
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        cache: false,
                        success: function(response) {
                            console.log(response.data)
                            if (response.errors) {
                                $('.alert-danger').html('');
                                $.each(response.errors, function(key, value) {
                                    $('.alert-danger').show();
                                    $('.alert-danger').append('<li>' + value + '</li>');
                                });
                            } else {
                                $('.alert-danger').hide();
                                setTimeout(function() {
                                    $('#exampleModal').modal('hide');
                                }, 2000)
                                $('#successmsg').show();
                                setTimeout(function() {
                                    $('#successmsg').hide();
                                }, 2000)
                                var tablerow = '';
                                $('#tablebody').innerHTML;
                                var date = new Date(response.data.created_at);


                                tablerow =
                                    '<tr class="offerRow' + response.data.id +
                                    ' "><td> New Doctor </td><td>' +
                                    response.data.name + '</td><td>' + response.data.email +
                                    '</td><td><img width="50px" height="50px"  class="brand-image img-circle elevation-3" src="/user_image/' +
                                    response.data.image + '"/></td><td>' + response.stage +
                                    '</td><td>' +
                                    response.data.phone + '</td><td>' + date.getDate() +
                                    '</td> <td ><a href="" class="btn btn-success ">تعديل</a> <a href="" offer_id=" ' +
                                    response.data.id +
                                    ' "  class="delete_btn btn btn-danger ">حذف</a> </td> </tr>';
                                $('#tablebody').append(tablerow);

                                var countuser = document.getElementById('userscount').innerHTML;
                                $('#userscount').text(++countuser);
                                $("#fullName").val("");
                                $("#email").val("");
                                $("#password").val("");
                                $("#phone").val("");
                                $('#branch_id').val('')
                                $('#stage_id').val('')
                                $("#image").val("");

                            }
                        },
                    });


                });
            });
            //

        </script>


        <!-- Bootstrap 4 -->
        {{-- <script src="plugins/jquery/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
        <!-- DataTables  & Plugins -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="plugins/jszip/jszip.min.js"></script>
        <script src="plugins/pdfmake/pdfmake.min.js"></script>
        <script src="plugins/pdfmake/vfs_fonts.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["excel", "pdf", "print"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });

        </script>
        <script>
            $(document).on('click', '.delete_btn', function(e) {
                e.preventDefault();
                var offer_id = $(this).attr('offer_id');
                var x = window.confirm('هل انت متأكد');
                if (x == true) {
                    $.ajax({
                        type: 'delete',
                        url: "{{ route('delete_user') }}",
                        data: {
                            '_token': "{{ csrf_token() }}",
                            'id': offer_id
                        },
                        success: function(data) {
                            if (data.status == true) {
                                $('#deletemsg').show();
                                setTimeout(function() {
                                    $('#deletemsg').hide();
                                }, 2000)
                                var countuser = document.getElementById('userscount').innerHTML;
                                $('#userscount').text(--countuser);
                            }
                            $('.offerRow' + data.id).remove();

                        },
                        error: function(reject) {}
                    });
                } else {
                    return false;
                }
            });

        </script>
        <script>
            $(document).on('click', '.delete_lecture', function(e) {
                e.preventDefault();
                var offer_id = $(this).attr('offer_id');
                var x = window.confirm('هل انت متأكد');
                if (x == true) {
                    $.ajax({
                        type: 'delete',
                        url: "{{ route('deletelecture') }}",
                        data: {
                            '_token': "{{ csrf_token() }}",
                            'id': offer_id
                        },
                        success: function(data) {
                            if (data.status == true) {
                                $('#deletemsg').show();
                                setTimeout(function() {
                                    $('#deletemsg').hide();
                                }, 2000)

                            }
                            $('.offerRow' + data.id).remove();
                            var lectureCount = document.getElementById('lectureCount')
                                .innerHTML;
                            console.log(lectureCount);
                            $('#lectureCount').text(--lectureCount);

                        },
                        error: function(reject) {}
                    });
                } else {
                    return false;
                }
            });

        </script>
        <script>
            $(document).ready(function() {
                $('#stageMatiral').on('click', function() {
                    if (this.value == '3') {
                        $('#branchMaterial').show();
                    } else if (this.value == '4') {
                        $('#branchMaterial').show();
                    } else {
                        $('#branchMaterial').hide();

                    }
                });

            });

        </script>


        {{-- #####################################  EDIT ############################################# --}}

        <script>
            $('#editUser').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var id = button.data('id');
                var fullName = button.data('name');
                var email = button.data('email');
                var phone = button.data('phone');
                var stages = button.data('stages');
                var modal = $(this)
                modal.find('.modal-body  #id').val(id)
                modal.find('.modal-body  #fullName').val(fullName)
                modal.find('.modal-body  #email').val(email)
                modal.find('.modal-body  #phone').val(phone)
                modal.find('.modal-body  #stage_id').val(stages)
            });

        </script>

    @endsection
