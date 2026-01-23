<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Minhas Listas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold mb-4">Criar nova lista</h3>

                <form method="POST" action="{{ route('task-lists.store') }}">
                    @csrf

                    <input
                        type="text"
                        name="name"
                        placeholder="Nome da lista"
                        class="border rounded px-3 py-2 w-full mb-3"
                        required
                    >

                    <button
                        type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded"
                    >
                        Criar
                    </button>
                </form>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold mb-4">Minhas listas</h3>

                @if ($lists->isEmpty())
                    <p class="text-gray-600">
                        Você ainda não criou nenhuma lista.
                    </p>
                @else
                    <ul class="space-y-2">
                        @foreach ($lists as $list)
                            <li class="border px-4 py-2 rounded">
                                {{ $list->name }}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
