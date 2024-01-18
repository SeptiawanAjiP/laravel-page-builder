<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel Page Builder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
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

        @foreach ($pages as $item)
            <div class="card mt-3 mb-3">
                <h5 class="card-header">{{ $item->title }}</h5>
                <div class="card-body">
                    <p class="card-text">{{ $item->short_description }}</p>
                    <span class="badge">Updated At : {{ $item->updated_at }}</span>

                </div>
                <div class="card-footer">
                    <a href="{{ route('pages.show', $item->id) }}" class="btn btn-primary">
                        <i class="far fa-eye"></i> Preview
                    </a>
                    <a href="{{ route('pages.edit', $item->id) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('pages.destroy', $item->id) }}" method="POST" style="display: inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this page?')">
                          <i class="fas fa-trash"></i> Delete
                      </button>
                  </form>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container text-center mb-4">
      <a href="https://dewakoding.com">by dewakoding.com</a>
    </div>

</body>

</html>
