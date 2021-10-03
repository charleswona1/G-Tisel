@component('mail::message')
    # Bienvenue sur G-Tisel !

    Bonjour,

    Vous venez de vous inscrire sur la plateforme de procedure d'attribution des titres dans le dommaine de l'energie au cameroun.

    Pour finaliser votre inscription, vous devez valider votre adresse mail en cliquant sur ce bouton :

    @component('mail::button', ['url' => $url])
        Valider mon adresse mail
    @endcomponent

    Si la demande n'est pas de votre fait, vous n'avez pas d'action à effectuer.

    **Merci et à bientôt sur {{ config('app.name') }} !**

    ___

    <sub> Si le lien du bouton "Valider mon adresse mail" ne fonctionne pas, cliquez ou copiez/collez le lien suivant dans votre navigateur : {{ $url }} </sub>

@endcomponent
