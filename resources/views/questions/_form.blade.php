@csrf
<div class="form-group">
  <label for="question-title">タイトル</label>
  <input type="text" class="form-control {{ $errors->has('title')? 'is-invalid' : ''}}" name="title" id="question-title" aria-describedby="helpId" placeholder="質問のタイトル" value="{{ old('title', $question->title) }}">
  <small id="helpId" class="form-text text-muted">質問のタイトルを入力してください</small>

  @if($errors->has('title'))
    <div class="invalid-feedback">
    <strong>タイトルは必須です</strong>
    </div>
  @endif
</div>

<div class="form-group">
  <label for="question-body">内容</label>
  <textarea name="body" id="question-body" rows="8"　class="form-control {{ $errors->has('body') ? 'is-invalid' : ''}}">{{ old('body', $question->body) }}</textarea>
  <small id="helpId" class="form-text text-muted">質問の内容を入力してください</small>
  @if($errors->has('body'))
    <div class="invalid-feedback">
    <strong>質問内容は必須です</strong>
    </div>
  @endif
</div>

<div class="form-group">
<button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
</div>