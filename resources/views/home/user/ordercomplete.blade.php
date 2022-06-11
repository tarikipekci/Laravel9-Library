<!DOCTYPE HTML>
<html>
<head>
    <title>User Comments & Reviews</title>
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


    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <section>
                <h2>Contact Us</h2>
                <form method="post" action="{{route('storemessage')}}">
                    @include('home.message')
                    @csrf

                    <h1>THANKS!</h1>
                    <div class="fields">
                        <div class="field half">
                            <input type="text" name="name" id="name" placeholder="Name"/>
                        </div>

                        <div class="field half">
                            <input type="text" name="email" id="email" placeholder="Email"/>
                        </div>

                        <div class="field">
                            <input type="text" name="subject" id="subject" placeholder="Subject"/>
                        </div>

                        <div class="field">
                            <textarea name="message" id="message" rows="3" placeholder="Notes"></textarea>
                        </div>

                        <div class="field text-right">
                            <label>&nbsp;</label>

                            <ul class="actions">
                                <li><input type="submit" value="Send Message" class="primary"/></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
            <section>
                <h2>Contact Info</h2>

                <ul class="alt">
                    <li><span class="fa fa-envelope-o"></span> <a href="#">ytarik.ipekci@gmail.com</a></li>
                    <li><span class="fa fa-phone"></span> +90 0534 589 9250</li>
                    <li><span class="fa fa-map-pin"></span> Maltepe/Istanbul/Turkey</li>
                </ul>

                <h2>Follow Us</h2>

                <ul class="icons">
                    <li><a href="https://twitter.com/kuntohaise" class="icon style2 fa-twitter"><span class="label">Twitter</span></a>
                    </li>
                    <li><a href="https://www.facebook.com/Voquel/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a>
                    </li>
                    <li><a href="https://www.instagram.com/tarikipek.ci/" class="icon style2 fa-instagram"><span
                                class="label">Instagram</span></a></li>
                    <li><a href="https://www.instagram.com/tarikipek.ci/" class="icon style2 fa-linkedin"><span
                                class="label">LinkedIn</span></a></li>
                </ul>
            </section>

            <ul class="copyright">
                <li>Copyright © 2020 Bookraria</li>
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
