<h1>Forgot Password</h1>




<form action="http://localhost:8000/reset-password/{{ $data }}" method="get">

    <input type="hidden" name="password_token" value="{{ $data }}">

    <button>
        click here to reset your password
    </button>


</form>
