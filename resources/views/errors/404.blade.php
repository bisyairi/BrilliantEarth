@extends('layouts.app')

@section('content')
    <!-- Breadcrumbs Area Start -->
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-single">
                        <ul class="breadcrumbs">
                            <li><a href="/" title="Return to Home">
                                Home
                            </a></li>
                            <li>
                                <span>></span>
                            </li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Area End -->
    <!-- 404 Error Page Start -->
    <div class="error-text-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="error-text text-center">
                        <img alt="" src="img/404.png">
                        <h1>OPPS! PAGE NOT FOUND</h1>
                        <a href="/">BACK TO HOME PAGE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- 404 Error Page End -->
@endsection