<template>
<div id="create-form" class="container">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
      <div class="panel-body">
        <form @submit.prevent="addTodo">
          <div class="form-group">
            <label for="newTodo">New Todo</label>
            <input type="text" class="form-control" id="newTodo" aria-describedby="todoHelp" placeholder="Enter new Todo..." v-model="post.title">
            <small id="todoHelp" class="form-text text-muted">Let's do something important or new...</small>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
</template>

<script>
    export default {
      data(){
        return {
          post: {
            title:''
          }
        }
      },
      methods:{
        addTodo(){
          var vm = this;
          axios.post('/api/tasks', vm.post).then(function(response){
           console.log(response.data);
           vm.post.title='';
           vm.$router.push('/');
         });
        }
      }
    }
</script>

<style>


</style>
