<template>
<nav class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <img src="img/todo.png" alt="Dispute Bills">
    <a class="navbar-brand">Ralfs VueToDo-List</a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
      <li><a href="#">Create</a></li>
    </ul>
  </div>
</nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
  .navbar {
    border: 0! important;
  }

  .navbar-header img {
  width: 40px;
  margin-top: 5px;
  float: left;
  margin-left: 10px;
  margin-right: -10px;
}

</style>
