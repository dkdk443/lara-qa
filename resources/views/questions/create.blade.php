
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
            @include('questions._form', ['buttonText' => "質問する"])
          </form>
        </div>
          <nav aria-label="Page navigation">
          </nav>
      </div>
    </div>
    </div>
   
  </div>
@endsection