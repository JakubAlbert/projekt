<section class="banner">
    <div class="container text-white">
        <h1>
            <?php 
            //echo page_name();
             $page = $Page ->get_file_name();
             echo $Banner->get_heading($page);
            ?>
        </h1>
    </div>
</section>