@extends('backend.header')

@section('content')
    <div class="container">
        <div class="row">
        </div>
    </div>
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
<br><br><br>
                    <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Size and specs.</th>
                                        <th>Trademark</th>
                                        <th>Packing</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($product as $obj)
                                    <tr class="odd gradeX">
                                        <td>{{$obj->Name}}</td>
                                        <td>{{$obj->SizeandSpecifications}}</td>
                                        <td>{{$obj->Trademark}}</td>
                                        <td>{{$obj->Packing}}</td>


                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>



        <!-- end page-wrapper -->




@endsection

