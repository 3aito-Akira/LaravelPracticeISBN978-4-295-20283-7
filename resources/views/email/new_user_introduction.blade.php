<x-mail::message>
# 新しいユーザーが追加されました！

{{ $toUser->name }}さんこんにちは！

新しく{{ $newUser->name }}さんが参加しましたよ！

akira is writing.

<x-mail::panel>
This is the panel content.
</x-mail::panel>

<x-mail::button :url="$url" color="success">
tweetの確認
</x-mail::button>

</x-mail::message>
