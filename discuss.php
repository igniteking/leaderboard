<?php
// $match_id = @$_GET['match_id'];
// $match_id = 1;
// $checkGames = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `match_data` WHERE `match_id` = '$match_id'"));
// if ($checkGames > 0) {


include('./components/header.php') ?>

<style>
    .cards{
        transition: transform .2s;
    }
    .cards:hover{
        transform: scale(1.2);
    }
</style>


<div class="site-section">
    <div class="container">
        <center>
            <h1>WINNERS</h1>
        <div class="row ">
            <div class="cards " style="width: 22rem; margin-top:60px;">
                <img src="assets/images/trophy/sil.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <center>


                        <h3 class="card-title">1st </h3>


                    </center>
                </div>
            </div>
            <div class="cards " style="width: 22rem; margin-top:30px;">
                <img src="assets/images/trophy/gol.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <center>


                        <h3 class="card-title">2nd</h3>


                    </center>
                </div>
            </div>
            <div class=" cards" style="width: 22rem; margin-top:60px;">
                <img src="assets/images/trophy/bronze.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <center>


                        <h3 class="card-title">3rd</h3>


                    </center>
                </div>
            </div>
        </div>
        </center>
    </div>
</div>

<!--  -->

<?php include('./components/footer.php') ?>

