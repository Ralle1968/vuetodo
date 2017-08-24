<template>
<div id="showTasks" class="container">
  <div class="col-md-6 col-md-offset-3">
    <i v-if="loading" class="fa fa-spinner fa-spin fa-3x fa-fw center-block"></i>
    <div v-if="!loading"class="panel panel-default">
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
        tasks: [],
        loading: false
      }
    },
    //Fetches tasks when the component is created.
    created() {
      var vm = this;
      this.loading = true;
      axios.get('/api/tasks').then(function(response){
       console.log(response.data);
       vm.loading=false;
       return vm.tasks = response.data;
       //return vm.loading = false;
     });
    }
  }
</script>

<style>


</style>
