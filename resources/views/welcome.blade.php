<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="flex px-5 py-5 mt-5">
            <div class="text-center">
                <h1>My Basecamp</h1>
            </div>
            <div class="text-center">
                <img class="w-50" src="https://cdni.iconscout.com/illustration/premium/thumb/login-page-4468581-3783954.png" alt="">
            </div>
            <div class="d-flex flex-row justify-content-center">
                <a href="/login" class="btn btn-lg btn-primary mx-3">Login</a>
                <a href="/register" class="btn btn-lg btn-primary mx-3">Register</a>
            </div>
        </div>
    </div>
</body>
</html>
