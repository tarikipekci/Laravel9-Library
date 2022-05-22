<!-- Wrapper -->
<div id="wrapper">

    <div class="pull-left">
        <ul class="header-btns">
            <li class="header-account dropdown default-dropdown">
                @auth
                    <div  role="button" data-toggle="dropdown" aria-expanded="true">
                        <div class="header-btns-icon">
                            <i class="fa fa-user-o"></i>

                        </div>
                        <strong class="text-uppercase">{{Auth::user()->name}}<i
                                class="fa fa-caret-down"></i></strong>
                    </div>
                    <a href="/logoutuser" class="text-uppercase">Logout</a>
                @endauth
                @guest
                    <a href="/loginuser" class="text-uppercase">Login</a> / <a href="registeruser"
                                                                               class="text-uppercase">Join</a>
                @endguest
            </li>

        </ul>

    </div>
    <!-- Header -->
    <header id="header">
        <div class="inner">
            <!-- Logo -->
            <a href="/#" class="logo">
                <span href="#" class="fa fa-book"></span> <span class="title">Online Book Borrow Website!</span>
            </a>

            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>
    </header>
</div>
