<?php foreach ($jobs as $job) : ?>
    <?php $job->post_date = new DateTime($job->post_date);
    $job->salary = $job->salary == "" ? "Not specified" : "$" . $job->salary;
    ?>
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex">
                <span class="text-muted small">
                    <?= $job->post_date->format("d-m-Y") ?>
                </span>
            </div>
            <h2 class="card-title"> <?= $job->title; ?><span class="font-italic text-muted h4"><?= ' (' . ucfirst($job->location) . ')' ?></span> </h2>
            <p class="card-text"> <?= $job->description ?></p>

            <p class='font-weight-bold mb-0 '> <?= "Empresa: $job->company" ?> </p>
            <p> <?= "Salario: $job->salary" ?></p>
            <a class="btn btn-primary" href="?controller=pages&action=individualjobpage&jobid=<?= $job->id ?>">Read more →</a>
        </div>
    </div>
<?php endforeach; ?>