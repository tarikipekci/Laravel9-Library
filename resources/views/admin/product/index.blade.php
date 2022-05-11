@extends('layouts.admin')

@section('title','book')

@section('content')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PRODUCTS</h1>
                        <a href="{{route('admin.product.create')}}" class="btn btn-block btn-success btn-lg">Add
                            Product</a>
                    </div>
                </div>
                <table class="table table-bordered" align="right">
                    <thead>
                    <tr>
                        <th style="width: 10px">Id</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Image</th>
                        <th>Image Gallery</th>
                        <th>Page</th>
                        <th>Status</th>
                        <th style="width: 40px">Edit</th>
                        <th style="width: 40px">Delete</th>
                        <th style="width: 40px">Show</th>
                        <a href="#"></a>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category, $rs->category->title)}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->amount}}</td>

                            <td>
                                @if ($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                @endif
                            </td>
                            <td><a href="{{route('admin.image.index', ['pid' => $rs->id])}}"
                                   onclick="return !window.open(this.href, '' , 'top=50 , left=100 , width=1100 , height=700')">
                                    <img src="{{asset('assets')}}/admin/img/gallery.jpg" width="60px">
                                </a>
                            </td>
                            <td>{{$rs->page}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}"
                                   class="btn btn-danger">Edit</a>
                            </td>
                            <td><a href="{{route('admin.product.destroy',['id'=>$rs->id])}}" class="btn btn-success"
                                   onclick="return confirm('Deleting!! Are you sure ?')">Delete</a></td>
                            <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}" class="btn btn-info">Show</a>
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
