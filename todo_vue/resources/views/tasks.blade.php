@extends('layouts.app')

@section('content')

	<div class="container">
		<div id="app">
			<task-composer v-on:tasksent="addTask" current-user="{{ Auth::user()->name }}"></task-composer>
			<task-log v-bind:tasks-prop="tasks" v-on:deletethistask="deleteTask" current-user="{{ Auth::user()->name }}"></task-log>
		</div>
	</div>

@endsection