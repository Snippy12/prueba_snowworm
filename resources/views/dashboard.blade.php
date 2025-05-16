<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Tarjeta del perfil -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg rounded-2xl border border-gray-200 dark:border-gray-700">
                <div class="p-6 text-gray-800 dark:text-gray-100 space-y-4">
                    <h1 class="text-3xl font-extrabold text-indigo-600 dark:text-indigo-400 flex items-center gap-2">
                        👤 Perfil del Usuario
                    </h1>

                    <ul class="space-y-2 text-lg">
                        <a href="{{ route('profile.edit') }}"class="inline-block mt-4 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md transition"> ✏️ Editar Perfil</a>
                        <li><span class="font-semibold">🧑 Nombre:</span> {{ Auth::user()->name }}</li>
                        <li><span class="font-semibold">📧 Email:</span> {{ Auth::user()->email }}</li>
                        <li><span class="font-semibold">📅 Fecha de registro:</span> {{ Auth::user()->created_at->format('d/m/Y') }}</li>
                    </ul>
                </div>
            </div>

            <!-- Tarjeta de sesión -->
            <div class="bg-green-100 dark:bg-green-800 overflow-hidden shadow-md rounded-xl border border-green-300 dark:border-green-600">
                <div class="p-6 text-green-900 dark:text-green-100 text-lg font-medium">
                    ✅ {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
