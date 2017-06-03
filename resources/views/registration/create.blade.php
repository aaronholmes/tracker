@extends ('layouts.master')

@section ('content')

    <h1>Register</h1>
    <div class="row">
        <div class="small-10 columns">
            <form class="log-in-form" action="/register" method="POST">

                {{ csrf_field() }}

                @include ('partials.form-errors')

                <label>Name
                    <input type="text" name="name" id="name" placeholder="Full Name">
                </label>
                <label>Email
                    <input type="email" name="email" id="email" placeholder="somebody@example.com">
                </label>
                <label>Password
                    <input type="password" name="password" id="password">
                </label>
                <label>Password Confirmation
                    <input type="password" name="password_confirmation" id="password_confirmation">
                </label>

                <p><input type="submit" class="button expanded" value="Register" /></p>

            </form>
        </div>
    </div>
@endsection