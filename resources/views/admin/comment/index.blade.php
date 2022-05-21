@extends('layouts.admin')

@section('title','Contact Form comment List')

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">comment</h1>

                </div>
            </div>
            <table class="table table-bordered" align="right">
                <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Product</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Review</th>
                    <th>Rate</th>
                    <th>Status</th>
                    <th style="width: 40px">Delete</th>
                    <th style="width: 40px">Show</th>
                    <a href="#"></a>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td><a href="{{route('admin.product.show', ['id' => $rs->product_id])}}">{{$rs->product->title}}</a></td>
                        <td>{{$rs->user->name}}</a></td>
                        <td>{{$rs->subject}}</td>
                        <td>{{$rs->review}}</td>
                        <td>{{$rs->rate}}</td>
                        <td>{{$rs->status}}</td>


                        <td><a href="{{route('admin.comment.destroy', ['id'=>$rs->id])}}"
                               class="btn btn-block btn-danger btn-sm"
                               onclick="return confirm('Deleting !! Are you sure?')">Delete</a>
                        </td>

                        <td>
                            <a href="{{route('admin.comment.show', ['id' =>$rs->id])}} "
                               onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')" class="btn btn-block btn-success btn-sm">Show</a>
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
