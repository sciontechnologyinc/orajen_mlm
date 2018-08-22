@if (Route::has('login'))
    <div class="top-right links">
        @auth
        
            <div class='title'>
                <img src='{{ url('/img/logo.png') }}'> 
                <span>ORAJEN MARKETING CORP</span>
            </div>
            <div class='link'>
                <a href="{{ url('/home') }}">Home</a>
            </div>
        @else
            
            <div class='title'>
                <img src='{{ url('/img/logo.png') }}'> 
                <span>ORAJEN MARKETING CORP</span>
            </div>

            <header-auth-button></header-auth-button>

        @endauth
    </div>
@endif