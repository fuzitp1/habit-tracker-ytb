<h1>
    Welcome to Habit Tracker
</h1>
<p>
    {{ $name }} <br>

</p>

<ul>
    @foreach($habits as $habit)
        <li>
            {{ $habit }}
        </li>
    @endforeach

</ul>
@guest
<p>
     você não está logado
</p>
@endguest
