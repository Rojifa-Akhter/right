<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.css')
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
                <div class="container">
                    <h1 class="mt-5 mb-4">Update Expert data</h1>

                    <form action="{{ url('/updateAgriExpert', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="form-group mb-3">
                            <label for="name">Expert Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Expert Name"
                                value="{{ $data->name }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="speciality">Speciality</label>
                            <input type="text" name="speciality" class="form-control"
                                placeholder="Enter speciality" value="{{ $data->speciality }}">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">Old Image</label>
                            <div class="form-group">
                                <img src="expertimage/{{ $data->image }}" alt="">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">New Image</label>
                            <input type="file" name="image" class="form-control-file" name="image">
                        </div>

                        <div class="form-group mb-3">
                            <input type="submit" value="Update Expert" class="btn btn-primary">
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
