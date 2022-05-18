<!DOCTYPE HTML>
<html>
<head>
    <title>BOOKRARIA || Products</title>
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
            <a href="index.html" class="logo">
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
    <nav id="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="http://127.0.0.1:8000/">Home</a></li>

            <li><a href="products.html" class="active">Products</a></li>

            <li><a href="checkout.html">Checkout</a></li>

            <li>
                <a href="#" class="dropdown-toggle">About</a>

                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="terms.html">Terms</a></li>
                </ul>
            </li>

            <li><a href="contact.html">Contact Us</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>{{$data->title}}<br> Category:{{$data->category->title}}<span class="pull-right"><del>{{$data->price*2.10}}$</del> {{$data->price}}$</span>
            </h1>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" class="img-fluid" alt="">
                    </div>

                    <div class="col-md-7">
                        <p>{!! $data->description !!}</p>


                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Extra 1</label>

                                <div class="form-group">
                                    <select>
                                        <option value="0">Extra 1</option>
                                        <option value="1">Extra 2</option>
                                        <option value="2">Extra 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label class="control-label">Quantity</label>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="submit" class="primary" value="Add to Cart">
                                    </div>
                                </div>
                            </div>
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



































