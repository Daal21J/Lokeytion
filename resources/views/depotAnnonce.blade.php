@include('navbar')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <script src="https://kit.fontawesome.com/c3b8d3700c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <link rel="stylesheet" href="{{url('css/swiper-bundle.min.css')}}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/c3b8d3700c.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{url('css/navbar.css')}}">
  <link rel="stylesheet" href="{{url('css/depotAnnonce.css')}}">

  <title>Deposer une annonce</title>
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
</head>

<body>
  <br><br>
<center>
 <div class="titre">
            <hr>
            <h2>Déposer une annonce</h2>
            <hr>
          </div>

</center>
<br>
  <div class="cont2">
    <div class="box2">
      <form action="" class="form-inline" enctype='multipart/form-data'>
        <div class="row mt-5">
          <div class="col">

         

            <div class="form-item">
              <label for="text" style="font-size:18px">Catégorie</label>
              <select class="input__field" id="ville" style="width:80%">
                <option value="">-- Select an option --</option>
                <option value="Mobiliers">Mobiliers</option>
                <option value="Accessoires">Accessoires</option>
                <option value="Electronique">Electronique</option>
                <option value="Autre">Autre</option>
              </select>
            </div>

          </div>

          <div class="col">
            <div class="form-item ">
              <label for="text" style="font-size:18px">Ville</label>
              <input type="text" id="floatingInput" style="width:80%" class="input__field">

            </div>
          </div>
        </div>

        <div class="row mt-5">

          <div class="col">
            <div class="form-item">
              <label for="text" style="font-size:18px">Titre de l'annonce</label>
              <input type="text" id="floatingInput" style="width:80%">

            </div>
          </div>
          <div class="col">
            <div class="form-item">
              <label for="text" style="font-size:18px">Prix</label>
              <input type="text" id="floatingInput" style="width:80%">
              <span>DH</span>
            </div>

          </div>


        </div>



        <div class="row mt-5">
          <div class="titre">
            <h4>Disponibilité</h4>
          </div>


          <div class="ctnr">
            <div>
              <label for="Lundi">
                <input type="checkbox" value="Lundi" id="Lundi">
                <span>Lundi</span>

              </label>
            </div>
            <div>
              <label for="Mardi">
                <input type="checkbox" value="Mardi" id="Mardi">
                <span>Mardi</span>

              </label>
            </div>
            <div>
              <label for="Mercredi">
                <input type="checkbox" value="Mercredi" id="Mercredi">
                <span>Mercredi</span>

              </label>
            </div>
            <div>
              <label for="Jeudi">
                <input type="checkbox" value="Jeudi" id="Jeudi">
                <span>Jeudi</span>

              </label>
            </div>
            <div>
              <label for="Vendredi">
                <input type="checkbox" value="Vendredi" id="Vendredi">
                <span>Vendredi</span>

              </label>
            </div>
            <div>
              <label for="Samedi">
                <input type="checkbox" value="Samedi" id="Samedi">
                <span>Samedi</span>

              </label>
            </div>
            <div>
              <label for="Dimanche">
                <input type="checkbox" value="Dimanche" id="Dimanche">
                <span>Dimanche</span>

              </label>
            </div>
            <!--
            <div class="form-check mx-2 form-check-inline">
              <input class="form-check-input " type="checkbox" value="Mardi" id="Mardi">
              <label class="form-check-label" for="Mardi">
                Mardi
              </label>
            </div>
            <div class="form-check mx-2 form-check-inline">
              <input class="form-check-input " type="checkbox" value="Mercredi" id="Mercredi">
              <label class="form-check-label" for="Mercredi">
                Mercredi
              </label>
            </div>
            <div class="form-check mx-2 form-check-inline">
              <input class="form-check-input " type="checkbox" value="Jeudi" id="Jeudi">
              <label class="form-check-label" for="Jeudi">
                Jeudi
              </label>
            </div>
            <div class="form-check mx-2 form-check-inline">
              <input class="form-check-input " type="checkbox" value="Vendredi" id="Vendredi">
              <label class="form-check-label" for="Vendredi">
                Vendredi
              </label>
            </div>
            <div class="form-check mx-2 form-check-inline">
              <input class="form-check-input " type="checkbox" value="Samedi" id="Samedi">
              <label class="form-check-label" for="Samedi">
                Samedi
              </label>
            </div>
            <div class="form-check mx-2 form-check-inline">
              <input class="form-check-input " type="checkbox" value="Dimanche" id="Dimanche">
              <label class="form-check-label" for="Dimanche">
                Dimanche
              </label>
            </div>-->
          </div>

        </div>

        <div class="row mt-5">

          <div class="col">
            <div class="form-group row">
              <div class="des">
                <h4>Description</h4>
              </div>
              
              <div class="col-sm-9">
                <textarea class="form-control my-3 " id="description" rows="10" style="border: 1.5px solid #404040; width:110%"></textarea>
              </div>
            </div>
          </div>


          <div class="col">
            <!-- Upload Area -->
            <div id="uploadArea" class="upload-area">
              <!-- Header -->
              <div class="upload-area__header">
                <h1 class="upload-area__title">Télecharger votre image</h1>
                <p class="upload-area__paragraph">
                  <strong class="upload-area__tooltip">
                    Les extensions possibles
                    <span class="upload-area__tooltip-data"></span> <!-- Data Will be Comes From Js -->
                  </strong>
                </p>
              </div>
              <!-- End Header -->

              <!-- Drop Zoon -->
              <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                <span class="drop-zoon__icon">
                  <i class='bx bxs-file-image'></i>
                </span>
                <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
                <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false">
                <input type="file" id="fileInput1" class="drop-zoon__file-input" accept="image/*" multiple>
              </div>
              <!-- End Drop Zoon -->

              <!-- File Details -->
              <div id="fileDetails" class="upload-area__file-details file-details">
                <h3 class="file-details__title">Uploaded File</h3>

                <div id="uploadedFile1" class="uploaded-file">
                  <div class="uploaded-file__icon-container">
                    <i class='bx bxs-file-blank uploaded-file__icon'></i>
                    <span class="uploaded-file__icon-text"></span> <!-- Data Will be Comes From Js -->
                  </div>

                  <div id="uploadedFileInfo" class="uploaded-file__info">
                    <span class="uploaded-file__name">Proejct 1</span>
                    <span class="uploaded-file__counter">0%</span>
                  </div>
                </div>
              </div>
              <!--
              <div class="button-group">
                <button>Send</button>
              </div>
-->
              <!-- End File Details -->
            </div>

            <!-- End Upload Area -->
          </div>
        </div>
        <div class="button-group d-flex justify-content-center">
          <button>Déposer l'annonce</button>
        </div>
    </div>

    </form>
  </div>



  <br><br><br><br>
   
  @include('footer')


  <!-- JAVASCRIPT FILES -->
  <script src="{{url('js/swiper-bundle.min.js')}}"></script>
  <script src="{{url('js/script.js')}}"></script>
  <!-- Load jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/user/repo/file.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{url('js/depotAnnonce.js')}}"></script>
 
</body>

</html>