<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto mt-4 border-2 p-10">
            <h1 class="text-2x1 font-bold mb-4">Registre-se</h1>
            <p>
                Preencha as informações abaixo para criar uma conta.
            </p>

            <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col">
                @csrf
                <div class="flex flex-col gap-2 mb-4">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" required placeholder="Digite seu nome completo"
                        class="bg-white border-2 rounded p-2 @error('name') border-red-500 @enderror" />

                    @error('name')
                        <p class="text-red-500 text-x1 mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required
                        class="bg-white border-2 rounded p-2 @error('email') border-red-500 @enderror" />

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

                <div class="flex flex-col gap-2 mb-4">
                    <label for="password_confirmation">Confirmar Senha</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="bg-white border-2 rounded p-2 @error('password') border-red-500 @enderror"
                        placeholder="*********" />

                    @error('password')
                        <p class="text-red-500 text-x1 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                <button type="submit" class="bg-blue-500 hover:bg-blue-600 border-2 rounded p-2">Confirmar</button>
            </form>
  <p class="mt-4 text-center">
        Já possui uma conta?    
       
        <a href="{{ route('auth.login') }}" class="text-blue-500 hover:text-blue-600">Faça login</a>
      </p>



        </section>
    </main>


</x-layout>
