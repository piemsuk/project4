<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./script/style.css" />
</head>
<body>

    <?php
       include "navbar.php";

    ?>
    <div class="container col-md-6">
        <h1 class="text-center"> Register </h1>
        <form action="reg_insert.php" method="post" enctype="multipart/form-data">
            
            <div class="row">
                <div class="col-md-2">
                    First Name
                </div>
                <div class="col-md-10">
                    <input type="text" name="firstname" class="form-control" />
                </div>                
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    Last Name
                </div>
                <div class="col-md-10">
                    <input type="text" name="lastname" class="form-control" />
                </div>                
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    E-mail
                </div>
                <div class="col-md-10">
                    <input type="text" name="email" class="form-control" />
                </div>                
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    Password
                </div>
                <div class="col-md-10">
                    <input type="text" name="password" class="form-control" />
                </div>                
            </div>

            <div class="row pt-2">
                <div class="col-md-2">
                    Address
                </div>
                <div class="col-md-10">
                    <textarea rows="5" cols="50" name="address" class="form-control"> </textarea>
                </div>                              
            </div>

            <div class="d-grid pt-2">
                <input type="submit" value="ลงทะเบียน" class="btn btn-primary" />
            </div>
    </form>
    
</body>
</html>


