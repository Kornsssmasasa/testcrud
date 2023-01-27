<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eponent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('person.index') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('person.index') }}">CRUD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('pagefib') }}">Fibonacci</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('pageExpo') }}">Exponent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('pageRecu') }}">Recursive</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <center>
            <h1>Exponent</h1>
        </center>
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card ">
                    <div class="card-body">
                       
        
                            <form method="post" action="{{ route('calculate') }}">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example1">กรอกเลข</label>
                                    <input type="number" name="number" id="number" class="form-control" />
        
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form1Example1">กรอกเลขยกกำลัง</label>
                                    <input type="number" name="power" id="power" class="form-control" />
        
                                </div>
        
                                <button class="btn btn-primary" type="submit">ผลลัพธ์</button>
                            </form>
        
                        
                    </div>
                </div>
            </div>
        </div>
     
        <center>
            @if (isset($result))
                <h1>ผลลัพธ์: {{ $result_str }} = {{ $result }}</h1>
            @endif
        </center>

    </div>
</body>

</html>
