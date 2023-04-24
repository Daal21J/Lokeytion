
@include('navbar')
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/c3b8d3700c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <link rel="stylesheet" href="{{url('css/swiper-bundle.min.css')}}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
  <title>Details</title>
  <link rel="stylesheet" href="{{url('css/styleDetails.css')}}">
</head>

<body>






  <!--CONTENT-->
  <div class="cont">
    <div class="box">
      <!--IMAGES-->
      <div class="images">
        <div class="img-holder active">
          <img src="../images/{{ $annonce_objet->image1 }}" alt="" onclick="showImg(this.src)" />
        </div>
        <div class="img-holder">
          <img src="../images/{{ $annonce_objet->image2 }}" alt="" onclick="showImg(this.src)" />
        </div>
        <div class="img-holder">
          <img src="../images/{{ $annonce_objet->image3 }}" alt="" onclick="showImg(this.src)" />
        </div>
      </div>

      <!--RATES-->
      <div class="basic-info">
        <h1>{{  $annonce_objet->titre }}</h1>
        @php
  $somme = 0;
  $nbr = 0;
  foreach($commentaires as $commentaire) {
    $somme += $commentaire->note;
    $nbr++;
  }
  $moyenne = $nbr > 0 ? $somme / $nbr : 0;
  $integerPart = floor($moyenne); // Extract the integer part of the average rating
  $decimalPart = $moyenne - $integerPart;
@endphp
  <div class="product-rating">
  @for($i = 1; $i <= 5; $i++)
  @if($i <= $integerPart)
  <span><i class="fas fa-star"></i></span>
  @elseif($i-1 == $integerPart)
  @if($decimalPart > 0.5)
    <span><i class="fas fa-star"></i></span>
    @php $decimalPart = 0; @endphp
  @elseif($decimalPart == 0.5)
  <span style="position: relative; display: inline-block;">
  <i class="fas fa-star" style="color: #404040;"></i>
  <span style="position: absolute; top: 0; left: 0; width: 50%; overflow: hidden;">
    <i class="fas fa-star"></i>
  </span>
</span>
    @php $decimalPart = 0; @endphp
  @else
    <span><i class="fas fa-star" style="color:#404040;"></i></span>
  @endif
  @else
  <span><i class="fas fa-star" style="color: #404040;"></i></span>
  @endif
@endfor
          <span>({{$nbr}} notes)</span>
        </div>
        <h3>Prix: <span>{{ $annonce_objet->prix }}DH/h</span></h3>
        <div class="options">
        <form method="POST" action="{{ route('louer', ['id' => $annonce_objet->id]) }}">
    @csrf
          <button type="submit">Louer</button>
          <br><br>
          <form method="POST" action="{{ route('addToPanier', ['id' => $annonce_objet->id]) }}">
    @csrf
    <button type="submit">
        Ajouter au panier
        <span>
            <i class="fa-solid fa-cart-plus"></i>
        </span>
    </button>

        </div>
      </div>

      <!--DESCRIPTION-->
      <div class="description">
        <h3>Description</h3>
        <p>
        {{ $annonce_objet->discription }}
        </p>
        <!-- Affichage des jours dispo -->
         @if(count($jourdispos) > 0)
        <div class="disponibilite">
          <h3>Disponibilité:</h3>
          <div class="dispo">
            <div class="select-wrapper">
              <div class="jour">
     
      
                @foreach($jourdispos as $jourdispo)
                <div class="select-wrapper">
    <label for="{{ $jourdispo->jour }}">
        <input type="checkbox" value="{{ $jourdispo->jour }}" name="jours[]" id="{{ $jourdispo->jour }}">
        <span>{{ $jourdispo->jour }}</span>
    </label>
    @error('jours')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

@endforeach
              
              
              </div>
              
            </div>

          </div>
        </div>
          @endif
      </div>
      </form>
      </form>

      <!--COMMENTS-->
      <div class="comments">
        <div class="inner">
          <!-- Affichage des commentaires -->
          @if(isset($commentaires))
              <h1>Commentaires</h1>
              <div class="border"></div>
              <div class="container swiper">
            <div class="row">
              <div class="com swiper-wrapper">
                 @foreach($commentaires as $commentaire)
                <div class="col-md-2 swiper-slide">
                  <img src="../images/{{ $commentaire->photo }}" alt="" />
                  <div class="name">{{ $commentaire->prenom}} {{ $commentaire->nom }}</div>
                  <div class="stars">
                    @for($i=1;$i<=5;$i++)
                    @if($commentaire->note>=$i)
                    <i class="fas fa-star"></i>
                    @else
                    <i class='fa fa-star' style='color:#404040'></i>
                   @endif
                   @endfor
                  </div>
                  <p>
                  {{ $commentaire->comment }}
                  </p>
                </div>

                @endforeach
               


              </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
          </div>
<style>
  .box .description {
  margin-left: -310%;
}
.box .basic-info {
  margin-left: -310%;
}
</style>
@endif
        </div>
       
          </div>
      

    </div>
  </div>
  </div> 
  <br><br>
      <!-- Footer -->
     
     <!-- JAVASCRIPT FILES -->
     <script src="{{url('js/swiper-bundle.min.js')}}"></script>
     <script src="{{url('js/script.js')}}"></script>
     @include('footer')
</body>

</html>