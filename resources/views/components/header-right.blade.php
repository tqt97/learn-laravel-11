<div id="header-right" class="flex items-center md:space-x-6">
    <div class="relative flex ml-3 space-x-4">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <span class="inline-flex rounded-md">
                    <button type="button"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                        {{ Auth::user()->name ?? 'TuanTQ' }}

                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </span>
            </x-slot>

            <x-slot name="content">
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Account') }}
                </div>

                <x-dropdown-link wire:navigate href="#">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <div class="border-t border-gray-200"></div>
                <!-- Authentication -->
                <form method="POST" action="#" x-data>
                    @csrf

                    <x-dropdown-link href="#" @click.prevent="$root.submit();">
                        {{ __('Logout') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</div>