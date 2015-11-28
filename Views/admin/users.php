<?php  /** @var \Framework\Models\ViewModels\AdminUsersViewModel $model */ ?>

<h3>Users</h3>

<table class="table table-striped">
    <thead>
    <tr>
        <th>
            N
        </th>
        <th>
            Username
        </th>
        <th>
            FullName
        </th>
        <th>
            Role
        </th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 0; ?>
    <?php foreach ($model->getUsers() as $user): ?>
        <?php $i += 1; ?>
        <tr>
            <td>
                <?= $i ?>
            </td>
            <td>
                <?= $user["username"] ?>
            </td>
            <td>
                <?= $user["fullname"] ?>
            </td>
            <td>
                <?= $user["roleName"] ?>
            </td>
            <td>
                <a href="<?= \Framework\Helpers\Helpers::url() . "admin/users/" . $user["id"] . "/role/edit"?>">Change role</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>