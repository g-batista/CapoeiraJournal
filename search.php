<?php

require_once "system.php";
$title = "Search";
require_once "header.php";
?>

<div class="my-3 container">
  <form
      method="post" 
      class="bg-light border border-dark"
      action="index.php">

    <h4 class="form-group text-center text-dark mt-3 pt-3">
        Search by Author name or post title
    </h4>
    <div class="form-group row justify-content-center h5">
      <label 
          for="username" 
          class="col-form-label">
            Search:
      </label>
      <div class="col-md-3 m-3">
        <input 
            id="username"
            autofocus
            required
            type="text"
            name="search"
            class="form-control"
            placeholder="search for title or author"/>
      </div>
    </div>

    <div class="form-group row justify-content-center">
      <div class="mb-4">
        <button type="submit" 
                class="btn btn-outline-dark btn-warning"
                value="search" 
                name="submit">
          Submit
        </button>
      </div>
    </div>
  </form>
</div>
<?php
mysqli_close($dbc);
    require_once "footer.php";
?>