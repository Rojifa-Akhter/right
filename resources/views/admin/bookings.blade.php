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
            <h1 class="mt-5 mb-4">View Booking</h1>
            <div class="col-md-1">
              {{-- <a style="" href="{{ route('field_add') }}"><button type="button" class="btn btn-block btn-primary">Add</button></a> --}}
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
                          <th>Expert Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Expert Name</th>
                          <th>Speciality</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($books as $books){ ?>
                          <tr>
                            <td>{{ $books->id}}</td>
                            <td>{{ $books->expert_id}}</td>
                            <td>{{ $books->name}}</td>
                            <td>{{ $books->email}}</td>
                            <td>{{ $books->phone}}</td>
                            <td>{{ $books->date}}</td>
                            <td>
                                @if ( $books->status == 'approved')
                                  <span style="color: rgb(10, 108, 146)">Approved</span> 
                                @endif 
                                @if ( $books->status == 'rejected')
                                <span style="color: red">Rejected</span> 
                                @endif 
                                @if ( $books->status == 'waiting')
                                <span style="color: rgb(143, 143, 7)">Waiting</span> 
                                @endif 


                            </td>
                            <td>{{ $books->expert->name}}</td>
                            <td>{{ $books->expert->speciality}}</td>
                            <td>
                              <img src="expertimage/{{ $books->expert->image }}" alt="">
                            </td>
                            
                            <td>
                            <div class="btn-group" role="group">
                                <a href="{{ url('approvedBook',$books->id) }}" class="btn btn-success mr-2">Approved</a> 
                                <a href="{{ url('rejectedBook',$books->id) }}" class="btn btn-warning mr-2">Rejected</a> 
                                <a href="{{ url('/deleteBookings', $books->id) }}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Delete</a>
                            </div>
                            </td>


                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
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
</body>

</html>
