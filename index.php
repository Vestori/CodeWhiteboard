<?php include 'loginHeader.php'; ?>
<style type="text/css">
  
  .container {
    padding: 45px 60px;
  }
  
</style>


<div class="container">
      <div class="row">
         <div class="col-md-4 col-md-offset-4">
         <div class="panel with-nav-tabs panel">
            <div class="panel-heading">
               <ul class="nav nav-pills nav-justified">
                  <li class="active"><a href="#login" data-toggle="tab"> Existing Users </a></li>
                  <li><a href="#signup" data-toggle="tab"> New Users </a></li>
               </ul>
            </div>
  
            <div class="panel-body">
               <div class="tab-content">
                  <div id="login" class="tab-pane fade in active register">
                     <div class="container-fluid">
                        <div class="row">
                              <h2 class="text-center" style="color: #3b5ec6;"> <strong> Welcome Back!  </strong></h2><hr />
                              <form action="login.php" method="post">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                       <div class="input-group">
                                          <div class="input-group-addon">
                                             <span class="glyphicon glyphicon-user"></span>
                                          </div>
                                          <input type="text" placeholder="Email" name="email" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-md-12">
                                    
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-lock"></span>
                                             </div>

                                             <input type="password" placeholder="Password" name="pass" class="form-control" value="">
                                          
                                          <!--<hr />-->
                                          
                                          </div>
                                       </div>
                              
                                       <div class="row" class="form-group">
                                          
                                          <div class="col-xs-12 col-sm-12 col-md-12">
                                             <button type="submit" class="btn btn-primary btn-block btn-lg"> Login </button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>

                              <!--<div class="col-xs-12 col-sm-12 col-md-12">-->
                              <!--   <div class="col-xs-6 col-sm-6 col-md-6">-->
                              <!--      <div class="form-group">-->
                              <!--         <input type="checkbox" name="check" checked> Remember Me-->
                              <!--      </div>-->
                              <!--   </div>-->

                              <!--    <div class="col-xs-6 col-sm-6 col-md-6">-->
                                    <!--<div class="form-group">-->
                                    <!--   <a href="#forgot" data-toggle="modal"> Forgot Password? </a>-->
                                    <!--</div>-->
                              <!--   </div>-->
                              <!--</div>-->
                              
                              <!--<div class="row">-->
                                 <!--<div class="col-xs-12 col-sm-12 col-md-12">-->
                                 <!--   <button type="submit" formaction="chat.php" class="btn btn-primary btn-block btn-lg"  data-toggle="tab"> Login </button>-->
                                 <!--</div>-->
                              <!--   <div class="col-xs-12 col-sm-12 col-md-12">-->
                              <!--      <a href="chat.php" class="btn btn-primary btn-block btn-lg">Login</a>-->
                              <!--   </div>-->
                              <!--</div>-->

                        </div>
                     </div> 
                  </div>

                  <div id="signup" class="tab-pane fade">
                     <div class="container-fluid">
                        <div class="row">
                              <h2 class="text-center" style="color: #3b5ec6;"> <Strong> Create Account </Strong></h2> <hr />
                              <form action="createAccount.php" method="post">
                                 <!--<div class="row">-->
                                 <!--   <div class="col-xs-12 col-sm-12 col-md-12">-->
                                 <!--      <div class="form-group">-->
                                 <!--         <div class="input-group">-->
                                 <!--            <div class="input-group-addon iga1">-->
                                 <!--               <span class="glyphicon glyphicon-user"></span>-->
                                 <!--            </div>-->
                                 <!--            <input type="text" class="form-control" placeholder="Enter User Name" name="name">-->
                                 <!--         </div>-->
                                 <!--      </div>-->
                                 <!--   </div>-->
                                 <!--</div>-->

                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-envelope"></span>
                                             </div>
                                             <input type="email" class="form-control" placeholder="Enter E-Mail" name="email">
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-addon iga1">
                                                <span class="glyphicon glyphicon-lock"></span>
                                             </div>
                                             <input type="password" class="form-control" placeholder="Enter Password" name="pass">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row" class="form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                       <div class="form-group">
                                          <button type="submit" class="btn btn-lg btn-block btn-primary"> Register</button>
                                       </div>
                                       
                                    </div>
                                    </form>
                                 </div>
                                 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>




   <div class="modal fade" id="forgot">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss='modal' aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
               <h4 class="modal-title" style="font-size: 32px; padding: 12px;"> Recover Your Password </h4>
            </div>

            <div class="modal-body">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <div class="input-group">
                              <div class="input-group-addon iga2">
                                 <span class="glyphicon glyphicon-envelope"></span>
                              </div>
                              <input type="email" class="form-control" placeholder="Enter Your E-Mail ID" name="email">
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <div class="input-group">
                              <div class="input-group-addon iga2">
                                 <span class="glyphicon glyphicon-lock"></span>
                              </div>
                              <input type="password" class="form-control" placeholder="Enter Your New Password" name="newpwd">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="modal-footer">
               <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-info"> Save <span class="glyphicon glyphicon-saved"></span></button>

                  <button type="button" data-dismiss="modal" class="btn btn-lg btn-default"> Cancel <span class="glyphicon glyphicon-remove"></span></button>
               </div>
            </div>
         </div>
      </div>
   </div>  


   
   
  <?php include 'footer.php'; ?>