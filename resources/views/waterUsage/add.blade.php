<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add waterUsage</title>
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
            <a class="navbar-brand" href="#">waterUsage</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-5 mb-4">Add waterUsage</h1>
        <div class="mb-3 input-group">
            <form method="post" action="{{ route('waterUsage_add_action') }}" onsubmit="return validateForm()" >
                @csrf
                <div class="mb-3 row">
                    <label for="field_id" class="form-label">Field Name</label>
                    <div class="form-group">
                    <select name="field_id" id="field_id" class="form-select">
                        <option value="">Select Field</option>
                        <!-- Loop through fields and populate options -->
                        @foreach($fields as $field)
                            <option value="{{ $field->id }}">{{ $field->name }}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                <div class="mb-3">
                    <label for="water_source_id" class="form-label">Water Source Name</label>
                    <div class="form-group">
                    <select name="water_source_id" id="water_source_id" class="form-select">
                        <option value="">Select Water Source</option>
                        <!-- Loop through water sources and populate options -->
                        @foreach($waterSources as $waterSource)
                            <option value="{{ $waterSource->id }}">{{ $waterSource->name }}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                <div class="mb-3 row">
                  <label for="date">Date</label>
                  <div class="form-group">
                  <input type="date" autocomplete="off" class="form-control" id="date" name="date" placeholder="Enter date">
                  <span id="dateError" class="text-danger"></span>
                  </div>
                </div> 
                <div class="mb-3 row">
                    <label for="quantity">Quantity</label>
                    <div class="form-group">
                    <input type="text" autocomplete="off" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity">
                    <span id="quantityError" class="text-danger"></span>
                    </div>
                  </div>  

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                     <a href="{{ route('waterUsage_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
                    
                </div>
              </form>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">© 2024 waterUsage. All rights reserved.</span>
        </div>
    </footer>
    <script>
        function validateForm() {
            var fieldId = document.getElementById('field_id').value.trim();
            var waterSourceId = document.getElementById('water_source_id').value.trim();
            var date = document.getElementById('date').value.trim();
            var quantity = document.getElementById('quantity').value.trim();

            if (fieldId === '' || waterSourceId === '' || date === '' || quantity === '') {
                alert('Please fill in all fields.');
                return false;
            }

            return true;
        }
    </script>
</body>

</html>
