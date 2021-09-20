<div class='full-screen d-flex justify-content-center align-center flex-column'>
    <?php
    $job->salary = $job->salary == "" ? "Not specified" : $job->salary;

    ?>
    <div class="container py-5">
        <h1>Editing <?= $job->title ?> from <?= $job->company ?></h1>

        <form id="newjobform" method="POST">
            <div class="form-floating mb-3">
                <input name="job_title" class="form-control" id="job_title" type="text" required value="<?= $job->title ?>" />
                <label for="job_title">Job title</label>
            </div>
            <div class="form-floating mb-3">
                <input name="job_user_email" class="form-control" id="job_user_email" type="email" placeholder="Poster user email" required value="<?= $job->contact_user ?>" />
                <label for="job_user_email">Poster user email</label>

            </div>
            <div class="form-floating mb-3">
                <input name="job_company" class="form-control" id="job_company" type="text" placeholder="Company name" required value="<?= $job->company ?>" />
                <label for="job_company">Company name</label>

            </div>
            <div class="form-floating mb-3">
                <input name="job_company_email" class="form-control" id="job_company_email" type="email" placeholder="companymail@gmail" required value="<?= $job->contact_email ?>" />
                <label for="job_company_email">Company Email</label>

            </div>
            <div class="form-floating mb-3">
                <textarea maxlength="500" name="job_description" class="form-control" id="job_description" type="text" placeholder="description" style="height: 8rem;" required><?= $job->description ?></textarea>

                <label for="job_description">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input name='job_location' class="form-control" id="location" type="text" placeholder="Location" required value="<?= $job->location ?>" />
                <label for="location">Location</label>
            </div>
            <div class="form-floating mb-3">
                <input name="job_salary" class="form-control" id="salary" type="text" placeholder="Salary" value="<?= $job->salary ?>" />
                <label for="salary">Salary</label>
            </div>
            <div class="mb-3">
                <label for="job_category" class="form-label">Area </label>
                <select class="form-control" name="job_category_id" id="job_category">
                    <?php foreach ($categories as $category) : ?>
                        <?php if ($category->name == $job->cname) : ?>
                            <option selected value=<?= $category->id ?>><?php print_r($category->name) ?></option>
                        <?php else : ?>
                            <option value=<?= $category->id ?>><?php print_r($category->name) ?></option>
                        <?php endif; ?>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="editjob">Submit</button>

            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</div>