<!-- Wrapper -->
<div id="wrapper">
<!-- Footer -->
    <!-- Footer -->
    <footer id="footer">
          <div class="inner">
            <section>
                <ul class="icons">
                    <li><a href="https://twitter.com/kuntohaise" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="https://www.facebook.com/Voquel/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="https://www.instagram.com/tarikipek.ci/" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="https://www.linkedin.com/in/tar%C4%B1k-ipek%C3%A7i-514a261bb/" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                </ul>

                &nbsp;
            </section>

            <ul class="copyright">
                <li>Copyright © 2022 BOOKRARIA </li>
                <li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
            </ul>
              <li class="header-cart dropdown default-dropdown">
                  <a href="{{route('shopcart.index')}}" class="dropdown-toggle" data-toggle="dropdown"
                     aria-expanded="true">
                      <div class="header-btns-icon">
                          <i class="fa fa-shopping-cart"></i>
                          <span class="qty">{{\App\Http\Controllers\ShopCartController::countshopcart()}}</span>
                      </div>

                      <strong class="text-uppercase">My Cart</strong>
                      <br>
                      <span>35.20$</span>
                  </a>
                  <div class="custom-menu">
                      <div id="shopping-cart">
                          <div class="shopping-cart-list">
                              <div class="product product-widget">
                                  <div class="product-thumb">
                                      <img src="{{asset('assets')}}/img/deneme.jpg" alt="">

                                  </div>
                                  <div class="product-body">
                                      <h3 class="product-price">32.50$ <span class="qty">x3</span></h3>
                                      <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                  </div>
                                  <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                              </div>

                          </div>

                          <div class="fa-shopping-cart-btns">
                              <a href="{{route('shopcart.index')}}" class="main-btn">View Cart</a>
                              <button class="primary-btn">Checkout<i class="fa fa-arrow-circle-right"></i>
                              </button>

                          </div>
                      </div>


                  </div>


              </li>
        </div>

    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
