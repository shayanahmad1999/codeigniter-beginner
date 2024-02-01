<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Company Information</title>
</head>

<body>
    <?= session()->getFlashdata('error') ?>
    <?= \Config\Services::validation()->listErrors() ?>
    <div class="container mt-5">
        <h2>Edit Company Information</h2>
        <?php echo form_open_multipart('company/update/' . $company->id); ?>
        <?= csrf_field() ?>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="brand_name">Brand Name:</label>
                    <input type="text" class="form-control" id="brand_name" name="brand_name" value="<?= esc($company->brand_name) ?>" placeholder="Enter brand name">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="year_of_company_foundation" style="font-size:12px;">Year of Company Foundation:</label>
                    <input type="date" class="form-control" id="year_of_company_foundation" name="year_of_company_foundation" value="<?= esc($company->year_of_company_foundation) ?>">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="year_of_offering_franchises" style="font-size:12px;">Year of Offering Franchises:</label>
                    <input type="date" class="form-control" id="year_of_offering_franchises" name="year_of_offering_franchises" value="<?= esc($company->year_of_offering_franchises) ?>">
                </div>

            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="pay_box_of_franchises">Pay Box of Franchises:</label>
                    <input type="text" class="form-control" id="pay_box_of_franchises" name="pay_box_of_franchises" value="<?= esc($company->pay_box_of_franchises) ?>" placeholder="Enter pay box">
                </div>

            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="average_turnover">Average Turnover:</label>
                    <input type="number" class="form-control" id="average_turnover" name="average_turnover" value="<?= esc($company->average_turnover) ?>" placeholder="Enter average turnover">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="contact_phone_name">Contact Phone Name:</label>
                    <input type="text" class="form-control" id="contact_phone_name" name="contact_phone_name" value="<?= esc($company->contact_phone_name) ?>" placeholder="Enter contact phone name">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="designation">Designation:</label>
                    <input type="text" class="form-control" id="designation" name="designation" value="<?= esc($company->designation) ?>" placeholder="Enter designation">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="whatsApp_INT">WhatsApp INT:</label>
                    <input type="number" class="form-control" id="whatsApp_INT" name="whatsApp_INT" value="<?= esc($company->whatsApp_INT) ?>" placeholder="Enter WhatsApp INT">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= esc($company->email) ?>" placeholder="Enter email">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="office_INT">Office INT:</label>
                    <input type="number" class="form-control" id="office_INT" name="office_INT" value="<?= esc($company->office_INT) ?>" placeholder="Enter office INT">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="postal_address">Postal Address:</label>
                    <textarea class="form-control" id="postal_address" name="postal_address" placeholder="Enter postal address"><?= esc($company->postal_address) ?></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Enter description"><?= esc($company->description) ?></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="category">Category:</label>
                    <input type="text" class="form-control" id="category" name="category" value="<?= esc($company->category) ?>" placeholder="Enter category">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input type="text" class="form-control" id="country" name="country" value="<?= esc($company->country) ?>" placeholder="Enter country">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" name="city" value="<?= esc($company->city) ?>" placeholder="Enter city">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="province">Province:</label>
                    <input type="text" class="form-control" id="province" name="province" value="<?= esc($company->province) ?>" placeholder="Enter province">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="brand_logo">Brand Logo :</label>
                    <input type="file" class="form-control" id="brand_logo" name="brand_logo" placeholder="Enter brand logo ">
                    <img src="<?= base_url('uploads/images/' . $company->brand_logo); ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="setup_image_1">Setup Image 1 :</label>
                    <input type="file" class="form-control" id="setup_image_1" name="setup_image_1" placeholder="Enter setup image 1 ">
                    <img src="<?= base_url('uploads/images/' . $company->setup_image_1); ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="setup_image_2">Setup Image 2 :</label>
                    <input type="file" class="form-control" id="setup_image_2" name="setup_image_2" placeholder="Enter setup image 2 ">
                    <img src="<?= base_url('uploads/images/' . $company->setup_image_2); ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="setup_image_3">Setup Image 3 :</label>
                    <input type="file" class="form-control" id="setup_image_3" name="setup_image_3" placeholder="Enter setup image 3 ">
                    <img src="<?= base_url('uploads/images/' . $company->setup_image_3); ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="brand_type">Brand Type:</label>
                    <input type="text" class="form-control" id="brand_type" name="brand_type" value="<?= esc($company->brand_type) ?>" placeholder="Enter brand type">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="brand_slogan">Brand Slogan:</label>
                    <input type="text" class="form-control" id="brand_slogan" name="brand_slogan" value="<?= esc($company->brand_slogan) ?>" placeholder="Enter brand slogan">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="slider">Slider Image :</label>
            <input type="file" class="form-control" id="slider" name="slider" placeholder="Enter slider image ">
            <img src="<?= base_url('uploads/images/' . $company->slider); ?>" class="img-fluid" alt="">
        </div>
        <div class="form-group">
            <label for="image">Image :</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Enter image ">
            <img src="<?= base_url('uploads/images/' . $company->image); ?>" class="img-fluid" alt="">
        </div>

        <input type="hidden" name="existing_brand_logo" value="<?= htmlspecialchars($company->brand_logo); ?>">
        <input type="hidden" name="existing_setup_image_1" value="<?= htmlspecialchars($company->setup_image_1); ?>">
        <input type="hidden" name="existing_setup_image_2" value="<?= htmlspecialchars($company->setup_image_2); ?>">
        <input type="hidden" name="existing_setup_image_3" value="<?= htmlspecialchars($company->setup_image_3); ?>">
        <input type="hidden" name="existing_slider" value="<?= htmlspecialchars($company->slider); ?>">
        <input type="hidden" name="existing_image" value="<?= htmlspecialchars($company->image); ?>">

        <button type="submit" class="btn btn-primary">Update</button>
        <?php echo form_close(); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>