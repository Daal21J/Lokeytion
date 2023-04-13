
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
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />
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
          <img src="images/w.jpeg" onclick="showImg(this.src)" />
        </div>
        <div class="img-holder">
          <img src="images/w.jpeg" onclick="showImg(this.src)" />
        </div>
        <div class="img-holder">
          <img src="images/b.jpeg" onclick="showImg(this.src)" />
        </div>
        <div class="img-holder">
          <img src="images/m.jpeg" onclick="showImg(this.src)" />
        </div>
      </div>

      <!--RATES-->
      <div class="basic-info">
        <h1>BMW X6</h1>
        <div class="product-rating">
          <span><i class="fas fa-star"></i></span>
          <span><i class="fas fa-star"></i></span>
          <span><i class="fas fa-star"></i></span>
          <span><i class="fas fa-star"></i></span>
          <span><i class="fas fa-star-half-alt"></i></span>
          <span>(350 ratings)</span>
        </div>
        <h3>Prix: <span>150DH/h</span></h3>
        <div class="options">
          <button>Louer</button>
          <button>Ajouter au panier
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
          Louez notre BMW X6 pour une expérience de conduite
          exceptionnelle. Avec son design élégant, sa technologie de pointe et
          sa capacité tout-terrain. Que vous souhaitiez faire une excursion en
          montagne ou simplement profiter du confort et de la puissance de
          conduite sur la route, notre BMW est la voiture idéale pour
          vous.
        </p>
        <div class="disponibilite">
          <h3>Disponibilité:</h3>
          <div class="dispo">
            <div class="select-wrapper">
              <div class="labelDe"><label for="dayDe">De:</label>
                <div class="select-wrapper">
                  <select class="form-select mb-3" name="mois" aria-label="Default select example">
                    <option selected value="Monday">Lundi</option>
                    <option value="Tuesday">Mardi</option>
                    <option value="Thursday">Mercredi</option>
                    <option value="Wednesday">Jeudi</option>
                    <option value="Friday">Vendredi</option>
                    <option value="Saturday">Samedi</option>
                    <option value="Sunday">Dimanche</option>
                  </select>
                </div>
              </div>
              <div class="labelA"><label for="heureA">À:</label>
                <div class="select-wrapper">
                  <select id="heureA" name="heureA" class="form-select mb-3">
                    <option value="08:00">08:00</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                    <option value="20:00">20:00</option>
                    <option value="20:00">21:00</option>
                    <option value="20:00">22:00</option>
                    <option value="20:00">23:00</option>
                    <option value="20:00">00:00</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="date">
              <div class="select-wrapper">
                <div class="labelDe"><label for="dayA">Jusqu'à:</label>
                  <div class="select-wrapper">
                    <select class="form-select mb-3" name="mois" aria-label="Default select example">
                      <option selected value="Monday">Lundi</option>
                      <option value="Tuesday">Mardi</option>
                      <option value="Thursday">Mercredi</option>
                      <option value="Wednesday">Jeudi</option>
                      <option value="Friday">Vendredi</option>
                      <option value="Saturday">Samedi</option>
                      <option value="Sunday">Dimanche</option>
                    </select>
                  </div>
                </div>
                <div class="labelA"><label for="heureDe">À:</label>
                  <div class="select-wrapper">
                    <select id="heureDe" name="heureDe" class="form-select mb-3">
                      <option value="08:00">08:00</option>
                      <option value="09:00">09:00</option>
                      <option value="10:00">10:00</option>
                      <option value="11:00">11:00</option>
                      <option value="12:00">12:00</option>
                      <option value="13:00">13:00</option>
                      <option value="14:00">14:00</option>
                      <option value="15:00">15:00</option>
                      <option value="16:00">16:00</option>
                      <option value="17:00">17:00</option>
                      <option value="18:00">18:00</option>
                      <option value="19:00">19:00</option>
                      <option value="20:00">20:00</option>
                      <option value="20:00">21:00</option>
                      <option value="20:00">22:00</option>
                      <option value="20:00">23:00</option>
                      <option value="20:00">00:00</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--COMMENTS-->
      <div class="comments">
        <div class="inner">
          <h1>Commentaires</h1>
          <div class="border"></div>
          <div class="container swiper">
            <div class="row">
              <div class="com swiper-wrapper">

                <div class="col-md-2 swiper-slide">
                  <img src="images/p1.png" alt="" />
                  <div class="name">Full name</div>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s,
                  </p>
                </div>

                <div class="col-md-2 swiper-slide">
                  <img src="images/p2.png" alt="" />
                  <div class="name">Full name</div>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s,
                  </p>
                </div>

                <div class="col-md-2 swiper-slide">
                  <img src="images/p3.png" alt="" />
                  <div class="name">Full name</div>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s,
                  </p>
                </div>


              </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
          </div>
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