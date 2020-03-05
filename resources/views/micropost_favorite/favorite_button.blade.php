@if (Auth::user()->is_favoriting($user->id))
    {!! Form::open(['route' => ['favorites.unfavorite', $user->id], 'method' => 'delete']) !!}
    {!! Form::submit('Unfavorite', ['class' => "btn btn-light btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorites.favorite', $user->id]]) !!}
    {!! Form::submit('Favorite', ['class' => "btn btn-success btn-sm"]) !!}
    {!! Form::close() !!}
@endif