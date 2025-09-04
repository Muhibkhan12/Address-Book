<?php
session_start();
include('header.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-8 col-lg-5">
            <?php if (isset($_SESSION['successMessage'])) { ?>
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['successMessage'];
                    unset($_SESSION['successMessage']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <?php if (isset($_SESSION['error_msg'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['error_msg'];
                    unset($_SESSION['error_msg']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

             <?php if (isset($_SESSION['logout_msg'])) { ?>
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <strong>Hey!</strong> <?php echo $_SESSION['logout_msg'];
                    unset($_SESSION['logout_msg']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


 <div class="col-lg-5 mx-auto my-5">
  <div class="card border-0 shadow-lg rounded-4 bg-white bg-opacity-75 backdrop-blur">
    <!-- Header -->
    <div class="card-header bg-gradient py-4 text-center rounded-top-4" >
      <h4 class="text-dark fw-bold mb-0">Welcome </h4>
      <p class="text-dark mb-0 small">Please log in to your account</p>
    </div>

    <!-- Body -->
    <div class="card-body p-5">
      <!-- Social Logins -->
      <div class="text-center mb-4">
        <p class="text-muted mb-3">Sign in with</p>
        <div class="d-flex justify-content-center gap-3">
          <button type="button" class="btn btn-outline-danger rounded-circle p-2 shadow-sm">
            <i class="fab fa-google fa-lg"></i>
          </button>
          <button type="button" class="btn btn-outline-primary rounded-circle p-2 shadow-sm">
            <i class="fab fa-facebook-f fa-lg"></i>
          </button>
          <button type="button" class="btn btn-outline-dark rounded-circle p-2 shadow-sm">
            <i class="fab fa-apple fa-lg"></i>
          </button>
        </div>
      </div>

      <!-- Divider -->
      <div class="position-relative my-4">
        <hr class="my-0">
        <div class="position-absolute top-50 start-50 translate-middle bg-white px-3 text-muted small">or</div>
      </div>

      <!-- Login Form -->
      <form action="logincode.php" method="POST">
        <!-- Email -->
        <div class="mb-4">
          <label for="email" class="form-label fw-semibold" >Email address</label>
          <div class="input-group">
            <span class="input-group-text bg-light border-0"><i class="far fa-envelope"></i></span>
            <input type="email" class="form-control border-start-0 py-2" id="email" placeholder="you@example.com" name="email" required>
            <div class="invalid-feedback">Please enter a valid email.</div>
          </div>
        </div>

        <!-- Password -->
        <div class="mb-4">
          <div class="d-flex justify-content-between align-items-center">
            <label for="password" class="form-label fw-semibold" >Password</label>
            <a href="#forgot" class="small text-decoration-none" >Forgot password?</a>
          </div>
          <div class="input-group">
            <span class="input-group-text bg-light border-0"><i class="fas fa-lock"></i></span>
            <input type="password" class="form-control border-start-0 py-2" id="password" placeholder="password" name="pass" required>
            <button type="button" class="btn btn-light border-0" onclick="togglePassword()">
              <i class="far fa-eye" id="toggleIcon"></i>
            </button>
            <div class="invalid-feedback">Password is required.</div>
          </div>
          <div class="form-text">At least 8 characters</div>
        </div>

        <!-- Remember Me -->
        <div class="form-check mb-4">
          <input class="form-check-input" type="checkbox" id="rememberMe">
          <label class="form-check-label" for="rememberMe">Keep me logged in</label>
        </div>

        <!-- Submit -->
        <div class="d-grid">
          <button type="submit" class="btn btn-primary fw-bold py-2" name="loginBtn">
            <i class="fas fa-sign-in-alt me-2"></i>Sign In
          </button>
        </div>
      </form>
      <!-- Footer -->
      <div class="text-center pt-4">
        <p class="mb-0 small text-muted">Don't have an account? 
          <a href="#register" class="fw-semibold text-decoration-none" >Sign up</a>
        </p>
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>
<?php
include('footer.php');
?>