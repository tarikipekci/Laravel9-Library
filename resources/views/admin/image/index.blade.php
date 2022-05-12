<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Image List</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->

    <!--CUSTOM MAIN STYLES-->
    <link href="{{asset('assets')}}/admin/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

    <h3>{{$product->title}}</h3>
    <hr>
    <form role="form" action="{{route('admin.image.store', ['pid' => $product->id])}}" method="post" enctype="multipart/form-data">
    @csrf

     <div class="input-group">
         <label for="exampleInputEmail">Title</label>
         <input type="text" class="form-control" name="title" placeholder="Title">

        <br>
         <br>

         <div class="custom-file">
                <br>
                 <br>

             <input type="file" class="custom-file-input" id="exampleInputFile" name="image">

                <br>
                <br>
             <label class="custom-file-label" for="exampleInputFile">Choose File</label>
         </div>

        <div class="input-group-append">
            <input class="input-group-text" type="submit" value="Upload">
        </div>
     </div>
    </form>
    <div class="card">

        <div class="card-header">

            <h3 class="card-title">Product Image List</h3>

        </div>

        <div class="card-body">
            <table class="table table-bordered">

                <thead>
                <tr>
                    <th style="width: 40px">Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th style="width: 40px">Delete</th>
                </tr>
                </thead>
                <tbody>
                            @foreach($images as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->title}}</td>
                                <td>
                                    @if ($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                    @endif
                                </td>
                                <td><a href="{{route('admin.image.destroy',['pid'=>$product->id , 'id'=>$rs->id])}}" class="btn btn-success" onclick="return confirm('Deleting!! Are you sure ?')">Delete</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
        </div>
    </div>


</body>
</html>
