<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Show Product</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="{{asset('assets')}}/admin/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{asset('assets')}}/admin/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{asset('assets')}}/admin/index.html">BOOKRARIA</a>
        </div>

        <div class="header-right">

            <a href="{{asset('assets')}}/admin/message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
            <a href="{{asset('assets')}}/admin/message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
            <a href="{{asset('assets')}}/admin/login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src="{{asset('assets')}}/admin/img/user.png" class="img-thumbnail" />

                        <div class="inner-text">
                            Jhon Deo Alex
                            <br />
                            <small>Last Login : 2 Weeks Ago </small>
                        </div>
                    </div>

                </li>


                <li class="nav-item">

                    <a href="/admin" class="nav-link"><i class="nav-icon fa fa-home" style="color: maroon"></i>Dashboard</a>


                </li>

                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i>Order <span class="fa fa-shopping-bag"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{asset('assets')}}/admin/panel-tabs.html"><i class="fa fa-th" style="color: yellowgreen"></i>New Orders</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/notification.html"><i class="fa fa-th " style="color: black"></i>Accepted Orders</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/progress.html"><i class="fa fa-th " style="color: purple"></i>Shipping Orders</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/buttons.html"><i class="fa fa-th" style="color:deeppink;"></i>Completed Orders</a>
                        </li>

                    </ul>

                <li>
                    <a href="/admin/category"><i class="fa fa-table" style="color: #00CA79"></i>Categories</a>
                </li>

                <li>
                    <a href="/admin/product"><i class="fa fa-coffee" style="color: dodgerblue"></i>Products</a>
                </li>
                <li>
                    <a href="/admin/comment"><i class="fa fa-comment " style="color: brown"></i>Comments</a>
                </li>
                <li>
                    <a href="/admin/faq"><i class="fa fa-question " style="color: orangered"></i>FAQ</a>
                </li>
                <li>
                    <a href="/admin/messages"><i class="fa fa-send " style="color: #b3d4fc"></i>Messages</a>
                </li>

                <li>
                    <a href="/admin/user"><i class="fa fa-user" style="color: #8499e7"></i>Users</a>
                </li>

                <li>
                    <a href="/admin/social"><i class="fa fa-archive " style="color: #ffe8a1"></i>Social</a>
                </li>
                <li>
                    <a href="/admin/social"><i ></i></a>
                </li>

                <li>
                    <a href="/admin/social"><i ></i></a>
                </li>
                <li>
                    <a href="/admin/setting"><i class="fa fa-space-shuttle"></i>Settings</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">

                    <div class="col-md-6">
                        <!--    Striped Rows Table  -->

                        <h1 class="page-head-line"> Show Product: </h1>

                        <a href="{{route('admin.product.edit',['id'=>$data->id])}}" class="btn btn-block btn-success btn-lg" style="width: 100px">Edit</a>
                        <br>

                        <a href="{{route('admin.product.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure?')" class="btn btn-block btn-success btn-lg" style="width: 100px">Delete</a>

                        <br>

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <b>Product Details</b>
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
                                            <th>Category</th>
                                            <td>
                                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title)}}
                                            </td>

                                        </tr>

                                        <tr>
                                            <td><b>Title</b></td>
                                            <td>{{$data->title}}</td>

                                        </tr>

                                        <tr>
                                            <td style="width: 90px"><b>Keywords</b></td>
                                            <td>{{$data->keywords}}</td>

                                        </tr>

                                        <tr>
                                            <td style="width: 90px"><b>Description</b></td>
                                            <td>{{$data->description}}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Price</b></td>
                                            <td>{{$data->price}}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Amount</b></td>
                                            <td>{{$data->amount}}</td>

                                        </tr>

                                        <tr>
                                            <td style="width: 90px"><b>Number of Pages</b></td>
                                            <td>{{$data->page}}</td>

                                        </tr>

                                        <tr>
                                            <td style="width: 90px"><b>Detail Inf</b></td>
                                            <td>{!! $data->detail !!}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Image</b></td>
                                            <td>

                                                @if ($data->image)
                                                    <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                                @endif
                                            </td>

                                        </tr>

                                        <tr>
                                            <td><b>Status</b></td>
                                            <td>{{$data->status}}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Created Date</b></td>
                                            <td>{{$data->created_at}}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Update Date</b></td>
                                            <td>{{$data->updated_at}}</td>

                                        </tr>


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
    &copy; 2022 BOOKRARIA | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
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
