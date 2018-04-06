@extends("layouts.app")
@section("content")

<div class="container">
  <h2>Upload Image</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="title">File Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
    </div>
    <div class="form-group">
      <label for="upload">upload:</label>
      <input type="file" class="form-control" id="upload" placeholder="Choose" name="upload">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

@endsection