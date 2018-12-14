<!DOCTYPE html>
<html lang="en">

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/results.css">
        <title></title>
    </head>

    <div class="row top top-buffer">
    </div>

    <body>

    <div class="top top-buffer">
    </div>

    <div class="container" style="border:3px solid #292929;">
        <form action="../../index.php">
            <input type="submit" value="Return" />
        </form>

        <div class="row">
            <div class="col-md-12" id="text">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <th>ID</th><th>Title</th><th>College</th><th>Term</th><th>Start Term</th><th>End Term</th><th>UMD Equivalent</th><th>Credit</th>
                        <?php include ('SQL_query.php');?>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom bottom-buffer">
    </div>

    </body>
</html>
