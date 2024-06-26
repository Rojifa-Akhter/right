<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
                <h1 style="margin:50px; margin-left: 20%;">Update Expert</h1>
                <div class="content-wrapper">
                    <form action="{{ url('editExpert',$data1->id) }}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <input type="hidden" class="form-control" name="id" value="{{ $data1->id }}">
                            
                            <div class="col-sm-10">
                                <input type="text" autocomplete="off" class="form-control" name="name"
                                placeholder="Enter Name" value="{{ $data1->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="speciality" class="col-sm-2 col-form-label">Speciality</label>
                            <div class="col-sm-10">
                                <input type="text" autocomplete="off" class="form-control" id="speciality" name="speciality"
                                placeholder="Enter speciality" value="{{ $data1->speciality }}">
                             </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-sm-2 col-form-label">Current Image</label>
                            <div class="col-sm-10">
                                <img src="expertimage/{{ $data1->image }}" alt="">
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
