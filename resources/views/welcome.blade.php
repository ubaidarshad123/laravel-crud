<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap Form</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card w-100 shadow" style="max-width: 600px;">
      <div class="card-header bg-primary text-white text-center">
        <h4 class="mb-0">Responsive Form</h4>
      </div>
      <div class="card-body">
        <form action={{ route('all-users') }} method="POST" >
          @csrf
          <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
            @error('email')
            <font color='red'>{{ $message }}</font>
        @enderror
          </div>
          <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Enter password">
            @error('password')
            <font color='red'>{{ $message }}</font>
        @enderror
          </div>
          <div class="mb-3">
            <label for="inputAddress" class="form-label">Address</label>
            <input  name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            @error('address')
            <font color='red'>{{ $message }}</font>
        @enderror
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" name="city" class="form-control" id="inputCity">
              @error('city')
              <font color='red'>{{ $message }}</font>
          @enderror
            </div>
            <div class="col-md-6 mb-3">
              <label for="inputState" class="form-label">State</label>
              <select name="state" id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>Punjab</option>
                <option>Sindh</option>
                <option>KPK</option>
                <option>Balochistan</option>
              </select>
              @error('state')
              <font color='red'>{{ $message }}</font>
          @enderror
            </div>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Agree to terms
            </label>
          </div>
          <button type="submit" class="btn btn-primary w-100">
            Submit
          </button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>
