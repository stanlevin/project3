<!DOCTYPE html>
<html lang="en">

<head>
    <title>Switch Law - My Cases</title>
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

            <div class="col-md-10">
                <h3 class="text-center mt-2" id="welcome">My Cases</h3>

                <div class="d-flex flex-column  shadow-lg p-3 mb-3 bg-white rounded mt-md-2">
                    <div class="d-flex flex-row justify-content-end">
                        <a href="addcase.php" class="btn btn-primary mb-2"><i class="fa fa-fw fa-plus-circle"></i>Add Case</a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover no-wrap">

                            <thead>
                                <tr>
                                    <th scope="col">Case Name</th>
                                    <th scope="col">Case Type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Relief</th>
                                    <th scope="col">Location</th>
                                    <!-- <th scope="col">Details</th> -->
                                    <!-- <th scope="col">Submission Date</th> -->
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                    $data = file_get_contents("data/mycases.json");
                                    $data = json_decode($data, true);
                                    
                                    //print_r($data);
                                    
                                    $itemCount = count($data);
                                    //echo $itemCount . '<br>';

                                    if ( $itemCount > 0) {
                                        foreach($data as $id => $case) {
                                            if ($case['deleted'] != 'y') {
                                                echo '<tr id='.$id.'>
                                                    <td>'.$case['case_name'].'</td>
                                                    <td>'.$case['case_type'].'</td>
                                                    <td>'.$case['case_status'].'</td>
                                                    <td>'.$case['relief'].'</td>
                                                    <td>'.$case['location'].'</td>
                                                    
                                                    <td align="center">
                                                        <a href="viewcase.php?id='.$id.'" class="text-info"><i class="fas fa-eye"></i> View</a> |

                                                        <a href="editcase.php?id='.$id.'" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> |
                                                        
                                                        <span class="text-danger dlt-link" id="'.$id.'"><i class="fa fa-fw fa-trash"></i> Delete</span>
                                                        
                                                    </td>
                                                </tr>';  // end echo 
                                                };
                                            };
                                        };
                                    ?>

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <?php require_once('partials/footer.php'); ?>


    <!-- Modal -->

    <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLongTitle">Warning!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure to delete this case?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="deleteBtn" case_id="">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        //////////////////////////////////////////////////////////////////
        // DbClick! for row - view Case details
        /////////////////////////////////////////////////////////////////
        $('tr').dblclick(function() {
            var id = $(this).attr('id');

            if (typeof(id) != "undefined") {
                //console.log(id);
                var url = "viewcase.php?id=" + id;
                $(location).attr('href', url);
            };
        });


        ////////////////////////////////////////////////////////////////
        // Delete Case Functionality
        ///////////////////////////////////////////////////////////////

        // Click! for Delete link on row
        $('.dlt-link').click(function(event) {
            //alert('click');
            var id = $(this).attr('id');
            console.log('Delete event for id: ' + id);
            $('#deleteBtn').attr('case_id', id);
            $('#confirmDelete').modal('show');
        });


        // Click! for Delete button on Modal 
        $('#deleteBtn').click(function(event) {
            //alert('click');
            var id = $(this).attr('case_id');
            console.log('Delete confirmed for id: ' + id);
            var url = "dhdeletecase.php?id=" + id;
            $(location).attr('href', url);
        });

    </script>

</body>

</html>
