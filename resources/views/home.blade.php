<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <!-- Agrega tus estilos aquí -->
</head>
<body>
    <h1>Email Verification</h1>

    @if (session('resent'))
        <div>A fresh verification link has been sent to your email address.</div>
    @endif

    <p>Before proceeding, please check your email for a verification link.</p>
    <p>If you did not receive the email</p>
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit">Request another</button>
    </form>
</body>
</html>
