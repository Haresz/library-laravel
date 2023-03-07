<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background: linear-gradient(90deg, #010828 50%, #FFFFFF 50%);" >
    <div class="card mx-auto align-middle" style="width: 400px; margin-top: 15%; border: 5px solid #010828;">
        <div class="card-body">
            <h5 class="card-title text-center">Login first your account</h5>
        </div>
        <div class="mx-4">
            <x-input name="email" label="Email" :value="old('email')" />
            <x-input name="password" type="password" label="Password" :value="old('password')" />
            <div class="d-flex justify-content-between" style="margin-top: -10px;">
                <div class="d-flex">
                    <x-input name="rememberMe" type="checkbox" :value="old('rememberMe')" />
                    <label class="mt-3 ml-2" for="rememberMe">
                        Remember me
                    </label>
                </div>
                <a class="mt-3" style="text-color: #364FF6;" href="#">Forgot password</a>
            </div>
            <button type="submit" style="width: 100%; background: #364FF6;" class="btn rounded-pill text-light my-4">Submit</button>
        </div>
    </div>
</body>
</html>