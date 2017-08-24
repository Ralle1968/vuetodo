<template>
<div id="showTasks" class="container">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
      <div class="panel-body">
        <ul class="list-group">
          <li class="list-group-item" v-for="task in tasks">{{ task.title }}</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</template>

<script>
  export default {
    data() {
      return {
        tasks: []
      }
    },
    //Fetches tasks when the component is created.
    created() {
      var vm = this;
      axios.get('/api/tasks').then(function(response){
       console.log(response.data);
       return vm.tasks = response.data;
     });
    }
  }
</script>

<style>


</style>
