<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@extends('Admin.index')
@section('content')
<main>
  <!-- Giao diện thêm người dùng -->
  <div class="container mt-5">
    @if(session('error'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row">
      <div class="col">
        <div class="row">
          <h1 class="col-4" style="color: var(--dark)">Thêm Người Dùng</h1>
          <div class="col-8"></div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group row">
            <div class="form-group col-3">
              <label for="avatar" style="color: var(--dark)">Ảnh:</label>
              <input type="file" class="form-control-file" id="avatar" name="avatar">
            </div>
            <div class="image-preview col-9">
              <!-- Thẻ img để hiển thị ảnh -->
              <img id="previewImage" src="#" alt="Preview" style="display: none; max-width: 300px; max-height: 300px;">
            </div>
          </div>
          <div class="form-group mt-4">
            <label for="name" style="color: var(--dark)">Tên người dùng:</label>
            <input type="text" class="form-control" id="name" name="name" value="" placeholder="nhập tên">
          </div>
          <div class="form-group">
            <label for="email" style="color: var(--dark)">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="" placeholder="nhập email">
          </div>
          <div class="form-group row">
            <div class="form-group col-6">
              <label for="password" style="color: var(--dark)">Mật khẩu:</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group col-6">
              <label for="password_confirmation" style="color: var(--dark)">Xác nhận mật khẩu:</label>
              <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
          </div>
          <div class="form-group">
            <select class="form-control" id="role" name="role">
              <option value="1" selected>Khách Hàng</option>
              <option value="2">Quản Lý</option>
              <option value="3">Quản Trị Viên</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Thêm người dùng</button>
        </form>
      </div>
    </div>
  </div>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  // Bắt sự kiện khi người dùng chọn ảnh
  $('#avatar').change(function() {
    // Lấy file ảnh người dùng đã chọn
    var file = this.files[0];

    if (file) {
      // Tạo đường dẫn để hiển thị ảnh ngay lập tức
      var reader = new FileReader();

      reader.onload = function(e) {
        // Gán đường dẫn vào thẻ img
        $('#previewImage').attr('src', e.target.result);
        $('#previewImage').show(); // Hiển thị ảnh
      }

      reader.readAsDataURL(file);
    } else {
      // Ẩn ảnh nếu người dùng không chọn ảnh
      $('#previewImage').hide();
    }
  });
});
</script>
@endsection