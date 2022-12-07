<?php

require_once "system.php";
$title = "Search";
require_once "header.php";
?>

<div class="my-3 container col-md-7">
  <form
      method="post" 
      class="bg-light border border-dark border-2 "
      action="index.php">

    <h4 class="form-group text-center text-dark mt-3 pt-3">
        Search by author name or post title
    </h4>
    <div class="form-group h5 text-center">
      <label 
          for="username" 
          class="col-form-label text-danger">
            Search:
      </label>
        <input 
            id="username"
            class="col-md-3"
            autofocus
            required
            type="text"
            name="search"
            class="form-control"
            placeholder="Search for title or author"/>
    </div>
    <div class="mb-4 form-group text-center">
      <button type="submit" 
              class="btn btn-outline-dark btn-warning"
              value="search" 
              name="submit">
        Submit
      </button>
    </div>
    
  </form>
</div>

<?php
mysqli_close($dbc);
    require_once "footer.php";
?>