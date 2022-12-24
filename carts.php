<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Carts - TenunKu</title>
    <meta name="description" content="E-Commerces"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/carts.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
  </head>

  <body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top navbar-shrink py-3" id="mainNav">
      <div class="container">
        <a class="navbar-brand d-flex align-items-justify"></a>
        <a href="index.php"><img src="img/tenun logo.png" alt="" /></a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Jenis Tenun</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Tenun Ikat</a></li>
                <li><a class="dropdown-item" href="#">Tenun Songket</a></li>
                <li><a class="dropdown-item" href="#">Tenun Sidemen</a></li>
                <li><a class="dropdown-item" href="#">Tenun Endek</a></li>
                <li><a class="dropdown-item" href="#">Tenun Gringsing</a></li>
                <li><a class="dropdown-item" href="#">Tenun Rangrang</a></li>
              </ul>
            </li>

            <li class="nav-item"><a class="nav-link" href="">Explore</a></li>
            <li class="nav-item"><a class="nav-link active" href="carts.html">Carts</a></li>
            <li class="nav-item"><a class="nav-link" href="contacts.html">Contacts</a></li>
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
      
          <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Your cart</span>
                <span class="badge bg-primary rounded-pill">3</span>
              </h4>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">Tenun Songket</h6>
                    <small class="text-muted">Motif Baru</small>
                  </div>
                  <span class="text-muted">Rp.300.000,-</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">Tenun Ikat</h6>
                    <small class="text-muted">Motif Klasik</small>
                  </div>
                  <span class="text-muted">Rp.500.000,-</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">Tenun Gringsing</h6>
                    <small class="text-muted">Motif Klasik</small>
                  </div>
                  <span class="text-muted">Rp.750.000,-</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                  <div class="text-success">
                    <h6 class="my-0">Promo code</h6>
                    <small>CINTALOKAL</small>
                  </div>
                  <span class="text-success">−Rp.100.000,-</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total (IDR)</span>
                  <strong>Rp.1.450.000,-</strong>
                </li>
              </ul>
      
              <form class="card p-2">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Promo code">
                  <button type="submit" class="btn btn-secondary">Redeem</button>
                </div>
              </form>
            </div>
            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3">Billing address</h4>
              <form class="needs-validation" novalidate>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" id="username" placeholder="Username" required>
                    <div class="invalid-feedback">
                        Your username is required.
                      </div>
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                      Please enter a valid email address for shipping updates.
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                  </div>
      
                  <div class="col-md-5">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country" required>
                      <option value="">Choose...</option>
                      <option>Indonesia</option>
                      <option>Malaysia</option>
                      <option>Thailand</option>
                      <option>Brunei Darrussalam</option>
                      <option>Myanmar</option>
                      <option>Vietnam</option>
                      <option>Singapore</option>
                      <option>Timor Leste</option>
                      <option>Laos</option>
                      <option>Cambodia</option>
                      <option>Hong Kong</option>
                      <option>China</option>
                      <option>Taiwan</option>
                      <option>Japan</option>
                      <option>Russia</option>
                      <option>United States</option>
                      <option>Switzerland</option>
                      <option>United Kingdom</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid country.
                    </div>
                  </div>
      
                  <div class="col-md-4">
                    <label for="state" class="form-label">State</label>
                    <select class="form-select" id="state" required>
                      <option value="">Choose...</option>
                      <option value="">Aceh</option>
                      <option value="">Bali</option>
                      <option value="">Jakarta</option>
                      <option value="">West Java</option>
                      <option value="">Central Java</option>
                      <option value="">East Java</option>
                      <option value="">Yogyakarta</option>
                      <option value="">Banten</option>
                      <option value="">Lampung</option>
                      <option value="">Bengkulu</option>
                      <option value="">Jambi</option>
                      <option value="">Bangka Belitung</option>
                      <option value="">South Sumatera</option>
                      <option value="">North Sumatera</option>
                      <option value="">West Sumatera</option>
                      <option value="">Riau</option>
                      <option value="">Riau Archipelago</option>
                      <option value="">Nusa Tenggara Barat</option>
                      <option value="">Nusa Tenggara Timur</option>
                    </select>
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>
      
                  <div class="col-md-3">
                    <label for="zip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required>
                    <div class="invalid-feedback">
                      Zip code required.
                    </div>
                  </div>
                </div>
      
                <hr class="my-4">
      
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="same-address">
                  <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>
      
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="save-info">
                  <label class="form-check-label" for="save-info">Save this information for next time</label>
                </div>
      
                <hr class="my-4">
      
                <h4 class="mb-3">Payment</h4>
      
                <div class="my-3">
                  <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                    <label class="form-check-label" for="credit">Credit card</label>
                  </div>
                  <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="debit">Debit card</label>
                  </div>
                  <div class="form-check">
                    <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="paypal">ATM Bersama</label>
                  </div>
                </div>
      
                <div class="row gy-3">
                  <div class="col-md-6">
                    <label for="cc-name" class="form-label">Name on card</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                      Name on card is required
                    </div>
                  </div>
      
                  <div class="col-md-6">
                    <label for="cc-number" class="form-label">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    <div class="invalid-feedback">
                      Credit card number is required
                    </div>
                  </div>
      
                  <div class="col-md-3">
                    <label for="cc-expiration" class="form-label">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
      
                  <div class="col-md-3">
                    <label for="cc-cvv" class="form-label">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                    <div class="invalid-feedback">
                      Security code required
                    </div>
                  </div>
                </div>
      
                <hr class="my-4">
      
                <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
              </form>
            </div>
          </div>
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