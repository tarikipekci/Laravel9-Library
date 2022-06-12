@extends('layouts.admin')

@section('title','Contact Form comment List')

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Orders</h1>

                </div>
            </div>
            <table class="table table-bordered" align="right">
                <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>User</th>
                    <th>Name && Surname</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Price</th>
                    <th>Admin Note</th>
                    <th>Status</th>
                    <th>Book Date</th>
                    <th>Days</th>
                    <th>Return Date</th>
                    <th style="width: 40px">Delete</th>
                    <th style="width: 40px">Show</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td><a href="{{route('admin.user.show', ['id' => $rs->user_id])}}">
                                {{$rs->user->name}}
                            </a></td>
                        <td>{{$rs->name}}</a></td>
                        <td>{{$rs->phone}}</td>
                        <td>{{$rs->email}}</td>
                        <td>{{$rs->address}}</td>
                        <td>${{$rs->total}}</td>
                        <td>{{$rs->note}}</td>
                        <td>{{$rs->status}}</td>
                        <td>{{$rs->bookdate}}</td>
                        <td>{{$rs->days}}</td>
                        <td>{{$rs->returndate}}</td>


                        <td><a href="{{route('admin.order.cancelorder', ['id'=>$rs->id])}}"
                               class="btn btn-block btn-danger btn-sm"
                               onclick="return confirm('Cancelling !! Are you sure?')">Cancel</a>
                        </td>

                        <td>
                            <a href="{{route('admin.order.show', ['id' =>$rs->id])}} "
                               onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')"
                               class="btn btn-block btn-success btn-sm">Show</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
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
@endsection
