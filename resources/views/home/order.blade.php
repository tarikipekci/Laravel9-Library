<!DOCTYPE HTML>
<html>
<head>

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
    <div id="wrapper">
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

                <div class="image main">
                    <div class="inner">
                        <section>
                            @include('home.message')
                            <form method="post" action="{{route('borrow.storeorder')}}" class="clearfix">
                                <h1>Shipping Information</h1>
                                @csrf
                                <div class="fields">
                                    <div class="field half">
                                        <select>
                                            <option value="">-- Choose Title--</option>
                                            <option value="dr">Dr.</option>
                                            <option value="miss">Miss</option>
                                            <option value="mr">Mr.</option>
                                            <option value="mrs">Mrs.</option>
                                            <option value="ms">Ms.</option>
                                            <option value="other">Other</option>
                                            <option value="prof">Prof.</option>
                                            <option value="rev">Rev.</option>
                                        </select>
                                    </div>

                                    <div class="field half">
                                        <input type="text" name="name" id="field-2" value="{{Auth::user()->name}}" placeholder="Name && Surname">
                                    </div>

                                    <div class="field half">
                                        <input type="text" name="phone" id="field-4" placeholder="Phone Number">
                                    </div>

                                    <div class="field half">
                                        <input type="text" name="email" id="field-3" placeholder="Email">
                                    </div>

                                    <div class="field half">
                                        <input type="text" name="address" class="input" placeholder="Address">
                                    </div>

                                    <div class="field">
                                        <div>
                                            <input type="checkbox" id="checkbox-4">

                                            <label for="checkbox-4">
                                                I agree with the <a href="terms.html" target="_blank">Terms &amp;
                                                    Conditions</a>
                                            </label>
                                        </div>
                                    </div>


                                    <div class="field half text-right">
                                        <ul class="actions">
                                            <li><input type="submit" value="Send Message" class="primary"></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="ordering-methods">
                                        <div class="section-title">
                                            {{$days}}
                                            <h4 class="title">Payment Information</h4>
                                        </div>
                                        <div class="input-checkbox">
                                            <div class="field half">
                                                <input type="tel" name="holder" id="field-2" placeholder="Card Holder">
                                            </div>

                                            <div class="field half">
                                                <input class="input" type="email" name="number"
                                                       placeholder="Card Number">
                                            </div>

                                            <div class="field half">
                                                <input type="text" name="date" class="input" placeholder="Exp. Date">
                                            </div>

                                            <div class="field half">
                                                <input type="text" name="code" class="input"
                                                       placeholder="Security Code">
                                            </div>


                                        </div>
                                    </div>
                                </div>


                            </form>
                        </section>
                    </div>
                </div>

                <!-- Products -->
                <section class="tiles">


                </section>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <ul class="icons">
                        <li><a href="https://twitter.com/kuntohaise" class="icon style2 fa-twitter"><span class="label">Twitter</span></a>
                        </li>
                        <li><a href="https://www.facebook.com/Voquel/" class="icon style2 fa-facebook"><span
                                    class="label">Facebook</span></a></li>
                        <li><a href="https://www.instagram.com/tarikipek.ci/" class="icon style2 fa-instagram"><span
                                    class="label">Instagram</span></a></li>
                        <li><a href="https://www.linkedin.com/in/tar%C4%B1k-ipek%C3%A7i-514a261bb/"
                               class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                    </ul>

                    &nbsp;
                </section>

                <ul class="copyright">
                    <li>Copyright © 2022 BOOKRARIA</li>
                    <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
                </ul>
            </div>
        </footer>

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
