<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>My Blog</title>
    @include('home.css')
    <style>
        /* Custom CSS for form design */
        .container {
            margin-top: 50px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color:#292020;
        }

        .table img {
            max-width: 100px;
            height: auto;
        }

       

        h1 {
            font-size: 80px; /* Increase font size for h1 */
            margin-bottom: 30px; /* Add some bottom margin */
            color: #230c0c; /* Change text color */
            text-align: center; /* Center align the heading */
            text-transform: uppercase; /* Convert text to uppercase */
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
        <div class="content-wrapper">
            <div class="container">
                @if (session()->has('message'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{ session()->get('message') }}
                </div>
                @endif
                <h1 class="mt-5 mb-4" style="font-size: 70px;">All Posts</h1>
                <div class="mb-3 input-group">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Post By</th>
                                <th>Post Status</th>
                                <th>User Type</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mblog as $mblog)
                            <tr>
                                <td>{{ $mblog->title }}</td>
                                <td>{{ $mblog->name }}</td>
                                <td>{{ $mblog->post_status }}</td>
                                <td>{{ $mblog->usertype }}</td>
                                <td><img src="/postimage/{{ $mblog->image }}" alt=""></td>
                                <td>
                                    <a href="{{url('/edit_myBlog',$mblog->id)}}"><button type="button" class="btn btn-primary" style="background-color:rgb(3, 36, 36);">Edit</button></a>

                                    <a href="{{ url('/delete_myBlog', $mblog->id) }}"
                                        onclick="return confirm('Are you sure you want to delete this?')">
                                        <button type="button" class="btn btn-danger" style="background: red;">Delete</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Blog Page End-->

        <!--Site Footer Start-->
        @include('home.footer')
        <!--Site Footer End-->

    </div><!-- /.page-wrapper -->

    <!-- Mobile Nav Wrapper -->
    <div class="mobile-nav__wrapper">
        <!-- Mobile Nav Overlay -->
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <!-- Mobile Nav Content -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <!-- Logo Box -->
            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="143"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->
            <!-- Mobile Nav Contact -->
            <ul class="mobile-nav__contact list-unstyled">
                <li><i class="fa fa-envelope"></i><a href="mailto:needhelp@packageName__.com">needhelp@agrion.com</a>
                </li>
                <li><i class="fa fa-phone-alt"></i><a href="tel:666-888-0000">666 888 0000</a></li>
            </ul><!-- /.mobile-nav__contact -->
            <!-- Mobile Nav Social -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

</body>

</html>
