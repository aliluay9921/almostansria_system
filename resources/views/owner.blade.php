@extends('layouts.adminlayout')

@section('admincont')


<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img
        src="dist/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: 0.8"
      />
      <span class="brand-text font-weight-light">AdminLTE 3</span>


    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img
            src="dist/img/user2-160x160.jpg"
            class="img-circle elevation-2"
            alt="User Image"
          />
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>


        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input
            class="form-control form-control-sidebar"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
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
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
                @if (auth()->user()->role === 1)
              <li class="nav-item">
                <a type="button" class="nav-link"  data-toggle="modal" data-target="#Material">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة مادة </p>
                </a>
              </li>
              @endif
              @if (auth()->user()->role === 2)
              <li class="nav-item">
                <a type="button" class="nav-link"  data-toggle="modal" data-target="#lecture" >
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة محاضرة</p>
                </a>
              </li>
              @endif


              @if (auth()->user()->role === 1)
               <li class="nav-item">
                <a type="button" class="nav-link"  data-toggle="modal" data-target="#exampleModal">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة تدريسي</p>
                </a>
              </li>
              @endif

              <li class="nav-item">
                <a type="button" class="nav-link"  data-toggle="modal" data-target="#program">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة برنامج</p>
                </a>
              </li>

              @if (auth()->user()->role === 2)
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>اضافة مرجع</p>
                </a>
              </li>
              @endif


            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                قسم التعديل
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>تعديل المواد</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>تعديل المحاضرات </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>تعديل البرامج</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>تعديل الحساب</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                عرض البرامج

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer"
                >More info <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
          <!-- ./col -->
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
              <a href="#" class="small-box-footer"
                >More info <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $countusers->count() }}</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer"
                >More info <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer"
                >More info <i class="fas fa-arrow-circle-right"></i
              ></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Button trigger modal -->

    @if(Session::has('message'))

      <div class="alert alert-success" id="successmsg" role="alert"  >
        {{ Session::get('message') }}
       </div>

    @elseif(Session::has('errors'))
    <div class="alert alert-danger" id="successmsg" role="alert"  >
        {{ Session::get('errors') }}
       </div>
    </div>
    @endif

      <!-- Modal -->
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

                <form method="POST" action="{{ route('adduser') }}"  enctype="multipart/form-data" >
                    @csrf

                     <div class="form-group">
                            <label for="exampleFormControlInput1">fullName</label>
                          <input type="text" name="fullName" class="form-control" placeholder="fullName">
                        </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                      <input type="Password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">image</label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
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



      {{-- اضافة مادة  --}}

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
                <form method="POST" action="{{ route('addMaterial') }}"  >
                    @csrf
                     <div class="form-group">
                            <label for="exampleFormControlInput1">اسم المادة </label>
                          <input type="text" name="title" class="form-control" required>

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">وصف</label>
                            <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3" required></textarea>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">ألتدريسي</label>
                            <select name="user_id" class="form-control" id="exampleFormControlSelect1" required>
                                @foreach ($countusers as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

                            </select>
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlSelect1">البرنامج المخصص</label>
                            <select name="program_id" class="form-control" id="exampleFormControlSelect1" required>
                                @foreach ($countprograms as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach

                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">المرحلة الدراسية</label>
                            <select name="stage_id" class="form-control" id="exampleFormControlSelect1" required>
                                @foreach ($stages as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
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


      {{-- اضافة برنامج  --}}


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
                <form method="POST" action="{{ route('add.program') }}" enctype="multipart/form-data"  >
                    @csrf

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">اسم البرنامج </label>
                        <input type="text" name="title" class="form-control" required>
                      </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">رابط التحميل </label>
                            <input type="text" name="link" class="form-control" required>
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

      {{-- اضافة محاضرة  --}}



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
                <form method="POST" action="{{ route('add.lecture') }}" enctype="multipart/form-data"  >
                    @csrf

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">عنوان المحاضرة  </label>
                        <input type="text" name="title" class="form-control" required>
                      </div>

                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">رابط المحاضرة  </label>
                            <input type="text" name="link" class="form-control" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">الوصف  </label>
                            <input type="text" name="desc" class="form-control" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlFile1">الكود المحاضرة</label>
                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1"  >
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlSelect1">المادة</label>
                            <select name="material_id" class="form-control" id="exampleFormControlSelect1" required>
                                @foreach ($material as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
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






















      <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
  @endsection

