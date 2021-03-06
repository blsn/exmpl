@if (Session::has('info')) 
    <div class="alert alert-info" role="alert">
        {{Session::get('info')}}
    </div>    
@endif

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>    
@endif

@if (session('warning'))
    <div class="alert alert-warning" role="alert">
        {{session('warning')}}
    </div>    
@endif

@if (session('error'))
    <div class="alert alert-danger" role="alert">
        {{session('error')}}
    </div>    
@endif

{{-- automatically retrieving all error messages --}}
@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach   
@endif
