<!DOCTYPE html>
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
      {{-- {{ print_r($data) }} --}}


    <div class="container">
        <h1 class="mt-5 mb-4">Field List</h1>
        <div class="col-md-1">
            <a style="" href="{{ route('field_add') }}"><button type="button" class="btn btn-block btn-primary">Add</button></a>
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
                            <th>Location</th>
                            <th>Area</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php 
                if(!empty($fields)){
                foreach($fields as $com){  ?>
                    <tr>
                      <td>{{ $com->id}}</td>
                      <td>{{ $com->name}}</td>
                      <td>{{ $com->location_id}}</td>
                      <td>{{ $com->area}}</td>
                     
                      <td>
                        {{--api key== AIzaSyB8WOJ3uAOTaeJSwR7gmnCii7_tLVBJDf4 --}}
                        <a href="{{route('view_field', $com->id)}}"><button type="button" class="btn btn-sm btn-primary">View</button></a>
                        <a href="{{route('edit_field', $com->id)}}"><button type="button" class="btn btn-sm btn-success">Edit</button></a>
                        <a href="{{ route('delete_field', ['id' => $com->id]) }}" onclick="return confirm('Are you sure you want to delete this field?')">Delete</a>

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
    <br><br>

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
@include('admin.footer')
</body>

</html>