@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">All Questions</div>
        <div class="card-body">
          @foreach ($questions as $question)
            <div class="media">
              <div class="media-body">
                <h3 class="mt-0"> 
                  {{-- {{route('question.show', $question->id)}} --}}
                <a href="{{ $question->url }}"> {{ $question->title }}</h3></a>
                {{-- ↑urlの定義：モデル --}}
                <p class="lead">
                  Asked by <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                  <small class="text-muted">{{ $question->created_date}}</small>
                </p>
                {{str_limit($question->body, 250)}}
              </div>
            </div>
          <hr>
          @endforeach
          </div>
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
              {{$questions->links( )}}
            </ul>
          </nav>

      </div>
    </div>
    </div>
   
  </div>
@endsection