  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">


                    <?php
                        $add=mysqli_query($con,"SELECT * FROM short_add ");
                        while ($row=mysqli_fetch_row($add)) {
                            echo'
                                <img src=channel/'.$row[2].' style="height:130px;width:130px" alt="">
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>