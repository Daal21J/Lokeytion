@component('mail::message')
Bonjour, voici les inforamtions sur le client dont vous venez d'accepter la demande pour '{{$demande['titre']}}' le {{$demande["updated_at"]}}.

Nom Client : {{$client["nom"] }}

Email : {{$client['email']}}

Ville : {{$client['ville']}}




@endcomponent