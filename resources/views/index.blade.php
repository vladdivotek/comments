<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <h2 class="mb-4">Comments</h2>
            <div class="comments">
                @foreach($comments as $comment)
                    <div class="comment border mb-4">
                        <div class="comment-header d-flex align-items-center p-3 bg-light border-bottom">
                            <div class="card-name me-3" style="font-weight: bold;">{{ $comment->name }}</div>
                            <div class="card-date flex-grow-1" style="font-style: italic; color: #777;">{{ $comment->created_at->format('d.m.Y') }}</div>
                            <div class="card-actions ms-3">
                                <a href="mailto:{{ $comment->email }}">Email</a>
                                <a href="{{ $comment->link ?? '' }}" class="ms-3">Link</a>
                            </div>
                        </div>
                        <div class="comment-body p-3">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-4">
            <h2 class="mb-4">Add comment</h2>
            <form action="" class="comment-form">
                <div class="form-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="EMail">
                </div>
                <div class="form-group mb-3">
                    <input type="text" name="link" class="form-control" placeholder="Link">
                </div>
                <div class="form-group mb-3">
                    <textarea name="text" rows="5" class="form-control" placeholder="Text"></textarea>
                </div>
                <button type="button" id="send-comment" class="btn btn-success w-100">Send</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
