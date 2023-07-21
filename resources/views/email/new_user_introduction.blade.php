<x-mail::message>
    # A new user was registered.

    Hi, {{ $toUser->name }}! 
    <x-mail::panel>
    {{ $newUser->name }} has taken part in our group!
    </x-mail::panel>
    <x-mail::button :url=route('tweet.index')>
    take a look at tweets
    </x-mail::button>

</x-mail::message>