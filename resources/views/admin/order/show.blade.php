<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Show Order Details</title>

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

                        <h1 class="page-head-line">Order Detail</h1>

                        <a href="{{route('admin.comment.destroy',['id'=>$data->id])}}"
                           onclick="return confirm('Deleting !! Are you sure?')"
                           class="btn btn-block btn-success btn-lg" style="width: 100px">Delete</a>

                        <br>

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <b>Order Details</b>
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
                                            <td><b>User</b></td>
                                            <td>{{$data->user->name}}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Name && Surname</b></td>
                                            <td>{{$data->name}}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Phone</b></td>
                                            <td>{{$data->phone}}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Email</b></td>
                                            <td>{{$data->email}}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Address</b></td>
                                            <td>{{$data->address}}</td>

                                        </tr>

                                        <tr>
                                            <td style="width: 90px"><b>Ip Number</b></td>
                                            <td>{{$data->IP}}</td>

                                        </tr>

                                        <tr>
                                            <td style="width: 90px"><b>Status</b></td>
                                            <td>{!! $data->status !!}</td>

                                        <tr>
                                            <td><b>Created Date</b></td>
                                            <td>{{$data->created_at}}</td>

                                        </tr>

                                        <tr>
                                            <td><b>Update Date</b></td>
                                            <td>{{$data->updated_at}}</td>

                                        </tr>

                                        <td><b>Admin Note:</b></td>
                                        <td>
                                            <form role="form"
                                                  action="{{route('admin.order.update', ['id'=> $data->id])}}"
                                                  method="post">
                                                @csrf
                                                <textarea name="note">{{$data->note}}</textarea>
                                                <br>
                                                <select name="status">
                                                    <option selected>{{$data->status}}</option>
                                                    <option>Accepted</option>
                                                    <option>Shipped</option>
                                                    <option>Cancelled</option>
                                                    <option>Completed</option>
                                                </select>

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Update</button>
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
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">Id</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Image</th>
                            <th>Page</th>
                            <th>Status</th>
                            <th style="width: 40px">Cancel</th>
                            <a href="#"></a>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->product->title}}</td>
                                <td>${{$rs->price}}</td>
                                <td>{{$rs->quantity}}</td>
                                <td>${{$rs->amount}}</td>
                                <td>
                                    @if ($rs->product->image)
                                        <img src="{{Storage::url($rs->product->image)}}"
                                             style="height: 100px">
                                    @endif
                                </td>
                                <td>{{$rs->product->page}}</td>
                                <td>{{$rs->status}}</td>

                                <td>

                                    <a href="{{route('admin.order.acceptproduct', ['id' => $rs->id])}}"
                                       class="btn btn-block btn-success btn-sm"
                                       onclick="return confirm('Accepting !! Are you sure ?')">Accept</a>

                                    <a href="{{route('admin.order.cancelproduct', ['id' => $rs->id])}}"
                                       class="btn btn-block btn-success btn-sm"
                                       onclick="return confirm('Cancelling !! Are you sure ?')">Cancel</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
