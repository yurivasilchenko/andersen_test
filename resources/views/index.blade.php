<!DOCTYPE html>
<html>
<head>
    <title>Message Form</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Message Form</h1>

<form method="POST" action="{{ route('messages.store') }}">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
    </div>
    <button type="submit">Submit</button>
</form>

<h2>Messages:</h2>
<ul>
    @foreach ($messages as $message)
        <li>
            <strong>Name:</strong> {{ $message->name }}<br>
            <strong>Email:</strong> {{ $message->email }}<br>
            <strong>Message:</strong> {{ $message->message }}<br>
            <strong>Created at:</strong> {{ $message->created_at }}
        </li>
    @endforeach
</ul>
</body>
</html>
