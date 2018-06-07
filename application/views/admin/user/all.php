<section class="content-header">
    <h1>
        Users
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url() ?>user"><i class="fa fa-users"></i> User</a></li>
    </ol>
</section>
<br>
<section class="content">
    <div class="box">
        <div class='box-header'>
            <h4 class="whiteTitle" style='display: inline-block;'>User</h4>

            <a href='<?php echo site_url('user/add'); ?>' class='btn btn-info pull-right'>
                <i class='fa fa-plus' ></i> Add</a>

        </div>
        <div class='box-body no-padding'>

            <div id="refreshBox">
                <table id="data-table" class="table table-bordered table-hover data-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            foreach($user as $row){
                                ?>
                                    <tr>
                                        <td><a href="<?= base_url() ?>user/detail/<?= $row['user_id']?>"><?= $i ?></a></td>
                                        <td><a href="<?= base_url() ?>user/detail/<?= $row['user_id']?>"><?= $row['username'] ?></a></td>
                                        <td><a href="<?= base_url() ?>user/detail/<?= $row['user_id']?>"><?= $row['name'] ?></a></td>
                                        <td><a href="<?= base_url() ?>user/detail/<?= $row['user_id']?>"><?= $row['role'] ?></a></td>
                                        <td><a href="<?= base_url() ?>user/delete/<?= $row['user_id']?>" class="btn btn-danger delete-button">Delete</a></td>
                                    </tr>
                                <?php
                                $i++;
                            }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>
</section>