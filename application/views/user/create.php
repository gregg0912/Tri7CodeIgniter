    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Add User</h4>
                <form action="<?= base_url('user/store') ?>" method="POST">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name">
                        <small><?= form_error('first_name') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                        <small><?= form_error('last_name') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" name="position">
                        <small><?= form_error('position') ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url()?>" class="btn btn-danger float-right">Cancel</a>
                </form>
            </div>
        </div>
    </div>
