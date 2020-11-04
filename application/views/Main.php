  <div class="container mt-4">
      <h4>Users List <a href="<?php echo base_url('Main/add_user') ?>" class="float-right btn btn-sm btn-success">Add User</a> </h4>
      <hr>
      <?php if (empty($users)){ ?>
        <div class="bg-danger text-white text-center p-2">
          No records found.
        </div>
      <?php }else{ ?>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">Transaction</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $key): ?>
          <tr>
            <th scope="row"><?=$key->id?></th>
            <td><?=$key->first_name?></td>
            <td><?=$key->last_name?></td>
            <td><?=$key->birth_date ?></td>
            <td>
              <a href="<?=base_url('Main/update_user/').$key->id ?>" class="btn btn-success btn-sm">Update</a>
              <a href="<?=base_url('Main/delete_user/').$key->id ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php } ?>
    </div>
