@extends('layouts.home')

@section('title','Bookraria || Find Your Dream Book')
<link rel="icon" type="image/x-icon" href={{Storage::url($setting->icon)}}>

@section('content')
    @include('home._menu')
@endsection


