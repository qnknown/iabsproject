@extends('layouts.main')
@section('image', 'blog/img/home.jpg')
@section('title', 'BMX Blog')
@section('titleDesc', 'Блог Тараса Антощенко')
@section('content')
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($posts as $post)
            <div class="post-preview">
              <a href="{{route('post', [$post->id])}}">
                <h3 class="post-title">
                  {{$post->id}} {{$post->title}}
                </h3>
                <h3 class="post-subtitle">
                  
                </h3>
              </a>
              <p class="post-meta">Posted by
                <a href="#">Taras Antoshschenko</a>
                on September 24, 2019</p>
            </div>

        @endforeach
       
      </div>
    </div>
@endsection

