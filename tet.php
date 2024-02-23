<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh sách Sinh viên</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
  body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
  }

  .container {
    max-width: 800px;
    margin: 50px auto;
  }

  .card {
    border-radius: 15px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.5s ease;
    background: #fff;
  }

  .card:hover {
    transform: scale(1.05);
  }

  .card-header {
    background-color: #007bff;
    color: #fff;
    border-radius: 15px 15px 0 0;
    padding: 20px;
  }

  .card-title {
    margin-bottom: 0;
  }

  .card-body {
    padding: 20px;
  }

  .form-select,
  .form-control {
    border-radius: 10px;
  }

  .btn-primary {
    border-radius: 10px;
  }

  .table {
    border-radius: 15px;
    overflow: hidden;
  }

  .table thead th {
    background-color: #007bff;
    color: #fff;
  }

  .table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  .table tbody tr:hover {
    background-color: #e9ecef;
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Danh sách Sinh viên</h3>
      </div>
      <div class="card-body">
        <form>
          <div class="row mb-3">
            <div class="col-md-3">
              <select class="form-select">
                <option selected disabled>Chọn khóa học</option>
                <?php
                // Tạo dữ liệu giả lập cho các tùy chọn của khóa học
                for ($year = 2000; $year <= 2023; $year++) {
                  echo "<option>$year</option>";
                }
                ?>
              </select>
            </div>
            <div class="col-md-3">
              <select class="form-select">
                <option selected disabled>Chọn lớp học</option>
                <!-- Thêm các option từ database -->
                <?php
                // Tạo dữ liệu giả lập cho các tùy chọn của lớp học
                for ($class = 1; $class <= 5; $class++) {
                  echo "<option>Lớp $class</option>";
                }
                ?>
              </select>
            </div>
            <div class="col-md-3">
              <select class="form-select">
                <option selected disabled>Chọn giới tính</option>
                <option>Nam</option>
                <option>Nữ</option>
                <option>Khác</option>
              </select>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" placeholder="Nhập điểm thi đầu vào">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Lọc</button>
            </div>
          </div>
        </form>
        <div class="table-responsive mt-4">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Chiều cao (cm)</th>
                <th>Cân nặng (kg)</th>
                <th>Quê quán</th>
                <th>Điểm thi đầu vào</th>
              </tr>
            </thead>
            <tbody>
              <!-- Dữ liệu sinh viên sẽ được thêm vào đây -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>