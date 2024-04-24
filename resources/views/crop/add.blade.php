<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
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

        /* Additional custom styling */
        label {
            margin-bottom: 5px;
            display: block;
        }

        .error-message {
            color: red;
            font-size: 12px;
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

                <h1 style="margin:50px; margin-left: 20%;">Add Crop</h1>
                <div class="content-wrapper">
                    <form method="post" action="{{ route('addCrop_action') }}" onsubmit="return validateForm()">
                        @csrf
                        <div class="form-group">
                            <label for="name">Crop Name</label>
                            <input type="text" autocomplete="off" class="form-control" id="name" name="name" placeholder="Enter Crop Name">
                            <span class="error-message" id="nameError"></span>
                        </div>
                        <div class="form-group">
                            <label for="description">description</label>
                            <input type="text" autocomplete="off" class="form-control" id="description" name="description" placeholder="Enter description">
                            <span class="error-message" id="descriptionError"></span>
                        </div>
                        <div class="form-group">
                            <label for="soil_id">Soil Type</label>
                            <select id="soil_id" name="soil_id">
                                @foreach($soils as $soil)
                                <option value="{{ $soil->id }}">{{ $soil->soil_type }}</option>
                                @endforeach
                            </select><br>
                        </div>
                        <div class="form-group">
                            <label for="water_id">Water Source</label>
                            <select id="water_id" name="water_id">
                                @foreach($waters as $water)
                                <option value="{{ $water->id }}">{{ $water->source_name }}</option>
                                @endforeach
                            </select><br>
                        </div>
                        <div class="form-group">
                            <label for="season_id">Season Name</label>
                            <select id="season_id" name="season_id">
                                @foreach($seasons as $season)
                                <option value="{{ $season->id }}">{{ $season->name }}</option>
                                @endforeach
                            </select><br>
                        </div>
                        <div class="form-group">
                            <label for="location_id">Location</label>
                            <select id="location_id" name="location_id">
                                @foreach($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->city_name }}</option>
                                @endforeach
                            </select><br>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('crop_list') }}"><button type="button" class="btn btn-primary">Go Back</button></a>
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
