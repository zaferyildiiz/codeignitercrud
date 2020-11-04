
<div class="container mt-4">
  <h4>Add User</h4>
  <hr>
  <?php if (validation_errors() != ""): ?>
    <div class="bg-danger text-white p-2">
      <?=validation_errsors();?>
    </div>
  <?php endif; ?>

  <form action="<?=base_url('Main/update_user/').$user->id?>" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">First Name</label>
      <input type="text" name="first_name" class="form-control" value="<?=$user->first_name;?>" required>
    </div>
    <div class="form-group">
      <label>Last Name</label>
      <input type="text" name="last_name" class="form-control" value="<?=$user->last_name;?>" required>
    </div>
    <div class="form-group">
      <label>Date Of Birth</label>
      <input type="date" name="birth_day" value="<?=$user->birth_date;?>" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Update User</button>
  </form>
</div>
