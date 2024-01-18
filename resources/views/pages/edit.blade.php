<!-- resources/views/pages/create.blade.php -->

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

        <div class="card mt-3">
            <div class="card-header">
                <h5>Edit Page</h5>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('pages.update', $page->id) }}"" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$page->title}}" required>
                    </div>
                    <div class="form-group">
                        <label for="short_description">Short Description</label>
                        <textarea class="form-control" id="short_description" name="short_description" rows="3" required>{{$page->short_description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
