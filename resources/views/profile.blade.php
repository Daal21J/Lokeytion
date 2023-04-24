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
                    <form method="post" action="{{route('update_profile',['id'=> $data->id])}}" enctype="multipart/form-data">
                    @csrf
                    @if(Session::has('status'))
                    <div class="alert alert-success">{{Session::get('status')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    @method('PUT')
                        <div class="upload">
                            <img src="{{ asset('images/users/'.(file_exists(public_path('images/users/'.$data->photo))? $data->photo : 'profile-pic.png')) }}" width=130 height=130 alt="">
                            <div class="round">
                                <input class="form-control form-control-sm" name="photo" id="photo" type="file">
                                <i class="fa fa-camera"></i>
                            </div>
                        </div>
                        
                        <div class="form-item">
                            <label for="name">Nom complet</label>
                            <label>{{$data['nom']}}</label>
                            <input type="text" name="nom" id="name" value="{{$data->nom}}" placeholder="name">
                            
                        </div>

                        <div class="form-item">
                            <label for="email">Email</label>
                            <label>{{$data['email']}}</label>
                            <input type="email" name="email" id="floatingInput" value="{{$data->email}}" placeholder="name@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            
                        </div>

                        <div class="form-item">
                            <label for="tel"></label>
                            <label>{{$data['tel']}}</label>
                            <input type="text" name="tel" id="floatingInput" value="{{$data->tel}}" placeholder="06xxxxxxxx" pattern="[0-9]{10}">
                            
                        </div>
                        <div class="modal-footer">
                         <button type="submit" class="input-submit">Modifier</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
                    
                    <button type="button" class="btn btn-primary"><a href="{{route('logout',['id'=> $data->id])}}">Logout</a></button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>