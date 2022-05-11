@extends('layouts.admin')

@section('title','book')

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line"> Edit Category: {{$data->title}}</h1>
                    <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Category Elements
                            </div>
                            <div class="panel-body">
                                <form role="form" action="{{route('admin.category.update', ['id'=>$data->id])}}"
                                      method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="card-body">

                                        <div class="form-group">
                                            <label>Parent Category</label>

                                            <select class="form-control select2" name="parent_id" style="...">
                                                <option value="0" selected="selected">Main Category</option>

                                                @foreach($datalist as $rs)
                                                    <option
                                                        value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                    </div>


                                    <div class="form-group">
                                        <label>Title</label>

                                        <input class="form-control" type="text" placeholder="Title" name="title"
                                               value="{{$data->title}}">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input class="form-control" type="text" name="keywords" placeholder="Key Word"
                                               value="{{$data->keywords}}">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" type="text" name="description"
                                               placeholder="Description" value="{{$data->description}}">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="exampleInputFile"></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option selected>{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        null.
                        <br/>
                        null <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
