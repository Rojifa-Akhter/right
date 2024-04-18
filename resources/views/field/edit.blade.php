<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Field</title>
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
            <a class="navbar-brand" href="#">Field</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-5 mb-4">Field List</h1>
        <div class="mb-3 input-group">
            <form action="{{ route('update_field') }}" method="post" class="form-inline">
                @csrf

                <div class="form-group">
                    <label for="name">Field Name</label>
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $field_info->id }}">
                    <input type="text" autocomplete="off" class="form-control" id="name" name="name"
                        placeholder="Enter Field Name" value="{{ $field_info->name }}">
                    <span id="nameError" class="text-danger"></span>
                </div>
                <div class="mb-3">
                    <label for="location_id" class="form-label">Location</label>
                    <div class="form-group">
                        <select name="location_id" id="location_id" class="form-select">
                            <option value="">Select Location</option>
                            <!-- Loop through water sources and populate options -->
                            @foreach($locations as $location)
                            <option value="{{ $location->id }}" {{ $location->id == $field_info->Location_id ? 'selected' : '' }}>{{ $location->city_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="area">Area</label>
                    <input type="text" autocomplete="off" class="form-control" id="area" name="area" 
                        placeholder="Enter Area" value="{{ $field_info->area }}">
                    <span id="areaError" class="text-danger"></span>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('field_list') }}"><button type="button" class="btn btn-primary">Go
                            Back</button></a>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">© 2024 Field. All rights reserved.</span>
        </div>
    </footer>
</body>

</html>
