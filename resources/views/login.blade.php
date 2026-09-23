<x-layout>
  <main class="py-10">
    <section class="bg-white max-w-[600px] mx-auto mt-4 border-2 p-10">
      <h1 class="text-2x1 font-bold mb-4">Faça Login</h1>
      <form action="/login" method="POST" class="flex flex-col">
        @csrf
        <div class="flex flex-col gap-2 mb-4">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required class="bg-white border-2 rounded p-2 @error('email') border-red-500 @enderror" />

          @error('email')
          <p class="text-red-500 text-x1 mt-1">
            {{ $message }}
          </p>
          @enderror

        </div>
        <div class="flex flex-col gap-2 mb-4">
          <label for="password">Senha</label>
          <input type="password" id="password" name="password" required
            class="bg-white border-2 rounded p-2 @error('password') border-red-500 @enderror"
            placeholder="*********" />

          @error('password')
          <p class="text-red-500 text-x1 mt-1">
            {{ $message }}
          </p>
          @enderror

        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 border-2 rounded p-2">Entrar</button>
      </form>

      <p class="mt-4 text-center">
        Não tem uma conta?
        <a href="{{ route('auth.register') }}" class="text-blue-500 hover:text-blue-600">Cadastre-se</a>
      </p>


    </section>
  </main>


</x-layout>