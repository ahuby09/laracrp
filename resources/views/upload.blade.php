<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crm- Upload</title>
</head>
<body>
    <form action="{{ route('uploadclient') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="col-lg-12 py-3">
            <label for="client">Upload Users File</label>
            <input type="file" class="form-control" style="padding: 3px;" name="clients" required />
            </div>
            <button type="submit" class="btn btn-success" name="upload">Upload</button>
    </form>
</body>
</html>
