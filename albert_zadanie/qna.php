<?php
include('partials/header.php');
?>
  <main>
    <?php
      include('partials/banner.php');
      include('partials/quote.php');
    ?>
    <section class="container">
    <?php
      $Accordion->get_accordion();
    ?>
     </section>
  </main>
  <?php
include('partials/footer.php');
?>