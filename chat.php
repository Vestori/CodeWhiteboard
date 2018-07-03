<?php include 'loginHeader.php'; ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-md-5">
      <div class="well">
        code
      </div>
    </div>
    <div class="col-xs-12 col-md-4">
      <!-- List of messages will be display below -->
      <div class="well">
        <ul id="discussion-list">
        </ul>
      </div>
    </div>
    <div class="col-xs-12 col-md-3">
      <!-- List of user will be display below -->
      <div class="well">
        <ul class="list-group" id="users-list">
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
      <form action="/message.php" method="post" autocomplete="off" id="chat-form">
        <div class="well">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Type message here" name="message" value="">
            <div class="input-group-btn">
              <button class="btn btn-primary" type="submit">Send</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
