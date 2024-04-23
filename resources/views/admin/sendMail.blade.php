<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.css')
  
    <style>
        .form-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group {
    margin-bottom: 15px;
}

.form-label {
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 4px;
    box-sizing: border-box;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
}

.btn-primary:hover {
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
                <div class="form-container"> <!-- Wrap the form with this div -->
                    <h1 style="text-align: center;">Mail send to {{ $data1->name }}</h1>
                    <form action="{{ url('mail',$data1->id) }}" method="Post">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Greeting</label>
                            <input type="text" name="greeting" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Main Body</label>
                            <textarea name="body" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Action Text</label>
                            <input type="text" name="action_text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Action URL</label>
                            <input type="text" name="action_url" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">End Line</label>
                            <input type="text" name="endline" class="form-control">
                        </div>
                
                        <div class="form-group" style="text-align: center;">
                            <button type="submit" class="btn btn-primary">Send Email</button>
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
