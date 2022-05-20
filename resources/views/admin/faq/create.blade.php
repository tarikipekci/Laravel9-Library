<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta charset="utf-8"/>


    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Create faq</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/css/font-awesome.css" rel="stylesheet"/>
    <!--CUSTOM BASIC STYLES-->
    <link href="{{asset('assets')}}/admin/css/basic.css" rel="stylesheet"/>
    <!--CUSTOM MAIN STYLES-->
    <link href="{{asset('assets')}}/admin/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
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
            <a class="navbar-brand" href="{{route('admin.index')}}">BOOKRARIA</a>
        </div>

        <div class="header-right">

            <a href="{{asset('assets')}}/admin/message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i
                    class="fa fa-envelope-o fa-2x"></i></a>
            <a href="{{asset('assets')}}/admin/message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i
                    class="fa fa-bars fa-2x"></i></a>
            <a href="{{asset('assets')}}/admin/login.html" class="btn btn-danger" title="Logout"><i
                    class="fa fa-exclamation-circle fa-2x"></i></a>


        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src="{{asset('assets')}}/admin/img/user.png" class="img-thumbnail"/>

                        <div class="inner-text">
                            Jhon Deo Alex
                            <br/>
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
                            <a href="{{asset('assets')}}/admin/panel-tabs.html"><i class="fa fa-th"
                                                                                   style="color: yellowgreen"></i>New
                                Orders</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/notification.html"><i class="fa fa-th "
                                                                                     style="color: black"></i>Accepted
                                Orders</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/progress.html"><i class="fa fa-th "
                                                                                 style="color: purple"></i>Shipping
                                Orders</a>
                        </li>
                        <li>
                            <a href="{{asset('assets')}}/admin/buttons.html"><i class="fa fa-th"
                                                                                style="color:deeppink;"></i>Completed
                                Orders</a>
                        </li>

                    </ul>

                <li>
                    <a href="/admin/category"><i class="fa fa-table" style="color: #00CA79"></i>Categories</a>
                </li>

                <li>
                    <a href="/admin/faq"><i class="fa fa-coffee" style="color: dodgerblue"></i>faqs</a>
                </li>
                <li>
                    <a href="/admin/comment"><i class="fa fa-comment " style="color: brown"></i>Comments</a>
                </li>
                <li>
                    <a href="{{route('admin.faq.index')}}"><i class="fa fa-question "
                                                              style="color: orangered"></i>FAQ</a>
                </li>
                <li>
                    <a href="{{route('admin.message.index')}}"><i class="fa fa-send " style="color: #b3d4fc"></i>Messages</a>
                </li>

                <li>
                    <a href="/admin/user"><i class="fa fa-user" style="color: #8499e7"></i>Users</a>
                </li>

                <li>
                    <a href="/admin/social"><i class="fa fa-archive " style="color: #ffe8a1"></i>Social</a>
                </li>
                <li>
                    <a href="/admin/social"><i></i></a>
                </li>

                <li>
                    <a href="/admin/social"><i></i></a>
                </li>
                <li>
                    <a href="/admin/setting"><i class="fa fa-space-shuttle"></i>Settings</a>
                </li>
            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add Question</h1>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                FAQ Elements
                            </div>
                            <div class="panel-body">
                                <form role="form" action="{{route('admin.faq.store')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label>Question</label>

                                        <input class="form-control" type="text" placeholder="Question" name="question">
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Answer</label>
                                        <textarea class="form-control" id="answer" name="answer"></textarea>

                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#answer'))
                                                .then(editor => {
                                                    console.log(editor);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected>0</option>
                                            <option>1</option>
                                            <option>0</option>

                                        </select>
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

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<div id="footer-sec">
    &copy; 2022 BOOKRARIA | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
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
