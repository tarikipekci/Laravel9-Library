<!-- Wrapper -->
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

    <footer id="footer">
        <div class="inner">
            <section>
                <h2>Contact Us</h2>
                <form method="post" action="{{route('storemessage')}}">
                    @include('home.message')
                    @csrf
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
                    <li><a href="https://www.linkedin.com/in/tar%C4%B1k-ipek%C3%A7i-514a261bb/"
                           class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                </ul>
            </section>

        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/main.js"></script>
</div>

