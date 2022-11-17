<?php

require_once "system.php";
$title = "Search";
require_once "header.php";
?>

<div class="mt-3 container col-md-7">
  <form
    method="post" 
    class="bg-light"
    action="index.php"
    >

    <h4 class="form-group text-center text-dark mt-3">
      Search by Author name or post title
    </h4>
    <div class="form-group row justify-content-center">
      <label for="username" 
            class="col-sm-1 col-form-label"
            >
            Search
      </label>
        <div class="col-sm-10 col-md-3">
          <input 
          id="username"
          autofocus
          required
          type="text"
          name="search"
          class="form-control"
          placeholder="search for title or author"
          />
        </div>
      </div>

    <div class="form-group row justify-content-center">
    <div class="mb-4">
      <button type="submit" 
              class="btn btn-outline-dark btn-warning"
              value="" 
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