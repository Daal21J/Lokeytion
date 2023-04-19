@include('navbar')
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c3b8d3700c.js" crossorigin="anonymous"></script>
    <title>Commentaire</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/comment.css') }}">


</head>
<center>

    <body>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('addComment') }}" method="post" class="form-inline" enctype='multipart/form-data'>
            @csrf
            <div id="feedback">
                <p>Chèr client, votre avis est important pour nous et nous serions ravis de savoir ce que vous avez
                    pensé de
                    l'état de l'objet loué ainsi que de l'interaction avec le partenaire. Votre feedback nous aidera à
                    offrir un
                    meilleur service à nos clients à l'avenir.
                    Si vous avez aimé votre expérience, n'hésitez pas à laisser une note positive et à partager votre
                    expérience
                    avec d'autres utilisateurs. Si vous avez des suggestions ou des commentaires constructifs, nous
                    serons
                    également heureux de les entendre.</p>
            </div>

            <div class="container">
                <div class="column">
                    <div class="text">Noter l'état de l'objet :</div>
                    <div class="stars">
                        <label for="1">
                            <input type="checkbox" name="rating" value="1.00" id="1"><span>&#9733;</span>

                        </label>

                        <label for="2">
                            <input type="checkbox" name="rating" value="2.00" id="2"><span>&#9733;</span>

                        </label>
                        <label for="3">
                            <input type="checkbox" name="rating" value="3.00" id="3"><span>&#9733;</span>

                        </label>
                        <label for="4">
                            <input type="checkbox" name="rating" value="4.00" id="4"><span>&#9733;</span>

                        </label>
                        <label for="5">
                            <input type="checkbox" name="rating" value="5.00" id="5"><span>&#9733;</span>

                        </label>

                    </div>
                </div>
                <div class="column">
                    <div class="text">Role :</div>
                    <select name="role" id="role" class="input__field @error('role') is-invalid @enderror"
                        required style="width:55%">
                        <option value="">Sélectionner votre role</option>
                        <option value="client" {{ old('role') == 'client' ? 'selected' : '' }}>Client
                        </option>
                        <option value="proprietaire" {{ old('role') == 'proprietaire' ? 'selected' : '' }}>Proprietaire
                        </option>
                        </option>
                    </select>
                    @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="column">
                    <div class="text">Ajouter un commentaire</div>
                    <textarea id="comment" name="comment" placeholder="Saisissez votre commentaire ici"></textarea>
                </div>
            </div>

            <div style="text-align:center;">
                <button id="submit">Envoyer</button>
            </div>
        </form>


        <br><br><br>
        @include('footer')


        <script src="{{ url('js/swiper-bundle.min.js') }}"></script>
        <script src="{{ url('js/script.js') }}"></script>

    </body>

</center>

</html>
