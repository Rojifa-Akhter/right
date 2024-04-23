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
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                {{ session()->get('message') }}
                </div>
                    
                @endif
                <h1 style="margin:50px; margin-left: 20%;">Update User</h1>
                <div class="content-wrapper">
                    <form action="{{ url('updateUser',$user->id) }}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">User Name</label>
                            <input type="hidden" class="form-control" name="id" value="{{ $user->id }}">
                            
                            <div class="col-sm-10">
                                <input type="text" autocomplete="off" class="form-control" name="name"
                                value="{{ $user->name }}">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">User Email</label>
                            <div class="col-sm-10">
                                <input type="email" autocomplete="off" class="form-control" name="email"
                                value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">User Phone</label>
                            <div class="col-sm-10">
                                <input type="text" autocomplete="off" class="form-control" name="phone"
                                value="{{ $user->phone }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">User Type</label>
                            <div class="col-sm-10">
                                <input type="text" autocomplete="off" class="form-control" name="usertype"
                                value="{{ $user->usertype }}">
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
