@extends ('layouts.master')

@section ('content')
    <h1>Create Activity</h1>

    @include ('partials.form-errors')

    <form method="post" action="/activities">

        {{ csrf_field() }}

        <div>Name: <input type="text" name="name" id="name"> </div>
        <div>Reps: <input type="text" name="reps" id="reps"> </div>
        <button type="submit">Save</button>
    </form>
@endsection