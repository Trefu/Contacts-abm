<div class='full-screen d-flex justify-content-center align-center flex-column'>
    <div class="container ">
        <form id="newjobform" method="POST" action="?controller=jobs_controller&action=create">
            <div class="form-floating mb-3">
                <input name="job_title" class="form-control" id="job_title" type="text" placeholder="Ex: Manager, Developer..." data-sb-validations="required" />
                <label for="job_title">Ex: Manager, Developer...</label>
                <div class="invalid-feedback" data-sb-feedback="job_title:required">Ex: Manager, Developer... is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input name="job_company" class="form-control" id="job_company" type="text" placeholder="Company name" data-sb-validations="required" />
                <label for="job_company">Company name</label>
                <div class="invalid-feedback" data-sb-feedback="job_company:required">Company name is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input name="job_company_email" class="form-control" id="job_company_email" type="email" placeholder="companymail@gmail" data-sb-validations="required,email" />
                <label for="job_company_email">companymail@gmail</label>
                <div class="invalid-feedback" data-sb-feedback="job_company_email:required">companymail@gmail is required.</div>
                <div class="invalid-feedback" data-sb-feedback="job_company_email:email">companymail@gmail Email is not valid.</div>
            </div>
            <div class="form-floating mb-3">
                <textarea maxlength="500" name="job_description" class="form-control" id="job_description" type="text" placeholder="description" style="height: 8rem;" data-sb-validations="required"></textarea>
                <label for="job_description">job_description</label>
                <div class="invalid-feedback" data-sb-feedback="job_description:required">job_description is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="location" type="text" placeholder="Location" data-sb-validations="required" />
                <label for="location">Location</label>
                <div class="invalid-feedback" data-sb-feedback="location:required">Location is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="salary" type="text" placeholder="Salary" data-sb-validations="" />
                <label for="salary">Salary</label>
            </div>

            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</div>