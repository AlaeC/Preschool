<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create New Category</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Update Category</h4>
      </div>
      
      <div class="card-body">
        <form action="{{ route('admin.categories.update', $categorie->categorie_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <!-- Category Name -->
          <div class="mb-3">
            <label for="categoryName" class="form-label">Category Name</label>
            <input type="text" class="form-control" value="{{$categorie->categorie_name}}" id="categoryName" name="categorie_name" placeholder="Enter category name" >
          </div>

          <!-- Icon Upload -->
          <div class="mb-3">
            <label for="categoryIcon" class="form-label">Upload Icon</label>
            <input class="form-control" type="file" id="categoryIcon"  name="icon" accept="image/*" >
            <div class="form-text">Upload a category icon (PNG, JPG, SVG)</div>
          </div>
           <!-- Video Upload -->
           <div class="mb-3">
            <label for="categoryVideo" class="form-label">Upload Video</label>
            <input class="form-control" type="file" id="categoryVideo"  name="video" accept="video/*">
            <div class="form-text">Optional: Upload a category intro video (MP4, AVI, MOV)</div>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-success">Update Category</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
