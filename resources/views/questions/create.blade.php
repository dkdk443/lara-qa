
@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex align-items-center">
            <h2>質問フォーム</h2>
            <div class="ml-auto">
              <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">全ての質問に戻る</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="{{ route('questions.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="question-title">タイトル</label>
            <input type="text" class="form-control {{ $errors->has('title')? 'is-invalid' : ''}}" name="title" id="question-title" aria-describedby="helpId" placeholder="質問のタイトル">
              <small id="helpId" class="form-text text-muted">質問のタイトルを入力してください</small>
              
              @if($errors->has('title'))
                <div class="invaild-feedback">
                <strong>{{ $erros->first('title') }}</strong>
                </div>
              @endif
            </div>

            <div class="form-group">
              <label for="question-body">内容</label>
              <textarea name="body" id="question-body" rows="8"　class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}"></textarea>
              <small id="helpId" class="form-text text-muted">質問の内容を入力してください</small>
              @if($errors->has('body'))
                <div class="invaild-feedback">
                <strong>{{ $erros->first('body') }}</strong>
                </div>
              @endif
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-outline-primary btn-lg">質問する</button>
            </div>
          </form>
        </div>
          <nav aria-label="Page navigation">
            
          </nav>

      </div>
    </div>
    </div>
   
  </div>
@endsection