<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carts - TenunKu</title>
  <meta name="description" content="E-Commerces" />
  <!-- Link JavaScript file -->
  <script src="form-validation.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/carts.css" />
  <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-lg fixed-top navbar-shrink py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand d-flex align-items-justify"></a>
      <a href="index.php"><img src="img/tenun logo.png" alt="" /></a>
      <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
          class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

          <li class="nav-item"><a class="nav-link" href="explore.php">Explore</a></li>
          <li class="nav-item"><a class="nav-link active" href="carts.php">Carts</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/tenun logo.png" alt="" width="72" height="57">
        <h2>Checkout form</h2>
        <p class="lead">You enter the shopping cart, please fill in your personal data first to buy the product!.</p>
      </div>
      <div class="item-list">
        </style>

        <!-- Checkout form container -->
        <form id="checkout-form">
          <!-- Item list -->
          <div id="item-list">
            <!-- Item template -->
            <div class="item template">
              <div class="item-name">
                <label for="item-name">Item name</label>
                <form>
                  <label for="inputField">Select an option:</label><br>
                  <select id="inputField" class="form-control" data-toggle="dropdown">
                    <option value="Tenun Ikat">Tenun Ikat</option>
                    <option value="Tenun Songket">Tenun Songket</option>
                    <option value="Tenun Sidemen">Tenun Sidemen</option>
                    <option value="Tenun Endek">Tenun Endek</option>
                    <option value="Tenun Grising">Tenun Gringsing</option>
                    <option value="Tenun Rangrang">Tenun Rangrang</option>
                  </select>
                </form>
              </div>
              <div class="item-quantity">
                <label for="item-quantity">Quantity</label>
                <input type="number" id="item-quantity" name="item-quantity" min="1" value="1" required>
              </div>
              <div class="item-price">
                <label for="item-price">Price</label>
                <input type="number" id="item-price" name="item-price" min="0" value="0" required>
              </div>
              <button class="btn btn-danger remove-item" type="button">Remove</button>
            </div>
          </div>
          <!-- "Add Item" button -->
          <button id="add-item" class="btn btn-primary" type="button">Add Item</button>
          <!-- Personal data -->
          <h2>Personal data</h2>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          <!-- Payment details -->
          <h2>Payment details</h2>
          <div class="form-group">
            <label for="card-number">Card number</label>
            <input type="text" id="card-number" name="card-number" required>
          </div>
          <div class="form-group">
            <label for="expiry-date">Expiry date</label>
            <input type="text" id="expiry-date" name="expiry-date" required>
          </div>
          <div class="form-group">
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" required>
          </div>
          <!-- Submit button -->
          <button class="btn btn-primary" type="submit">Checkout</button>
        </form>
    </main>

    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Explore</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Carts</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contacts</a></li>
        </ul>
        <p class="text-center text-muted">&copy; 2022 TenunKu, Tbk</p>
      </footer>
    </div>
  </div>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="form-validation.js"></script>
</body>

</body>