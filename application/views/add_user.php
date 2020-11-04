
<div class="container mt-4">
  <h4>Add User</h4>
  <hr>
  <?php if (validation_errors() != ""): ?>
    <div class="bg-danger text-white p-2">
      <?=validation_errors();?>
    </div>
  <?php endif; ?>

  <form action="<?=base_url('Main/add_user')?>" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">First Name</label>
      <input type="text" name="first_name" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Last Name</label>
      <input type="text" name="last_name" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Date Of Birth</label>
      <input type="date" name="birth_day" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Add User</button>
  </form>
</div>
