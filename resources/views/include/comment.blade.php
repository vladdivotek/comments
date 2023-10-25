<div class="comment border mb-4" style="margin-left: {{ $i++ }}rem;">
    <div class="comment-header d-flex align-items-center p-3 bg-light border-bottom">
        <div class="card-name me-3" style="font-weight: bold;">{{ $subComment->name }}</div>
        <div class="card-date flex-grow-1" style="font-style: italic; color: #777;">{{ $subComment->created_at->format('d.m.Y') }}</div>
        <div class="card-actions d-flex align-items-center ms-3">
            <a href="mailto:{{ $subComment->email }}">Email</a>
            <a href="{{ $subComment->link ?? '' }}" class="ms-3 me-3">Link</a>
            <div class="form-check">
                <input type="checkbox" data-comment="{{ $subComment->id }}" class="comment-answer form-check-input" value="">
                <label for="flexCheckDefault" class="form-check-label">Answer</label>
            </div>
        </div>
    </div>
    <div class="comment-body p-3">
        <p class="card-text">{{ $subComment->text }}</p>
    </div>
</div>
@foreach($subComment->subComments as $subComment)
    @include('include.comment', $subComment)
@endforeach
