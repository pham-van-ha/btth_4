  
<!-- Nav tabs -->
<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #235555;">
        <a class="navbar-brand" href="#">NukeHanda</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                
            </ul>
            <div class="form-inline my-2 my-lg-0">
            <button name="" id="" class="btn  btn-outline-success my-2 my-sm-0 mr-3"  role="button" data-toggle="modal" data-target="#registerModal">Sign up</button>
            <button name="" id="" class="btn  btn-outline-success my-2 my-sm-0 mr-3"  role="button" data-toggle="modal" data-target="#loginModal">Login</button>
            </div>
        </div>
    </nav>
      <!-- Modal register-->
        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Sign up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
                <form action="process-register.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                        <label for="">Your first name</label>
                        <input type="text" name="f_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                        <label for="">Your last name</label>
                        <input type="text" name="l_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                        <label for="">Your email</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                        <label for="">Enter password</label>
                        <input type="password" name="password1" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                        <label for="">Confirm password</label>
                        <input type="password" name="password2" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button  type="submit" class="btn btn-outline-success">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <!-- Modal login-->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
                <form action="login.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                        <label for="">Your email</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted"><a href="change-password.php">Forgot password?</a></small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button  type="submit" class="btn btn-outline-success">Login</button>
                    </div>
                </form>
            </div>
        </div>
        </div>