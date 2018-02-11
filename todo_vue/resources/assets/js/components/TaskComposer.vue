<template lang="html">
	
	<div class="card">
		<div class="card-header">Tasks</div>
		<div class="card-body">
			<div class="form-inline">
				<input type="text" class="form-control" placeholder="Add tasks here..." v-model="newTask" v-on:keydown.enter="addNewTask">
				<button class="btn btn-success" @click="addNewTask">Add Task</button>
			</div>
		</div>
	</div>

</template>


<script>
	
	export default {
		props : ['currentUser'],

		data() {
			return {
				newTask : ''
			}
		},

		methods : {
			addNewTask() {
				this.$emit('tasksent', {
					task : this.newTask,
					user : {
						name: this.currentUser
					}
				});
				this.newTask = '';
			}
		},


	}

</script>

<style lang="css">
	
	.form-inline input {
		margin-right: 1em;
	}

	.form-inline button {
		margin-left: 1em;
	}

</style>