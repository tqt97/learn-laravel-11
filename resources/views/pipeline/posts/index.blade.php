<x-app-layout header="Pipeline - All posts">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Pipeline - All posts') }}
                    </h2>
                </x-slot> --}}
                <div class="p-6 text-gray-950">
                    @foreach ($posts as $post)
                        <div class="p-2 m-2 bg-slate-100 rounded-md">
                            <h2 class="font-bold text-md">{{ $post->title }}</h2>
                            <h3>Category: {{ $post->category->name }}</h3>
                            <h3>User: {{ $post->user->name }}</h3>
                            <p>"{{ $post->body }}"</p>
                        </div>
                    @endforeach
                    <div class="px-3 py-2 mt-5">
                        {{ $posts->appends(request()->input())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
