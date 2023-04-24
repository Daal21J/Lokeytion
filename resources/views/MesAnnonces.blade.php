@include('navbar')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Mes Annonces</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="{{url('css/swiper-bundle.min.css')}}" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  

  <!-- Template Stylesheet -->
  <link href="{{url('css/AnnoncesStyle.css')}}" rel="stylesheet" />
</head>
<body>
 

 
  <!-- Product List Start -->
  <center>
    <div class="product-view">
      <div class="container-fluid">
        <div class="row">
       
          <div class="titre">
            <hr>
            <h2>Mes annonces</h2>
            <hr>
          </div>


          
          <div class="col-md-4">
          @if (count($annonce_display) > 0)
            @foreach ($annonce_display as $annonce)
            <div class="product-item">
            <p> {{ \Carbon\Carbon::parse($annonce->created_at)->diffForHumans()  }}</p>
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
                <h3><span>DH</span>{{$annonce->prix}}</h3>
                <a class="btn mx-2" href=""><i class="fas fa-trash-alt"></i></a>
              <a class="btn" href=""><i class="fas fa-edit"></i></a>
              </div>
              
            </div>
            @endforeach
            @else
             <h1 class="display-1">pas d'annonces pour l'instant</h1>
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
  <script src="{{url('lib/easing/easing.min.js')}}"></script>
  <script src="{{url('lib/slick/slick.min.js')}}"></script>


  <!-- Template Javascript -->
  <script src="{{url('js/main.js')}}"></script>
  <script src="{{url('js/zoom.js')}}"></script>

  @include('footer')
</body>

</html>