<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create List</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="{{asset('assets')}}/admin/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{asset('assets')}}/admin/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{asset('assets')}}/admin/index.html">COMPANY NAME</a>
        </div>

        <div class="header-right">

            <a href="{{asset('assets')}}/admin/message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
            <a href="{{asset('assets')}}/admin/message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
            <a href="{{asset('assets')}}/admin/login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src="{{asset('assets')}}/admin/img/user.png" class="img-thumbnail" />

                        <div class="inner-text">
                            Jhon Deo Alex
                            <br />
                            <small>Last Login : 2 Weeks Ago </small>
                        </div>
                    </div>

                </li>


                <li>
                    <a  href="{{asset('assets')}}/admin/index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-desktop "></i>UI Elements <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{asset('assets')}}/admin/panel-tabs.html"><i class="fa fa-toggle-on"></i>Tabs & Panels</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/notification.html"><i class="fa fa-bell "></i>Notifications</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/progress.html"><i class="fa fa-circle-o "></i>Progressbars</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/buttons.html"><i class="fa fa-code "></i>Buttons</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/icons.html"><i class="fa fa-bug "></i>Icons</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/wizard.html"><i class="fa fa-bug "></i>Wizard</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/typography.html"><i class="fa fa-edit "></i>Typography</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/grid.html"><i class="fa fa-eyedropper "></i>Grid</a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-yelp "></i>Extra Pages <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{asset('assets')}}/admin/invoice.html"><i class="fa fa-coffee"></i>Invoice</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/pricing.html"><i class="fa fa-flash "></i>Pricing</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/component.html"><i class="fa fa-key "></i>Components</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/social.html"><i class="fa fa-send "></i>Social</a>
                        </li>

                        <li>
                            <a href="{{asset('assets')}}/admin/message-task.html"><i class="fa fa-recycle "></i>Messages & Tasks</a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="{{asset('assets')}}/admin/table.html"><i class="fa fa-flash "></i>Data Tables </a>

                </li>
                <li>
                    <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href="{{asset('assets')}}/admin/form.html"><i class="fa fa-desktop "></i>Basic </a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/form-advance.html"><i class="fa fa-code "></i>Advance</a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="{{asset('assets')}}/admin/gallery.html"><i class="fa fa-anchor "></i>Gallery</a>
                </li>
                <li>
                    <a href="{{asset('assets')}}/admin/error.html"><i class="fa fa-bug "></i>Error Page</a>
                </li>
                <li>
                    <a href="{{asset('assets')}}/admin/login.html"><i class="fa fa-sign-in "></i>Login Page</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap "></i>Multilevel Link <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#"><i class="fa fa-bicycle "></i>Second Level Link</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-flask "></i>Second Level Link</a>
                        </li>
                        <li>
                            <a href="#">Second Level Link<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#"><i class="fa fa-plus "></i>Third Level Link</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-comments-o "></i>Third Level Link</a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </li>

                <li>
                    <a class="active-menu" href="{{asset('assets')}}/admin/blank.html"><i class="fa fa-square-o "></i>Blank Page</a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add Category</h1>
                    <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Category Elements
                            </div>
                            <div class="panel-body">
                                <form role="form" action="/admin/category/store" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>

                                        <input class="form-control" type="text" placeholder="Title" name="title">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input class="form-control" type="text" name="keywords" placeholder="Key Word">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" type="text" name="description" placeholder="Description">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                    <label>Image</label>
                                    <div class = "custom-file">
                                        <input type = "file" class="custom-file-input">
                                        <label class="custom-file-label"></label>
                                    </div>
                                        <div class ="form-group">
                                            <label>Status</label>
                                            <select class ="form-control">
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                  </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        This is a free responsive admin under cc3.0 license, so you can use it for personal and commercial use.
                        <br />
                        Enjoy this admin and for more please keep looking <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<div id="footer-sec">
    &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
</div>
<!-- /. FOOTER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{asset('assets')}}/admin/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('assets')}}/admin/js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{asset('assets')}}/admin/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{asset('assets')}}/admin/js/custom.js"></script>


</body>
</html>
