@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <!-- Lien vers le fichier CSS de Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-G6emL3ivDfj2iqX21+C51RcR1eV0Wo1A4SL4z/4LJnFUGgC16xImN/6NPSU6TITNMDTgNSz89uxZ1Wp/mdeemw==" crossorigin="anonymous" />

<!-- Lien vers le fichier JavaScript de Font Awesome (facultatif, seulement si vous utilisez des fonctionnalités JavaScript de Font Awesome) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-MCf+7stTlNBp9Z7JRuIc0o/z7jz0QKn8NU1+u/o2D32V6UOgo6NU+nB6q3GViITXA3xzhclw1z8V7qC3qFs84g==" crossorigin="anonymous"></script>

    <title>Panier</title>
   
    <link rel="stylesheet" href="{{url('css/stylePanier.css')}}">
   

</head>

<body>

<br><br>
    <div class="container">

        <div class="card">
            <div class="title">
                <h2 class="title"><b>Mon Panier</b></h2>
                <i class="fa-solid fa-cart-arrow-down nav-icon"></i>
            </div>
            <div class="scroll-container">
                <ul class="listCard">

                    <li>
                        <div><img src="images/test.jpg" /></div>
                        <div class="name">Product title 1 Product title 1 Product title 1 Product title 1 Product title
                            1 Product title 1</div>
                        <div>220.00</div>
                        <div>
                            <button class="louer" name="louer">Louer</button>
                            <button class="SupprimerPanier" name="SupprimerPanier"><i class="bi bi-trash"></i></button>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <div><img src="images/test.jpg" /></div>
                        <div>Product title 2</div>
                        <div>220.00</div>
                        <div>
                            <button class="louer" name="louer">Louer</button>
                            <button class="SupprimerPanier" name="SupprimerPanier"><i class="bi bi-trash"></i></button>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <div><img src="images/test.jpg" /></div>
                        <div>Product title 3</div>
                        <div>220.00</div>
                        <div>
                            <button class="louer" name="louer">Louer</button>
                            <button class="SupprimerPanier" name="SupprimerPanier"><i class="bi bi-trash"></i></button>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <div><img src="images/test.jpg" /></div>
                        <div>Product title 4</div>
                        <div>220.00</div>
                        <div>
                            <button class="louer" name="louer">Louer</button>
                            <button class="SupprimerPanier" name="SupprimerPanier"><i class="bi bi-trash"></i></button>
                        </div>
                    </li>
                    <hr>
                    
                    
                    <li>
                        <div><img src="images/test.jpg" /></div>
                        <div>Product title 6</div>
                        <div>220.00</div>
                        <div>
                            <button class="louer" name="louer">Louer</button>
                            <button class="SupprimerPanier" name="SupprimerPanier"><i class="bi bi-trash"></i></button>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <div><img src="images/test.jpg" /></div>
                        <div>Product title 7</div>
                        <div>220.00</div>
                        <div>
                            <button class="louer" name="louer">Louer</button>
                            <button class="SupprimerPanier" name="SupprimerPanier"><i class="bi bi-trash"></i></button>
                        </div>
                    </li>
                    <hr>
                    <li>
                        <div><img src="images/test.jpg" /></div>
                        <div>Product title 8</div>
                        <div>220.00</div>
                        <div>
                            <button class="louer" name="louer">Louer</button>
                            <button class="SupprimerPanier" name="SupprimerPanier"><i class="bi bi-trash"></i></button>
                        </div>
                    </li>
                    <hr>

                </ul>
            </div>
            <div class="checkOut">
                <div class="total"><h3>Total :  12000.00</h3></div>
            </div>
        </div>

    </div><br><br>
<!-- Footer -->

 
<!-- JAVASCRIPT FILES -->
<script src="{{url('js/swiper-bundle.min.js')}}"></script>
  <script src="{{url('js/script.js')}}"></script>
  @endsection
</body>

</html>