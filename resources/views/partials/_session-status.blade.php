
@if (session('status'))
    {{ session  ('status')}}
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" aria-label="Close" data-dismiss="alert"> <span aria-hidden="true">&times;</span> </button>
    </div>
    
        
@endif