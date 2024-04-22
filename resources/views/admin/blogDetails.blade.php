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
                <h1 class="mt-5 mb-4">Blog Details</h1>
                <div class="col-md-1">
                     </div>
                <div class="mb-3 input-group">
                    <form action="" method="post" class="form-inline">
                        @csrf
                        <div class="d-flex">
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                  <thead>
                                  <tr> 
                                                           
                                    <th>Blog Title</th>
                                    <th>Write By</th>
                                    <th>Description</th>
                                    <th>User Type</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    <?php 
                        if(!empty($dblog)){
                        foreach($dblog as $dblog){  ?>
                            <tr>
                              
                              <td>{{ $dblog->title}}</td>
                              <td>{{ $dblog->name}}</td>
                              <td>{{ $dblog->description}}</td>
                              <td>{{ $dblog->usertype}}</td>
                              <td><img src="/postimage/{{ $dblog->image }}" alt=""></td>
                             
                              <td>
                                {{-- <!-- {{--api key== AIzaSyB8WOJ3uAOTaeJSwR7gmnCii7_tLVBJDf4 --}}
                                {{-- <a href=""><button type="button" class="btn btn-sm btn-primary">View</button></a> --}}
                                <div class="btn-group">
                                  <a href="{{ url('/editBlog', $dblog->id) }}" class="btn btn-warning mr-2">Edit</a> <!-- Added mr-2 for margin -->
                                  <a href="{{ url('/deleteBlog', $dblog->id) }}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Delete</a>
                              </div>
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

