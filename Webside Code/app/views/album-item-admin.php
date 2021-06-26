<!--Column size 4/12 for large, 6/12 for medium and smaller sizes:-->
<div class="col-lg-4 col-md-6 col-sm-6 col-6 pb-4">
    <!--pd-4: Padding bottom 4 units-->
    <!--card container and its elements:-->
    <div class="card container pt-2">
        <a href="album-edit.php?id=<?php echo $row['id'] ?>">
        <div class="popup" data-toggle="modal">
            <img class="card-img-top" src="images/<?php echo $row['path'] ?>" alt="A pic of Iran">
        </div>
        </a>
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['location'] ?></h5>
            <h5 class="card-text"><?php echo $row['photographer'] ?></h5>
        </div>
    </div>
</div>