@component('mail::message')

# 新しいユーザーが追加されました！

{{ $toUser->name }}さんこんにちは！

新しく{{ $newUser->name }}さんが参加しましたよ！

@endcomponent