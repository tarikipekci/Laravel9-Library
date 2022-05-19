@extends('layouts.home')

@section('title','Bookraria || Find Your Dream Book')
<link rel="icon" type="image/x-icon" href={{Storage::url($setting->icon)}}>

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

                <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>

        </nav>

    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12"
                {!! $setting->contact !!}
            </div>
        </div>

    </div>

    </div>

    <div id="wrapper">

        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="index.html" >Home</a></li>

                <li><a href="products.html">Products</a></li>

                <li><a href="checkout.html" class="active">Checkout</a></li>

                <li>
                    <a href="#" class="dropdown-toggle">About</a>

                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="blog.html" >Blog</a></li>
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
                <h1>Checkout</h1>
            </div>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <form method="post" action="#">
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
                                <input type="text" name="field-2" id="field-2" placeholder="Name">
                            </div>

                            <div class="field half">
                                <input type="text" name="field-3" id="field-3" placeholder="Email">
                            </div>

                            <div class="field half">
                                <input type="text" name="field-4" id="field-4" placeholder="Phone">
                            </div>

                            <div class="field half">
                                <input type="text" name="field-5" id="field-5" placeholder="Address 1">
                            </div>

                            <div class="field half">
                                <input type="text" name="field-6" id="field-6" placeholder="Address 2">
                            </div>

                            <div class="field half">
                                <input type="text" name="field-7" id="field-7" placeholder="City">
                            </div>

                            <div class="field half">
                                <input type="text" name="field-8" id="field-8" placeholder="State">
                            </div>

                            <div class="field half">
                                <input type="text" name="field-7" id="field-7" placeholder="Zip">
                            </div>

                            <div class="field half">
                                <select>
                                    <option value="">-- Choose Country--</option>
                                    <option value="">-- Choose Country --</option>
                                    <option value="">-- Choose Country --</option>
                                    <option value="">-- Choose Country --</option>
                                </select>
                            </div>

                            <div class="field half">

                                <select>
                                    <option value="">-- Choose Payment Method--</option>
                                    <option value="">-- Choose Payment Method--</option>
                                    <option value="">-- Choose Payment Method--</option>
                                    <option value="">-- Choose Payment Method--</option>
                                </select>
                            </div>

                            <div class="field half">
                                <input type="text" name="field-9" id="field-9" placeholder="Captcha">
                            </div>

                            <div class="field">
                                <div>
                                    <input type="checkbox" id="checkbox-4">

                                    <label for="checkbox-4">
                                        I agree with the <a href="terms.html" target="_blank">Terms &amp; Conditions</a>
                                    </label>
                                </div>
                            </div>


                            <div class="field half text-right">
                                <ul class="actions">
                                    <li><input type="submit" value="Finish" class="primary"></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
                <section>
    </div>
@endsection


