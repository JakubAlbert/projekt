<?php
include('partials/header.php');
?>
  <main>
    <?php
      include('partials/banner.php');
      include('partials/quote.php');
    ?>
    <section class="container">
      <div class="row">
        <div class="col-50"> 
          <h3>Máte otázky?</h3>
          <p>Incididunt mollit quis eiusmod tempor voluptate duis eu enim amet excepteur cupidatat magna velit. </p> 
          <p>Velit id ad laborum velit commodo.</p>
          <p>Consectetur laborum aliqua nulla anim cupidatat consectetur est veniam cupidatat.</p>
        </div>
        <div class="col-50 text-right">
          <h3>Napíšte nám</h3>
          <?php
            include('partials/form.php');
          ?>
            
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
include('partials/footer.php');
?>