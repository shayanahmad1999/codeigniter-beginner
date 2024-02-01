<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<?php if (isset($company) && is_array($company)) : ?>
    <div class="container row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
        <tr>
        <td> <th>ID</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['id']) ?></td><br>
        <td><th>Brand Name</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['brand_name']) ?></td><br>
        <td><th>Foundation Year</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['year_of_company_foundation']) ?></td><br>
        <td><th>Franchise Year</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['year_of_offering_franchises']) ?></td><br>
        <td><th>Pay Box</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['pay_box_of_franchises']) ?></td><br>
        <td><th>Average Turnover</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['average_turnover']) ?></td><br>
        <td><th>Contact Phone</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['contact_phone_name']) ?></td><br>
        <td><th>Designation</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['designation']) ?></td><br>
        <td><th>WhatsApp</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['whatsApp_INT']) ?></td><br>
        <td><th>Email</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['email']) ?></td><br>
        <td><th>Office INT</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['office_INT']) ?></td><br>
        <td><th>Postal Address</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['postal_address']) ?></td><br>
        <td><th>Description</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['description']) ?></td><br>
        <td><th>Category</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['category']) ?></td><br>
        <td><th>Country</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['country']) ?></td><br>
        <td><th>City</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['city']) ?></td><br>
        <td><th>Province</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['province']) ?></td><br>
        <td><th>Brand Logo</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo base_url('uploads/images/' . $company['brand_logo']);; ?>" class="img-fluid" alt="no-image"></td><br>
        <td><th>Setup Image 1</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?= base_url('uploads/images/' . $company['setup_image_1']); ?>" class="img-fluid" alt="no-image"></td><br>
        <td><th>Setup Image 2</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?= base_url('uploads/images/' . $company['setup_image_2']); ?>" class="img-fluid" alt="no-image"></td><br>
        <td><th>Setup Image 3</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?= base_url('uploads/images/' . $company['setup_image_3']); ?>" class="img-fluid" alt="no-image"></td><br>
        <td><th>Brand Type</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['brand_type']); ?></td><br>
        <td><th>Brand Slogan</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= esc($company['brand_slogan']); ?></td><br>
        <td><th>Slider</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?= base_url('uploads/images/' . $company['slider']); ?>" class="img-fluid" alt="no-image"></td><br>
        <td><th>Image</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?= base_url('uploads/images/' . $company['image']); ?>" class="img-fluid" alt="no-image"></td><br>
        <td><th>Action</th>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?= esc(base_url('/company/delete/' . $company['id'])) ?>">Delete</a>
            <a href="<?= esc(base_url('/company/edit/' . $company['id'])) ?>">Edit</a>
            <a href="<?= esc(base_url('/company/view/' . $company['id'])) ?>">view</a>
        </td><br>
    </tr>
        </div>
    </div>
<?php endif ?>