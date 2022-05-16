<x-forms::field-wrapper
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">

    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}') }">
        <textarea  id="content" hidden :ignore></textarea>
    </div>




    <script src="https://unpkg.com/react@16.8.6/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@16.8.6/umd/react-dom.production.min.js"></script>

    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>

    <script>
        Laraberg.init('content',
            {
                maxHeight: 250,
                laravelFilemanager: true,
                sidebar: true
            })
    </script>
</x-forms::field-wrapper>
