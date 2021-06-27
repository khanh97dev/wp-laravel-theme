@extends('layouts.master')

@section('content')
    <div class="main-content">
        <article class="article">
            <header class="article__header">
                <h1 class="text--lg">{{ $post->post_title }}</h1>
            </header>

            <div class="article__content">
                {!! $post->post_content !!}
            </div>
        </article>
    </div>
@endsection
