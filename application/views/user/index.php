    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Create Date</th>
                            <th scope="col">
                                <a class="btn btn-success" href="<?= base_url('user/create') ?>">Add</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td scope="row"><?= $user["id"] ?></td>
                                <td><?= $user["first_name"] ?></td>
                                <td><?= $user["last_name"] ?></td>
                                <td><?= $user["position"] ?></td>
                                <td><?= $user["create_date"] ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
