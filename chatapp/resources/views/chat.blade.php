@extends('layouts.app')


@section('content')
	<div class="container">
		
		<div id="app">
			<h1>Chatroom</h1>
			<chat-log :messages="messages"></chat-log>
			<chat-composer current-user="{{ Auth::user()->name }}" v-on:messagesent="addMessage"></chat-composer>
		</div>

	</div>
@endsection