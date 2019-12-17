<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>zoo-park</title>
</head>
<style>
    .navbar .navbar-brand{
            color: white;
            margin-left: 100px;
    }
    .navbar .navbar-nav li a{
            color: white !important;
        
    }
    .carousel-item img{
    height: 500px;
    }
</style>
<body>
    <?php include "./setting/constant.php"?>
    <?php $detect = HOME; // biến để xử lý about?>
    <?php include "./helper/header_common.php"?>
    <div id="my-carousel" class="carousel slide" data-ride="carousel">


            <ol class="carousel-indicators">
                <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
                <li data-target="#my-carousel" data-slide-to="1"></li>
                <li data-target="#my-carousel" data-slide-to="2"></li>
                <li data-target="#my-carousel" data-slide-to="3"></li>
                <li data-target="#my-carousel" data-slide-to="4"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="asset/img/banner1.png" alt="">


                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="asset/img/banner2.png" alt="">

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="asset/img/banner3.png" alt="">

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="asset/img/banner4.png" alt="">

                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="asset/img/banner5.png" alt="">

                </div>
            </div>
            <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <?php include "./helper/footer_common.php"?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>