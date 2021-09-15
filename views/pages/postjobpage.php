<div class='full-screen d-flex justify-content-center align-center flex-column'>
    <div class="container ">
        <form id="newjobform" method="POST">
            <div class="form-floating mb-3">
                <input name="job_title" class="form-control" id="job_title" type="text" placeholder="Ex: Manager, Developer..." required />
                <label for="job_title">Ex: Manager, Developer...</label>
                <div class="invalid-feedback" data-sb-feedback="job_title:required">Ex: Manager, Developer... is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input name="job_user_email" class="form-control" id="job_user_email" type="email" placeholder="Poster user email" required />
                <label for="job_user_email">Poster user email</label>
                <div class="invalid-feedback" data-sb-feedback="job_user_email:required">poster email is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input name="job_company" class="form-control" id="job_company" type="text" placeholder="Company name" required />
                <label for="job_company">Company name</label>
                <div class="invalid-feedback" data-sb-feedback="job_company:required">Company name is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input name="job_company_email" class="form-control" id="job_company_email" type="email" placeholder="companymail@gmail" data-sb-validations="email" required />
                <label for="job_company_email">Companymail@gmail</label>
                <div class="invalid-feedback" data-sb-feedback="job_company_email:required">Companymail@gmail is required.</div>
                <div class="invalid-feedback" data-sb-feedback="job_company_email:email">Company@gmail Email is not valid.</div>
            </div>
            <div class="form-floating mb-3">
                <textarea maxlength="500" name="job_description" class="form-control" id="job_description" type="text" placeholder="description" style="height: 8rem;" required></textarea>
                <label for="job_description">Description</label>
                <div class="invalid-feedback" data-sb-feedback="job_description:required">Description is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input name='job_location' class="form-control" id="location" type="text" placeholder="Location" required />
                <label for="location">Location</label>
                <div class="invalid-feedback" data-sb-feedback="location:required">Location is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input name="job_salary" class="form-control" id="salary" type="text" placeholder="Salary" data-sb-validations="" />
                <label for="salary">Salary</label>
            </div>
            <div class="mb-3">
                <label for="job_category" class="form-label">Area</label>
                <select class="form-control" name="job_category_id" id="job_category">
                    <?php foreach ($categories as $category) : ?>
                        <option value=<?= $category->id ?>><?php print_r($category->name) ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit" name="newjob">Submit</button>

            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</div>