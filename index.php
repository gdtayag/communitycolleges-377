<!DOCTYPE html>
<html lang="en">

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/default.css">
        <title></title>
    </head>

    <script>
        function search() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status = 200) {
                    document.getElementById("text").innerHTML = this.responseText;
                }
            };
            xhttp.open("", "php/index.php?q=", true);
            xhttp.send();
        }
    </script>

    <body>
        <div class="container">

            <div class="row top top-buffer">
            </div>

            <div class="row">
                <div class="col-md-4">
                    <img id="logo" src="images/umd-ball.jpg" class="img-responsive">
                </div>
        
                <div class="col-md-8">
                    <h1>Community College Course Finder</h1>
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <form class="form-inline" name="search" action="php/index.php" method="GET">
                        
                            Search by class: <input type="text" placeholder="Enter class" name="class"/>
                            
                            <div class="col-md-4">
                                Subject:
                                    <select name="subject">
                                        <option value="Select" selected="selected">Choose Subject</option>
                                        <option>Math</option>
                                        <option>Biology</option>
                                        <option>Business</option>
                                    </select>
                            </div>

                            <div class="col-md-4">
                                Semester:
                                    <select name="semester">
                                        <option value="Select" selected="selected">Choose Semester</option>
                                        <option>Winter 2019</option>
                                        <option>Summer 2019</option>
                                        <option>Fall 2019</option>
                                    </select>
                            </div>

                            <div class="col-md-12">
                                <input type="submit"/>
                            </div>
                        </form>
                    </div>
                </div>

        <div class="row middle middle-buffer">
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>School</th>
                                <th>Course</th>
                                <th>Credits</th>
                                <th>Equivalent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>University of Maryland</td>
                                <td>INST 377</td>
                                <td>3</td>
                                <td>N/A</td>
                            </tr>
                            <tr>
                                <td>University of Maryland</td>
                                <td>INST 346</td>
                                <td>2</td>
                                <td>N/A</td>
                            </tr>
                            <tr>
                                <td>University of Maryland</td>
                                <td>INST 352</td>
                                <td>2</td>
                                <td>N/A</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" id="text">
                    <?php include ('php/index.php');?>
                </div>
            </div>
        </div>
    </body>
</html>