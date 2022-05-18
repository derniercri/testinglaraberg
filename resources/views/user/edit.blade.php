<x-guest-layout>
    <x-page-header header="modifier mes informations"></x-page-header>
    <form method="post" action="{{route('user.myaccount-update')}}">
        @csrf
        <div>
            <label for="name">Pseudo</label>
            <input type="text" value="{{ $user->name }}" name="name">
        </div>`
        <div>
            <label for="role">role</label>
            <input type="text" value="{{ $user->role }}" name="role">
        </div>

        <div>
            <label for="email">email</label>
            <input type="email" value="{{ $user->email }}" name="email">
        </div>
        <div>
            <label for="password">password</label>
            <input type="text" value="{{ $user->password }}" name="password">
        </div>
        <div>
            <label for="avatar">avatar</label>
            <input type="file" value="{{ $user->avatar }}" name="avatar">
        </div>
        @dump($user)
        <input type="submit">
    </form>
</x-guest-layout>
