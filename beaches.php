<?php
require_once '.\layouts\header.php';
?>
<body >
<div>
<section class="py-5 text-center container banner-pp">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Beaches</h1>
      <p class="lead text-body-secondary">Find a great place for your vacation.</p>
        <a href="index.php" class="btn btn-secondary my-2">Back to home page</a>
      </p>
    </div>
  </div>
</section>
<section class="container py-5">
<div class="container my-sm-5 border p-0 bg-sec-light"> 
    <div id="content"> 
        <div class="d-sm-flex"> 
            <div class="me-sm-2"> 
                <div id="filter" class="p-2 bg-light ms-md-4 ms-sm-2 border"> 
                    <div class="border-bottom h5 text-uppercase">Filter By</div> 
                    <div class="box border-bottom"> 
                        <div class="box-label text-uppercase d-flex align-items-center">Price </div> 
                        <div id="inner-box" class="collapse show"> 
                            <div class="my-1"> 
                                <label class="tick">Less than 2000 
                                    <input type="checkbox" checked="checked"> 
                                    <span class="check"></span> 
                                </label> 
                            </div> 
                            <div class="my-1"> 
                                <label class="tick">2000 - 3000 
                                    <input type="checkbox"> 
                                    <span class="check"></span> 
                                </label> 
                            </div> 
                            <div class="my-1"> 
                                <label class="tick">3000 - 4500 
                                    <input type="checkbox"> 
                                    <span class="check"></span> 
                               </label> 
                            </div> 
                                <div class="my-1"> 
                                    <label class="tick">4500 - 6000 
                                        <input type="checkbox"> 
                                        <span class="check"></span> 
                                    </label> 
                                </div> 
                                <div class="my-1"> 
                                    <label class="tick">6000 - 8000 
                                        <input type="checkbox"> 
                                        <span class="check"></span> 
                                    </label>
                                </div> 
                                <div class="my-1"> 
                                    <label class="tick">8000 -10,000 
                                        <input type="checkbox" checked> 
                                        <span class="check"></span> 
                                    </label> 
                                </div> 
                                <div class="my-1"> 
                                        <label class="tick">10,000 and Above 
                                            <input type="checkbox"> 
                                            <span class="check"></span> 
                                        </label> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="box border-bottom"> 
                                <div id="property" class="collapse"> <div class="my-1"> 
                                    <label class="tick">beachs 
                                        <input type="checkbox" checked="checked"> 
                                        <span class="check"></span> 
                                    </label> 
                                </div> 
                                <div class="my-1"> 
                                    <label class="tick">Apartments 
                                        <input type="checkbox"> 
                                        <span class="check"></span> 
                                    </label> 
                                </div> 
                                <div class="my-1"> 
                                    <label class="tick">Guest houses 
                                        <input type="checkbox"> 
                                        <span class="check"></span> 
                                    </label> 
                                </div> 
                                <div class="my-1"> 
                                    <label class="tick">Resorts 
                                        <input type="checkbox"> 
                                        <span class="check"></span> 
                                    </label> 
                                </div> 
                                <div class="my-1"> 
                                    <label class="tick">Villas 
                                        <input type="checkbox"> 
                                        <span class="check"></span> 
                                    </label> 
                                </div> 
                                <div class="my-1"> 
                                        <label class="tick">Lodges 
                                            <input type="checkbox" checked> 
                                            <span class="check"></span> 
                                        </label> 
                                    </div> 
                                    <div class="my-1"> 
                                            <label class="tick">Holiday Homes 
                                                <input type="checkbox"> 
                                                <span class="check">
                                                </span> 
                                            </label> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="box border-bottom"> 
                                    <div class="box-label text-uppercase d-flex align-items-center">Amenities 
                                        <button class="btn ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#amenities" aria-expanded="false" aria-controls="amenities"> 
                                            <span class="fas fa-plus"></span> 
                                        </button> 
                                    </div> 
                                </div> 
                                <div class="box"> 
                             </div> 
                            </div> 
                        </div> 
                        <div class="bg-white p-2 border" id="beachs"> 
                            <div class="beach py-2 px-2 pb-4 border-bottom"> 
                                <div class="row"> 
                                    <div class="col-lg-3"> 
                                        <img src="https://images.unsplash.com/photo-1580835845971-a393b73bf370?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80" alt="" class="beach-img"> 
                                    </div> 
                                    <div class="col-lg-9"> 
                                        <div class="d-md-flex align-items-md-center"> 
                                        <div class="name">Mayflower Hibiscus Inn 
                                            <span class="city">Bandra, Mumbai</span> 
                                    <div class="rating"> 
                                        <span class="fas fa-star">
                                        </span> <span class="fas fa-star"></span>
                                         <span class="fas fa-star"></span> 
                                         <span class="fas fa-star"></span> 
                                         <span class="far fa-star"></span> <!-- Book now Enquiry --> 
                                        </div> 
                                            </div> 
                                        </div> 
 </div> 
</div> 
</div>
</div>
</section>
  <?php
require_once './layouts/footer.php';
?>  
