<!-- Error Modal (using standard bootstrap modal template) -->
<div class="modal fade" id="badLoginDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Error message: Defined in the parent page of the modal-->
        <?php echo $error_message ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- JS code: When page is fully loaded, Open the current modal -->
<script>
  $(document).ready(function() {
    $('#badLoginDataModal').modal('show');
  });
</script>