<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Category</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Update Category</h4>
      </div>
      
      <div class="card-body">
        <form action="{{ route('admin.data.update', ['categorie' => $categorie_id, 'data' => $data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          
          <!-- Category Name -->
          <div class="mb-3">
            <label for="categoryName" class="form-label">Data Name</label>
            <input type="text" class="form-control" value="{{ $data->data_name }}" id="categoryName" name="name" placeholder="Enter category name" required>
          </div>

          <!-- Icon Upload -->
          <div class="mb-3">
            <label for="categoryIcon" class="form-label">Upload Icon</label>
            <input class="form-control" type="file" id="categoryIcon" name="image" accept="image/*">
            <div class="form-text">Upload a category icon (PNG, JPG, SVG)</div>
          </div>

          <!-- Audio Upload -->
          <div class="mb-3">
            <label for="categoryAudio" class="form-label">Upload Audio</label>
            <input class="form-control" type="file" id="categoryAudio" name="audio" accept="audio/*">
            <div class="form-text">Optional: Upload a category audio (MP3, WAV, OGG)</div>
          </div>

          <!-- Description -->
          <div class="mb-3">
            <label for="categoryDescription" class="form-label">Data Description</label>
            <textarea class="form-control" id="categoryDescription" name="explication" rows="4" placeholder="Write a description...">{{ $data->explication }}</textarea>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-success">Update Data</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
