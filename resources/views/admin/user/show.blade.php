<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Show user</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/css/font-awesome.css" rel="stylesheet"/>
    <!--CUSTOM BASIC STYLES-->
    <link href="{{asset('assets')}}/admin/css/basic.css" rel="stylesheet"/>
    <!--CUSTOM MAIN STYLES-->
    <link href="{{asset('assets')}}/admin/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>
<body>
<div id="wrapper">
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">

                    <div class="col-md-6">
                        <!--    Striped Rows Table  -->

                        <h1 class="page-head-line">Detail user Data</h1>

                        <a href="{{route('admin.user.destroy',['id'=>$data->id])}}"
                           onclick="return confirm('Deleting !! Are you sure?')"
                           class="btn btn-block btn-success btn-lg" style="width: 100px">Delete</a>

                        <br>

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <b>user Details</b>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Details</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width: 90px"><b>Id</b></td>
                                            <td>{{$data->id}}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Name && Surname</b></td>
                                            <td>{{$data->name}}</td>

                                        </tr>

                                        <tr>
                                            <td style="width: 90px"><b>Phone Number</b></td>
                                            <td>{{$data->phone}}</td>

                                        </tr>

                                        <tr>
                                            <td style="width: 90px"><b>Email</b></td>
                                            <td>{{$data->email}}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Roles</b></td>
                                            <td>
                                                @foreach ($data->roles as $role)
                                                    {{$role->name}}
                                                    <a href="{{route('admin.user.destroyrole', ['uid'=>$data->id, 'rid' => $role->id])}}"
                                                       class="btn btn-block btn-danger btn-sm"
                                                       onclick="return confirm('Deleting !! Are you sure?')">[X]</a>
                                                @endforeach
                                            </td>

                                        </tr>

                                        <tr>
                                            <td><b>Created Date</b></td>
                                            <td>{{$data->created_at}}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Update Date</b></td>
                                            <td>{{$data->updated_at}}</td>

                                        </tr>

                                        <td><b>Admin Role to User:</b></td>
                                        <td>
                                            <form role="form"
                                                  action="{{route('admin.user.addrole', ['id'=> $data->id])}}"
                                                  method="post">
                                                @csrf
                                                <select name="role_id">
                                                    @foreach ($data->roles as $role)
                                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Add Role
                                                    </button>
                                                </div>
                                            </form>
                                        </td>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--  End  Striped Rows Table  -->
                    </div>


                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<div id="footer-sec">
</div>
<!-- /. FOOTER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{asset('assets')}}/admin/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('assets')}}/admin/js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{asset('assets')}}/admin/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{asset('assets')}}/admin/js/custom.js"></script>


</body>
</html>
