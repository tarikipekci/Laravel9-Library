@extends('layouts.home')

@section('title','Bookraria || Find Your Dream Book')


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

    </div>

    </div>

    <div id="wrapper">

        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="index.html">Home</a></li>

                <li><a href="products.html">Products</a></li>

                <li><a href="checkout.html" class="active">Checkout</a></li>

                <li>
                    <a href="#" class="dropdown-toggle">About</a>

                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="terms.html">Terms</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner">
                <h1>My Profile</h1>
            </div>

            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"
                        @include('home.user.usermenu')
                    </div>
                    <div class="input-checkbox">
                        @include('profile.show')

                    </div>  </div>
            </div>
        </div>


        <br>
        <br>
    </div>
    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <section>

            </section>
            <section>
        </div>
@endsection


