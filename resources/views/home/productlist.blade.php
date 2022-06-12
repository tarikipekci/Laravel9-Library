<!DOCTYPE HTML>
<html>
<head>
    <title>BOOKRARIA || ALL BOOKS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="{{route('home')}}" class="logo">
                <span class="fa fa-book"></span> <span class="title">Online Book Borrow Website!</span>
            </a>

            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>
    </header>

    @php

        $mainCategories = \App\Http\Controllers\HomeController::mainCategorylist()

    @endphp
    <nav id="menu" class="category-nav" @if(!@isset($page)) show-on-click @endif>
        <h2>Menu</h2>
        <ul>

            <li><a href="{{route('home')}}" class="active">Home</a></li>

            <li><a href="{{route('productlist')}}">Products</a></li>

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

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>All Books (Mixed)</h1>

            <div class="image main">
                <img src="images/banner-image-6-1920x500.jpg" class="img-fluid" alt="" />
            </div>

            <section class="tiles">
                @foreach($productlist1 as $rs)

                    <article class="style2">

									<span class="image">
										<img src="{{Storage::url($rs->image)}}" style="height: 300px" height="300px"
                                             width="270px" alt=""/>
									</span>
                        <a href="product/{{$rs->id}}">
                            <h2>{{$rs->title}}</h2>

                            <p>
                                <del>{{$rs->price * 2.10}}</del>
                                <strong>{{$rs->price}}</strong></p>

                            <p>{{$rs->description}}</p>
                        </a>
                        @php
                            $average = $rs->comment->average('rate');
                        @endphp
                        <br>
                        <div class="product-rating">
                            {{$average}}/5
                            <i class="fa fa-star @if ($average<1) -o empty @endif"></i>
                            <i class="fa fa-star @if ($average<2) -o empty @endif"></i>
                            <i class="fa fa-star @if ($average<3) -o empty @endif"></i>
                            <i class="fa fa-star @if ($average<4) -o empty @endif"></i>
                            <i class="fa fa-star @if ($average<5) -o empty @endif"></i>
                            &nbsp; &nbsp;
                            @if($rs->status == 'True')
                                <a href="#" style="color: #720e9e">{{$rs->comment->count('id')}} / Review(s)</a>
                            @endif
                        </div>

                    </article>

                @endforeach


            </section>

        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <section>
                <ul class="icons">
                    <li><a href="https://twitter.com/kuntohaise" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/Voquel/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="https://www.instagram.com/tarikipek.ci/" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="https://www.linkedin.com/in/tar%C4%B1k-ipek%C3%A7i-514a261bb/" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                </ul>

                &nbsp;
            </section>

            <ul class="copyright">
                <li>Copyright © 2022 BOOKRARIA </li>
                <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
            </ul>
        </div>

    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

</body>
</html>
