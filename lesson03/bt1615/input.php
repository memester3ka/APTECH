<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register page</title>
    <style type="text/css">
        .form-group{
            margin-bottom: 20px;
        }
    </style>
</head>
    <div class="container">
    <form method="get" action="welcome.php">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fullname" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="pwd" class="form-control">
        </div>
        <div class="form-group">
            <button class="btn btn-success">Register</button>
            <button class="btn btn-warning" type="reset">reset</button>
    </form>
<body>
</html>