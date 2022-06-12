<!DOCTYPE HTML>
<html>
<head>
    <title>BOOKRARIA || Products</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="{{asset('assets')}}/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <noscript>
        <link rel="stylesheet" href="{{asset('assets')}}/css/noscript.css"/>
    </noscript>
</head>
<body class="is-preload">
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="http://127.0.0.1:8000/" class="logo">
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

    <!-- Menu -->

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

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>{{$data->title}}<br> Category:{{$data->category->title}}<span class="pull-right"><del>{{$data->price*2.10}}$</del> {{$data->price}}$</span>
            </h1>

            <div class="container-fluid">
                @include('home.message')
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-md-7">
                        <p>{!! $data->description !!}</p>


                        <div class="row">
                            <div class="col-sm-4">
                                <form action="{{route("shopcart.store")}}" method="post">
                                    @csrf
                                    @if($data->amount > 0)
                                        <label class="control-label">Rating</label>

                                        @php
                                            $average = $data->comment->average('rate');
                                        @endphp

                                        <div class="product-rating">
                                            {{$average}}/5
                                            <i class="fa fa-star @if ($average<1) -o empty @endif"></i>
                                            <i class="fa fa-star @if ($average<2) -o empty @endif"></i>
                                            <i class="fa fa-star @if ($average<3) -o empty @endif"></i>
                                            <i class="fa fa-star @if ($average<4) -o empty @endif"></i>
                                            <i class="fa fa-star @if ($average<5) -o empty @endif"></i>
                                        </div>

                                        <a href="#">{{$data->comment->count('id')}} Review(s) / Add Review</a>
                                        Availability: @if($data->amount > 0)
                                            <a href="#" style="color: #4cae4c">In Stock</a>
                                        @else
                                            <a style="color: red">Not In Stock</a>
                                @endif
                            </div>

                            <div class="col-sm-8">
                                <label class="control-label">Amount</label>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="number" name="quantity" id="quantity" min="1" max="{{$data->quantity}}" onchange="this.form">
                                            <input class="input" name="id" value="{{$data->id}}" type="hidden">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="submit" class="primary" value="Borrow!">
                                    </div>
                                </div>
                            </div>
                                    @else
                                        <a style="color: red">Not In Stock</a>
                                    @endif

                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="container-fluid">
                <h2 class="h2">Similar Products</h2>

                <!-- Products -->
                <section class="tiles">
                    <article class="style1">
										<span class="image">
											<img src="{{asset('assets')}}/images/product-1-720x480.jpg" alt=""/>
										</span>
                        <a href="product-details.html">
                            <h2>Lorem ipsum dolor sit amet, consectetur</h2>

                            <p>
                                <del>$19.00</del>
                                <strong>$19.00</strong></p>

                            <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
                        </a>
                    </article>

                    <article class="style2">
										<span class="image">
											<img src="{{asset('assets')}}/images/product-2-720x480.jpg" alt=""/>
										</span>
                        <a href="product-details.html">
                            <h2>Lorem ipsum dolor sit amet, consectetur</h2>

                            <p>
                                <del>$19.00</del>
                                <strong>$19.00</strong></p>

                            <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
                        </a>
                    </article>

                    <article class="style3">
										<span class="image">
											<img src="{{asset('assets')}}/images/product-6-720x480.jpg" alt=""/>
										</span>
                        <a href="product-details.html">
                            <h2>Lorem ipsum dolor sit amet, consectetur</h2>

                            <p>
                                <del>$19.00</del>
                                <strong>$19.00</strong></p>

                            <p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
                        </a>
                    </article>
                </section>
            </div>

            <div class="col-md-6">
                <h1 class="text-uppercase">Write your Review</h1>
                <p><b>Your email address will be not published!</b></p>

                <form class="review-form" action="{{route('storecomment')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input class="input" type="hidden" name="product_id" value="{{$data->id}}">
                    </div>

                    <div class="form-group">
                        <input class="input" type="text" name="subject" placeholder="Subject">
                    </div>

                    <div class="form-group">
                        <textarea class="input" name="review" placeholder="Your review"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="input-rating">
                            <strong class="text-uppercase">Your Rating:</strong>
                            <div class="stars">
                                5 <input type="radio" id="star5" name="rate" value="5"/><label for="star5"></label>
                                4 <input type="radio" id="star4" name="rate" value="4"/><label for="star4"></label>
                                3 <input type="radio" id="star3" name="rate" value="3"/><label for="star3"></label>
                                2 <input type="radio" id="star2" name="rate" value="2"/><label for="star2"></label>
                                1 <input type="radio" id="star1" name="rate" value="1"/><label for="star1"></label>
                            </div>

                        </div>

                    </div>
                    <br>
                    @auth
                        <button class="primary-btn">Submit</button>
                    @else
                        <a href="/login" class="primary-btn">For Submit Your Review, Please Login</a>
                    @endauth
                </form>

            </div>
            <div id="tab2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-reviews">
                            @foreach($reviews as $rs)
                                <div class="single-review">
                                    <div class="review-heading">
                                        <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->user->name}}</a></div>
                                        <div><a href="#"><i class="fa fa-clock-o"></i>{{$rs->created_at}}</a></div>
                                        <div class="review-rating pull-right">
                                            <i>Rate:{{$rs->rate}}/5</i>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <strong>{{$rs->subject}}</strong>
                                        <p>{{$rs->review}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <section>
                <ul class="icons">
                    <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                </ul>

                &nbsp;
            </section>

            <ul class="copyright">
                <li>Copyright © 2020 Company Name</li>
                <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
            </ul>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrolly.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrollex.min.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>

</body>
</html>

