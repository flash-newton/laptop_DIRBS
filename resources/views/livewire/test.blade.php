<div>
<div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmod">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div wire:self.ignore class="modal fade" id="addmod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="" wire:submit.prevent="addtest">
        <div class="modal-header">

          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>

    </div>
  </div>
</div>

<script>
    window.addEventListener('close-modal',event=>{
        
        jQuery('#addmod').modal('hide');
        console.log('aloha');
    })
</script>
</div>



