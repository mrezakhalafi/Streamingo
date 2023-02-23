<body class="bg-dark">
    
  <div class="text-center">
    <video width="1280" height="768" controls autoplay>
    <source src="<?= base_url('assets/videos/'.$movie['videos']) ?>" type="video/mp4">
    Browser anda tidak mendukung.
    </video>
  </div>

  <div class="container text-white my-4">
    <h3><?= $movie['mnama'] ?></h3>
    <small><?= $movie['deskripsi'] ?></small>
  </div>

</body>
</html>