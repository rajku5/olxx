<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OLX | bech dalo sub kuchh</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
                <a href="" class="navbar-brand">OLX</a>

                <form action="" class="d-flex">
                    <input type="text" name="search" class="form-control">
                    <input type="submit" name="find" class="btn btn-success">
                </form>

                <li class="navbar-nav mx-auto">
                    <li class="nav-item"><a href="" class="nav-lnk">Home</a></li>
                    <li class="nav-item"><a href="{{route('insert')}}" class="nav-lnk">Insert</a></li>
                </li>
        </div>
</nav>

@section('content')

    
@show
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>