<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title> 

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/logstyle.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body id="page-top">
  <?php require('include/nav.html') ?>
  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Welcome</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Online learing is rapidly becoming one of the most cost effective ways to educate the world's rapidly expanding workforce.</h2>

        <a class="btn btn-primary js-scroll-trigger" href="php/index.php">Get Started</a>

          <div id="modal-wrapper" class="modal">
  
</div>

      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Education is the key of success</h2>
          <p class="text-white-50">Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity.<br>To teach is to learn twice.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    
          </div>

       <!-- Project One Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/lap-learn.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Easy Study</h4>
                <p class="mb-0 text-white-50">As online learning continues to evolve,technologies<br>like gamification and simulation are poised to<br>advance student engagement and success.</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
       <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/e-learn.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">E-Learning</h4>
                <p class="mb-0 text-white-50">eLearning doesn't just "happen"! It requires careful planning and implementation.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-users-cog text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Team</h4>
              <hr class="my-4" style="width: 100%">
              <div class="small text-black-50">Tushar Khobragade<br>Pratiksha Kamble<br>Aditi Pandey<br>Juhi Singh</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4" style="width: 100%">
              <div class="small text-black-50">
                <a href="#">system@example.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4"style="width: 100%">
              <div class="small text-black-50">+91 000000000</div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2020
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>
  <script>
  var x = document.getElementById("login");
  var y = document.getElementById("register");
  var z = document.getElementById("btn");

  function register() {
    x.style.left ="-400px";
    y.style.left ="50px";
    z.style.left ="110px";
  }
  function login() {
    x.style.left ="50px";
    y.style.left ="450px";
    z.style.left ="0px";
  }
</script>

</body>

</html>
