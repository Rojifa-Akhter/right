<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        /* Custom CSS for form styling */
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

        /* Additional custom styling */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .card-footer {
            text-align: right;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('admin.nav')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            @include('admin.sidebar')
            <!-- partial -->
            <div class="main-panel">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{ session()->get('message') }}
                </div>
                @endif

                <h1 style="margin:50px; margin-left: 20%;">View Location</h1>
                <div class="content-wrapper">
            <form action="{{ route('update_season') }}" method="post" class="form-inline">
                @csrf

                <div class="form-group">
                    <label for="name">season Name</label>
                    <input type="hidden"  class="form-control" id="id" name="id"  value="{{ $season_info->id }}" >
                    <input type="text" autocomplete="off" class="form-control" id="name" name="name" placeholder="Enter Leave Name" value="{{ $season_info->name }}" readonly>
                  
                </div>

                <div class="card-footer">
                    <a href="{{ route('season_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>

                </div>
            </form>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('admin.footer')
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->

<!-- End custom js for this page-->
</body>

</html>
