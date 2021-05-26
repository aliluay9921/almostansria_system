@extends('layouts.adminlayout')

@section('admincont')

    <div class="back">
        <a href="{{ route('owner') }}" class="btn btn-info"> <i class="fas fa-arrow-left"></i> رجوع</a>
    </div>


    {{-- table  show --}}
    <div class="container-fluid  mr-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">كل البرامج </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">التسلسل</th>
                                    <th scope="col">اسم البرنامج</th>
                                    <th scope="col">صورة البرنامج</th>
                                    <th scope="col">المواد</th>
                                    <th scope="col">عمليات </th>
                                </tr>
                            </thead>
                            <tbody id="tablebody">
                                <?php $i = 1; ?>
                                @foreach ($get as $program)
                                    <tr class="offerRow{{ $program->id }}">
                                        <th> {{ $i++ }}</th>
                                        <td>
                                            <h5>{{ $program->title }}</h5>
                                        </td>
                                        <td><img src="/image_program/{{ $program->image }}" width="50px" height="50px"
                                                style="border-radius: 50px" alt=""></td>
                                        <td>
                                            @foreach ($program->materials as $data)
                                                {{ $data->title }} <br>

                                            @endforeach
                                        </td>

                                        <td><a class="btn btn-primary" href="{{ $program->link }}">تحميل البرنامج</a>
                                            <a data-target="#editProgram" data-toggle="modal" class="btn btn-success"
                                                data-id="{{ $program->id }}" data-title=" {{ $program->title }}"
                                                data-link="{{ $program->link }}">تعديل</a>
                                            <a href="#" offer_id="{{ $program->id }}"
                                                class=" delete_btn btn btn-danger">حذف</a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->


                    <div class="modal fade" id="editProgram" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">تعديل البرامج </h5>
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
                                    <form id="editFromProgram" method="Post" enctype="multipart/form-data"
                                        action="{{ route('update.program') }}">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <input type="hidden" name="id" id="id">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">اسم البرنامج</label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="title">
                                        </div>
                                        <div class="form-group">
                                            <label>الصورة</label>
                                            <input type="file" name="image" id="image" class="form-control-file">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">رابط التحميل </label>
                                            <input type="text" name="link" id="link" class="form-control"
                                                id="exampleFormControlInput1" placeholder="name@example.com">
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
                    type: 'delete',
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
        $('#editProgram').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id');
            var title = button.data('title');
            var link = button.data('link');

            var modal = $(this)
            modal.find('.modal-body  #id').val(id)
            modal.find('.modal-body  #title').val(title)
            modal.find('.modal-body  #link').val(link)

        });

    </script>
@endsection
