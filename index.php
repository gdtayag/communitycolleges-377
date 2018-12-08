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
                        <form class="form-inline" name="search" onsubmit="search();" method="POST" action="php/results.php">

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
                                        <option value='NULL' selected="selected">Any</option>
                                        <option>Spring 2019</option>
                                        <option>Winter 2019</option>
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
                <div class="col-md-12" id="text">
                  <div class="table-responsive">
                    <table class="table table-striped">

                    </table>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>
