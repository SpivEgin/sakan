<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
                <?php
                  $a = new GlobalArea('Bread nav');
                  $a->display($c);
                ?>
<main>
<div class="container">
 <div class="row">
  <div class="<?php echo $c->getPageWrapperClass()?>">
    <?php
        $a = new Area('Main');
        $a->setAreaGridMaximumColumns(12);
        $a->display($c);
    ?>
  </div><!-- /.WrapperClass -->
 </div><!-- /.row -->
</div><!-- /.container -->
</main>



<?php  $this->inc('elements/footer.php'); ?>
