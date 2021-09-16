<?php foreach ($jobs as $job) : ?>
    <?php $job->post_date = new DateTime($job->post_date);
    $job->salary = $job->salary == "" ? "Not espeficied" : "$" . $job->salary;
    ?>
    <div class="card mb-4">
        <div class="card-body">
            <div class="small text-muted"> <?php

                                            echo $job->post_date->format("d-m-Y") ?>
            </div>
            <h2 class="card-title"> <?= $job->title; ?></h2>
            <span class='text-muted pb-2'><?= $job->cname ?></span>
            <p class="card-text"> <?= $job->description ?></p>
            <span class="font-italic"><?php echo "Lugar: " . ucfirst($job->location) ?></span>
            <p class='font-weight-light font-italic mb-0 '> <?= "Empresa: $job->company" ?> </p>
            <p> <?= "Salario: $job->salary" ?></p>
            <a class="btn btn-primary" href="?controller=pages&action=individualjobpage&jobid=<?= $job->id ?>">Read more →</a>
        </div>
    </div>
<?php endforeach; ?>