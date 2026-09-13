<x-layout>
    <main class="py-10">
    <h1 class="text-3xl font-bold underline">
        Veja seus hábitos ganharem vida
    </h1>

    @auth
        <p>Bem vindo(a), {{ Auth::user()->name }}!</p>
    @endauth
</main>

    
</x-layout>
