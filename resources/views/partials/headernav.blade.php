<ul>
    <li>Home</li>
    <li>About</li>
    <li>Contact</li>
    <li>Login</li>
</ul>

@if (Auth::check())
    <a href="#">{{ Auth::user()->name }}</a>
@endif