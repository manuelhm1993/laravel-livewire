<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('create-post')

            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. A nisi ex temporibus, provident sequi laborum aliquam ad quia labore dolor! Quia molestias veritatis quidem reprehenderit, in fuga eius. Excepturi, accusantium!</p>
        </div>
    </div>
</x-app-layout>
