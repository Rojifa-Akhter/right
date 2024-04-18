<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soil</title>
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
            <a class="navbar-brand" href="#">Soil</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-5 mb-4">Soil List</h1>
        <div class="mb-3 input-group">
            <form action="{{ route('update_soil') }}" method="post" class="form-inline">
                @csrf

                <div class="mb-3 row">
                    <label for="soil_type">Soil Type</label>
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $soil_info->id }}">
                    <input type="text" autocomplete="off" class="form-control" id="soil_type" name="soil_type"
                        placeholder="Enter Soil Type" value="{{ $soil_info->soil_type }}">
                    <span id="soil_typeError" class="text-danger"></span>
                </div>
                <div class="mb-3 row">
                    <label for="pH">PH</label>
                    <input type="text" autocomplete="off" class="form-control" id="pH" name="pH" 
                        placeholder="Enter pH" value="{{ $soil_info->pH }}">
                    <span id="pHError" class="text-danger"></span>
                </div>
                <div class="mb-3 row">
                    <label for="nitrogen">Nitrogen</label>
                    <input type="text" autocomplete="off" class="form-control" id="nitrogen" name="nitrogen" 
                        placeholder="Enter nitrogen" value="{{ $soil_info->nitrogen }}">
                    <span id="nitrogenError" class="text-danger"></span>
                </div> 
                <div class="mb-3 row">
                    <label for="phosphorus">Phosphorus</label>
                    <input type="text" autocomplete="off" class="form-control" id="phosphorus" name="phosphorus"
                         placeholder="Enter phosphorus" value="{{ $soil_info->phosphorus }}">
                    <span id="phosphorusError" class="text-danger"></span>
                </div>
                <div class="mb-3 row">
                    <label for="potassium">Potassium</label>
                    <input type="text" autocomplete="off" class="form-control" id="potassium" name="potassium"
                         placeholder="Enter Potassium" value="{{ $soil_info->potassium }}">
                    <span id="potassiumError" class="text-danger"></span>
                </div>
                <div class="mb-3 row">
                    <label for="magnesium">Magnesium</label>
                    <input type="text" autocomplete="off" class="form-control" id="magnesium" name="magnesium"
                         placeholder="Enter magnesium" value="{{ $soil_info->magnesium }}">
                    <span id="magnesiumError" class="text-danger"></span>
                </div>
                <div class="mb-3 row">
                    <label for="calcium">Calcium</label>
                    <input type="text" autocomplete="off" class="form-control" id="calcium" name="calcium"
                         placeholder="Enter calcium" value="{{ $soil_info->potassium }}">
                    <span id="calciumError" class="text-danger"></span>
                </div> 

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('soil_list') }}"><button type="button" class="btn btn-primary">Go
                            Back</button></a>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">© 2024 Soil. All rights reserved.</span>
        </div>
    </footer>
</body>

</html>
