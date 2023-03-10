 <!-- Page Header Start -->
 <?php
    function showTitle($title, $page){
        echo '
    <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>'.$title.'</h2>
            </div>
            <div class="col-12">
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
                <a href="">'.$page.'</a>
            </div>
        </div>
    </div>
</div>
    ';
    }
    ?>
 <!-- Page Header End -->