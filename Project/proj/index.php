<?php
  include 'init.php';
  include 'assets/head.php';
  include 'assets/header.php';


  $sql = 'select * from products order by id';
$statement = $conn->prepare($sql);
$statement->execute();

$data = $statement->fetchAll();
?>

    <features id="features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <img src="images/features/services1.svg">
                    <h3>Ease to use</h3>
                    <p>4 smart learning app is easy to be used by Students in all educational levels starting from elementary to college, Teachers and parents.</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="images/features/services2.svg">
                    <h3>For Students</h3>
                    <p>Students can select among a group of expert teachers in every subject, set flexible time schedule for each subject, join classes, participate in discussions & ask questions.</p>

                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="images/features/services3.svg">
                    <h3>For Teachers</h3>
                    <p>Teachers have features to set their groups, run live sessions and archive them, create assignments and exams and assign them to individual students or groups.</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="images/features/services4.png">
                    <h3>For Parents</h3>
                    <p>Parents can follow up courses’ performance, they get notifications with courses schedule, attendance and get monthly reports about their child’s progress.</p>
                </div>
            </div>
        </div>
    </features>
    <div class="container">
<?php
  include 'pages/products.php';
?>
</div>
    <partners id="partners">
        
        <div class="container">
            <div class="container my-5">
  
                <!-- Section: Introduction -->
              
                <!-- Section: Basic example -->
                <section>
              
                  <h3><strong>Our partners</strong></h3>
              
                  <div class="container my-5">
                    <!-- Carousel wrapper -->
                    <div
                         id="carouselBasicExample"
                         class="carousel slide carousel-dark text-center"
                         data-mdb-ride="carousel"
                         >
                      <!-- Controls -->

                      <div class="d-flex justify-content-center mb-4 controls">
                        <button
                                class="carousel-control-prev position-relative"
                                type="button"
                                data-mdb-target="#carouselBasicExample"
                                data-mdb-slide="prev"
                                >
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                                class="carousel-control-next position-relative"
                                type="button"
                                data-mdb-target="#carouselBasicExample"
                                data-mdb-slide="next"
                                >
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      <!-- Inner -->
                      <div class="carousel-inner">
                        <!-- Single item -->
                        <div class="carousel-item active">
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-4 element">
                                <div class="row">
                                <div class="col-md-4">
                                    <img src="images/partners/1.jpeg" class="card-img-top"/>
                                </div>

                                  <div class="col-md-8">
                                    <h4 class="name"> Abdulazim Ibrahim Mohammed </h4>
                                    <h5 class="country">Egypt</h5>
                                    <p>
                                        English teacher with 21 years experience teaching all curriculums
                                    </p>
                                  </div>
                                </div>
                              </div>
              
                              <div class="col-lg-4 d-none d-lg-block element">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/partners/1.jpeg" class="card-img-top"/>
                                    </div>
    
                                      <div class="col-md-8">
                                        <h4 class="name"> Abdulazim Ibrahim Mohammed </h4>
                                        <h5 class="country">Egypt</h5>
                                        <p>
                                            English teacher with 21 years experience teaching all curriculums
                                        </p>
                                      </div>
                                    </div>
                              </div>
              
                              <div class="col-lg-4 d-none d-lg-block element">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/partners/1.jpeg" class="card-img-top"/>
                                    </div>
    
                                      <div class="col-md-8">
                                        <h4 class="name"> Abdulazim Ibrahim Mohammed </h4>
                                        <h5 class="country">Egypt</h5>
                                        <p>
                                            English teacher with 21 years experience teaching all curriculums
                                        </p>
                                      </div>
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
              
                        <!-- Single item -->
                        <div class="carousel-item">
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-4 col-md-12 element">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/partners/1.jpeg" class="card-img-top"/>
                                    </div>
    
                                      <div class="col-md-8">
                                        <h4 class="name"> Abdulazim Ibrahim Mohammed </h4>
                                        <h5 class="country">Egypt</h5>
                                        <p>
                                            English teacher with 21 years experience teaching all curriculums
                                        </p>
                                      </div>
                                    </div>
                              </div>
              
                              <div class="col-lg-4 d-none d-lg-block element">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/partners/1.jpeg" class="card-img-top"/>
                                    </div>
    
                                      <div class="col-md-8">
                                        <h4 class="name"> Abdulazim Ibrahim Mohammed </h4>
                                        <h5 class="country">Egypt</h5>
                                        <p>
                                            English teacher with 21 years experience teaching all curriculums
                                        </p>
                                      </div>
                                    </div>
                              </div>
              
                              <div class="col-lg-4 d-none d-lg-block element">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/partners/1.jpeg" class="card-img-top"/>
                                    </div>
    
                                      <div class="col-md-8">
                                        <h4 class="name"> Abdulazim Ibrahim Mohammed </h4>
                                        <h5 class="country">Egypt</h5>
                                        <p>
                                            English teacher with 21 years experience teaching all curriculums
                                        </p>
                                      </div>
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
              
                        <!-- Single item -->
                        <div class="carousel-item">
                          <div class="container">
                            <div class="row">
                              <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 element">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/partners/1.jpeg" class="card-img-top"/>
                                    </div>
    
                                      <div class="col-md-8">
                                        <h4 class="name"> Abdulazim Ibrahim Mohammed </h4>
                                        <h5 class="country">Egypt</h5>
                                        <p>
                                            English teacher with 21 years experience teaching all curriculums
                                        </p>
                                      </div>
                                    </div>
                              </div>
              
                              <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block element">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/partners/1.jpeg" class="card-img-top"/>
                                    </div>
    
                                      <div class="col-md-8">
                                        <h4 class="name"> Abdulazim Ibrahim Mohammed </h4>
                                        <h5 class="country">Egypt</h5>
                                        <p>
                                            English teacher with 21 years experience teaching all curriculums
                                        </p>
                                      </div>
                                    </div>
                              </div>
              
                              <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block element">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/partners/1.jpeg" class="card-img-top"/>
                                    </div>
    
                                      <div class="col-md-8">
                                        <h4 class="name"> Abdulazim Ibrahim Mohammed </h4>
                                        <h5 class="country">Egypt</h5>
                                        <p>
                                            English teacher with 21 years experience teaching all curriculums
                                        </p>
                                      </div>
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Inner -->
                    </div>
                    <!-- Carousel wrapper -->
                  </div>
              
                </section>
                <!-- Section: Basic example -->
              </div>
        </div>
    </partners>


 <?php 
  include 'assets/footer.php';
 ?>
    <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
<script src="js/fontawesome/all.js"></script>
<script>
  function details(id){
    var url = "/proj/product.php?id=" + id;
    window.location.href = url;
  }
</script>
</body>
</html>