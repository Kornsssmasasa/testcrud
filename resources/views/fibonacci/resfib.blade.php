<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fibonacci</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <a href="{{ route('pagefib') }}" class="btn btn-primary">Back</a>
        <div class="row justify-content-center">
            <div class="col">
                @foreach($fibonacci as $num)
                <div style="display: inline-block;">{{ $num }}</div> 
            @endforeach
            </div>
        </div>
        
            
        
    
    </div>
    
</body>
</html>