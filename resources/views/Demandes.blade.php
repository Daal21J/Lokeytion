@extends('layout')
@section('content')
 <!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <script src="https://kit.fontawesome.com/c3b8d3700c.js" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <title>Demandes</title>

  <link rel="stylesheet" href="{{url('css/styleDemandes.css')}}">
</head>
<br>
  <br>
<body style="background-color: #ffde59;">
<div class="titre">
            <hr>
            <h2>Demandes</h2>
            <hr>
          </div>
  
    
   
   <!-- <center>
    <h1 data-shadow='Demandes'>Demandes</h1>
</center>-->
<center>
<div class="input-group" style="width:500px; height:50px; box-shadow: 0 0.8rem 1.2rem rgba(0, 0, 0, 0.6);"> 
    <input type="search" placeholder="Rechercher..." class="form-control search-input">
    <div class="input-group-prepend"style="height:50px; width:50px;">
        <span class="input-group-text" style="width: min-content;
    display: flex;
    align-items: center;
    height: -webkit-fill-available;
    justify-content: center;
    ">
            <i class="fa fa-search" ></i>
        </span>
    </div>
</div>

</center>
  <br>
  <br>
   <main class="table" style="margin: 0 auto;">
      
     
        <section class="table__body">
            <table>

                <thead>
                    <tr>
                        
                    </tr>
                    <tr>
                        <th> Client <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Model <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Categorie <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Prix <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Ville<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Duree<span class="icon-arrow">&UpArrow;</span></th>
                        <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                    
                </thead>
                <tbody>
                    <tr>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                        <td> Seoul </td>
                        <td><strong>$399.99</strong> </td>
                        <td>Tetouan</td>
                        <td>De mardi 23.00 A jeudi 22.00</td>
                        <td> 
                            <a href="#" class="text-danger mr-2" ><i  class="fas fa-trash-alt"></i></a>
                            <a href="#" class="text-warning mr-2"><i class="fas fa-edit"></i></a>
                        </td>
                        
                    </tr>
                    <tr>
                        <td><img src="images/Jeet Saru.jpg" alt=""> Jeet Saru </td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                        <td> Kathmandu </td>
                        <td> <strong>$399.99</strong> </td>
                        <td>Tetouan </td>
                        <td>De mardi 23.00 A jeudi 22.00</td>
                        <td> 
                            <a href="#" class="text-danger mr-2" ><i  class="fas fa-trash-alt"></i></a>
                            <a href="#" class="text-warning mr-2"><i class="fas fa-edit"></i></a> </td>
                    </tr>
                    <tr>
                        <td><img src="images/Sonal Gharti.jpg" alt=""> Sonal Gharti </td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>

                        <td> Tokyo </td>
                        <td><strong>$399.99</strong></td>
                        <td>Tetouan</td>
                        <td>De mardi 23.00 A jeudi 22.00</td>
                        <td> 
                            <a href="#" class="text-danger mr-2" ><i  class="fas fa-trash-alt"></i></a>
                            <a href="#" class="text-warning mr-2"><i class="fas fa-edit"></i></a> </td>
                    </tr>
                    <tr>
                        <td><img src="images/Alson GC.jpg" alt=""> Alson GC </td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>

                        <td> New Delhi </td>
                        <td> <strong>$399.99</strong> </td>
                        <td>Tetouan</td>
                        <td>De mardi 23.00 A jeudi 22.00</td>
                        <td> 
                            <a href="#" class="text-danger mr-2" ><i  class="fas fa-trash-alt"></i></a>
                            <a href="#" class="text-warning mr-2"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/Sarita Limbu.jpg" alt=""> Sarita Limbu </td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>

                        <td> Paris </td>
                        <td><strong>$399.99</strong></td>
                        <td>Tetouan</td>
                        <td>De mardi 23.00 A jeudi 22.00</td>
                        <td> 
                            <a href="#" class="text-danger mr-2" ><i  class="fas fa-trash-alt"></i></a>
                            <a href="#" class="text-warning mr-2"><i class="fas fa-edit"></i></a>
                         </td>
                    </tr>
                    <tr>
                        <td><img src="images/Alex Gonley.jpg" alt=""> Alex Gonley </td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>

                        <td> London </td>
                        <td><strong>$399.99</strong> </td>
                        <td>Tetouan</td>
                        <td>De mardi 23.00 A jeudi 22.00</td>
                        <td> 
                            <a href="#" class="text-danger mr-2" ><i  class="fas fa-trash-alt"></i></a>
                            <a href="#" class="text-warning mr-2"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/Alson GC.jpg" alt=""> Jeet Saru </td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>

                        <td> New York </td>
                        <td><strong>$399.99</strong></td>
                        <td>Tetouan</td>
                        <td>De mardi 23.00 A jeudi 22.00</td>
                        <td> 
                            <a href="#" class="text-danger mr-2" ><i  class="fas fa-trash-alt"></i></a>
                            <a href="#" class="text-warning mr-2"><i class="fas fa-edit"></i></a>
                         </td>
                    </tr>
                    <tr>
                        <td><img src="images/Sarita Limbu.jpg" alt=""> Aayat Ali Khan </td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>

                        <td> Islamabad </td>
                        <td> <strong>$399.99</strong></td>
                        <td>Tetouan</td>
                        <td>De mardi 23.00 A jeudi 22.00</td>
                        <td> 
                            <a href="#" class="text-danger mr-2" ><i  class="fas fa-trash-alt"></i></a>
                            <a href="#" class="text-warning mr-2"><i class="fas fa-edit"></i></a>
                         </td>
                    </tr>
                    <tr>
                        <td><img src="images/Alex Gonley.jpg" alt=""> Alson GC </td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>

                        <td> Dhaka </td>
                        <td> <strong>$399.99</strong> </td>
                        <td>Tetouan</td>
                        <td>De mardi 23.00 A jeudi 22.00</td>
                        <td> 

                            <a href="#" class="text-danger mr-2" ><i  class="fas fa-trash-alt"></i></a>
                            <a href="#" class="text-warning mr-2"><i class="fas fa-edit"></i></a> </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <br><br><br><br>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome.min.css">
    <script src="{{url('lib/easing/easing.min.js')}}"></script>
    <script src="{{url('lib/slick/slick.min.js')}}"></script>
  
  
    <!-- Template Javascript -->
    <script src="{{url('js/main.js')}}"></script>
    <script src="{{url('js/zoom.js')}}"></script>
  
          <!-- JAVASCRIPT FILES -->
  <script src="{{url('js/swiper-bundle.min.js')}}"></script>
  <script src="{{url('js/script.js')}}"></script>
  @endsection
</body>

</html>