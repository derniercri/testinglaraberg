<x-guest-layout>
    <x-auth-card>
        <div>
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors></x-auth-validation-errors>

        <form method="POST" action="{{ route('password.confirm') }}">
        @csrf
            <div>
                <label for="password">{{ __('Password') }}</label>

                <input id="password"
                       type="password"
                       name="password"
                       required autocomplete="current-password">
            </div>

            <div>
                <button>
                    {{ __('Confirm') }}
                </button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
