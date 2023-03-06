
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form action="<?= route_to('form.add') ?>" method="post" enctype="multipart/form-data"> 
       
      <?= csrf_field() ?>
      <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" required id="name" name="name">
        </div>
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" required id="title" name="title">
        </div>
        <div class="form-group">
          <label for="image-link">Image Link:</label>
          <input type="text" class="form-control" required id="image" name="image">
        </div>
        <button type="submit" class="mt-25 btn action-1 w-full" value ="Submit">Submit</button>
      </form>
    </div>
  </div>
</div>
