</html>

<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/js/script.js'); ?>"></script>

<!-- Login Error Check -->
<?php if($this->session->flashdata('email_error')): ?>
  <script>
    $('#loginModal').modal('show');
    $('#email_error').html('<?= $this->session->flashdata('email_error'); ?>');
  </script>
  <?php elseif($this->session->flashdata('password_error')): ?>
    <script>
    $('#loginModal').modal('show');
    $('#password_error').html('<?= $this->session->flashdata('password_error'); ?>');   
    $('#email').val(localStorage.getItem("email"));
  </script>
<?php endif; ?>

<!-- Movie Error Check -->
<?php if($this->session->flashdata('movie_error')): ?>
  <script>
    $('#modalError1').modal('show');
  </script>
<?php endif; ?>