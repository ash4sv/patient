		@foreach($errors->all() as $error)
          <div class="alert alert-danger">
            {{ $error }}
          </div>
        @endforeach
		
        @if($message = Session::get('success'))
        <div class="alert alert-success">
        	{{ $message }}
        </div>
        @endif

        @if($message = Session::get('delete'))
        <div class="alert alert-danger">
        	{{ $message }}
        </div>
        @endif

        @if($message = Session::get('edited'))
        <div class="alert alert-info">
            {{ $message }}
        </div>
        @endif

