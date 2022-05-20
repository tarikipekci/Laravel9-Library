@extends('layouts.admin')

@section('title','book')

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">faqS</h1>
                    <a href="{{route('admin.faq.create')}}" class="btn btn-block btn-success btn-lg">Add
                        faq</a>
                </div>
            </div>
            <table class="table table-bordered" align="right">
                <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Question</th>
                    <th>Answer</th>
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
                        <td>{{$rs->question}}</td>
                        <td>{!! $rs->answer !!}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}"
                               class="btn btn-danger">Edit</a>
                        </td>
                        <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-success"
                               onclick="return confirm('Deleting!! Are you sure ?')">Delete</a></td>
                        <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}" class="btn btn-info">Show</a>
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
