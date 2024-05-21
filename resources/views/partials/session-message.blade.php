@if (session('status'))
    <div class="alert alert-success d-flex align-items-center justify-content-between">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif