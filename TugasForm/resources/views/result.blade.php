<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content='width=device-width, initial-scale=1.0'>
        <title>Form Result</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        @vite(['resources/sass/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-info-subtle">
        <div class="container">
            <div class="py-5 text-center">
                <h2>SUBMITTED FORM</h2>
                <h3>Berikut adalah jawaban anda</h3>
            </div>
            <div class="container g-3 bg-success rounded">
                @foreach($results as $key => $result)
                    @if ($loop->last)
                        <div style="text-align: center;">
                            <img src="{{ asset('storage/images/'.$result) }}" style="height: 360;width: 480;">
                        </div>
                    @endif
                    <div class="row align-items-center">
                        <div class="col-md-8 offset-md-2 text-light text-center">
                            <h3>
                                {{ $key }} = {{ $result }}
                            <h3>
                        </div>
                    </div>
                @endforeach
                @if (session('status'))
                    <div class="row align-items-center">
                        <div class="col-md-4 offset-md-4 alert alert-info bg-light text-center">
                            <h4>{{ session('status') }}</h4>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>