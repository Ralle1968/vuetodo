<template>
<div id="showTasks" class="container">
  <div class="col-md-6 col-md-offset-3">
    <!-- <i v-if="loading" class="fa fa-spinner fa-spin fa-3x fa-fw center-block"></i> -->
    <!-- <div class="panel panel-default"> -->
      <div class="panel-body">
        <ul class="list-group">
          <li class="list-group-item" v-for="task in tasks">
            <input v-bind:id="task.id" type="checkbox" v-model="task.completed" @click="checkboxToggle(task.id, task.completed)"/>
            <label v-bind:for="task.id" :class="{'disabled' : task.completed}">{{ task.title }}</label>
            <i class="fa fa-times pull-right" @click="deleteId(task.id, task.title)"></i>
            <br>
            <small><label v-bind:for="task.id" :class="{'disabled' : task.completed}">{{ task.createdHumanReadable }}</label></small>
          </li>
        </ul>
      </div>
    <!-- </div> -->
  </div>
</div>
</template>

<script>
  export default {
    data() {
      return {
        tasks: [],
        task:{
          completed:0
        },
        loading: false
      }
    },
    //Fetches tasks when the component is created.
    created() {
      this.fetchIt();
    },

    methods: {
      deleteId(taskId, taskTitle) {
        let ok= confirm('Are you sure to delete "' + taskTitle + '" ?');
        if(ok){
          var vm = this;
          axios.delete('/api/tasks/' + taskId ).then(function(response){
          //  console.log(response);
           vm.fetchIt();
         });
        }
      },
      fetchIt() {
        var vm = this;
        this.loading = true;
        axios.get('/api/tasks').then(function(response){
        //  console.log(response.data);
         vm.loading=false;
         return vm.tasks = response.data;
        });
      },
      checkboxToggle(taskId, taskCompleted) {
        console.log(taskCompleted);
        if (taskCompleted==0){
          taskCompleted=1;
        } else {
          taskCompleted=0;
        }
        console.log(taskCompleted);
        var vm = this;
        vm.task.completed = taskCompleted;
        axios.put('/api/tasks/' + taskId, vm.task).then(function(response){
        //  console.log(response.data);
         vm.fetchIt();
       });
      }
    }
  }
</script>

<style>
  /*** custom checkboxes ***/

  input[type=checkbox] { display:none; } /* to hide the checkbox itself */
  input[type=checkbox] + label:before {
  font-family: FontAwesome;
  display: inline-block;
  }

  input[type=checkbox] + label:before { content: "\f096"; } /* unchecked icon */
  input[type=checkbox] + label:before { letter-spacing: 10px; } /* space between checkbox and label */

  input[type=checkbox]:checked + label:before { content: "\f046"; } /* checked icon */
  input[type=checkbox]:checked + label:before { letter-spacing: 5px; } /* allow space for check mark */
  .panel-body label {
    font-weight: normal;
  }
  .panel-body label.disabled {
    cursor: default;
    text-decoration: line-through;
  }
  .list-group-item {
    margin-bottom: 10Px;
  }
  small{
    font-size: 60%;
  }
</style>
