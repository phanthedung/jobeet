<!-- apps/frontend/modules/job/templates/indexSuccess.php -->
<?php use_stylesheet('jobs.css') ?>

<div id="jobs">
  <table class="jobs">
    <?php foreach ($jobeet_jobs as $i => $job): ?>
      <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
        <td><?php echo $job->getLocation() ?></td>
        <td>
          <a href="<?php echo url_for('job_show_user', $job) ?>">
            <?php echo $job->getPosition() ?>
          </a>
        </td>
        <td><?php echo $job->getCompany() ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</div>
  <a href="<?php echo url_for('job/new') ?>">New</a>
