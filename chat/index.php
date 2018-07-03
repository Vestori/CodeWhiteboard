<?php include 'header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <div class="panel panel-primary panel-top-100">
      <div class="panel-heading">Login First</div>
        <div class="panel-body">
          <form action="login.php" method="post" autocomplete="off">

            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" id="email" value="" name="email">
            </div>

          <button type="submit" class="btn btn-default">Submit</button>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
