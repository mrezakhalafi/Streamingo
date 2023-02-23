<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand ml-5 pr-5 mr-5" href="#"><img src="<?= base_url('assets/'); ?>img/logo-cooltext.png" width="375"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item px-3 active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Movies</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">Series</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="#">LIVE</a>
        </li>
        <li class="nav-item px-4">
          <div class="row">
            <?php if($id): ?>
              <div class="text-white mt-2">Halo, <?= $nama ?></div>
                <a href="<?= base_url('/auth/logout') ?>"><button button class="btn btn-danger mx-4">Logout</button></a>
              </div>
            <?php else: ?>
              <button class="btn btn-danger ml-5" data-toggle="modal" data-target="#loginModal">Sign In</button>
            <?php endif; ?>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/'); ?>img/slider/thesuicidesquad.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/'); ?>img/slider/blackwidow.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/'); ?>img/slider/tomandjerry.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Premiere Now -->
<div class="row bg-dark pb-4 mr-0">
  <div class="container">
    <h3 class="text-center text-white my-4">PREMIERE NOW</h3>
    <div class="row">
      <?php foreach($movies as $m): ?>
      <div class="col-4">
        <?php if($nama): ?>
        <a href="<?= base_url('movie'); ?>/?id=<?= $m['id'] ?>"><img src="<?= base_url('assets/'); ?>img/posters/<?= $m['foto'] ?>" class="w-100"></a>
        <?php else: ?>
        <img src="<?= base_url('assets/'); ?>img/posters/<?= $m['foto'] ?>" class="w-100" data-toggle="modal" data-target="#loginModal">
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- Footer -->
<div class="bg-dark">
  <div class="text-white text-center pt-2 pb-3">Copyright © 2021 STREAMINGO | Created by M Reza Khalafi.</div>
</div>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form action="<?= base_url('/auth/login'); ?>" method="post" class="m-3">
          <h3 class="text-center mb-3">Sign In</h3>
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
            <div id="email_error"></div>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            <div id="password_error"></div>
          </div>
          <div class="text-center">
          <button id="btn-submit" type="button" onclick="form_validation()" class="btn btn-danger my-2 w-100">LOGIN</button></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</body>