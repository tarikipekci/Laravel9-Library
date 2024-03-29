<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="{{asset('assets')}}/admin/img/user.png" class="img-thumbnail"/>

                    <div class="inner-text">
                        {{Auth::user()->name}}
                        <br/>
                        <a href="/logoutuser" style="color: #720e9e" class="text-uppercase">Logout</a>
                        <br>
                        <small>Last Login : 2 Weeks Ago </small>
                    </div>
                </div>

            </li>

            <li class="nav-item">

                <a href="/admin" class="nav-link"><i class="nav-icon fa fa-home" style="color: maroon"></i>Dashboard</a>


            </li>

            <li>
                <a href="#"><i class="fa fa-shopping-cart"></i>Order <span class="fa fa-shopping-bag"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{@route('admin.order.index', ['slug' => 'New'])}}"><i class="fa fa-th"
                                                                                        style="color: yellowgreen"></i>New
                            Orders</a>
                    </li>
                    <li>
                        <a href="{{@route('admin.order.index', ['slug' => 'Accepted'])}}"><i class="fa fa-th " style="color: black"></i>Accepted
                            Orders</a>
                    </li>
                    <li>
                        <a href="{{@route('admin.order.index', ['slug' => 'Shipped'])}}"><i class="fa fa-th " style="color: purple"></i>Shipped Orders</a>
                    </li>

                    <li>
                        <a href="{{@route('admin.order.index', ['slug' => 'Cancelled'])}}"><i class="fa fa-th" style="color:yellow"></i>Cancelled Orders</a>
                    </li>

                    <li>
                        <a href="{{@route('admin.order.index', ['slug' => 'Completed'])}}"><i class="fa fa-th" style="color:deeppink"></i>Completed
                            Orders</a>
                    </li>

                </ul>

            <li>
                <a href="/admin/category"><i class="fa fa-table" style="color: #00CA79"></i>Categories</a>
            </li>

            <li>
                <a href="/admin/product"><i class="fa fa-coffee" style="color: dodgerblue"></i>Products</a>
            </li>
            <li>
                <a href="/admin/comment"><i class="fa fa-comment " style="color: brown"></i>Comments</a>
            </li>
            <li>
                <a href="/admin/faq"><i class="fa fa-question " style="color: orangered"></i>FAQ</a>
            </li>
            <li>
                <a href="{{route('admin.message.index')}}"><i class="fa fa-send "
                                                              style="color: #b3d4fc"></i>Messages</a>
            </li>

            <li>
                <a href="/admin/user"><i class="fa fa-user" style="color: #8499e7"></i>Users</a>
            </li>

            <li>
                <a href="/admin/setting"><i class="fa fa-space-shuttle"></i>Settings</a>
            </li>
        </ul>


    </div>

</nav>
<!-- /. NAV SIDE  -->
