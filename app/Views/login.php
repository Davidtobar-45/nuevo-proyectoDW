<!doctype html>
<html lang="en">
<head>
    <title>Login User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts y FontAwesome -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS desde login-form-20 -->
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
</head>
<body class="img js-fullheight">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account?</h3>
                        <form action="<?= base_url('login/auth') ?>" method="post" class="signin-form">
                            <div class="form-group">
                                <input type="text" name="usuario" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="#" class="px-2 py-2 mr-md-1 rounded">Facebook</a>
                            <a href="#" class="px-2 py-2 ml-md-1 rounded">Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JS desde login-form-20 -->
    <script src="<?= base_url('public/login-form-20/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('public/login-form-20/js/popper.js') ?>"></script>
    <script src="<?= base_url('public/login-form-20/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('public/login-form-20/js/main.js') ?>"></script>

    <!-- Script para cambiar fondo cada 3 segundos -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const body = document.body;
        const images = [
          '<?= base_url('public/login-form-20/images/bg11.jpg') ?>',
          '<?= base_url('public/login-form-20/images/bg12.jpg') ?>',
          '<?= base_url('public/login-form-20/images/bg20.jpg') ?>'
        ];
        let index = 0;

        setInterval(() => {
          index = (index + 1) % images.length;
          body.style.backgroundImage = `url('${images[index]}')`;
        }, 3000); // Cambia cada 3 segundos
      });
    </script>
</body>
</html>
