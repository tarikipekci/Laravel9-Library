@extends('layouts.home')

@section('title','User ShopCart')


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
                <h1>User ShopCart</h1>
            </div>

            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12"

                        <div class="input-checkbox">

                            <div class="order-summary clearfix">
                                <div class="section-title">
                                    <h3 class="title">ShopCart List</h3>

                                </div>
                                <table class="shopping-cart-table table">
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th></th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Amount</th>
                                        <th class="text-right">Remove</th>

                                    </tr>


                                    </thead>
                                    <tbody>
                                    @php($total = 0)
                                    @foreach($data as $rs)
                                        <tr>
                                            <td class="thumb"><img src="{{Storage::url($rs->product->image)}}" alt=""
                                                                   style="height: 200px"></td>
                                            <td class="details">
                                                <a href="#">{{$rs->product->title}}</a>
                                                <ul>
                                                    <li><span>Page: {{$rs->product->page}}</span></li>
                                                    <li><span>{{$rs->product->keywords}}</span></li>
                                                </ul>
                                            </td>
                                            <td class="price text-center"><strong>${{$rs->product->price}}</strong><br>
                                                <del class="font-weak">
                                            </td>
                                            <td>
                                                <form action="{{route('shopcart.update', ['id' => $rs->id])}}"
                                                      method="post">
                                                    @csrf
                                                    <input name="quantity" class="input" type="number"
                                                           value="{{$rs->quantity}}" min="1"
                                                           max="{{$rs->product->quantity}}" onchange="this.form">

                                                </form>
                                            </td>


                                            <td class="text-right">
                                                <a href="{{route('shopcart.destroy' , ['id' => $rs->id])}}"
                                                   class="main-btn icon-btn"
                                                   onclick="return confirm('Deleting !! Are you sure ?')"><i
                                                        class="fa fa-close"></i></a>
                                            </td>
                                        </tr>
                                        @php($total += $rs->product->price * $rs->quantity)
                                    @endforeach
                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th class="empty" colspan="3"></th>
                                        <th>TOTAL</th>
                                        <th colspan="2" class="total">${{$total}}</th>
                                    </tr>
                                    </tfoot>
                                </table>
                                <div class="pull-right">
                                    <form action="{{route('shopcart.order')}}" method="post">
                                        @csrf
                                        <input name="total" value="{{$total}}" type="hidden">
                                        <button type="submit" class="primary-btn">Place Order</button>
                                    </form>

                                </div>
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
@endsection


