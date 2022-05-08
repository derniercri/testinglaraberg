@component('layouts.app')
    @slot('header')
        {{ __('Logged In Dashboard') }}
    @endslot
    You're logged in!
@endcomponent
