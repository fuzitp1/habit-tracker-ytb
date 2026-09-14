<header class="bg-white border-top border-2 flex items-center justify-between px-4">
  <div>
    logo
</div>  


@auth
  <form action="{{ route('auth.logout') }}" method="POST">
   @csrf
   <button type="submit" class="bg-white border-2 rounded p-2">Sair</button>
  </form>   
@endauth

@guest
<a href="{{ route('site.login')}}" class="bg-white border-2 rounded p-2">Login</a>
@endguest
</header>