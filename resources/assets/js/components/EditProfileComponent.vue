<script>
    export default {
    	props: ['user'],
        data() {
            return {
                name: this.user.name,
                email: this.user.email,
            }
        },
        methods: {
        	update() {
        		axios.patch(`/user/${this.user.id}`, {
				    name: this.name,
				  })
				  .then(function (response) {
				    console.log(response);
				    alert('Any fool can use a computer')
				  })
				  .catch(function (error) {
				    alert(error);
				  });
        	}
        },
        created() {
        }
    }
</script>
<template>
	<div class="row">
		<div class="col-md-6">
	        <div class="card">
	        	<div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">account_circle</i>
                </div>
	            <div class="card-header text-center">
	                <h4 class="card-title">{{ name }} <br> <small>{{ email }}</small></h4>
	            </div>
	            <div class="card-content">
	            	<div class="form-group">
	            		<label for="name">Name</label>
	            		<input type="text" class="form-control" v-model="name">
	            	</div>
	            	<button type="submit" class="btn btn-rose btn-round btn-block" @click="update">Save</button>
	            </div>
	        </div>
		</div>
	</div>
</template>