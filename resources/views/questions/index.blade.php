@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex align-items-center">
            <h2>All Questions</h2>
            <div class="ml-auto">
              <a href="{{route('questions.create')}}" class="btn btn-outline-secondary">質問する</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          @include('layouts._messages')
          @foreach ($questions as $question)
            <div class="media">
              <div class="d-flex flex-column counters">
                <div class="vote">
                  <strong>{{ $question->votes }}</strong>
                 {{-- 複数形にするメソッド --}}
                  {{ str_plural('vote', $question->votes) }}
                </div>
              <div class="status {{ $question->status }}">
                  <strong>{{ $question->answers }}</strong>
                  {{ str_plural('answer', $question->answers) }}
                </div>
                <div class="view">
                  {{ $question->views }}
                  {{ str_plural('view', $question->views) }}
                </div>
              </div> 
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h3 class="mt-0"> 
                    {{-- {{route('question.show', $question->id)}} --}}
                  <a href="{{ $question->url }}"> {{ $question->title }}</a></h3>
                  <div class="ml-auto">
                    {{-- @if(Auth::user()->can('update', $question)) --}}
                    @can('update', $question)
                      <a href="{{ route('questions.edit', $question->id)}}" class="btn btn-sm btn-outline-info">編集</a>
                    @endcan
                    {{-- @endif --}}
                    
                    {{-- @if(Auth::user()->can('delete', $question)) --}}
                    @can('delete', $question)
                  　  <form action="{{ route('questions.destroy', $question->id)}}" method="post">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('本当に削除しますか？')">削除</button>
                   </form>
                   @endcan
                  </div>
                </div>
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