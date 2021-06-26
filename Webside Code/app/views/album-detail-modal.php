<!-- A module for Album Detail Modal using the image number as modal ID (using standard bootstrap modal template) -->
<div class="modal fade" id="<?php echo $modal ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="card-img-top" src="images/<?php echo $row['path'] ?>" alt="A pic of Iran">
            <!-- Showing Location and photographer for current modal -->
            <?php echo $row['location'] ?>
            <br>
            <?php echo $row['photographer'] ?>
            <br>
            <!-- Creating href using a php code to add the image name to thr image link -->
            <a href="images/<?php echo $row['path'] ?>" download>
                <button type="button" class="btn btn-info">Download</button>    
            </a>
      </div>
    </div>
  </div>
</div>