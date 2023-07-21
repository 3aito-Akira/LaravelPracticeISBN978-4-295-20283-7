<x-layout title="TOP | Tweet Application">
    <x-layout.single>
        <div>single.blade.phpの終り</div>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            Tweet Application layout.blade.phpを借りている
        </h2>
        <x-tweet.form.post></x-tweet.form.post>
        <x-tweet.list :tweets="$tweets"></x-tweet.list>
    </x-layout.single>
</x-layout>