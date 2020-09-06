<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Restaurant Info</title>
        <script src="jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">    
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1 class="header">Restaurant Info</h1>
        <div class="alignit">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Search Restaurant
                </button>
                <div class="dropdown-menu" id="additems">
                </div>
            </div>
        </div>
        <div class="main">
            <h1 class="empty">Select Any of the Restaurant to See...</h1>
            <div class="onchoose">
                <p><strong>Short Name: </strong><span id="shortname"></span></p>
                <p><strong>Name: </strong><span id="name"></span></p>
                <p><strong>Description: </strong><span id="desc"></span></p>
                <p><strong>Price Small: </strong><span id="psmall"></span></p>
                <p><strong>Price Large: </strong><span id="plarge"></span></p>
                <p><strong>Small Portion Name: </strong><span id="sportion"></span></p>
                <p><strong>Large Portion Name: </strong><span id="lportion"></span></p>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>