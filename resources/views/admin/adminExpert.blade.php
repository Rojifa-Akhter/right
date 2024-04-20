<!DOCTYPE html>
<html lang="en">

<head>
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
        <div class="content-wrapper">
            <form action="{{ url('/uploadExpert') }}" method="Post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                  <label for="name">Name</label>
                  <div class="form-group">
                    <input style="color: green" type="text" name="name" required="" placeholder="Enter Name">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label for="speciality">Speciality</label>
                    <div class="form-group">
                      <input style="color: green" type="text" name="speciality" required="" placeholder="Enter speciality">
                    </div>
                  </div>  
              
                <div class="mb-3 row">
                  
                    <input type="file" name="image" required="">
   
                </div>
                <div>
                    <button type="submit" class="btn btn-primary" value="save">Save</button>
                     {{-- <a href="{{ route('field_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a> --}}
                    
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

