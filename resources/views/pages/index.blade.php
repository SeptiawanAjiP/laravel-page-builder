<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel Page Builder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>My Pages</h2>
        <p>A list of pages created with a drag-and-drop page builder.</p>
        @foreach($pages as $item)
        <div class="card mt-3">
          <h5 class="card-header">{{$item->title}}</h5>
          <div class="card-body">
            <p class="card-text">{{$item->short_description}}</p>
            <a href="#" class="btn btn-primary">Preview</a>
            <a href="#" class="btn btn-warning">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
          </div>
        </div>
        @endforeach
        
    </div>

</body>

</html>
