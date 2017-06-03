@extends ('layouts.master')

@section ('content')
    <h1>{{ $activity->name }}</h1>
    <p>{{ $activity->reps }} reps</p>
    <p><a href="/activities">Return to index</a></p>
@endsection