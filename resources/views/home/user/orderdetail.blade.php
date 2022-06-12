<!DOCTYPE HTML>
<html>
<head>
    <title>User Order List</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="{{asset('assets')}}/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css"/>
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
            <a href="{{route('home')}}" class="logo">
                <span class="fa fa-book"></span> <span class="title">Online Book Borrow Website</span>
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
            <h1>User ShopCart</h1>
        </div>

        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"

                    <div class="input-checkbox">

                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Order Books</h3>

                            </div>

                            <table class="shopping-cart-table table">
                                <tr>
                                    <th>Name:</th>
                                    <td>{{$order->name}}</td>
                                </tr>

                                <tr>
                                    <th>Phone:</th>
                                    <td>{{$order->phone}}</td>
                                </tr>

                                <tr>
                                    <th>Email:</th>
                                    <td>{{$order->email}}</td>
                                </tr>

                                <tr>
                                    <th>Address:</th>
                                    <td>{{$order->address}}</td>
                                </tr>

                                <tr>
                                    <th>Days</th>

                                    <td>{{$order->days}}</td>
                                </tr>

                                <tr>
                                    <th>Book Date</th>
                                    <td>{{$order->bookdate}}</td>
                                </tr>

                                <tr>
                                    <th>Return Date</th>

                                    <td>{{$order->returndate}}</td>
                                </tr>

                                <tr>
                                    <th>Status:</th>
                                    <td>{{$order->note}}</td>
                                </tr>

                                <tr>
                                    <th>Status:</th>
                                    <td>{{$order->status}}</td>
                                </tr>

                                <table class="shopping-cart-table table">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th></th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Amount</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">Status</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($orderproducts as $rs)
                                        <tr>
                                            <td class="thumb"><img src="{{Storage::url($rs->product->image)}}"
                                                                   alt=""
                                                                   style="height: 200px"></td>
                                            <td class="details">
                                                <a href="#">{{$rs->product->title}}</a>
                                            </td>

                                            <td class="price text-center">
                                                <strong>${{$rs->product->price}}</strong><br>
                                                <del class="font-weak">
                                            </td>

                                            <td>{{$rs->quantity}}</td>

                                            <td class="total text-center"><strong
                                                    class="primary-color">${{$rs->amount}}</strong>
                                            </td>

                                            <td class="price text-center">{{$rs->status}}</td>

                                            <td class="text-right">
                                                @if ($rs->status = "New")
                                                    <a href="{{route('userpanel.cancelproduct', ['id' => $rs->id])}}"
                                                       class="main-btn icon-btn"
                                                       onclick="return confirm('Canceling !! Are you sure ?')"><i
                                                            class="fa fa-close"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th class="empty" colspan="3"></th>
                                        <th colspan="2" class="total"><h3>Total Price:${{$order->total}}</h3></th>
                                    </tr>
                                    </tfoot>
                                </table>
                        </div>
                    </div>
                </div>
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

</div>

<!-- Scripts -->
<script src="{{asset('assets')}}/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrolly.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrollex.min.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>

</body>
</html>
