<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $taskList->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Criar nova tarefa --}}
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold mb-4">Nova tarefa</h3>

                <form method="POST" action="{{ route('tasks.store', $taskList) }}">
                    @csrf

                    <input
                        type="text"
                        name="title"
                        placeholder="Título da tarefa"
                        class="border rounded px-3 py-2 w-full mb-3"
                        required
                    >

                    <button
                        type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded"
                    >
                        Criar tarefa
                    </button>
                </form>
            </div>

            {{-- Listagem de tarefas --}}
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-semibold mb-4">Tarefas</h3>

                @if ($taskList->tasks->isEmpty())
                    <p class="text-gray-600">Nenhuma tarefa cria
