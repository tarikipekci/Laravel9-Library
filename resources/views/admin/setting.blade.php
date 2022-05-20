<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Settings</title>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
            <a class="navbar-brand" href="index.html">BOOKRARIA</a>
        </div>

        <div class="header-right">

            <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i
                    class="fa fa-envelope-o fa-2x"></i></a>
            <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i
                    class="fa fa-bars fa-2x"></i></a>
            <a href="login.html" class="btn btn-danger" title="Logout"><i
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

                    <a href="{{route('admin.index')}}" class="nav-link"><i class="nav-icon fa fa-home"
                                                                           style="color: maroon"></i>Dashboard</a>


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
                    <a href="/admin/product"><i class="fa fa-coffee" style="color: dodgerblue"></i>Products</a>
                </li>
                <li>
                    <a href="/admin/comment"><i class="fa fa-comment " style="color: brown"></i>Comments</a>
                </li>
                <li>
                    <a href="/admin/faq"><i class="fa fa-question " style="color: orangered"></i>FAQ</a>
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
                    <h1 class="page-head-line">SETTINGS</h1>
                    <h1 class="page-subhead-line">Settings</h1>

                </div>
            </div>

                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Settings
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">General</a>
                                </li>
                                <li class=""><a href="#profile" data-toggle="tab" style="color: red">Smtp Email</a>
                                </li>
                                <li class=""><a href="#messages" data-toggle="tab" style="color: #0d6aad">Social Media</a>
                                </li>
                                <li class=""><a href="#settings" data-toggle="tab" style="color: #f0ad4e">About Us</a>

                                <li class=""><a href="#contact" data-toggle="tab" style="color: deeppink">Contact Page</a>

                                <li class=""><a href="#references" data-toggle="tab" style="color: #f0ad4e">References</a>

                                </li>
                            </ul>
                            <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                            <div class="tab-content">
                                @csrf
                                <div class="tab-pane fade active in" id="home">

                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                    <h4>General Tab</h4>

                                    <div class="form-group">
                                        <label>Title</label>

                                        <input type="text" id="title" name="title" value="{{$data->title}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Keywords</label>

                                        <input type="text" id="keywords" name="keywords" value="{{$data->keywords}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>

                                        <input type="text" id="description" name="description"
                                               value="{{$data->description}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Company</label>

                                        <input type="text" id="company" name="company" value="{{$data->company}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Address</label>

                                        <input type="text" id="address" name="address" value="{{$data->address}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Phone</label>

                                        <input type="text" id="phone" name="phone" value="{{$data->phone}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>

                                        <input type="text" id="email" name="email" value="{{$data->email}}"
                                               class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" name="status" style="">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Icon</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="icon">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Icon
                                                    File</label>
                                            </div>

                                        </div>


                                    </div>

                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <h4>Smtp Email Tab</h4>
                                    <div class="form-group">
                                        <label>Smtp Server</label>

                                        <input type="text" id="smtpserver" name="smtpserver"
                                               value="{{$data->smtpserver}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Smtp Email</label>

                                        <input type="text" id="smtpemail" name="smtpemail" value="{{$data->smtpemail}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Smtp Password</label>

                                        <input type="password" id="smtppassword" name="smtppassword"
                                               value="{{$data->smtppassword}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Smtp Port</label>

                                        <input type="number" id="smtpport" name="smtpport" value="{{$data->smtpport}}"
                                               class="form-control">
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Social Media Tab</h4>
                                    <div class="form-group">
                                        <label>Fax</label>

                                        <input type="text" id="fax" name="fax" value="{{$data->fax}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Facebook</label>

                                        <input type="text" id="facebook" name="facebook" value="{{$data->facebook}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Instagram</label>

                                        <input type="text" id="instagram" name="instagram" value="{{$data->instagram}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Twitter</label>

                                        <input type="text" id="twitter" name="twitter" value="{{$data->twitter}}"
                                               class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Youtube</label>

                                        <input type="text" id="youtube" name="youtube" value="{{$data->youtube}}"
                                               class="form-control">
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>About Us Tab</h4>
                                    <div class="form-group">
                                        <label>About Us</label>
                                        <label for="a"></label><textarea id="a" name="aboutus" class="form-control" role="tabpanel">{{$data->aboutus}}</textarea>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="contact" role="tabpanel">
                                    <h4>Contacts</h4>
                                    <div class="form-group">
                                        <label>Contacts Tab</label>
                                        <label for="b"></label><textarea id="b" name="contact" class="form-control">{{$data->contact}}</textarea>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="references">
                                    <h4>References Tab</h4>
                                    <div class="form-group">
                                        <label>References</label>

                                        <label for="c"></label><textarea id="c" name="references" class="form-control" role="tabpanel">{{$data->references}}</textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Setting</button>
                            </div>
                            </form>   </div>


                    </div>
                    <!-- /. ROW  -->
                    <div class="row">
                        <div class="col-md-12">

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

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#a').summernote()
            $('#b').summernote()
            $('#c').summernote()
        });
    </script>

</div>
</body>
</html>
