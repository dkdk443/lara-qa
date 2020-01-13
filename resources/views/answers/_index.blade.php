<div class="row mt-4">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h2>{{ $answersCount . " " . str_plural('Answer', $answersCount) }}</h2>
        </div>
        <hr>
        @include ('layouts._messages')
        
        @foreach ($answers as $answer)
            <div class="media">
              <div class="d-flex flex-column vote-controls">
                <a title="役に立った" class="vote-up">
                  <i class="fas fa-caret-up fa-3x"></i>
                </a>
                <span class="votes-count">1234</span>
                <a title="役に立たなかった" class="vote-down off">
                  <i class="fas fa-caret-down fa-3x"></i>
                </a>
                <a title="ベストアンサーにする" class="vote-accept vote-accepted">
                  <i class="fas fa-check fa-2x"></i>
                </a>
              </div>
              <div class="media-body">
                {!! $answer->body !!}
                <div class="float-right">
                  <span class="text-muted">
                    {{ $answer->created_date }}
                  </span>
                  <div class="media mt-2">
                    <a href="{{ $answer->user->url }}">
                      <img src="{{ $answer->user->avatar }}" >
                    </a>
                    <div class="media-body mt-1">
                      <a href="{{ $answer->user->url }}">{{ $answer->user->name }}</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
        @endforeach
      </div>
    </div>
  </div>
</div>