<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>season</title>
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
            <a class="navbar-brand" href="#">season</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-5 mb-4">season List</h1>
        <div class="mb-3 input-group">
            <form action="{{ route('update_season') }}" method="post" class="form-inline">
                @csrf

                <div class="form-group">
                    <label for="name">season Name</label>
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $season_info->id }}">
                    <input type="text" autocomplete="off" class="form-control" id="name" name="name"
                        placeholder="Enter season Name" value="{{ $season_info->name }}">
                    <span id="nameError" class="text-danger"></span>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('season_list') }}"><button type="button" class="btn btn-primary">Go
                            Back</button></a>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">© 2024 season. All rights reserved.</span>
        </div>
    </footer>
</body>

</html>
