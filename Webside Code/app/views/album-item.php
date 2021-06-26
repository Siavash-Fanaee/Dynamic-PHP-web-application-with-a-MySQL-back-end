<!--Column size 4/12 for large, 6/12 for medium and smaller sizes:-->
<div class="col-lg-4 col-md-6 col-sm-6 col-6 pb-4">
    <!--pd-4: Padding bottom 4 units-->
    <!--card container and its elements:-->
    <div class="card container pt-2">
        <?php
        // If user is in the session  
            if (array_key_exists("user_id", $_SESSION)) {
                //If type is relavant (1 or 2) or is 3: Modal is to show the pic:
                if (($_SESSION["user_type"] == $type) || ($_SESSION["user_type"] == 3)) {
                    $modal = "detailModal" . $row['id'];
                    // Import album-detail-modal.php
                    include __DIR__ . "/album-detail-modal.php";
                //else: Show relevant error message:
                } else {
                    $modal = "typeInvalidModal";
                }
            }
            // User is not in the session 
            else {
                $modal = "loginModal";
            }
        //Displying relevant image (creating data-target) and relevant location and photographer:
        ?>
        <div class="popup" data-toggle="modal" data-target="#<?php echo $modal ?>">
            <img class="card-img-top" src="images/<?php echo $row['path'] ?>" alt="A pic of Iran">
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['location'] ?></h5>
            <h5 class="card-text"><?php echo $row['photographer'] ?></h5>
        </div>
    </div>
</div>