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
              <div class="container">
                @if (session()->has('message'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                {{ session()->get('message') }}
                </div>
                    
                @endif
                <h1 class="mt-5 mb-4">Crop list</h1>
                <div class="col-md-1">
                    <a style="" href="{{ route('addCrop') }}"><button type="button" class="btn btn-block btn-primary">Add</button></a>
                </div>
                <div class="mb-3 input-group">

                  <form action="" method="post" class="form-inline">
                      @csrf
                      <div class="d-flex">
                          <div class="card-body">
                              <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr> 
                                  <th>Id</th>                        
                                  <th>Name</th>
                                  <th>Description</th>
                                  <th>Location</th>
                                  <th>Soil Type</th>
                                  <th>Water Source</th>
                                  <th>Season</th>
                                  
                                  <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php 
                      if(!empty($crops)){
                      foreach($crops as $com){  ?>
                          <tr>
                            <td>{{ $com->id}}</td>
                            <td>{{ $com->name}}</td>
                            <td>{{ $com->description}}</td>
                            <td>{{ $com->location->city_name}}</td>
                            <td>{{ $com->soil->soil_type}}</td>
                            <td>{{ $com->water->source_name}}</td>
                            <td>{{ $com->season->name}}</td>
                            
                          
                            <td>
                              {{-- <a href="{{route('view_location', $com->id)}}"><button type="button" class="btn btn-sm btn-primary">View</button></a> --}}
                              <a href="{{route('editCrop', $com->id)}}"><button type="button" class="btn btn-sm btn-success">Edit</button></a>
                              <a href="{{ route('deleteCrop', ['id' => $com->id]) }}" onclick="return confirm('Are you sure you want to delete this field?')">Delete</a>

                          </td>
                          </tr>
                      <?php 
                        }
                        
                      } ?>    
                    
                    </tfoot>
                                </tbody>
                              </table>
                      </div>
                  </form>
        
        </div>
               
    </div>

  
  
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

