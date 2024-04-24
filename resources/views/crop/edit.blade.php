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

                <h1 style="margin:50px; margin-left: 20%;">Edit Crop</h1>
                <div class="content-wrapper">
                    <form action="{{ route('updateCrop') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Crop Name</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $crop_info->id }}">
                            <input type="text" autocomplete="off" class="form-control" id="name" name="name"
                               value="{{ $crop_info->name }}">
                            <span id="nameError" class="error-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" autocomplete="off" class="form-control" id="description" name="description"
                               value="{{ $crop_info->description }}">
                            <span id="descriptionError" class="error-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="soil_id" class="form-label">Soil Type</label>
                            <select name="soil_id" id="soil_id" class="form-select">
                            <option value="">Select Soil Type</option>
                            @foreach($soils as $soils)
                            <option value="{{ $soils->id }}" {{ $soils->id == $crop_info->soil_id ? 'selected' : '' }}>{{ $soils->soil_type }}</option>
                            @endforeach
                        </select>
                    
                        </div>
                        <div class="form-group">
                            <label for="location_id" class="form-label">Location</label>
                            <select name="location_id" id="location_id" class="form-select">
                            <option value="">Select Location</option>
                            @foreach($locations as $locations)
                            <option value="{{ $locations->id }}" {{ $locations->id == $crop_info->location_id ? 'selected' : '' }}>{{ $locations->city_name }}</option>
                            @endforeach
                        </select>
                    
                        </div>
                        <div class="form-group">
                            <label for="season_id" class="form-label">Season</label>
                            <select name="season_id" id="season_id" class="form-select">
                            <option value="">Select Season</option>
                            @foreach($seasons as $seasons)
                            <option value="{{ $seasons->id }}" {{ $seasons->id == $crop_info->season_id ? 'selected' : '' }}>{{ $seasons->name }}</option>
                            @endforeach
                        </select>
                    
                        </div>
                        <div class="form-group">
                            <label for="water_id" class="form-label">Water Source</label>
                            <select name="water_id" id="water_id" class="form-select">
                            <option value="">Select Water Source</option>
                            @foreach($waters as $waters)
                            <option value="{{ $waters->id }}" {{ $waters->id == $crop_info->water_id ? 'selected' : '' }}>{{ $waters->source_name }}</option>
                            @endforeach
                        </select>
                    
                        </div>
                        

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('crop_list') }}"><button type="button" class="btn btn-secondary">Go Back</button></a>
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
