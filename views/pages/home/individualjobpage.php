<div class="container d-flex flex-column justify-content-center full-screen">
    <div class="card mb-4 container">
        <div class="card-body">
            <div class="small text-muted"> <?php
                                            $jobSelected->post_date = new DateTime($jobSelected->post_date);
                                            echo $jobSelected->post_date->format("d-m-Y") ?>
                <span>posted by <?= $jobSelected->contact_user ?></span>
            </div>
            <h2 class="card-title"> <?= $jobSelected->title; ?></h2>
            <span class='text-muted pb-2'><?= $jobSelected->cname ?></span>
            <p class="card-text"> <?= $jobSelected->description ?></p>
            <span class="font-italic"><?php echo "Lugar: " . ucfirst($jobSelected->location) ?></span>
            <p class='font-weight-light font-italic mb-0 '> <?= "Empresa: $jobSelected->company" ?> </p>
            <p> <?= "Salario: $$jobSelected->salary" ?></p>
        </div>
    </div>
</div>