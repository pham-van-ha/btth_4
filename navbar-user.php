      
        <!-- lam change profile -->
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
            <div class="my-2 my-lg-0">
                <div class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-white pr-2">Wellcom <?php echo $_SESSION[ 'user_name' ] ?> </span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="profile.php">Your profile</a>
                          <a class="dropdown-item" href="logout.php">Logout</a>
                      </div>
                </div>
            </div>
        </div>
    </nav>