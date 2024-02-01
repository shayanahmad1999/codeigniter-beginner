<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Companies List</title>
</head>
<body>
<?= esc('title') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            <h2>Companies List</h2>
        </div>
        <div class="col-md-2">
            <a href="<?= base_url('/company/create') ?>">Add Company</a>
        </div>
        <div class="col-md-2">
           <form action="<?= base_url('/company') ?>">
            <input type="search" name="search" class="form-control" placeholder="Search...!">
           </form>
        </div>
        <div class="col-md-1">
            <a href="<?= base_url('/company') ?>">reset</a>
        </div>
    </div>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand Name</th>
                <th>Foundation Year</th>
                <th>Franchise Year</th>
                <th>Pay Box</th>
                <th>Average Turnover</th>
                <th>Contact Phone</th>
                <th>Designation</th>
                <th>WhatsApp</th>
                <th>Email</th>
                <th>Office INT</th>
                <th>Postal Address</th>
                <th>Description</th>
                <th>Category</th>
                <th>Country</th>
                <th>City</th>
                <th>Province</th>
                <th>Brand Logo</th>
                <th>Setup Image 1</th>
                <th>Setup Image 2</th>
                <th>Setup Image 3</th>
                <th>Brand Type</th>
                <th>Brand Slogan</th>
                <th>Slider</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($companies) && is_array($companies)): ?>
                <?php foreach($companies as $company): ?>
                    <tr>
                    <td><?= esc($company->id) ?></td>
                    <td><?= esc($company->brand_name) ?></td>
                    <td><?= esc($company->year_of_company_foundation) ?></td>
                    <td><?= esc($company->year_of_offering_franchises) ?></td>
                    <td><?= esc($company->pay_box_of_franchises) ?></td>
                    <td><?= esc($company->average_turnover) ?></td>
                    <td><?= esc($company->contact_phone_name) ?></td>
                    <td><?= esc($company->designation) ?></td>
                    <td><?= esc($company->whatsApp_INT) ?></td>
                    <td><?= esc($company->email) ?></td>
                    <td><?= esc($company->office_INT) ?></td>
                    <td><?= esc($company->postal_address) ?></td>
                    <td><?= esc($company->description) ?></td>
                    <td><?= esc($company->category) ?></td>
                    <td><?= esc($company->country) ?></td>
                    <td><?= esc($company->city) ?></td>
                    <td><?= esc($company->province) ?></td>
                    <td><img src="<?php echo base_url('uploads/images/'. $company->brand_logo);; ?>" class="img-fluid" alt="no-image"></td>
                    <td><img src="<?= base_url('uploads/images/' . $company->setup_image_1); ?>" class="img-fluid" alt="no-image"></td>
                    <td><img src="<?= base_url('uploads/images/' . $company->setup_image_2); ?>" class="img-fluid" alt="no-image"></td>
                    <td><img src="<?= base_url('uploads/images/' . $company->setup_image_3); ?>" class="img-fluid" alt="no-image"></td>
                    <td><?= esc($company->brand_type); ?></td>
                    <td><?= esc($company->brand_slogan); ?></td>
                    <td><img src="<?= base_url('uploads/images/' . $company->slider); ?>" class="img-fluid" alt="no-image"></td>
                    <td><img src="<?= base_url('uploads/images/' . $company->image); ?>" class="img-fluid" alt="no-image"></td>
                    <td>
                        <a href="<?= esc(base_url('/company/delete/' . $company->id))?>">Delete</a>
                        <a href="<?= esc(base_url('/company/edit/' . $company->id))?>">Edit</a>
                        <a href="<?= esc(base_url('/company/view/' . $company->id))?>">view</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif ?>
        </tbody>
    </table>
    <div class="row">
    <!-- // for pagination but not working i will correct it -->
    <!-- <?php // $pager->links() ?> -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
