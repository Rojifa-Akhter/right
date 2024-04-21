
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
        body {
            margin-bottom: 60px;
            /* Height of the footer */
        }
  </style>
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
        <h1 class="mt-5 mb-4">Add Field</h1>
        <div class="mb-3 input-group">
            <form method="post" action="{{ route('field_add_action') }}" onsubmit="return validateForm()" >
                @csrf
                <div class="mb-3 row">
                  <label for="name">Field Name</label>
                  <div class="form-group">
                    <input type="text" autocomplete="off" class="form-control" id="name" name="name" placeholder="Enter Field Name">
                    <span id="nameError" class="text-danger"></span>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="location_id" class="form-label">City Name</label>
                  <div class="form-group">
                  <select name="location_id" id="location_id" class="form-select">
                      <option value="">Select Location</option>
                      <!-- Loop through location and populate options -->
                        @foreach($locations as $id => $city_name)
                        <option value="{{ $id }}">{{ $city_name }}</option>
                        @endforeach
                  </select>
              </div>
              </div>   
              
                <div class="mb-3 row">
                  <label for="area">Area</label>
                  <div class="form-group">
                    <input type="text" autocomplete="off" class="form-control" id="area" name="area" placeholder="Enter Field area">
                    <span id="areaError" class="text-danger"></span>
                  </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                     <a href="{{ route('field_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
                    
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
<script>
      
  function validateForm() {
    var inputs = [
    { id: "name", name: "Field Name" },
    { id: "location", name: "Location" },
    { id: "area", name: "Area" },
    
    ];

    var firstInvalidInput = null; // Variable to store the first invalid input

inputs.forEach(function (input) {
  var value = document.getElementById(input.id).value.trim();
  var errorElement = document.getElementById(input.id + "Error");

  errorElement.innerText = "";

  if (value === "") {
    errorElement.innerText = "* Please enter the " + input.name;
    if (!firstInvalidInput) {
      firstInvalidInput = document.getElementById(input.id);
    }
    document.getElementById(input.id).classList.add("is-invalid");
  } else {
    document.getElementById(input.id).classList.remove("is-invalid");
  }
});

// Set focus to the first invalid input, if any
if (firstInvalidInput) {
  firstInvalidInput.focus();
  return false; // Prevent form submission
}

return true; // Proceed with form submission
}

</script>
</body>

</html>