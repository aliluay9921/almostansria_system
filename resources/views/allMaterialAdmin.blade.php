@extends('layouts.adminlayout')

@section('admincont')
    <div class="back">
        <a href="{{ route('owner') }}" class="btn btn-info"> <i class="fas fa-arrow-left"></i> رجوع</a>
    </div>
    <div class="drop">

        @foreach ($stageInfo as $branch)

            <a href="{{ route('getmatiralAdmin', ['stage_id' => $stage_id, 'branch_id' => $branch->id]) }}">
                <p>{{ $branch->name }}</p>
            </a>

        @endforeach
    </div>

    {{-- table  show --}}
    <div class="container-fluid mr-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">كل المواد </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">التسلسل</th>
                                    <th scope="col">اسم المادة</th>
                                    <th scope="col">وصف المادة</th>
                                    <th scope="col">اسم التدريسي</th>
                                    <th scope="col">البرنامج المستخدم </th>
                                    <th scope="col">عدد المحاضرات </th>
                                    <th scope="col">عمليات </th>
                                </tr>
                            </thead>
                            <tbody id="tablebody">
                                <?php $i = 1; ?>
                                @foreach ($get as $item)
                                    <tr class="offerRow{{ $item->id }}">
                                        <th> {{ $i++ }}</th>
                                        <td> <b>{{ $item->title }}</b></td>
                                        <td><b>{{ $item->desc }}</b></td>
                                        @if (empty($item->users->name))
                                            <td><b>
                                                    <p class="text-danger">تم حذف التدريسي</p>
                                                </b></td>
                                        @else
                                            <td>
                                                <b>{{ $item->users->name }}</b> <br>
                                            </td>
                                        @endif

                                        @if (empty($item->program->title))
                                            <td><b>لايوجد برنامج</b> </td>
                                        @else
                                            <td> <b>{{ $item->program->title }}</b></td>
                                        @endif
                                        @if ($item->lecturs->count() == 0)
                                            <td><b>لاتوجد محاضرات</b></td>
                                        @else
                                            <td>
                                                <h4>{{ $item->lecturs->count() }}</h4>
                                            </td>
                                        @endif
                                        <td>
                                            <a href="" data-target="#editMatiral" data-toggle="modal"
                                                class="btn btn-success" data-id="{{ $item->id }}"
                                                data-title="{{ $item->title }}"
                                                data-desc="{{ $item->desc }}">تعديل</a>
                                            <a href="#" offer_id="{{ $item->id }}"
                                                class=" delete_btn btn btn-danger">حذف</a>
                                            <a href="{{ route('get.lectureAdmin', $item->id) }}"
                                                class="btn btn-info">المحاضرات</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->

                    <div class="modal fade" id="editMatiral" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">تعديل المواد </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-danger" style="display:none"></div>
                                    <div class="alert alert-success text-center" id="successmsg" role="alert"
                                        style="display:none">
                                        <h3> تم الحفظ بنجاح</h3>
                                    </div>
                                    <form id="editfromMatiral" method="Post" action="{{ route('updateMaterial') }}">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <input type="hidden" name="id" id="id">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">اسم المادة</label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">وصف المادة</label>
                                            <input type="text" name="desc" id="desc" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1"></label>
                                            <div id="doctor"></div>
                                            <select name="user_id" id="user_id" class="form-control" multiple>

                                                @foreach ($doctors as $doctor)
                                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" id="program"></label>
                                            <select name="program_id" id="program_id" class="form-control" multiple>
                                                <option>اختر برنامج</option>
                                                @foreach ($programs as $program)
                                                    <option value="{{ $program->id }}">{{ $program->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">غلق</button>
                                            <button type="submit" class="btn btn-primary">تعديل</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

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
                    type: 'post',
                    url: "{{ route('delete') }}",
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'id': offer_id
                    },
                    success: function(data) {
                        if (data.status == true) {
                            $('#success_msg').show();
                            setTimeout(function() {
                                $('#success_msg').hide();
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
        $('#editMatiral').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id');
            var title = button.data('title');
            var doctor = button.data('user');
            var program = button.data('program');
            var desc = button.data('desc');
            //   data-user

            var modal = $(this)
            modal.find('.modal-body  #id').val(id)
            modal.find('.modal-body  #title').val(title)
            modal.find('.modal-body  #user_id').val(doctor)
            modal.find('.modal-body  #program').val(program)
            modal.find('.modal-body  #desc').val(desc)

        });
    </script>
@endsection
