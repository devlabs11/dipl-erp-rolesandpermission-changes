<!DOCTYPE html>
<html>
<head>
    <title>Error Notification</title>
</head>
<body>
    <h1>Error Notification</h1>
    <p>Status Code: {{ $status_code }}</p>
    <p>Message: {{ $message }}</p>
     <p>Code: {{ $code }}</p>
    {{--<p>String: {{ $string }}</p> --}}
    <p>File: {{ $file }}</p>
    {{-- <p>Trace: {{ $trace }}</p> --}}
    <p>URL: {{ $url }}</p>
    {{-- <p>Request Body: {{ $body }}</p> --}}
    <p>IP Address: {{ $ip }}</p>
    <p>User Name: {{ $username }}</p>
</body>
</html>
