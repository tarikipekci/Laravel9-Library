@extends('layouts.home')

@section('title','Sub Page Title')

@section('sidebar')
        @parent


    <p>This is appended to the master sidebar</p>
@endsection


@section('content')

 <p>This is my body content.</p>

@endsection


