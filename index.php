<?php
require_once("../BOOK_STORE/php/Component.php");


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimun-scale=1.0"
    >
    <meta http-equiv='X-UA-Compatible' content="ie=edge">
    <title>
        Book Store
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!--style-->
<link rel="stylesheet" href="style.css">
</head>
    <body>
    <main>
        <div class="container text-center">
        <div class="p-3 mb-2 bg-danger text-white">
            <h1><i class="fas fa-swatchbook"></i>Book Store</h1>
            <h5 class="text-center"> Only for Book Lovers 📚❤</h5>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <form action="" method="POST" class="w-50">
            <div class="py-2">
                <div class="input-group mb-3">
                <span class="input-group-text bg-info" id="basic-addon1"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
                <input type="text" autocomplete="off" placeholder="Book ID" class="form-control" placeholder="book id" aria-label="User id" aria-describedby="basic-addon1">
                </div>
            </div> 
            <div class="py-2">
                <div class="input-group mb-3">
                <span class="input-group-text bg-info" id="basic-addon1"><i class="fa fa-book" aria-hidden="true"></i></span>
                <input type="text" autocomplete="off" placeholder="Book Name" class="form-control" placeholder="book name" aria-label="bookname" aria-describedby="basic-addon1">
                </div>
            </div> 
            <div class="row">
                <div class="col">
                <div class="input-group mb-3">
                <span class="input-group-text bg-info" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" autocomplete="off" placeholder="Book Author" class="form-control" placeholder="book author" aria-label="bookauthor" aria-describedby="basic-addon1">
                </div>
            </div> 
            <div class="col">
                <div class="input-group mb-3">
                <span class="input-group-text bg-info" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                <input type="text" autocomplete="off" placeholder="Collection Date" class="form-control" placeholder="add date" aria-label="add date" aria-describedby="basic-addon1">
                </div>
            
            </div>
            <div class="d-flex">
                <?php button(btnid:"btn",styleclass:"btn btn-success",text:"Add",name:"add"); ?>

            </div>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


    </body>
</html>