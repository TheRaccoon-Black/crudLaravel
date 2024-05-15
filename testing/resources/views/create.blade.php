<!-- resources/views/form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Form Input Data</h2>
        <form action="{{ route('createData') }}" method="POST">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat:</label>
                <textarea class="form-control" id="address" name="alamat" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="age">Umur:</label>
                <input type="number" class="form-control" id="age" name="umur" required>
            </div>
            <div class="form-group">
                <label for="hobby">Hobi:</label>
                <input type="text" class="form-control" id="hobby" name="hobi" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a class="btn btn-success btn-sm mt-4" href="{{route('data')}}">Lihat</a>
    </div>
</body>
</html>
