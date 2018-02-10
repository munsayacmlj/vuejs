<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Chat room</title>

	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>

	<div id="app">
		<h1>Chatroom</h1>
		<chat-log :messages="messages"></chat-log>
		<chat-composer v-on:messagesent="addMessage"></chat-composer>
	</div>

	<script src="js/app.js" charset="utf-8"></script>
</body>
</html>