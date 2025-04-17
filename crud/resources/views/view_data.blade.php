
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Table</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <h4>Simple Table</h4>
    <div class="table-responsive">
      <table class="table align-middle table-bordered">
        <thead class="table-light">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Irwansyah Saputra</td>
            <td>2017-01-09</td>
            <td><span class="badge bg-success">Active</span></td>
            <td><button class="btn btn-primary btn-sm">Detail</button></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Hasan Basri</td>
            <td>2017-01-09</td>
            <td><span class="badge bg-success">Active</span></td>
            <td><button class="btn btn-primary btn-sm">Detail</button></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Kusnadi</td>
            <td>2017-01-11</td>
            <td><span class="badge bg-danger">Not Active</span></td>
            <td><button class="btn btn-primary btn-sm">Detail</button></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Rizal Fakhri</td>
            <td>2017-01-11</td>
            <td><span class="badge bg-success">Active</span></td>
            <td><button class="btn btn-primary btn-sm">Detail</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>

