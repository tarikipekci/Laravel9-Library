<!-- Wrapper -->
<div id="wrapper">
    <!-- Menu -->


    @php

        $mainCategories = \App\Http\Controllers\HomeController::mainCategorylist()

    @endphp

    <nav id="menu" class="category-nav" @if(!@isset($page)) show-on-click @endif>
        <h2>Menu</h2>
        <ul>

            <li><a href="index.html" class="active">Home</a></li>

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
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/slider-image-1-1920x700.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slider-image-2-1920x700.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slider-image-3-1920x700.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <br>
        <br>

        <div class="inner">
            <!-- About Us -->
            <header id="inner">
                <h1>Find your dream book!</h1>
                <p>Welcome to a new world full of unique books!</p>
            </header>

            <br>

            <h2 class="h2">Featured Products</h2>

            <!-- Products -->
            <div>


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


                        </article>

                    @endforeach


                </section>
            </div>
            <p class="text-center"><a href="products.html">More Books &nbsp;<i class="fa fa-long-arrow-right"></i></a>
            </p>

            <br>

            <div id="a" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#a" data-slide-to="0" class="active"></li>
                    <li data-target="#a" data-slide-to="1"></li>
                    <li data-target="#a" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    @foreach($sliderdata as $rs)
                        <div class="carousel-item @if($rs->id==$slide->id) active @endif">
                            <img class="d-block w-100" src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"
                                 alt="First slide">
                        </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#a" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#a" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <br>
            <h2 class="h2">COMMENTS</h2>

            <div class="row">
                <div class="col-sm-6 text-center">
                    <p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus
                            mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique,
                            delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas
                            reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

                    <p><strong> - John Doe</strong></p>
                </div>

                <div class="col-sm-6 text-center">
                    <p class="m-n"><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt delectus
                            mollitia, debitis architecto recusandae? Quidem ipsa, quo, labore minima enim similique,
                            delectus ullam non laboriosam laborum distinctio repellat quas deserunt voluptas
                            reprehenderit dignissimos voluptatum deleniti saepe. Facere expedita autem quos."</em></p>

                    <p><strong>- John Doe</strong></p>
                </div>
            </div>

            <p class="text-center"><a href="testimonials.html">Read More &nbsp;<i
                        class="fa fa-long-arrow-right"></i></a></p>

            <br>

            <h2 class="h2">Blog</h2>

            <div class="row">
                <div class="col-sm-4 text-center">
                    <img src="images/blog-1-720x480.jpg" class="img-fluid" alt=""/>

                    <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                    <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>

                <div class="col-sm-4 text-center">
                    <img src="images/blog-2-720x480.jpg" class="img-fluid" alt=""/>

                    <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                    <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>

                <div class="col-sm-4 text-center">
                    <img src="images/blog-3-720x480.jpg" class="img-fluid" alt=""/>

                    <h2 class="m-n"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>

                    <p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
                </div>
            </div>

            <p class="text-center"><a href="blog.html">Read More &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>


        </div>
    </div>
</div>
