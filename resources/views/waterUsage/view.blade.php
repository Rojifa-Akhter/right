<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View waterUsage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin-bottom: 60px;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 60px;
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
        <h1 class="mt-5 mb-4">View waterUsage</h1>
        <div class="mb-3 input-group">
            <form method="post" action="{{ route('update_waterUsage') }}" onsubmit="return validateForm()">
                @csrf
                <div class="mb-3 row">
                    <label for="field_id">Field Name</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="field_id" name="field_id" value="{{ optional($waterUsage_info->field)->name }}" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="water_source_id" class="form-label">Water Source Name</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="water_source_id" name="water_source_id" value="{{ optional($waterUsage_info->waterSource)->name }}" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="date">Date</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="date" name="date" value="{{ $waterUsage_info->date }}" readonly>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="quantity">Quantity</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $waterUsage_info->quantity }}" readonly>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('waterUsage_list') }}" class="btn btn-primary">Go Back</a>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">© 2024 waterUsage. All rights reserved.</span>
        </div>
    </footer>

</body>

</html>
