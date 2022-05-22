<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOOKRARIA ADMIN LOGIN PAGE</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
<div class="container">
    <div class="row text-center " style="padding-top:100px;">
        <div class="col-md-12">
            <img src="{{asset('assets')}}/admin/img/deneme.jpg" />
        </div>
    </div>
    <div class="row ">

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

            <div class="panel-body">
                <form role="form" action="{{route('loginadmincheck')}}" method="post">
                    @csrf
                    <hr/>
                    <h5>Enter Details to Login</h5>
                    @error('error')
                    <div class="form-group input-group" style="width: 100%">
                        <div class="alert alert-danger" style="margin-bottom: 5px; text-align: center">
                            <strong>{{$message}}</strong>
                        </div>
                    </div>
                    @enderror

                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Your Password" />
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" /> Remember me
                        </label>
                        <span class="pull-right">
                                                   <a href="index.html" >Forget password ? </a>
                                            </span>
                    </div>

                    <button type="submit" href="index.html" class="btn btn-primary ">Login Now</button>
                    <hr />
                    Not register ? <a href="/registeruser" >Register a new membership </a>
                </form>
            </div>

        </div>


    </div>
</div>

</body>
</html>
