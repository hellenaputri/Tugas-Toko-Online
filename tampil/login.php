<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../asset/css/login.css" />
    <title>Sign In | Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
  <div class="container px-4 py-5 mx-auto">
    <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row d-flex px-lg-4 px-3 pt-3">
                        <h6 id="logo" data-aos="fade-in"><strong>Hellena Shop</strong></h6>
                    </div>
                    <div class="row justify-content-center my-auto">
                        <div class="col-lg-8 my-5" data-aos="fade-right" data-aos-duration="1500">
                            <h3 class="mb-3">Hellena Shop</h3>
                            <small class="text-muted">Belanja Dengan Mudah dan Cepat Serta Dimana Saja Hanya di Hellena Shop</small>
                            <form action="../proses/proses_login.php" method="post" class="sign-in-form">
                              <div class="form-group mt-5">
                                <input type="text" id="name" name="username" class="form-control" required>
                                <label class="form-control-placeholder" for="name">Username</label>
                              </div>
                              <div class="form-group mt-4">
                                <input type="password" id="mail" name="password" class="form-control" required>
                                <label class="form-control-placeholder" for="mail">Password</label>
                              </div>
                              <div class="row justify-content-center my-3">
                                <input type="submit" name="login" value="Masuk" class="btn btn-gray" />
                              </div>
                            </form>
                        </div>
                    </div>
                    <div class="bottom text-center mb-3">
                      <a href="register.php" class="sm-text mx-auto mb-3">Already have an account?</a>
                    </div>
                </div>
                <div class="card card2" data-aos="fade-left" data-aos-duration="2500"> <img id="image" src="../asset/image/login.svg"> </div>
            </div>
        </div>
    </div>
    <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
          <script>
              AOS.init();
  </script>
  </body>
</html>
