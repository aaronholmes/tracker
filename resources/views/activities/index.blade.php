@extends ('layouts.master')

@section ('content')
    <h1>Activities</h1>

    <ul>
        @foreach ($activities as $activity)
            <li><a href="/activities/{{ $activity->id }}">{{ $activity->name }}</a></li>
        @endforeach
    </ul>
@endsection