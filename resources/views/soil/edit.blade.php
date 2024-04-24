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

        .card-footer {
            text-align: center; /* Center buttons */
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

                <h1 style="margin:50px; margin-left: 20%;">Edit Soil</h1>
                <div class="content-wrapper">
                    <form action="{{ route('update_soil') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="soil_type">Soil Type</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $soil_info->id }}">
                            <input type="text" autocomplete="off" class="form-control" id="soil_type" name="soil_type"
                                placeholder="Enter Soil Type" value="{{ $soil_info->soil_type }}">
                            <span id="soil_typeError" class="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="pH">pH</label>
                            <input type="text" autocomplete="off" class="form-control" id="pH" name="pH" 
                                placeholder="Enter pH" value="{{ $soil_info->pH }}">
                            <span id="pHError" class="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="nitrogen">Nitrogen</label>
                            <input type="text" autocomplete="off" class="form-control" id="nitrogen" name="nitrogen" 
                                placeholder="Enter nitrogen" value="{{ $soil_info->nitrogen }}">
                            <span id="nitrogenError" class="error-message"></span>
                        </div> 

                        <div class="form-group">
                            <label for="phosphorus">Phosphorus</label>
                            <input type="text" autocomplete="off" class="form-control" id="phosphorus" name="phosphorus"
                                placeholder="Enter phosphorus" value="{{ $soil_info->phosphorus }}">
                            <span id="phosphorusError" class="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="potassium">Potassium</label>
                            <input type="text" autocomplete="off" class="form-control" id="potassium" name="potassium"
                                placeholder="Enter Potassium" value="{{ $soil_info->potassium }}">
                            <span id="potassiumError" class="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="magnesium">Magnesium</label>
                            <input type="text" autocomplete="off" class="form-control" id="magnesium" name="magnesium"
                                placeholder="Enter magnesium" value="{{ $soil_info->magnesium }}">
                            <span id="magnesiumError" class="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="calcium">Calcium</label>
                            <input type="text" autocomplete="off" class="form-control" id="calcium" name="calcium"
                                placeholder="Enter calcium" value="{{ $soil_info->potassium }}">
                            <span id="calciumError" class="error-message"></span>
                        </div> 

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('soil_list') }}" class="btn btn-primary">Go Back</a>
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
</body>
</html>
