<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Llamar al componente desde la vista --}}
            @livewire('create-post')

            {{-- Cada componente tiene efecto sobre su conenido y nada más --}}
            <p>Contenido fuera del componente</p>
        </div>
    </div>
</x-app-layout>
