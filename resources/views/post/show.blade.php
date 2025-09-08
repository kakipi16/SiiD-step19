<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            フォーム
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-6">
        <div class="bg-white w-full rounded-2xl">
            <div class="mt-4 p-4">
                <h1 class="test-lg font-semibold">
                    {{$post->title}}
                </h1>
                <div class="text-right flex">
                    <a href="{{route('post.edit', $post)}}">
                        <x-primary-button>
                            編集
                        </x-primary-button>
                    </a>
                    <form method="post" action="{{route('post.destroy',$post)}}" class="flex-2">
                        @csrf
                        @method('delete')
                        <x-primary-button>
                            削除
                        </x-primary-button>
                    </form>
                </div>
                <hr class="w-full">
                <p class="mt-4 whitespace-pre-line">
                    {{$post->body}}
                </p>
                <div class="test-sm font-semibold flex flex-row-reverse">
                    <p>{{$post->created_at}}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>