<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('css/profile.css')}}">
    <title>Mon profile</title>
</head>

<body>
    <!--MODAL PROFILE-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mon profil</h1>
                    <i class="fa-solid fa-xmark " data-bs-dismiss="modal"></i>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="upload">
                            <img src="images/profile-pic.jpg" width=130 height=130 alt="">
                            <div class="round">
                                <input type="file">
                                <i class="fa fa-camera"></i>
                            </div>
                        </div>
                        <div class="form-item">
                            <label for="name">Nom complet</label>
                            <label>nom</label>
                            <input type="text"  id="name" placeholder="name">
                            
                        </div>

                        <div class="form-item">
                            <label for="email">Email</label>
                            <label>email</label>
                            <input type="email" id="floatingInput" placeholder="name@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            
                        </div>

                        <div class="form-item">
                            <label for="tel">Numéro de téléphone</label>
                            <label>tel</label>
                            <input type="text" id="floatingInput" placeholder="0666666666" pattern="[0-9]{10}">
                            
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Modifier</button>
                    <button type="button" class="btn btn-primary"><a href="logout">Logout</a></button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>