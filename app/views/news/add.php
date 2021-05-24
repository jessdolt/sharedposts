<?php require APPROOT . '/views/inc/header.php'; ?>

    <div class="row">
        <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Add News</h2>
            <p>What's New?</p>
            <form action="<?php echo URLROOT;?>/news/add" method='post'>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err']))
                    ? 'is-invalid' : ' ';?> " value="<?php echo $data['title']?>">
                    <span class="invalid-feedback"><?php echo $data['title_err']?></span>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control form-control-lg <?php echo (!empty($data['description_err'])) ? 'is-invalid' : ' ';?> " value="<?php echo $data['description']?>">
                    <span class="invalid-feedback"><?php echo $data['description_err']?></span>
                </div>
                
                <div class="row mt-4">
                    <div class="col ">
                        <input type="submit" value="Add News" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT;?>/users/register" class="btn btn-light btn-block">No Account? Sign Up</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>