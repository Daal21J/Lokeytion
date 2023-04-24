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
    <!-- resources/views/annonces/create.blade.php -->

    <div class="container">
        <h1>Créer une annonce</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control @error('titre') is-invalid @enderror" value="{{ old('titre') }}" required>
                @error('titre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="categorie">Catégorie</label>
                <select name="categorie" id="categorie" class="form-control @error('categorie') is-invalid @enderror" required>
                    <option value="">Sélectionner une catégorie</option>
                    <option value="Electronique" {{ old('categorie') == 'Electronique' ? 'selected' : '' }}>Electronique</option>
                    <option value="Vêtements" {{ old('categorie') == 'Vêtements' ? 'selected' : '' }}>Vêtements</option>
                    <option value="Maison" {{ old('categorie') == 'Maison' ? 'selected' : '' }}>Maison</option>
                </select>
                @error('categorie')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="discription">Description</label>
                <textarea name="discription" id="discription" class="form-control @error('discription') is-invalid @enderror" required>{{ old('discription') }}</textarea>
                @error('discription')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="prix">Prix (en euros)</label>
                <input type="number" name="prix" id="prix" class="form-control @error('prix') is-invalid @enderror" value="{{ old('prix') }}" required>
                @error('prix')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="ville">Ville</label>
                <input type="text" name="ville" id="ville" class="form-control @error('ville') is-invalid @enderror" value="{{ old('ville') }}" required>
                @error('ville')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
    <label for="image">Images</label>
    <input type="file" class="form-control-file @error('image.*') is-invalid @enderror" id="image" name="image[]" multiple required>
    @error('image.*')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
     </div>

        <div class="form-group row">
        <label for="jours" class="col-md-4 col-form-label text-md-right">Jours disponibles</label>

        <div class="col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="jours[]" value="lundi" id="lundi">
                <label class="form-check-label" for="lundi">Lundi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="jours[]" value="mardi" id="mardi">
                <label class="form-check-label" for="mardi">Mardi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="jours[]" value="mercredi" id="mercredi">
                <label class="form-check-label" for="mercredi">Mercredi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="jours[]" value="jeudi" id="jeudi">
                <label class="form-check-label" for="jeudi">Jeudi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="jours[]" value="vendredi" id="vendredi">
                <label class="form-check-label" for="vendredi">Vendredi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="jours[]" value="samedi" id="samedi">
                <label class="form-check-label" for="samedi">Samedi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="jours[]" value="dimanche" id="dimanche">
                <label class="form-check-label" for="dimanche">Dimanche</label>
            </div>

            @error('jours')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Créer l\'annonce') }}
            </button>
        </div>
    </div>
   </form>


  </div>
  </div>
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