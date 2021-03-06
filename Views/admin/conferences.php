<?php  /** @var \Framework\Models\ViewModels\AdminConferencesViewModel $model */ ?>

<h3>Conferences</h3>

<table class="table table-striped">
    <thead>
    <tr>
        <th>
            N
        </th>
        <th>
            Title
        </th>
        <th>
            Description
        </th>
        <th>
            Start time
        </th>
        <th>
            End time
        </th>
        <th>
            Venue
        </th>
        <th>
            Status
        </th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 0; ?>
    <?php foreach ($model->getConferences() as $conference): ?>
        <?php $i += 1; ?>
        <tr>
            <td>
                <?= $i ?>
            </td>
            <td>
                <?= htmlspecialchars($conference["title"]); ?>
            </td>
            <td>
                <?= htmlspecialchars($conference["description"]); ?>
            </td>
            <td>
                <?= htmlspecialchars($conference["startTime"]); ?>
            </td>
            <td>
                <?= htmlspecialchars($conference["endTime"]); ?>
            </td>
            <td>
                <?= $conference["venueName"] ? htmlspecialchars($conference["venueName"]) : "-"; ?>
            </td>
            <td>
                <?= $conference["isActive"] ? "Active" : "Inactive"; ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>