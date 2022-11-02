<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>
<?php
            if($this->session->flashdata('msg')){

                echo '<h3>' .$this->session->flashdata('msg'). '</h3>';
            }
            ?>


<?php echo validation_errors(); ?>
    <div class="container mt-5">
    <?php echo form_open('processController/insert'); ?>
            <!-- <form class="row mt-5 g-3" style="width:40%" m-5> -->
    <a href="<?php echo base_url('/index.php/processController/showData')?>" type="button" class="btn btn-primary m-5 " >View All</a>

            <h2>Add User</h2>
                <div class="col-md-12">
                    <label for="name" class="form-label">name</label>
                    <input type="text" name="name"class="form-control" id="fname">
                </div>
                <div class="col-md-12">
                    <label for="address" class="form-label">address</label>
                    <input type="text" name="address"class="form-control" id="address">
                </div>
                <div class="col-12">
                    <label for="telephone" class="form-label">telephone</label>
                    <input type="text" name="phone" class="form-control" id="tel" >
                </div>             
                <div class="col-12 mt-5">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
        <!-- </form> -->
    <?php echo form_close() ?>
    </div>

</body>
</html>