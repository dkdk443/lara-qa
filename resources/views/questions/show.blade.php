@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
      <div class="card">
          <div class="card-body">
            <div class="card-title">
              <div class="d-flex align-items-center">
              <h1>{{ $question->title }}</h1>
              <div class="ml-auto">
                <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">全ての質問に戻る</a>
              </div>
            </div>
          </div>
          <hr>
          <div class="media">
            <div class="d-flex flex-column vote-controls">
              <a title="役に立った" class="vote-up">
                <i class="fas fa-caret-up fa-3x"></i>
              </a>
              <span class="votes-count">1234</span>
              <a title="役に立たなかった" class="vote-down off">
                <i class="fas fa-caret-down fa-3x"></i>
              </a>
              <a title="お気に入りに登録する" class="favorite favorited">
                <i class="fas fa-star fa-2x"></i>
                <span class="favorites-count">
                  123
                </span>
              </a>
            </div>
            <div class="media-body">
              {!! $question->body_html !!}
              <div class="float-right">
                <span class="text-muted">
                  {{ $question->created_date }}
                </span>
                <div class="media mt-2">
                  <a href="{{ $question->user->url }}">
                    <img src="{{ $question->user->avatar }}" >
                  </a>
                  <div class="media-body mt-1">
                    <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <nav aria-label="Page navigation">
          </nav>
      </div>
      </div>
    </div>
    {{-- アンサーの部分テンプレート化 --}}
    {{-- 第二引数に配列で変数の情報を送る --}}
    @include('answers._index',[
      'answers' => $question->answers,
      'answersCount' => $question->answers_count 
    ])
    @include('answers._create')
    
  </div>
@endsection