@component('mail::message')
    # Bienvenue sur G-Tisel !

    Bonjour,

    

    @component('mail::button', ['url' => 'fr/public'])
        Valider mon adresse mail
    @endcomponent

    

    **Merci et à bientôt sur {{ config('app.name') }} !**

    ___

    

@endcomponent