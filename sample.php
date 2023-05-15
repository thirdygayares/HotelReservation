<!DOCTYPE html>
<html>
<head>
  <title>Image Upload and Preview</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    #preview-image {
      max-width: 300px;
      max-height: 300px;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="mt-4">Upload an Image</h2>
    <form id="image-upload-form" class="mt-4" action="backend/upload-image.php">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="bed-type">Bed Type:</label>
        <select id="bed-type" name="bed-type" class="form-control" required>
          <option value="Single">Single</option>
          <option value="Double">Double</option>
          <option value="Queen">Queen</option>
          <option value="King">King</option>
        </select>
      </div>

      <div class="form-group">
        <label for="start-price">Start Price:</label>
        <input type="number" id="start-price" name="start-price" class="form-control" required>
      </div>

      <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*" class="form-control-file" required>
      </div>

      <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    <h3 class="mt-4">Preview:</h3>
    <img id="preview-image" src="#" alt="Preview" class="img-fluid">
    </div>
    <script>
      document.getElementById('image').addEventListener('change', function(event) {
        var input = event.target;
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            document.getElementById('preview-image').setAttribute('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
        }
      });

      document.getElementById('image-upload-form').addEventListener('submit', function(event) {
        event.preventDefault();

        var formData = new FormData(this);
        formData.append('image', document.getElementById('image').files[0]);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'backend/upload-image.php', true);
        xhr.onload = function() {
          if (xhr.status === 200) {
            alert('Image uploaded successfully!');
            document.getElementById('image-upload-form').reset();
            document.getElementById('preview-image').setAttribute('src', '#');
          } else {
            alert('Image upload failed. Please try again later.');
          }
        };
        xhr.send(formData);
      });
    </script>


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
