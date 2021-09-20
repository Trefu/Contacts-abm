<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Job lister</h1>
            <p class="lead mb-0">Crud made with php and mysql</p>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">

        <div class="col-lg-8">

            <?php if (!empty($jobs)) {
                include_once "../jobs/jobsCards.php";
            } else {
                echo "<h1>No jobs found! </h1>";
            };
            ?>
            <!--    <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav> -->
        </div>
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <form class="input-group" method="GET">
                        <input required min="3" name="searchByQuery" class="form-control" type="text" placeholder="Search by job name, company..." aria-label="Search by job name, company..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                    </form>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class=" text-center">
                            <?php foreach ($categories as $category) : ?>
                                <a class="p-2" href="?searchByCategory=<?php echo $category->id ?>"><?= $category->name ?></a>
                            <?php endforeach ?>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>