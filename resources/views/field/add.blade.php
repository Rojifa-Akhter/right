<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Field</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin-bottom: 60px;
            /* Height of the footer */
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 60px;
            /* Height of the footer */
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Field</a>
        </div>
    </nav>

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

    <footer class="footer">
        <div class="container">
            <span class="text-muted">© 2024 Field. All rights reserved.</span>
        </div>
    </footer>
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
       {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8WOJ3uAOTaeJSwR7gmnCii7_tLVBJDf4" async="" defer=""></script> --}}

      
      
      {{-- <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,
      b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,
      u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)
      e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);
      a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));
      a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));
      d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg", v: "weekly"});</script>
  --}}
</body>

</html>
