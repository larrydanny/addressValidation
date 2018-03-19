<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Address validation in jquery validate plugin</title>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/custom.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Address custom validation</h1>
                <form role="form" method="post" action="#" id="formValidation">
                    <div class="form-group">
                        <label for="address">Address</label> ( <em>Alphabets, hyphen, comma, slash, space, dot, underscores and at least a number accepts</em> )
                        <input id="address" name="address" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>