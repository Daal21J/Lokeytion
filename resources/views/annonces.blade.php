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
              <form action="{{route('chercher',['id'=> $data->id])}}" method="post">
              @csrf
                <div class="row">
                  <div class="col-md-4">
                    <div class="product-short">
                      <div class="input-group">
                        <span class="input-group-text" name="categorie" id="basic-addon3">Categorie</span>
                        <select class="form-select" aria-label="Default select example" name="categorie">
                          <div class="dropdown">
                            <div class="dropdown-menu dropdown-menu-right">
                            <option selected disabled >Catégorie</option>
                            <option value="sport">Sport</option>
                            <option value="electronique">Electronique</option>
                            <option value="articles_maison">Articles maison</option>
                            <option value="vetements_accessoires">Vetements et Accessoires</option>
                            <option value="instruments">Instruments</option>
                            <option value="livres_medias">Livres et medias</option>
                            
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
                          <input type="text" id="floatingInput" placeholder="Ville" name="ville" class="form-control">
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
                          <select class="form-select form-select-lg m-2" name="prix[]">
                          <option selected disabled>Prix</option>
                           <option value="20.000 50.000">20-50 (DH)</option>
                         <option value="50.000 100.000">50-100 (DH)</option>
                           <option value="100.000 500.000">100-500 (DH)</option>
                          </select>
                          
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

 
                  <div class="col-md-1"></div>

                  À:
                  <div class="col-md-2">
                    <div class="product-date">
                      <input type="date" id="dateFin" name="dateFin" class="dateFin" />
                    </div>
                  </div>

                  <br /><br /><br /> <br>
                </div>
                <div class="text-center">
                  <button>
                    <i class="fa fa-trash"></i> Effacer
                  </button>
                  <button type="submit" class="input-submit">
                     Recherche
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


          
          
          @if (count($annonce_display) > 0)
            @foreach ($annonce_display as $annonce)
          <div class="col-md-4">
            <div class="product-item">
               <p> {{ \Carbon\Carbon::parse($annonce->created_at)->diffForHumans()}}</p>
              <div class="product-title">
                <a href="#">{{$annonce->titre}}</a>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="product-image">
                <a href="#">
                <img src="{{ asset('images/annonces/'.(file_exists(public_path('images/annonces/'.$annonce->photo))? $annonce->photo : 'test.jpg')) }}" width=130 height=130 alt="Product Image">
                  
                </a>
                <div class="product-action">
                  <button onclick="showModal('{{ asset('images/annonces/'.(file_exists(public_path('images/annonces/'.$annonce->photo))? $annonce->photo : 'test.jpg')) }}')"><i class="fa fa-search-plus"></i></button>
                </div>
              </div>
              <div class="product-price">
                <h3>{{$annonce->prix}}<span>DH</span> &nbsp &nbsp {{$annonce->ville}}</h3>
    
              </div>
            </div>
            </div>

            @endforeach
            @elseif (!is_null($annonce_display) && count($annonce_display) > 0)
            
            @foreach ($annonce_display as $annonce)
            <div class="product-item">
            <p> {{ \Carbon\Carbon::parse($annonce->created_at)->diffForHumans()}}</p>
              <div class="product-title">
                <a href="#">{{$annonce->titre}}</a>
                <div class="ratting">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
              <div class="product-image">
                <a href="#">
                <img src="{{ asset('images/annonces/'.(file_exists(public_path('images/annonces/'.$annonce->photo))? $annonce->photo : 'test.jpg')) }}" width=130 height=130 alt="Product Image">
                  
                </a>
                <div class="product-action">
                  <button onclick="showModal('{{ asset('images/annonces/'.(file_exists(public_path('images/annonces/'.$annonce->photo))? $annonce->photo : 'test.jpg')) }}')"><i class="fa fa-search-plus"></i></button>
                </div>
              </div>
              <div class="product-price">
                <h3><span>Ville:</span>{{$annonce->ville}}<span>DH</span>{{$annonce->prix}}</h3>
              </div>
              
            </div>
            </div>
             
            
            @endforeach
              @else
              <h1 style="justify-content:center;" class="display-1">pas d'annonces pour l'instant</h1>
              @endif 
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