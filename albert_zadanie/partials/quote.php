<section class="container">
      <div class="row">
        <div class="col-100 text-center">
            <p><strong><em>
              <?php 
                //page_quote();
                $page = $Page ->get_file_name();
                echo $Quote->get_quote($page);
              ?>
              </em></strong></p>
        </div>
      </div>
</section>