<!DOCTYPE html>
<html lang="en">

<head>

    <title>Switch Law</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/dashboard_style.css">

</head>

<body>

    <?php require_once('partials/nav-top.php'); ?>

    <div class="container-fluid" id="dashboard">

        <div class="row">
            <?php require_once('partials/sidebar.php'); ?>
            
            <div class="col-md-10">
                <h3 class="text-center mt-2" id="welcome">Welcome!</h2>
                    <div class="row">
                        <div class="col-md-6" style="">
                            <div class="d-flex flex-column  shadow-lg p-3 mb-3 bg-white rounded mt-md-2">
                                <h5 class="mb-3 widget-header">Latest Cases (4)</h5>
                                <div class="table-responsive mb-2">
                                    <table class="table table-hover no-wrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Case Name</th>
                                                <th scope="col">Case Type</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Relief</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Submission Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Simone Castello - XYZ Lending, Inc </td>
                                                <td>Real Estate Foreclosure</td>
                                                <td>In Court</td>
                                                <td>$200,000</td>
                                                <td>Detroit, Michigan, United States</td>
                                                <td>Summons Served on 01/01/2010</td>
                                                <td>January 27, 2013</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Real Builders - Img group, Inc </td>
                                                <td>Workers Comp</td>
                                                <td>In Court</td>
                                                <td>1,500,000</td>
                                                <td>Toronto, Canada</td>
                                                <td>Summons Served on 01/01/2010</td>
                                                <td>June 11, 2016</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Gelato Express - ABC, Inc </td>
                                                <td>Medical Malpractice</td>
                                                <td>Dissmised</td>
                                                <td>$650,000</td>
                                                <td>New York, New York, United States</td>
                                                <td>Summons Served on 01/01/2010</td>
                                                <td>March 31, 2015</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>NY Realtors - ABF Construction, Inc </td>
                                                <td>Auto Accident</td>
                                                <td>In Court</td>
                                                <td>$100,000</td>
                                                <td>San Francisco, LA United States</td>
                                                <td>Summons Served on 01/01/2010</td>
                                                <td>Feb 12, 2011</td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-dark-blue">Explore Cases</button>
                                </div>
                            </div>

                            <div class="d-flex flex-column  shadow-lg p-3 mb-3 bg-white rounded mt-md-2">
                                <h5 class="mb-3 widget-header">Most Popular Cases (2)</h5>
                                <div class="table-responsive mb-2">
                                    <table class="table table-hover no-wrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Case Name</th>
                                                <th scope="col">Case Type</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Releif</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Submission Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Gelato Express - ABC, Inc </td>
                                                <td>Medical Malpractice</td>
                                                <td>Dissmised</td>
                                                <td>$650,000</td>
                                                <td>New York, New York, United States</td>
                                                <td>Summons Served on 01/01/2010</td>
                                                <td>March 31, 2015</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>NY Realtors - ABF Construction, Inc </td>
                                                <td>Auto Accident</td>
                                                <td>In Court</td>
                                                <td>$100,000</td>
                                                <td>San Francisco, LA United States</td>
                                                <td>Summons Served on 01/01/2010</td>
                                                <td>Feb 12, 2011</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-dark-blue">Explore Cases</button>
                                </div>
                            </div>
                        </div>

                        <div class=" col-md-4" style="">
                            <div class="d-flex flex-column  shadow-lg p-3 mb-3 bg-white rounded mt-md-2">
                                <h5 class="mb-3 widget-header">My Offers (3)</h5>
                                <ul class="list-group widget-font mb-2">

                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            Joe Sander vs. XYZ Corp
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </div>
                                        <span class="inprogress"> In pogress</span>
                                    </li>


                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            Nebraska v. One 1970 2-Door Sedan Rambler (Gremlin)
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </div>
                                        <span class="inprogress"> In pogress</span>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between align-items-center">
                                            United States v. Article Consisting
                                            <span class="badge badge-primary badge-pill">1</span>
                                        </div>
                                        <span class="completed">Completed</span>
                                    </li>

                                </ul>
                                <div>
                                    <button type="button" class="btn btn-dark-blue">Details</button>
                                </div>
                            </div>

                            <div class="d-flex flex-column  shadow-lg p-3 mb-3 bg-white rounded mt-md-2">
                                <h5 class="mb-3 widget-header">My Proposals (3)</h5>
                                <ul class="list-group widget-font mb-2">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        United States v. Jones, 565 U.S
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Kellogg Brown, Inc. v. United States Ex Rel. Carter

                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Crawford v. Simmons
                                    </li>
                                </ul>
                                <div>
                                    <button type="button" class="btn btn-dark-blue">Details</button>
                                </div>
                            </div>

                            <div class="d-flex flex-column  shadow-lg p-3 mb-3 bg-white rounded mt-md-2">
                                <h5 class="mb-3 widget-header">My Bookmarks (2) </h5>
                                <ul class="list-group list-group-flush widget-font mb-1">
                                    <li class="list-group-item">
                                        United States v. Jones, 565 U.S
                                    </li>
                                    <li class="list-group-item">
                                        Kellogg Brown, Inc. v. United States Ex Rel. Carter
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>



    <!---------------------------------------------------------------------->
    <!--                               FOOTER                             -->
    <!---------------------------------------------------------------------->
    <?php require_once('partials/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        console.log(window.location.search);

        $(document).ready(function() {
            var firstname = GetParameterValues('first-name');
            var lastname = GetParameterValues('last-name');

            console.log(firstname, lastname);
        
            if (firstname !== undefined) {
                document.getElementById('welcome').innerHTML = "Welcome " + firstname + " " + lastname + "!";    
            }

            function GetParameterValues(param) {
                var url = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
                for (var i = 0; i < url.length; i++) {
                    var urlparam = url[i].split('=');
                    if (urlparam[0] == param) {
                        return urlparam[1];
                    }
                }
            }
        });

    </script>
</body>

</html>
