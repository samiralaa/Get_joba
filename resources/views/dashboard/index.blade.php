@extends('admin.dashboard')

@section('title', 'Payments')

    @push('css')

    @endpush

@section('content')

    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-around">
                        <div>
                            <h1 class="">Payments</h1>
                        </div>
                        <div>
                            <h1><a href="" class="btn btn-danger">Create Manual Payment</a>
                            </h1>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Applicant Name</th>
                                    <th>Form ID</th>
                                    <th>Payment Method</th>
                                    <th>Account Number</th>
                                    <th>Amount</th>
                                    <th>Transaction ID</th>
                                    <th>Payment Time</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                               
                                    <tr>
                                        <td></td>
                                       
                                        <td>
                                          
                                               
                                        </td>
                                    </tr>
                             
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.card-body -->

@endsection

@push('js')

    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
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
@endpush
