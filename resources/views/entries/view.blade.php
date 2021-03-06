@extends('layouts.app')

@section('title', 'Blog')

@section('content')
  <h1>{{ $entry->title}}</h1>
  <article>
    {{ $entry->content }}
    <div><a href="{{ action("EntriesController@index") }}">戻る</a></div>
  </article>
@endsection


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $entry->title }}</title>
  </head>
  <body>

  </body>
</html>