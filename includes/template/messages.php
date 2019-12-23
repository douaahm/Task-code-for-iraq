<?php
  if(isset($_SESSION['welcome'])) { ?>

    <div class="alert alert-success">
        <?php echo $_SESSION['welcome']; ?>
    </div>
    <?php unset($_SESSION['welcome']); ?>
<?php  } ?>
