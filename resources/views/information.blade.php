@component('mail::message')
Bonjour, voici les inforamtions sur le client dont vous venez d'accepter la demande pour '{{$demande['titre']}}' le <strong>{{$demande["updated_at"]}}</strong>.

Nom Client : <strong>{{$client["nom"] }}</strong>

Email : <strong>{{$client['email']}}</strong>

tel : <strong>{{$client['tel']}}</strong>




@endcomponent