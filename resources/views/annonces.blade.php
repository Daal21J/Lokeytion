@include('navbar')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Mes Annonces</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />



  <!-- Template Stylesheet -->
  <link href="{{url('css/AnnoncesStyle.css')}}" rel="stylesheet" />
</head>

<body>

  <!-- Breadcrumb End -->

  <!-- Product List Start -->
  <center>
    <div class="product-view">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="product-view-top">
              <div class="col-md-5">
                <button class="Vous_Voulez">Voulez-vous ...</button>
              </div>
              <br /><br />
              <form action="#" method="POST">
                <div class="row">
                  <div class="col-md-4">
                    <div class="product-short">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon3">Categorie</span>
                        <select class="form-select" aria-label="Default select example">
                          <div class="dropdown">
                            <div class="dropdown-menu dropdown-menu-right">
                              <option value="">
                                <a href="#" class="dropdown-item">Newest</a>
                              </option>
                              <option value="">
                                <a href="#" class="dropdown-item">Popular</a>
                              </option>
                              <option value="">
                                <a href="#" class="dropdown-item">Most sale</a>
                              </option>
                            </div>
                          </div>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="product-search">
                      <div class="input-group">
                        <div class="form-floating mb-3">
                          <input type="text" id="floatingInput" placeholder="Ville" class="form-control">
                          <label for="floatingInput">Ville</label>
                        </div>
                        <div class="input-group-text">
                          <i class="fa fa-building"></i>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-4">
                    <div class="product-search">
                      <div class="input-group">
                        <div class="form-floating mb-3">
                          <input type="text" id="floatingInput" placeholder="Ville" class="form-control">
                          <label for="floatingInput">Prix</label>
                        </div>
                        <div class="input-group-text">
                          DH
                        </div>
                      </div>
                    </div>
                  </div>

                  <br /><br /><br /> <br><br />

                  <div>

                  </div>

                  <div class="col-md-1" style="margin-left:20px;"></div>
                  De:
                  <div class="col-md-2">
                    <div class="product-date">
                      <input type="date" id="dateDebut" name="dateDebut" class="dateDebut" />
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="product-mois">
                      <input type="time" class="form-control" id="heureDebut" name="heureDebut" class="dateDebut" />
                    </div>
                  </div>
                  <div class="col-md-1"></div>

                  À:
                  <div class="col-md-2">
                    <div class="product-date">
                      <input type="date" id="dateDebut" name="dateDebut" class="dateFin" />
                    </div>
                  </div>

                  <div class="col-md-2">
                    <div class="product-mois">
                      <input type="time" class="form-control" id="heureFin" name="heureFin" class="dateFin" />
                    </div>
                  </div>
                  <br /><br /><br /> <br>
                </div>
                <div class="text-center">
                  <button>
                    <i class="fa fa-trash"></i> Effacer
                  </button>
                  <button>
                    <i class="fa fa-search"></i> Recherche
                  </button>
                </div>
              </form>
            </div>
            <br /><br /><br />
          </div>
          <div class="titre">
            <hr>
            <h2>Articles</h2>
            <hr>
          </div>


          <div class="col-md-4">
            <div class="product-item">
              <div class="product-title">
                <a href="#">Product Name</a>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="product-image">
                <a href="product-detail.html">
                  <img src="images/test.jpg" alt="Product Image" />
                </a>
                <div class="product-action">
                  <button onclick="showModal('images/test.jpg')"><i class="fa fa-search-plus"></i></button>
                </div>
              </div>
              <div class="product-price">
                <h3><span>$</span>99</h3>
                <a class="btn" href=""><i class="fa fa-plus-circle"></i>Lire plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <div class="product-title">
                <a href="#">Product Name</a>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="product-image">
                <a href="product-detail.html">
                  <img src="images/test.jpg" alt="Product Image" />
                </a>
                <div class="product-action">
                  <button onclick="showModal('images/test.jpg')"><i class="fa fa-search-plus"></i></button>
                </div>
              </div>
              <div class="product-price">
                <h3><span>$</span>99</h3>
                <a class="btn" href=""><i class="fa fa-plus-circle"></i>Lire plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <div class="product-title">
                <a href="#">Product Name</a>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="product-image">
                <a href="product-detail.html">
                  <img src="images/test.jpg" alt="Product Image" />
                </a>
                <div class="product-action">
                  <button onclick="showModal('images/test.jpg')"><i class="fa fa-search-plus"></i></button>
                </div>
              </div>
              <div class="product-price">
                <h3><span>$</span>99</h3>
                <a class="btn" href=""><i class="fa fa-plus-circle"></i>Lire plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <div class="product-title">
                <a href="#">Product Name</a>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="product-image">
                <a href="product-detail.html">
                  <img src="images/test.jpg" alt="Product Image" />
                </a>
                <div class="product-action">
                  <button onclick="showModal('images/test.jpg')"><i class="fa fa-search-plus"></i></button>
                </div>
              </div>
              <div class="product-price">
                <h3><span>$</span>99</h3>
                <a class="btn" href=""><i class="fa fa-plus-circle"></i>Lire plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <div class="product-title">
                <a href="#">Product Name</a>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="product-image">
                <a href="product-detail.html">
                  <img src="images/test.jpg" alt="Product Image" />
                </a>
                <div class="product-action">
                  <button onclick="showModal('images/test.jpg')"><i class="fa fa-search-plus"></i></button>
                </div>
              </div>
              <div class="product-price">
                <h3><span>$</span>99</h3>
                <a class="btn" href=""><i class="fa fa-plus-circle"></i>Lire plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <div class="product-title">
                <a href="#">Product Name</a>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="product-image">
                <a href="product-detail.html">
                  <img src="images/test.jpg" alt="Product Image" />
                </a>
                <div class="product-action">
                  <button onclick="showModal('images/test.jpg')"><i class="fa fa-search-plus"></i></button>
                </div>
              </div>
              <div class="product-price">
                <h3><span>$</span>99</h3>
                <a class="btn" href=""><i class="fa fa-plus-circle"></i>Lire plus</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Pagination Start -->
        <div class="col-md-12">
          <br /><br />

          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
              </li>
            </ul>
          </nav>
          <br /><br />
        </div>
        <!-- Pagination Start -->
      </div>
  </div>
    </center>
  <!-- Product List End -->

  <!-- Footer -->
  @include('footer')
  <!-- JAVASCRIPT FILES -->
  <script src="{{url('js/swiper-bundle.min.js')}}"></script>
  <script src="{{url('js/script.js')}}"></script>

  <div id="modal" class="modal">
    <div class="modal-content1">
      <span class="close" onclick="hideModal()">&times;</span>
      <img id="modal-img" class="modal-img" src="" alt="Product Image" />
      <!-- Image à afficher dans la fenêtre modale -->
    </div>
  </div>




  


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="path/to/font-awesome.min.css">
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/slick/slick.min.js"></script>


  <!-- Template Javascript -->
  <script src="{{url('js/main.js')}}"></script>
  <script src="{{url('js/zoom.js')}}"></script>
    <!-- JAVASCRIPT FILES -->
    <script src="{{url('js/swiper-bundle.min.js')}}"></script>
  <script src="{{url('js/script.js')}}"></script>



</body>

</html>