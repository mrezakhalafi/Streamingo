<body class="bg-dark">
    
  <div class="text-center">
    <video width="1280" height="768" controls autoplay>
    <source src="" type="video/mp4">
    Browser anda tidak mendukung.
    </video>
  </div>

<!-- Modal Error -->
<div class="modal fade" id="modalError1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Movie is not Available</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php if($error==0): ?>
        Link yang anda cari mungkin rusak atau tidak tersedia.
        <?php elseif($error==1): ?>
        Anda tidak berlangganan paket ini.
        <?php endif; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>