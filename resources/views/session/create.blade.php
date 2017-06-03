@extends ('layouts.master')

@section ('content')

    <h1>Sign In</h1>
    <div class="row">
        <div class="small-10 columns">
            <form class="log-in-form" action="/login" method="POST">

                {{ csrf_field() }}

                @include ('partials.form-errors')

                <label>Email
                    <input type="email" name="email" id="email" placeholder="somebody@example.com">
                </label>
                <label>Password
                    <input type="password" name="password" id="password">
                </label>
                <p><input type="submit" class="button expanded" value="Login" /></p>

            </form>
        </div>
    </div>
@endsection