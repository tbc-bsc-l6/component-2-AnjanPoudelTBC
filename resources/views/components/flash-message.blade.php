@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" x-show="showMessage" x-data="{ showMessage: true }"
    x-init="setTimeout(() => showMessage = false, 2400)" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" x-show="showMessage" x-data="{ showMessage: true }"
    x-init="setTimeout(() => showMessage = false, 2400)" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible fade show" x-show="showMessage" x-data="{ showMessage: true }"
    x-init="setTimeout(() => showMessage = false, 2400)" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
</div>
@endif

@if ($message = Session::get('status'))
<div class="alert alert-info alert-dismissible fade show" x-show="showMessage" x-data="{ showMessage: true }"
    x-init="setTimeout(() => showMessage = false, 2400)" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" x-show="showMessage" x-data="{ showMessage: true }"
    x-init="setTimeout(() => showMessage = false, 2400)" role="alert">
    <strong>Please check the form below for errors</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
</div>
@endif