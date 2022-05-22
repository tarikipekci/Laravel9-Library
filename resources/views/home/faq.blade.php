@extends('layouts.home')

@section('title','Frequently Asked Questions')
<link rel="icon" type="image/x-icon" href={{Storage::url($setting->icon)}}>
@section('head')

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#accordion").accordion();
        });
    </script>
    @section('content')
        <div id="wrapper">

            @php

                $mainCategories = \App\Http\Controllers\HomeController::mainCategorylist()

            @endphp

            <nav id="menu" class="category-nav" @if(!@isset($page)) show-on-click @endif>
                <h2>Menu</h2>
                <ul>

                    <li><a href="{{route('home')}}" class="active">Home</a></li>

                    <li><a href="products.html">Products</a></li>

                    @foreach($mainCategories as $rs)
                        @if(count($rs->children))
                            <li class="menu-item-has-children"><a href="/categoryproducts/{{$rs->id}}/{{$rs->title}}"></a>
                                <ul>
                                    @include('home.categorytree',['children'=>$rs->children])
                                </ul>
                            </li>
                        @else
                            <li><a href="/categoryproducts/{{$rs->id}}/{{$rs->title}}">{{$rs->title}}</a></li>
                        @endif
                    @endforeach
                    <li><a href="checkout.html">Checkout</a></li>

                    <li><a href="#" class="dropdown-toggle">About</a>

                        <ul>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('references')}}">References</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="terms.html">Terms</a></li>
                        </ul>

                    </li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>


            </nav>

        </div>

        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1>Frequently Asked Questions</h1>
                            <div id="accordion">
                                @foreach($datalist as $rs)

                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse"
                                               href="#collapse{{$loop->iteration}}">
                                                {{$rs->question}}
                                            </a>
                                        </div>
                                        <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce"
                                             data-parent="#accordion">
                                            <div class="card-body">
                                                {!! $rs->answer !!}
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                            </div>

                        </div>
                        <script src="assets/js/jquery.min.js"></script>
                        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    @endsection


