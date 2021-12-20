@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissable fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" style="float: right" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@elseif($message = Session::get('success'))
<div class="alert alert-success alert-dismissable fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" style="float: right" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif