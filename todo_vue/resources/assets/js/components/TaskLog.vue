<template lang="html">
	
	<div class="task-log task-wrapper">
		<div v-for="(task, index) in tasksProp" class="inner-task my-2">
			<div class="card">
				<div class="card-header">
					{{ task.task }}
					<small>by {{ task.user.name }}</small>
					<!-- <small>id = {{ task.id }}</small> -->
					<template v-if="authUser == task.user.name">
						<a href="#" class="lil">Edit</a>
						<!-- <a v-bind:href="'/task/delete/' + task.id" class="lil">Delete</a> -->
						<a href="#" :data-task-id = task.id :data-index = index class="lil" @click="deleteTask">Delete</a>
					</template>
				</div>
			</div>
		</div>
		<div class="empty pt-2" v-show="tasksProp.length === 0">
			Nothing here yet!
		</div>
	</div>

</template>


<script>
	export default {
		props: ['tasksProp', 'currentUser'],

		data() {
			return {
				authUser : this.currentUser,
			}
		},

		methods: {
			
			deleteTask: function(e) {
				var index = e.target.dataset.index;
				var taskId = e.target.dataset.taskId;
				this.tasksProp.splice(index, 1);
				console.log(this.tasksProp)
				axios.get('/task/delete/' + taskId).then(response => {

				});

			}

		}		
	}

</script>

<style lang="css">
	
	.task-wrapper {
		width: 50%;
		margin: 0 auto;
	}

	.empty {
		text-align: center;
	}
	
	.lil {
		font-size: 11px;
	}
</style>