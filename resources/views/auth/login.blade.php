@extends('layout')

@section('content')
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Login Form</strong></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">E-mail</label>
                                    <input type="text" name="form-email" placeholder="E-mail" class="form-email form-control" id="form-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password">
                                </div>
                                <button type="submit" class="btn">Sign in!</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 social-login">
                        <h3>...or login with:</h3>
                        <div class="social-login-buttons">
                            <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                            <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                            <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                <i class="fa fa-google-plus"></i> Google Plus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection