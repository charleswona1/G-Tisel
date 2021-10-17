@if(Session::has('success'))
    <div class="toast position-absolute top-0 end-0 mt-5 me-1" id="myToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header text-white bg-success">
            <i class="fas fa-shield-check "></i>
            <strong class="me-auto text-white ms-2">success</strong>
            <small>now</small>
            <button type="button" class="btn-close text-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {!! Session::get('success') !!}
        </div>
    </div>
@endif

@if(Session::has('error'))
    <div class="toast position-absolute top-0 end-0 mt-5 me-1" id="myToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header text-white bg-danger">
            <i class="far fa-bug"></i>
            <strong class="me-auto text-white ms-2">Error</strong>
            <small>now</small>
            <button type="button" class="btn-close text-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {!! Session::get('error') !!}
        </div>
    </div>
@endif

@if(Session::has('warning'))
    <div class="toast position-absolute top-0 end-0 mt-5 me-1" id="myToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header text-white bg-warning">
            <i class="far fa-exclamation-circle "></i>
            <strong class="me-auto text-white ms-2">warning</strong>
            <small>now</small>
            <button type="button" class="btn-close text-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {!! Session::get('warning') !!}
        </div>
    </div>
@endif

@if(Session::has('info'))
    <div class="toast position-absolute top-0 end-0 mt-5 me-1" id="myToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header text-white bg-info">
            <i class="far fa-info-circle"></i>
            <strong class="me-auto text-white">info</strong>
            <small>now</small>
            <button type="button" class="btn-close text-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {!! Session::get('info') !!}
        </div>
    </div>
@endif

<style>
    .mt-5{
        margin-top: 75px !important
    }
</style>