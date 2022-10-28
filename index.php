<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="my/mycl.css" rel="stylesheet" type="text/css">
<link href="my/my.css" rel="stylesheet" type="text/css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
</style>
<title>MNO porftolio</title>
</head>
<body>
<nav class="navbar  navbar-expand-lg  w-100 sticky-top">
<div class="container-fluid ">
<a class="navbar-brand title " href="#">Myo Naing Oo</a>
<a class="btn border  d-inline d-sm-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
<i class="fas fa-list"></i>
</a>

<div class="d-none d-sm-inline">
<ul class="nav sm-nav justify-content-center">
<li class="nav-item">
<a class="nav-link border" aria-current="page" href="#"><i class="fas fa-house"></i> HOME</a>
</li>
<li class="nav-item">
<a class="nav-link border" href="#skill"><i class="fas fa-gears" ></i>Skill</a>
</li>

<li class="nav-item">
<a class="nav-link border" href="#contect"><i class="fas fa-phone"></i>Contect</a>
</li>
<li class="nav-item">
<button class="nav-link btn border " onclick="daf()"><i class=" fas fa-moon btn-dark" id="dlicon" ></i></button>
</li>
</ul>
</div>
</div>
</nav>

<div class="offcanvas d-inline d-sm-none offcanvas-start container nbo w-50" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
<div class="offcanvas-header title">
<h5 class="offcanvas-title " id="offcanvasExampleLabel">Myo Naing Oo</h5>
<button type="button" class="btn-close btn " data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body center p-0">

<ul class="nav flex-column px-3">
<li class="nav-item my-1">
<a class="nav-link border" aria-current="page" href="#"><i class="fas fa-house"></i> HOME</a>
</li>
<li class="nav-item my-1">
<a class="nav-link border" href="#skill"><i class="fas fa-gears" ></i>Skill</a>
</li>

<li class="nav-item my-1">
<a class="nav-link border " href="#contect"><i class="fas fa-phone"></i>Contect</a>
</li>
<button class="nav-item my-1 btn border rounded" onclick="daf()"><i class="nav-link fas fa-moon btn-dark" id="dlicon" ></i></button>
</ul>
</div>
</div>
<div class="home container-fluid" id="home">

<div class="row">
<div class="man-bg container-fluid">
<img src="imgs/man.png" class="man" >
</div>
</div>

<div class=" wrapper  border p-4">

<span>Hi'</span><span class="text-danger name"> I'm  Myo Naing Oo</span>
 <p>website developer</p>
<div class=" ">

</div>

</div>
</div>

<div class="mb-2 center container-fluid">
<img src="imgs/bg.jpg" class="bg-skill">
<div class="skill col-12" id="skill">
<label>C/C++(Game)</label><span class="p-skill">50%</span>
<div class="progress">
<div class="progress-bar bg-pb w-50"></div>
</div>
<label>Python(Hack)</label><span class="p-skill">50%</span>
<div class="progress">
<div class="progress-bar bg-pb w-50"></div>
</div>

<label>HTML(web)</label><span class="p-skill">90%</span>
<div class="progress">
<div class="progress-bar bg-pb w-90"></div>
</div>
<label>CSS(web)</label><span class="p-skill">85%</span>
<div class="progress">
<div class="progress-bar bg-pb w-85"></div>
</div>
<label>Java Script(web)</label><span class="p-skill">75%</span>
<div class="progress">
<div class="progress-bar bg-pb w-75"></div>
</div>
<label>PHP(web)</label><span class="p-skill">95%</span>
<div class="progress">
<div class="progress-bar bg-pb w-95"></div>
</div>
<label >Laravel(web)</label><span class="p-skill">25%</span>
<div class="progress">
<div class="progress-bar bg-pb w-25"></div>
</div>
</div>
</div>



<div class="teach conteiner-fluid  py-3 ">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
<div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active out-none" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="out-none"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="out-none"></button>
</div>
<div class="carousel-inner ">

