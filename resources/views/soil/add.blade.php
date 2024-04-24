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
                <h1 style="margin:50px; margin-left: 20%;">Add Soil </h1>
                <div class="content-wrapper">
              <form method="post" action="{{ route('soil_add_action') }}" onsubmit="return validateForm()" >
                @csrf
                <div class="mb-3 row">
                  <label for="soil_type">Soil Type</label>
                  <div class="form-group">
                    <input type="text" autocomplete="off" class="form-control" id="soil_type" name="soil_type" placeholder="Enter Soil Type">
                    <span id="soil_typeError" class="text-danger"></span>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="pH">PH</label>
                  <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control" id="pH" name="pH" placeholder="Enter PH">
                  <span id="pHError" class="text-danger"></span>
                  </div>
                </div>  
  
                <div class="mb-3 row">
                  <label for="nitrogen">Nitrogen </label>
                  <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control" id="nitrogen" name="nitrogen" placeholder="Enter nitrogen">
                  <span id="nitrogenError" class="text-danger"></span>
                  </div>
                </div>
                
                <div class="mb-3 row">
                  <label for="phosphorus">Phosphorus</label>
                  <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control" id="phosphorus" name="phosphorus" placeholder="Enter phosphorus">
                  <span id="phosphorusError" class="text-danger"></span>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="potassium">Potassium</label>
                  <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control" id="potassium" name="potassium" placeholder="Enter potassium">
                  <span id="potassiumError" class="text-danger"></span>
                  </div>  
                </div>
  
                <div class="mb-3 row">
                  <label for="magnesium">Magnesium </label>
                  <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control" id="magnesium" name="magnesium" placeholder="Enter magnesium">
                  <span id="magnesiumError" class="text-danger"></span>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="calcium">Calcium </label>
                  <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control" id="calcium" name="calcium" placeholder="Enter calcium">
                  <span id="calciumError" class="text-danger"></span>
                  </div>
                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                     <a href="{{ route('soil_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
                    
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
