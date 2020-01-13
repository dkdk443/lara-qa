<div class="row mt-4">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title">
          <h3>回答する</h3>
        </div>
        <hr>
        <form action="{{ route('questions.answers.store', $question->id) }}" method="post">
          @csrf
          <div class="form-group">
            <textarea name="body" id="" rows="7" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"></textarea>
            @if ($errors->has('body'))
              <div class="invalid-feedback">
                本文を入力してください
              </div>
            @endif
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-lg btn-outline-primary">送信</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>