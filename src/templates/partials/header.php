<ul class="divheaderone">
    
        <li class="divheadertwo"><a href="/?page=home" >Home</a></li>
        <li class="divheadertwo titlenumerie">Numérie</li>
        <li class="divheadertwo"><a href="/?page=signup">SignUp</a></li>
        <li class="divheadertwo"><a href="/?page=login">Login</a></li>
        <li><a href="/?page=profile">Profil</a></li>
    

        
        <li><a href="/?page=account_verification">Vérifier compte</a></li>
        <li><a href="/?page=operation_verification">Vérifier opérations</a></li>
        <li><a href="/?page=operations">Opérations</a></li>        
        <li><a href="/actions/logout.php">Logout</a></li>

    
        <li><ul class="divheadertwo">Menu</a>
            <li><p>Procédures</p></li>
            <li><p>Administratif</p></li>
            <li><p>Soins</p></li>
            <li><p>Études</p></li>
            <li><p>Aides</p></li>
            <li><p>Infos</p></li>
            <li><p>Description</p></li>
            <li><p>Settings</p></li>
        </ul></li>
       
</ul>

<!--<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

            <?php if ($user === false) { ?>

                <li><a href="/?page=home" class="nav-link px-2 link-secondary">Home</a></li>

            <?php } else if ($user->role >= 200) { ?>

                <li><a href="/?page=profile" class="nav-link px-2 link-dark">Profil</a></li>
                <li><a href="/?page=account_verification" class="nav-link px-2 link-dark">Vérifier compte</a></li>
                <li><a href="/?page=operation_verification" class="nav-link px-2 link-dark">Vérifier opération</a></li>
                <li><a href="/?page=operations" class="nav-link px-2 link-dark">Opérations</a></li>
                <li><a href="/actions/logout.php" class="nav-link px-2 link-dark">Logout</a></li>

            <?php } else if ($user->role > 1){ ?>

                <li><a href="/?page=profile" class="nav-link px-2 link-dark">Profil</a></li>
                <li><a href="/?page=operations" class="nav-link px-2 link-dark">Opérations</a></li>
                <li><a href="/actions/logout.php" class="nav-link px-2 link-dark">Logout</a></li>

            <?php } else if ($user->role > 0){ ?>

                <li><a href="/?page=profile" class="nav-link px-2 link-dark">Profil</a></li>
                <li><a href="/actions/logout.php" class="nav-link px-2 link-dark">Logout</a></li>

            <?php } else { ?>

                <li><a href="/actions/logout.php" class="nav-link px-2 link-dark">Logout</a></li>

            <?php    } ?>

      </ul>

    <?php if ($user === false) { ?>

        <div class="col-md-3 text-end">
            <a href="/?page=login"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
            <a href="/?page=signup"><button type="button" class="btn btn-primary">Sign-up</button></a>
        </div>
    <?php    } ?>


    </header>-->
  
</header>