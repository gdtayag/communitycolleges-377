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

    <script src="js/main.js"></script>

    <!-- Created using Bootstrap -->
    
    <body>
        <div class="row top top-buffer">
        </div>  

        <div class="container" style="border:3px solid #292929;">

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
                        <form class="form-inline" name="search" onsubmit="search();" method="POST" action="php/results.php">

                            <div class="col-md-10">
                                <label for="classSearch">Search by Class or Class ID: <label>
                                <input type="text" placeholder="Enter Class or Class ID" id="classSearch" name="class"/>
                            </div>

                            <div class="col-md-10">
                                <label for="semesterSelect">Choose a Semester: <label>
                                    <select id="semesterSelect" name="semester">
                                        <option value='NULL' selected="selected">Any</option>
                                        <option>Spring 2019</option>
                                        <option>Winter 2019</option>
                                    </select>
                            </div>

                            <div class="col-md-10">
                                <label for="schoolSelect">Choose a College: <label>
                                    <select id="schoolSelect" name="school">
                                        <option value="NULL" selected="selected">Any</option>
                                        <option>Anne Arundel</option>
                                        <option>Baltimore City</option>
                                        <option>Carroll</option>
                                        <option>Frederick</option>
                                        <option>Harford</option>
                                        <option>Howard</option>
                                        <option>Montgomery<option>
                                        <option>NOVA<option>
                                        <option>Southern MD<option>
                                        <option>UDC<option>
                                    </select>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <div class="row bottom bottom-buffer">
        </div>

        </div>
    </body>
</html>
