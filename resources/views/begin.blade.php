<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <!-- JavaScript Bundle with Popper -->
<title>Start</title>
</head>
<body>
<div class="container-sm">
    <h1>Enter your complete name</h1>

    <form action="/enter-attempts" method="POST">
    @csrf
    @for ($i = 1; $i <= 5; $i++)
    <div class="row">
        <label>Student {{ $i }} Name:</label>
        <input type="text" name="name_{{ $i }}" class="form-control">
</div>
    @endfor
    <hr />
    <div class="row">
        <button class="btn-primary btn-lg"> Save Students' Information</button>
    </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>