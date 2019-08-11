<!DOCTYPE html>
<html lang="en">

<head>
    <title>Switch Law - Case Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/dashboard_style.css">
</head>

<body>

    <?php require_once('partials/nav-top.php'); ?>

    <div class="container-fluid" id="dashboard">

        <div class="row">
            <?php require_once('partials/sidebar.php'); ?>

            <div class="col-md-8">

                <?php
                        //echo $_REQUEST['id'];
                        $id = $_REQUEST['id'];
                        $data = file_get_contents("data/mycases.json");
                        $data = json_decode($data, true);
                ?>

                <h3 class="text-center mt-2" id="welcome"><?php echo $data[$id]['case_name']?></h3>

                <div class="shadow-lg p-3 mb-3 bg-white rounded mt-md-2">


                    <form id="viewcaseForm" class="" action="mycases.php" method="POST">

                        <div class="from-group row">
                            <div class="col-md-12 pb-2">
                                <div class="d-flex flex-row justify-content-end">
                                    <a href="mycases.php" class="btn btn-info mb-2 px-3"> OK </a>
                                </div>
                            </div>
                        </div>

                        <fieldset disabled>

                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                            <div class="form-group row">
                                <label for="case_name" class="col-md-2 col-form-label text-right">Case Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="case_name" value="<?php echo $data[$id]['case_name']?>">
                                </div>
                            </div>

                            <!-- 2nd form row -->
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="case_type" class="col-sm-4 col-form-label text-right">Case Type</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="case_type" value="<?php echo $data[$id]['case_type']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="case_status" class="col-sm-4 col-form-label text-right">Status</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="case_status">
                                                <option value="New" <?php if ($data[$id]['case_status']=="New") echo 'selected="selected"';?>>New</option>
                                                <option value="In Court" <?php if ($data[$id]['case_status']=="In Court") echo 'selected="selected"';?>>In Court</option>
                                                <option value="Transfered" <?php if ($data[$id]['case_status']=="Transfered") echo 'selected="selected"';?>>Transfered</option>
                                                <option value="Closed" <?php if ($data[$id]['case_status']=="Closed") echo 'selected="selected"';?>>Closed</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <!-- 3rd form row -->
                            <div class="form-row">

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="relief" class="col-sm-4 col-form-label text-right">Relief</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="relief" value="<?php echo $data[$id]['relief']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="location" class="col-sm-4 col-form-label text-right">Location</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="location" value="<?php echo $data[$id]['location']?>">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- 4th form row -->
                            <div class="form-row">

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="relief" class="col-sm-4 col-form-label text-right">Details</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="details" value="<?php echo $data[$id]['details']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="location" class="col-sm-6 col-form-label text-right">Submission Date</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="submission_date" value="<?php echo $data[$id]['submission_date']?>">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <input type="hidden" name="deleted" value="<?php echo $data[$id]['deleted']; ?>">
                        </fieldset>
                    </form>

                </div>

            </div>
        </div>
    </div>


    <?php require_once('partials/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
    </script>

</body>

</html>
