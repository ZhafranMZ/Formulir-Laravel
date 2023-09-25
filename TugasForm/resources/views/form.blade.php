<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content='width=device-width, initial-scale=1.0'>
        <title>Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        @vite(['resources/sass/app.css', 'resources/js/app.js'])

    </head>
    <body class="bg-info-subtle">
        <div class="container">
            <div class="py-5 text-center">
                <h2>FORM PENGISIAN</h2>
                <h3>Silakan isi form ini dengan baik dan benar!</h3>
            </div>
            <div class="row g-3 bg-info rounded">
                <form method="POST" action="/form" class="p-5" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email", name="email">
                        @error('email')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        @error('password')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        @error('name')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="float">Number 2.50 < x < 99.99</label>
                        <input type="text" class="form-control" id="float" placeholder="50.00" name="float">
                        @error('float')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        @error('image')
                        <div class="alert alert-danger fs-6 text">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>