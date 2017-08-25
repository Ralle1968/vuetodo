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
  <div class="col-md-6 col-md-offset-3">
    <h1>Custom Checkboxes</h1>
      <div>
        <input id="box1" type="checkbox" />
        <!-- <label for="box1">Checkbox 1</label> -->
        <input id="box2" type="checkbox" />
        <label for="box2">Checkbox 2</label>
        <input id="box3" type="checkbox" />
        <label for="box3">Checkbox 3</label>
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

</style>
