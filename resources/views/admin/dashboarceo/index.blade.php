@extends('backend.header')

@section('content')
    <div class="container">
        <div class="row">
        </div>
    </div>
    <div id="wrapper">
            <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <link href="{{Request::root()}}/bs-siminta-admin/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <script src="{{Request::root()}}/bs-siminta-admin/assets/plugins/dataTables/jquery.dataTables.js"></script>
        <script src="{{Request::root()}}/bs-siminta-admin/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
        </script>




            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($dashboard as $obj)
                                        <tr class="odd gradeX">
                                            <td>{{$obj->name}}</td>
                                            <td>{{$obj->email}}</td>
                                            <td>{{$obj->phonenumber}}</td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>



        <!-- end page-wrapper -->



    </div>







@endsection

