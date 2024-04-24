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

                <h1 style="margin:50px; margin-left: 20%;">Edit Water</h1>
                <div class="content-wrapper">
                    <form action="{{ route('update_water') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="source_name">Water Source</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="{{ $water_info->id }}">
                            <input type="text" autocomplete="off" class="form-control" id="source_name" name="source_name"
                                placeholder="Enter water Type" value="{{ $water_info->source_name }}">
                            
                        </div>

                        <div class="form-group">
                            <label for="capacity">capacity</label>
                            <input type="text" autocomplete="off" class="form-control" id="capacity" name="capacity" 
                                placeholder="Enter capacity" value="{{ $water_info->capacity }}">
                            <span id="capacityError" class="error-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="quantity">quantity</label>
                            <input type="text" autocomplete="off" class="form-control" id="quantity" name="quantity" 
                                placeholder="Enter quantity" value="{{ $water_info->quantity }}">
                            <span id="quantityError" class="error-message"></span>
                        </div> 

                        <div class="form-group">
                            <label for="date">date</label>
                            <input type="date" autocomplete="off" class="form-control" id="date" name="date"
                                placeholder="Enter date" value="{{ $water_info->date }}">
                            <span id="dateError" class="error-message"></span>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('water_list') }}" class="btn btn-primary">Go Back</a>
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
