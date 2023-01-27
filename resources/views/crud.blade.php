<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test CRUD</title>
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
        <a href="{{ route('person.create') }}" class="btn btn-primary">Add person</a>

        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Tel</th>
                    <th scope="col">Address</th>
                    <th scope="col">Edit/Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($person as $infor)
                    <tr>
                        <td>{{ $infor->id }}</td>
                        <td>{{ $infor->person }}</td>
                        <td>{{ $infor->tel }}</td>
                        <td>{{ $infor->address }}</td>
                        <td><a href="/edit/{{ $infor->id }}"aria-current="true" class="btn btn-warning">Edit</a>
                            <a href="/delete/{{ $infor->id }}"aria-current="true" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach

        </table>
        {!! $person->links('pagination::bootstrap-5')  !!}

    </div>

</body>

</html>
