@if (session()->has('message'))
    <div class="alert-success">{{session()->get('message')}}</div>
@elseif (session()->has('error'))
    <div class="alert-danger">{{session()->get('error')}}</div>
