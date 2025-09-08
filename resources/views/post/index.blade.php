<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                一覧表示
            </h2>
            <div>
                <form action="{{ route('post.index') }}" method="GET">
                    <input type="text" name="keyword" value="{{ old('keyword', $keyword) }}" class="w-auto py-2 border border-gray-300 rounded-md" placeholder="タイトルで検索">
                    <x-primary-button class="ml-2">
                        検索
                    </x-primary-button>
                </form>
            </div>
        </div>

    </x-slot>
    <div class="max-auto px-6">
        <!-- @if(session('message'))
        <div class="text-red-600 font-bold">
            {{session('message')}}
        </div>
        @endif -->
        <x-message :message="session('message')" />
        @foreach($posts as $post)
        <div class="mt-4 p-8 bg-white w-full rounded-2xl opacity-0 translate-y-10" id="scroll-action">
            <h1 class="p-4 text-lg font-semibold">
                <a href="{{route('post.show', $post)}}" class="text-blue-600">
                    {{$post->title}}
                </a>
            </h1>
            <hr class="w-full">
            <p class="mt-4 p-4">
                {{$post->body}}
            </p>
            <div class="p-4 text-sm font-semibold">
                <p>
                    {{$post->created_at}} / {{$post->user->name??匿名}}
                </p>
            </div>
        </div>
        @endforeach
        <div class="mb-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>