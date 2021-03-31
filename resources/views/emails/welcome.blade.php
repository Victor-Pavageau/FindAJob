@component('mail::message')
# Madame, Monsieur

Je suis actuellement en 2nd année d'école d'ingénieur et je souaite m'encquérir de la possibilité d'un stage dans votre entreprise.
Ci-joint mon portfolio virtuel :

@component('mail::button', ['url' => ''])
Portfolio
@endcomponent

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
