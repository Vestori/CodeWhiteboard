<?php include 'loginHeader.php'; ?>

<style type="text/css">
  body, html, .container {
         height: 100%;
    }
    
</style>

<!--<?php print_r($_POST); ?>-->
<div class="container">
    
    <div class="row"  style="height:80%; display: block;">
      <div>
          <div class="col-md-8 border form-group">
              <label for=""></label>
              <textarea class="form-control" id="textArea2" rows = "12"></textarea>
          </div>
      </div>
        
        <div class="col-md-4">This will be the chat window</div>
        
    </div>
    
    <div class="row"  style="height:80%; display: block;">
      
      
        <div class="col-md-12 form-group" >
            <label for="textArea1">Message: </label>
            <textarea class="form-control" id="textArea1" rows = "4"></textarea>
        </div>
        
        
    </div>

  </div>

  <?php include 'footer.php'; ?>