<div class="carousel-item active ">
<div class="row center" >
<div class="mybg-ex center rounded  mx-3 col-4">
<a href="bb.php" class="nav-link ">
<img class="teach-img mx-1" src="imgs/mm.jpg">
<p class="teach-p">programming MM<br>(C/C++,Python)</p>
</a>
</div>
<div class="mybg-ex center rounded  mx-3 col-4">
<a href="bb.php" class="nav-link ">
<img class="teach-img mx-1" src="imgs/72.jpeg">
<p class="teach-p">72 coder(Brighter Myanmar)<br>(php/laravel)</p>
</a>
</div>
</div>

</div>

<div class="carousel-item ">
<div class="row center" >
<div class="mybg-ex center rounded  mx-3 col-4">
<a href="bb.php" class="nav-link ">
<img class="teach-img mx-1" src="imgs/fcc.png">
<p class="teach-p">Free code camp</p>
</a>
</div>
<div class="mybg-ex center rounded  mx-3 col-4">
<a href="bb.php" class="nav-link ">
<img class="teach-img mx-1" src="imgs/msquare.jpeg">
<p class="teach-p">Msquare</p>
</a>
</div>
</div>
</div>
<div class="carousel-item ">
<div class="row center" >
<div class="mybg-ex center rounded  mx-3 col-4">
<a href="bb.php" class="nav-link ">
<img class="teach-img mx-1" src="imgs/wds.png">
<p class="teach-p">WDS(web effect)</p>
</a>
</div>
<div class="mybg-ex center rounded  mx-3 col-4">
<a href="bb.php" class="nav-link ">
<img class="teach-img mx-1" src="imgs/t.jpeg">
<p class="teach-p">Traversy Media<br>(javascript)</p>
</a>
</div>
</div>
</div>


</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>
</div>

<img class="proj-img " src="imgs/p.jpg">
<div class="project p-3 center">

<div class="bg-pb container-fluid center rounded  mx-3 col-6">
<a href="https://github.com/MyoNaingOo/shop" class="nav-link ">
<img class="p-img mx-1" src="imgs/p1.jpg">
<p class="teach-p">MNO Shop<br>(Webside Project)</p>
</a>
</div>

</div>

</div>



<div id="contect" class="contect my-2 row center p-2">
<div class="col-md-6 col-12">
<form action="sendmail.php" method="POST">
<div class="form-floating">
<input type="text" name="email" id="email" placeholder="E-Mail" class="form-control mt-3 mr-1">
<label for="email">Email</label>
</div>
<div class="form-floating">
 <input type="text" name="mass" id="mass" placeholder="Massage" class="form-control mt-3 mr-1" >
<label for="mass">Massage</label>
</div>

<button class="btn bg-pb center my-2"><i class="fas fa-paper-plane"></i>Send</button>
</form>

</div>

<div class="col-md-6 col-12 center ">
<img src="imgs/logo.jpg" class="logoimg"/>
<p class="conp">Product From MNOIT</br>DELOPER Myo Naing Oo</p>
</br>
</div>

<div class="col-sm-6 mt-3 center">
<a href="https://www.facebook.com/profile.php?id=100066607411343" class="nav-link mx-1">
<i class="fab fa-facebook text-primary"></i><span class="d-none d-md-inline">Facebook</span>
</a>
<a href="#" class="nav-link mx-1">
<i class="fab fa-youtube text-danger"></i><span class="d-none d-md-inline" >You Tube</span>
</a>
<a href="#" class="nav-link mx-1">
<i class="fab fa-twitter text-blue"></i><span class="d-none d-md-inline">Twitter</span>
</a>
<a href="https://www.instagram.com/myonaingoo623/tagged" class="nav-link mx-1">
<i class="fab fa-instagram instagram"></i><span class="d-none d-md-inline">Instagram</span>
</a>
<a href="https://github.com/MyoNaingOo" class="nav-link mx-1">
<i class="fab fa-github"></i><span class="d-none d-md-inline">Git Hut</span>
</a>
</div>

</div>

<footer class="p-2 center bg-primary ">&copy MNO 2022</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="my/my.js"></script>


</body>
</html>