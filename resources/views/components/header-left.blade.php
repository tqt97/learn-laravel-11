<div id="header-left" class="flex items-center">
    <div class="text-gray-800 font-semibold">
        <span class="text-red-500 text-xl">LaraCore</span>
    </div>
    <a href="/">
        <x-application-logo />
    </a>
    <div class="top-menu ml-10">
        <div class="flex space-x-4">
            {{-- <x-nav-link href="/" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-nav-link> --}}
            {{-- <x-nav-link href="{{ route('pipeline.posts.index') }}" :active="request()->routeIs('posts.index')">
                {{ __('blog') }}
            </x-nav-link> --}}
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <span class="inline-flex rounded-md">
                        <button type="button"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                            {{ __('Pipeline') }}
                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </span>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link wire:navigate href="{{ route('pipeline.posts.index') }}">
                        {{ __('List') }}
                    </x-dropdown-link>
                    <div class="border-t border-gray-200"></div>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</div>
