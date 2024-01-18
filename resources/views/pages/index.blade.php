<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel Page Builder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2>Page Builder - Drag & Drop</h2>
                <p>Simplify Website Creation - Drag, Drop, Done!</p>
            </div>
           
            <a href="{{ route('pages.create') }}" class="btn btn-success">+ Add</a>
        </div>
        
        @foreach($pages as $item)
        <div class="card mt-3">
          <h5 class="card-header">{{$item->title}}</h5>
          <div class="card-body">
            <p class="card-text">{{$item->short_description}}</p>
            <span class="badge">Updated At : {{$item->updated_at}}</span>
            
          </div>
          <div class="card-footer">
            <a href="{{ route('pages.edit', $item->id) }}" class="btn btn-primary">Preview</a>
            <a href="{{route('pages.edit', $item->id) }}" class="btn btn-warning">Edit Info Page</a>
            <a href="#" class="btn btn-danger">Delete</a>
            
          </div>
        </div>
        @endforeach
        
    </div>

</body>

</html>
