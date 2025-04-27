<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Codezila Blog Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Data Page</h2>
      <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back to Categories</a>
      <a href="{{route('admin.data.create',$categorie_id)}}" class="btn btn-success">Create Data</a>
    </div>
    <table class="table table-bordered text-center">
      <thead class="table-light">
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($AllData as $data)
        <tr>
          <td>{{$data->id}}</td>
          <td>{{$data->data_name}}</td>
          <td>
      
            <a href="{{ route('admin.data.edit', ['categorie' => $categorie_id, 'data' => $data->id])  }}" class="btn btn-info btn-sm text-white">Edit</a>
            <form style="display : inline" method="POST" action ="{{route('admin.admin.destroy', ['categorie' => $categorie_id, 'data' => $data->id])}}" onsubmit="return confirm('⚠️ Are you sure you want to delete this category? This action cannot be undone.')">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
