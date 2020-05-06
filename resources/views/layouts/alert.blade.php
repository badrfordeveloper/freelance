<section class="introduction-stripe" style="position: fixed;right: 1%;bottom: 2%; z-index: 99999;width: auto; min-width: 325px;">
@if(Session::has('flash_message'))
<div class="" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<div class="alert alert-success">
<div class="">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<p style="margin: 0"><b>{{ Session::get('flash_message') }}</b></p>
</div>
</div>
</div>
@endif
@if(Session::has('error'))

<div class="" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<div class=" alert alert-danger">
<div class="">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<p style="margin: 0"><b>{{ Session::get('error') }}</b></p>

</div>
</div>
</div>
@endif
</section>