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
        <h1 class="mt-5 mb-4">Blog</h1>
        <div class="col-md-1">
            <a style="" href="{{ route('blog_add') }}"><button type="button" class="btn btn-block btn-primary">Add</button></a>
        </div>
        <div class="mb-3 input-group">
            <form action="" method="post" class="form-inline">
                @csrf
                <div class="d-flex">
                    <label for="">Blog Title</label>
                    <input type="text" name="title">
                </div>
                <div class="d-flex">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="d-flex">
                    <label for="">Upload Image</label>
                    <input type="file" name="image">
                </div>
                <div class="d-flex">
                    <input class="btn btn-primary" type="submit" value="Add Blog">
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