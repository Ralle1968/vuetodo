<template>
  <div class="row-offcanvas row-offcanvas-left">
    <div id="sidebar" class="sidebar-offcanvas">
        <div class="col-md-2">
          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Section1</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Section2</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Section3</a></li>
            <li><a href="#">Section</a></li>
            <li><a href="#">Section</a></li>
          </ul>
        </div>
    </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>



</style>
