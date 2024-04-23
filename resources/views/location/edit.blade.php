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

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
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

                <h1 style="margin:50px; margin-left: 20%;">Edit Location</h1>
                <div class="content-wrapper">
                    <form action="{{ route('update_location') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="country_name">Country Name</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $location_info->id }}">
                            <input type="text" autocomplete="off" class="form-control" id="country_name" name="country_name"
                                placeholder="Enter Country Name" value="{{ $location_info->country_name }}">
                            <span id="country_nameError" class="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="district_name">District Name</label>
                            <input type="text" autocomplete="off" class="form-control" id="district_name" name="district_name" 
                                placeholder="Enter District Name" value="{{ $location_info->district_name }}">
                            <span id="district_nameError" class="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="city_name">City Name</label>
                            <input type="text" autocomplete="off" class="form-control" id="city_name" name="city_name" 
                                placeholder="Enter City Name" value="{{ $location_info->city_name }}">
                            <span id="city_nameError" class="error-message"></span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('location_list') }}"><button type="button" class="btn btn-secondary">Go Back</button></a>
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
