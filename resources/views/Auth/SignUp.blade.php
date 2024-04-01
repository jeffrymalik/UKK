<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ArtVista</title>
    <link rel="stylesheet" href="{{ asset('css/Auth/SignUp.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- Cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <div class="img-box">
            <img src="{{ asset('img/Carousel/18.jpg') }}" alt="" srcset="">
            <h1></h1>
        </div>
        <div class="content-box">
            <div class="content">
                <h2>Sign Up</h2>
                <p>If you already have an account register <br> You can <a href="/login">Login here !</a></p>
            </div>
            <div class="form-box">
                @if ($errors->any())
                    <div class="mt-2 alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/register" method="POST">
                    @csrf
                    <div class="input-box">
                        <label for="">Name</label>
                        <input type="text" placeholder="Enter your username" name="name" id="">
                    </div>
                    <div class="input-box">
                        <label for="">Email</label>
                        <input type="email" placeholder="Example@email.com" name="email" id="">
                    </div>
                    <div class="input-box">
                        <label for="">Username</label>
                        <input type="text" placeholder="Enter your username" name="username" id="">
                    </div>
                    <div class="input-box">
                        <label for="">Password</label>
                        <input type="password" placeholder="At least 8 characters" name="password" id="">
                    </div>
                    <div class="input-box">
                        <label for="">Confirm Password</label>
                        <input type="password" placeholder="Confirm your password" name="password_confirmation"
                            id="">
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Sign Up" name="" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
