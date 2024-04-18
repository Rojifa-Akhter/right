<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>location</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin-bottom: 60px; /* Height of the footer */
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 60px; /* Height of the footer */
            background-color: #f5f5f5;
        }

        p.card-text {
            margin-top: -10px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">location</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-5 mb-4">View location</h1>
        <div class="mb-3 input-group">
            <form action="{{ route('update_location') }}" method="post" class="form-inline">
                @csrf

                <div class="form-group">
                    <label for="country_name">Country Name</label>
                    <input type="hidden"  class="form-control" id="id" name="id"  value="{{ $location_info->id }}" >
                    <input type="text" autocomplete="off" class="form-control" id="country_name" name="country_name" 
                    placeholder="Enter Country Name" value="{{ $location_info->country_name }}" readonly>  
                </div>
                <div class="mb-3 row">
                    <label for="district_name">District Name</label>
                    <input type="text" autocomplete="off" class="form-control" id="district_name" name="district_name"
                         placeholder="Enter District Name" value="{{ $location_info->district_name }}" readonly>  
                </div>
                <div class="mb-3 row">
                    <label for="city_name">City Name</label>  
                    <input type="text" autocomplete="off" class="form-control" id="city_name" name="city_name"
                         placeholder="Enter City Name" value="{{ $location_info->city_name }}" readonly>  
                </div>

                <div class="card-footer">
                    <a href="{{ route('location_list') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>

                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">© 2024 location. All rights reserved.</span>
        </div>
    </footer>
</body>

</html>
