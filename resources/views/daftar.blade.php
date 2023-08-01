<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>mencoba</title>
</head>
<body>
    @include('template.nav')
    
    <div class="container mt-4">
        <h1 class="text-center">Daftar</h1><hr>
        <div class="card col-6 mx-auto shadow-lg">
            <div class="card-body">
                <form action="" class="form-group" method="POST">
                    @csrf
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control">
                    <label for="">Password</label>
                    <input type="Password" name="password" class="form-control">
                    <label for="">Email</label>
                    <input type="Email" name="email" class="form-control">
                    <button class="btn btn-dark form-control mt-2">Buat Akun</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>