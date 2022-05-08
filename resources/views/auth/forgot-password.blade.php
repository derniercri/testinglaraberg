<x-guest-layout>
    <auth-card>
        <div>
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status></x-auth-session-status>

        <x-auth-validation-errors></x-auth-validation-errors>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div>
                <label for="email">{{ __('Email') }}</label>

                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus/>
            </div>

            <div>
                <button>
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </auth-card>
</x-guest-layout>
