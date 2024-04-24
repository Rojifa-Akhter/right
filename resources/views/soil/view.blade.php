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
            margin-bottom: 10px; /* Add spacing between input fields */
        }

        button[type="submit"],
        button[type="button"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px; /* Add spacing between buttons */
        }

        button[type="submit"]:hover,
        button[type="button"]:hover {
            background-color: #0056b3;
        }

        /* Additional custom styling */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333; /* Adjust label color */
        }

        .card-footer {
            text-align: right;
            margin-top: 20px; /* Add spacing above the footer */
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

                <h1 style="margin:50px; margin-left: 20%;">View Soil</h1>
                <div class="content-wrapper">
                    <form action="{{ route('update_soil') }}" method="post" class="form-inline">
                        @csrf

                        <div class="mb-3">
                            <label for="soil_type">Soil Type</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $soil_info->id }}">
                            <input type="text" autocomplete="off" class="form-control" id="soil_type" name="soil_type"
                                placeholder="Enter Soil Type" value="{{ $soil_info->soil_type }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="pH">PH</label>
                            <input type="text" autocomplete="off" class="form-control" id="pH" name="pH"
                                placeholder="Enter pH" value="{{ $soil_info->pH }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nitrogen">Nitrogen</label>
                            <input type="text" autocomplete="off" class="form-control" id="nitrogen" name="nitrogen"
                                placeholder="Enter nitrogen" value="{{ $soil_info->nitrogen }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="phosphorus">Phosphorus</label>
                            <input type="text" autocomplete="off" class="form-control" id="phosphorus" name="phosphorus"
                                placeholder="Enter phosphorus" value="{{ $soil_info->phosphorus }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="potassium">Potassium</label>
                            <input type="text" autocomplete="off" class="form-control" id="potassium" name="potassium"
                                placeholder="Enter potassium" value="{{ $soil_info->potassium }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="magnesium">Magnesium</label>
                            <input type="text" autocomplete="off" class="form-control" id="magnesium" name="magnesium"
                                placeholder="Enter magnesium" value="{{ $soil_info->magnesium }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="calcium">Calcium</label>
                            <input type="text" autocomplete="off" class="form-control" id="calcium" name="calcium"
                                placeholder="Enter calcium" value="{{ $soil_info->calcium }}" readonly>
                        </div>

                        <div class="card-footer">
                            <a href="{{ route('soil_list') }}"> <button type="button" class="btn btn-primary">Go Back</button> </a>
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
