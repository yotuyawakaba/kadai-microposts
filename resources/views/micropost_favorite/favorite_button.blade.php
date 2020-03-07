@if (Auth::user()->is_favoriting($microposts->id))
    {!! Form::open(['route' => ['favorites.unfavorite', $microposts->id], 'method' => 'delete']) !!}
    {!! Form::submit('Unfavorite', ['class' => "btn btn-light btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorites.favorite', $microposts->id]]) !!}
    {!! Form::submit('Favorite', ['class' => "btn btn-success btn-sm"]) !!}
    {!! Form::close() !!}
@endif