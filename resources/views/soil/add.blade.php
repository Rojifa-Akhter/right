<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add soil</title>
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
            <a class="navbar-brand" href="#">Soil</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-5 mb-4">Add soil</h1>
        <div class="mb-3 input-group">
            <form method="post" action="{{ route('soil_add_action') }}" onsubmit="return validateForm()" >
                @csrf
                <div class="mb-3 row">
                  <label for="soil_type">Soil Type</label>
                  <div class="form-group">
                    <input type="text" autocomplete="off" class="form-control" id="soil_type" name="soil_type" placeholder="Enter Soil Type">
                    <span id="soil_typeError" class="text-danger"></span>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="pH">PH</label>
                  <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control" id="pH" name="pH" placeholder="Enter PH">
                  <span id="pHError" class="text-danger"></span>
                  </div>
                </div>  
  
                <div class="mb-3 row">
                  <label for="nitrogen">Nitrogen </label>
                  <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control" id="nitrogen" name="nitrogen" placeholder="Enter nitrogen">
                  <span id="nitrogenError" class="text-danger"></span>
                  </div>
                </div>
                
                <div class="mb-3 row">
                  <label for="phosphorus">Phosphorus</label>
                  <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control" id="phosphorus" name="phosphorus" placeholder="Enter phosphorus">
                  <span id="phosphorusError" class="text-danger"></span>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="potassium">Potassium</label>
                  <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control" id="potassium" name="potassium" placeholder="Enter potassium">
                  <span id="potassiumError" class="text-danger"></span>
                  </div>  
                </div>
  
                <div class="mb-3 row">
                  <label for="magnesium">Magnesium </label>
                  <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control" id="magnesium" name="magnesium" placeholder="Enter magnesium">
                  <span id="magnesiumError" class="text-danger"></span>
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="calcium">Calcium </label>
                  <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control" id="calcium" name="calcium" placeholder="Enter calcium">
                  <span id="calciumError" class="text-danger"></span>
                  </div>
                </div>
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                     <a href="{{ route('soil_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
                    
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
        { id: "soil_type", name: "Soil Type" },
        { id: "pH", name: "PH" },
        { id: "nitrogen", name: "Nitrogen" },
        { id: "phosphorus", name: "Phosphorus" },
        { id: "potassium", name: "Potassium" },
        { id: "magnesium", name: "Magnesium" },
        { id: "calcium", name: "Calcium" },
    ];

    var firstInvalidInput = null; // Variable to store the first invalid input

    inputs.forEach(function (input) {
        var value = document.getElementById(input.id).value.trim();
        var errorElement = document.getElementById(input.id + "Error");

        errorElement.innerText = ""; // Clear previous error message

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
