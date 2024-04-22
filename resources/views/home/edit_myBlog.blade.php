<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Blog</title>
    @include('home.css')
    <style>
        /* Custom CSS for form styling */
        .form-label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
        @include('home.header')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Blog Page Start-->
        <div class="main-panel">
            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{ session()->get('message') }}
            </div>
                
            @endif
            <h1 style="margin:50px; margin-left: 20%; font-size:70px;">Update Blog</h1>
            <div class="content-wrapper">
                <form action="{{ url('update_myBlog',$mblog->id) }}" method="Post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <input type="hidden" class="form-control" name="id" value="{{ $mblog->id }}">
                        
                        <div class="col-sm-10">
                            <input type="text" autocomplete="off" class="form-control" name="title"
                            value="{{ $mblog->title }}">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Current Image</label>
                        <div class="col-sm-10">
                            <img src="postimage/{{ $mblog->image }}" alt="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Upload Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
           
            <!-- partial -->
        </div>
        <!--Blog Page End-->

        <!--Site Footer Start-->
        @include('home.footer')
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="143"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@agrion.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
