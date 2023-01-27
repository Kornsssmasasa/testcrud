<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                        <a class="nav-link active" aria-current="page" href="{{ route('person.index') }}">CRUD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('pagefib') }}">Fibonacci</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('pageExpo') }}">Exponent</a>
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
            <h1>แก้ไขข้อมูลบุคคล</h1>
        </center>
        <a href="{{ route('person.index') }}" class="btn btn-primary">Back</a>
        <div class="card mt-3">
            <div class="card-body">
                <form class="mt-3" action="{{ route('person.update', $person->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <input type="hidden" value="{{ $person->id }}" name="id">
                        <label class="form-label">Person Name</label>
                        <input type="text" name="person" value="{{ $person->person }}" class="form-control"
                            placeholder="Person Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telephone number</label>
                        <input type="number" name="tel" value="{{ $person->tel }}" class="form-control"
                            placeholder="telephone number">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea type="text" name="address"  class="form-control"
                            placeholder="Address">{{ $person->address }}</textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
