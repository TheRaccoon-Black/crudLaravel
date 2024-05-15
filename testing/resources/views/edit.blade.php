<!-- resources/views/users/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Edit User</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <form action="{{ route('data.update', $item->id) }}" class="md-6 col-6" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $item->name) }}">
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="umur" id="age" class="form-control" value="{{ old('umur', $item->umur) }}">
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="alamat" id="address" class="form-control" value="{{ old('alamat', $item->alamat) }}">
        </div>

        <div class="form-group">
            <label for="hobby">Hobby:</label>
            <input type="text" name="hobi" id="hobby" class="form-control" value="{{ old('hobi', $item->hobi) }}">
        </div>

        <button type="submit">Update</button>
    </form>
</body>
</html>
