@if(session('error_message'))
<div class="alert alert-danger fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session('error_message')}}
</div>

@endif

@if(session('nouser_message'))
<div class="alert alert-danger fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session('nouser_message')}}
</div>

@endif


@if(session('success_message'))
<div class="alert alert-success fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session('success_message')}}
</div>

@endif
@if(session('account_Activate_message'))
<div class="alert alert-success fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session('account_Activate_message')}}
</div>

@endif

@if(session('otp_message'))
<div class="alert alert-success fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session('otp_message')}}
</div>

@endif

@if(session('otp_error'))
<div class="alert alert-danger fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session('otp_error')}}
</div>

@endif


@if(session('login_error'))
<div class="alert alert-danger fade in alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{session('login_error')}}
</div>

@endif