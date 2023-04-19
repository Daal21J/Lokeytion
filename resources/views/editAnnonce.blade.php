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
    <link rel="stylesheet" href="{{ url('css/swiper-bundle.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
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
  <link rel="stylesheet" href="{{ url('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ url('css/depotAnnonce.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <title>Modifier une annonce</title>
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
</head>

<body>
  <br><br>
<center>
 <div class="titre">
            <hr>
            <h2>Modifier mon annonce</h2>
            <hr>
          </div>

</center>
<br>
  <div class="cont2">
    <div class="box2">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li> @endforeach
            </ul>
        </div>
    @endif
      <form action="{{ route('update', $annonce->id) }}"
        method="post" class="form-inline" enctype='multipart/form-data'>
    @csrf
    @method('PUT')



    <div class="row mt-5">
        <div class="col">

            <div class="form-item">
                <label for="text" style="font-size:18px">Catégorie</label>
                <select name="categorie" id="categorie" class="input__field @error('categorie') is-invalid @enderror"
                    required style="width:80%">
                    <option value="">Sélectionner une catégorie</option>
                    <option value="Electronique" {{ $annonce->categorie == 'Electronique' ? 'selected' : '' }}>
                        Electronique</option>
                    <option value="Vêtements" {{ $annonce->categorie == 'Vêtements' ? 'selected' : '' }}>Vêtements
                    </option>
                    <option value="Accessoires" {{ $annonce->categorie == 'Accessoires' ? 'selected' : '' }}>Accessoires
                    </option>
                </select>

                @error('categorie')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


            </div>

        </div>

        <div class="col">
            <div class="form-item ">
                <label for="text" style="font-size:18px">Ville</label>
                <input type="text" name="ville" id="floatingInput" style="width:80%"
                    class="input__field
                    @error('ville') is-invalid @enderror"
                    value="{{ $annonce->ville }}" required>
                @error('ville')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
        </div>
    </div>

    <div class="row mt-5">

        <div class="col">
            <div class="form-item">
                <label for="text" style="font-size:18px">Titre de l'annonce</label>
                <input type="text" name="titre" id="floatingInput"
                    class="input__field @error('titre') is-invalid @enderror" value="{{ $annonce->titre }}" required
                    style="width:80%">
                @error('titre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
        </div>
        <div class="col">
            <div class="form-item">
                <label for="text" style="font-size:18px">Prix (en DH)</label>
                <input type="text" name="prix" id="floatingInput"
                    class="input__field @error('prix') is-invalid @enderror" value="{{ $annonce->prix }}" required
                    style="width:80%">
                @error('prix')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>


    </div>



    <div class="row mt-5">
        <div class="titre">
            <h4>Disponibilité</h4>
        </div>

        <!-- Récupérer l'annonce de la base de données -->


        <div class="ctnr">
            @if (isset($annonce))
                @foreach (['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'] as $jour)
                    <div>


                        <label for="{{ $jour }}">
                            <input type="checkbox" name="joursDispo[]" value="{{ $jour }}"
                                id="{{ $jour }}" {{ in_array($jour, $joursDispo) ? 'checked' : '' }}>
                            <span>{{ $jour }}</span>
                        </label>



                    </div>
                @endforeach
            @endif


            <div class="col-md-1" style="margin-left:20px;"></div>
            De:
            <div class="col-md-2">
                <div class="product-date">
                    <input type="date" id="dateDebut" name="dateDebut" class="dateDebut"
                        value="{{ $annonce->de }}" />
                </div>
            </div>
            <div class="col-md-1"></div>
            À:
            <div class="col-md-2">
                <div class="product-date">
                    <input type="date" id="dateFin" name="dateFin" class="dateFin" value="{{ $annonce->a }}" />
                </div>
            </div>

            @error('jours')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>






    </div>

    <div class="row mt-5">

        <div class="col">
            <div class="form-group row">
                <div class="des">
                    <h4>Description</h4>
                </div>

                <div class="col-sm-9">
                    <textarea name="discription" id="discription" class="form-control my-3 @error('discription') is-invalid @enderror"
                        required rows="10" style="border: 1.5px solid #404040; width:110%">{{ $annonce->discription }}</textarea>
                    @error('discription')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
                            <span class="upload-area__tooltip-data"></span>
                            <!-- Data Will be Comes From Js -->
                        </strong>
                    </p>
                </div>
                <input type="file" class="form-control-file @error('image.*') is-invalid @enderror" id="image"
                    name="image[]" multiple required>
                @error('image.*')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <img src="{{ asset('storage/' . $annonce->image1) }}" alt="image1">
                <img src="{{ asset('storage/' . $annonce->image2) }}" alt="image2">
                <img src="{{ asset('storage/' . $annonce->image3) }}" alt="image3">

                <!-- End Header -->

                <!-- Drop Zoon
              <div id="dropZoon" class="upload-area__drop-zoon drop-zoon">
                <span class="drop-zoon__icon">
                  <i class='bx bxs-file-image'></i>
                </span>
                <p class="drop-zoon__paragraph">Drop your file here or Click to browse</p>
                <span id="loadingText" class="drop-zoon__loading-text">Please Wait</span>
                <img src="" alt="Preview Image" id="previewImage" class="drop-zoon__preview-image" draggable="false">
                <input type="file" id="fileInput1" class="drop-zoon__file-input" accept="image/*" multiple>
              </div>-->
                <!-- End Drop Zoon -->

                <!-- File Details
              <div id="fileDetails" class="upload-area__file-details file-details">
                <h3 class="file-details__title">Uploaded File</h3>

                <div id="uploadedFile1" class="uploaded-file">
                  <div class="uploaded-file__icon-container">
                    <i class='bx bxs-file-blank uploaded-file__icon'></i>
                    <span class="uploaded-file__icon-text"></span>
                  </div>

                  <div id="uploadedFileInfo" class="uploaded-file__info">
                    <span class="uploaded-file__name">Proejct 1</span>
                    <span class="uploaded-file__counter">0%</span>
                  </div>
                </div>
              </div>-->
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
        <button>
            {{ __('Modifier mon annonce') }}
        </button>
    </div>
    </div>

    </form>
    </div>



    <br><br><br><br>

    @include('footer')


    <!-- JAVASCRIPT FILES -->
    <script src="{{ url('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('js/script.js') }}"></script>
    <!-- Load jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/user/repo/file.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ url('js/depotAnnonce.js') }}"></script>
    <script src="{{ asset('js/my-flatpickr.js') }}"></script>

    </body>

</html>
