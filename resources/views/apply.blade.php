<!DOCTYPE html>
<html>
<head>
    <title>Upload Options</title>
    
<style>
    .upload-container {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="file"] {
  display: block;
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.submit-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #4caf50;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.file-input {
  display: none;
}

.file-name {
  display: inline-block;
  margin-left: 10px;
  font-style: italic;
}

</style>
    
</head>
<body>
    <h1>Upload Options</h1>
    
    <form action="{{route('uploadcv')}}" class="uploadcv" method="post" enctype="multipart/form-data">
        @csrf
        <div class="upload-container">
        <label for="email">Job Title:</label>
        <input type="text" id="title" name="title" value="{{ $_GET['title'] ?? '' }}">
    </div>
        <div class="upload-container">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="{{session('name')}}">
    </div>

    <div class="upload-container">
        <label for="email">Email:</label>
        <input type="text" id="email" name="businessemail" value="{{ $_GET['businessemail'] ?? '' }}">
    </div>

    <div class="upload-container">
        <label for="fileInput" class="submit-button">Choose File</label>
        <input type="file" id="fileInput" name="file" class="file-input">
        <span class="file-name"></span>
    </div>
    
    <input type="submit" value="Upload" class="submit-button">
</form>

<script>
    // Display the selected file name
    document.getElementById('fileInput').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        document.querySelector('.file-name').textContent = fileName;
    });
</script>

</body>
</html>
