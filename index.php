<?php

$initFile = '.\1.Database\init.php';
$flagFile = '.\1.Database\init_flag.txt';

if (!file_exists($flagFile)) {
    require_once $initFile;
    file_put_contents($flagFile, 'Finish create database and table');
}
$insertFile = '.\1.Database\insert.php';
$fflagFile = '.\1.Database\insert_flag.txt';
if (!file_exists($fflagFile)) {
  require_once $insertFile;
  file_put_contents($fflagFile, 'INSERTTTTTT');
}
require_once '.\layouts\header.php';
?>
      <div class="container-fluid">
        <div id="carousel-example-generic" class="carousel slide position-relative" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/img/banner/bb1.png"  class="d-block w-100 h-20" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Hạ Long Bay,Vietnam</h5>
                <p>An emerald green waters and towering limestone karsts, it is a UNESCO World Heritage site and one of the most popular tourist destinations in the country.</p>
              </div>
            </div>
            <div class="carousel-item"> 
              <img src="./assets/img/banner/bb2.png"  class="d-block w-100 h-20" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Waikiki Beach, Hawaii</h5>
                <p>A legendary surf culture, attracting surfers from around the world who come to ride the gentle rolling waves of this iconic beach.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/img/banner/bb3.png" class="d-block w-100 h-20" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Pattaya Beach, Thailand.</h5>
                <p>An entertainment scene, offering a wide array of bars, clubs, and shows that cater to visitors seeking a lively and energetic atmosphere after sunset.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/img/banner/bb4.png" class="d-block w-100 h-20" alt="Fouth slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Bondi Beach, Australia</h5>
                <p>A vibrant atmosphere and diverse community, offering a unique blend of art, music, and food</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" data-bs-target="#carousel-example-generic" type="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" data-bs-target="#carousel-example-generic" type="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      </br>
      </br>
      <div class="container text-center">
        <p class="text-center fs-2">WELCOME TO THE BEAUTY OF BEACHES!!</p>
        <div class="row">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text"><b>"Unveiling the Wonders of the Seas: Your Ultimate Oceanic Resource."</b></p>
              <img src="./assets/img/icon.png" class="img-thumbnail" alt="...">
            </div>
          </div>
          <div class="col-sm-6 pt-2">
            <div class="card">
              <img src="./assets/img/logo.png" class="img-thumbnail" alt="...">
            </div>
          </div>
        
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h6 class="card-text"><b>"Where Every Grain Of Sand Tells A Story."</b></h6>
            </br>
              <img src="./assets/img/icon.png" class="img-thumbnail" alt="...">
            </div>
          </div>
    </div>
    <div class="py-5 ">
      <div class="text-center fs-2 "><b>Top 9 Beach in the world</b></div>
    </br>
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-10 mb-6">
          <div class="col-lg-3 col-md-4 col-sm-6">            
                        <div class="card mb-40" style="width: 18rem;">
                          <img src="./assets/img/banner/bb1.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card mb-40" style="width: 18rem;">
                          <img src="./assets/img/banner/bb1.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">            
              <div class="card mb-40" style="width: 18rem;">
                <img src="./assets/img/banner/bb1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
  </div>
  <div class="col-lg-3 col-md-4 col-sm-6">            
    <div class="card mb-40" style="width: 18rem;">
      <img src="./assets/img/banner/bb1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 col-sm-6">            
    <div class="card mb-40" style="width: 18rem;">
      <img src="./assets/img/banner/bb1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-4 col-sm-6">            
                        <div class="card" style="width: 18rem;">
                          <img src="./assets/img/banner/bb1.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
          </div>

            <div class="col-lg-3 col-md-4 col-sm-6">            
              <div class="card mb-40" style="width: 18rem;">
                <img src="./assets/img/banner/bb1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>

          <div class="col-lg-3 col-md-4 col-sm-6">
              
              <div class="card-body">
                        <div class="card mb-40" style="width: 18rem;">
                          <img src="./assets/img/banner/bb1.png" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    </div>
  <?php
require_once './layouts/footer.php';
?>  