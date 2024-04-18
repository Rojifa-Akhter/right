<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Season</title>
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

    p.card-text {
        margin-top: -10px;
    }
    </style>
</head>

<body>

    {{-- {{ print_r($data) }} --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Season</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-5 mb-4">Season List</h1>
        <div class="col-md-1">
            <a style="" href="{{ route('season_add') }}"><button type="button" class="btn btn-block btn-primary">Add</button></a>
        </div>
        <div class="mb-3 input-group">
            <form action="" method="post" class="form-inline">
                @csrf
                <div class="d-flex">
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                          <tr> 
                            <th>Id</th>                        
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php 
                if(!empty($seasons)){
                foreach($seasons as $com){  ?>
                    <tr>
                      <td>{{ $com->id}}</td>
                      <td>{{ $com->name}}</td>
                     
                      <td>
                        <a href="{{route('view_season', $com->id)}}"><button type="button" class="btn btn-sm btn-primary">View</button></a>
                        <a href="{{route('edit_season', $com->id)}}"><button type="button" class="btn btn-sm btn-success">Edit</button></a>
                        <a href="{{ route('delete_season', ['id' => $com->id]) }}" onclick="return confirm('Are you sure you want to delete this season?')">Delete</a>

                    </td>
                    </tr>
                <?php 
                  }
                  
                } ?>    
              
              </tfoot>
                          </tbody>
                        </table>
                </div>
            </form>

        </div>
       
    </div>
    <br><br>
    <footer class="footer">
        <div class="container">
            <span class="text-muted">© 2024 Season. All rights reserved.</span>
        </div>
    </footer>
</body>

</html>