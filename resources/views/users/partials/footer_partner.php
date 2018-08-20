<footer class="card-footer text-muted text-left">
    @if(Auth::user()->user_role = 'Member')
        <p>{{ trans('info.edit_user_warning2') }}<br>
        <sup>*</sup>{{ trans('info.edit_user_warning3') }}</p>
    @endif
</footer>  

