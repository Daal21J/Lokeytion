<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  
  <link rel="stylesheet" href="{{url('css/navbar.css')}}" />

  
  <title>Details</title>
</head>

<body>
  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg ">
    <div class="container d-flex justify-content-between">
      <div class="logo">
        <img src="{{url('images/logo1.jpg')}}" alt="" >
      </div>
      <nav class="navbar2 navbar-expand-lg ">
        <div class="container-fluid">
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item nav-items">
                <a class="nav-link nav-links" ria-current="page" href="/MesAnnonces">
                  Mes annonces
                </a>
              </li>
              <li class="nav-item nav-items">
                <a class="nav-link nav-links" href="/annonces">Accueil</a>
              </li>
              <li class="nav-item nav-items">
                <a class="nav-link nav-links" href="/depotAnnonces">Déposer une annonce</a>
              </li>

            </ul>
            <div class="position-relative">
              <a href="" class="text-decoration-none text-dark">
                <i class="fa-solid fa-bell nav-icon"></i>
              </a>

              <a href="" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal1">
              <i class="fa-solid fa-envelope nav-icon"></i>
</a>
                  <!--
              <a href="" class="text-decoration-none text-dark">
                <i class="fa-solid fa-envelope nav-icon"></i>
              </a>
-->
              <a href="/MonPanier" class="text-decoration-none text-dark">
                <i class="fa-solid fa-cart-arrow-down nav-icon"></i>
              </a>
              <!--<a href="" class="text-decoration-none text-dark">
                     <i class="fa-solid fa-user nav-icon"></i>
                   </a>
                   
                 <div class="position-absolute rounded-circle cart">
                     <span>7</span>
                 </div>
                 <div class="position-absolute rounded-circle envelope">
                     <span>+99</span>
                 </div>
                 -->
            </div>
            <!--PROFILE DROPDOWN-->
            <div class="profile-dropdown">
              <div onclick="toggle()" class="profile-dropdown-btn">
                <div class="profile-img">
                  <i class="fa-solid fa-circle"></i>
                </div>
                <span>Name
                  <i class="fa-solid fa-angle-down"></i>
                </span>
              </div>
              <ul class="profile-dropdown-list">
                <li class="profile-dropdown-list-item">
                  <!--
                  <button type="button" class="boutton" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-regular fa-user"></i>
                    Modifier Profile
                  </button>
-->
                  <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="fa-regular fa-user"></i>
                  Modifier Profile
                </a>
                </li>
               
                <li class="profile-dropdown-list-item">
                  <a href="/Demandes/show">
                  <i class="fas fa-id-badge"></i> <!-- icône de badge d'identité solide -->
                    Mes demandes
                  </a>
                </li>
                <hr />
                <li class="profile-dropdown-list-item">
                  <a href="index1.php">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    Se déconnecter
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </nav>

  <!--MODAL PROFILE-->
  @include('profile')
  @include('messages')


</body>

</html>