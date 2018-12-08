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
      <form action="../index.php">
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
    </body>
</html>
