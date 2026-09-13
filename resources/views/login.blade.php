<x-layout>
<main class="py-10">
      <section class="mt-4">
      <h2>Login</h2>
      <form action="/login" method="POST">
        @csrf
        
        @error('email')
        <p class="text-red-500 text-x1 mt-1">
            {{ $message }}
        </p>
        @enderror
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required class="bg-white border-2 rounded p-2"/>

        <label for="password">Senha</label>
        <input type="password" id="password" name="password" required placeholder="[PASSWORD]" 
        class="bg-white border-2 rounded p-2"/>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 border-2 rounded p-2">Entrar</button>
      </form>
      
      
       
    </section>
</main>

    
</x-layout>
