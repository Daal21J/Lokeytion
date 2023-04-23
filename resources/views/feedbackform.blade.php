@component('mail::message')
cher utilisateur donnez votre opinion sur votre experience en ce qui concerne l'annonce  ' {{$annonce['titre']}} '.
Veuillez prendre quelques instants pour remplir notre formulaire de satisfaction client en cliquant sur le lien ci-dessous. 
Votre feedback nous permettra de mieux comprendre vos besoins et d'améliorer constamment nos offres pour vous satisfaire davantage.

@component('mail::button','/{{$link}}')
Click ici 
@endcomponent


@endcomponent