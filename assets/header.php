<a href="index.php"> <img src="images/succes.gif" width="1250px" height="250px" alt="succesfilms.nl" class="center-block noshade img-fluid"  style="width: 100%"> </a>
 <nav class="navbar navbar-toggleable-md navbar-dark  bg-dark background navbar-expand-lg">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav text-center">
            <li class="nav-item <?php if($_SERVER['PHP_SELF'] == '/index.php') { echo ' active'; } ?>">
			
                <a class="nav-link" href="index.php"><strong>
    Home
  </strong> <span class="sr-only">(current)</span></a>
            </li>
    <li onclick="toggleSubMenu()" class="nav-item <?php if($_SERVER['PHP_SELF'] == '/bestefilms.php') { echo ' active'; } ?>">
                <a class="nav-link" href="top10.php"><strong>  Beste films  </strong> <span class="sr-only">(current)</span></a>
            </li>
   <div class="btn-group">
    <li class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-item" <?php if($_SERVER['PHP_SELF'] == '/genres.php') { echo ' active'; } ?>">
                <a class="nav-link" href="/"><strong>  Genres  </strong> <span class="sr-only">(current)</span></a>
            </li>
   <div class="dropdown-menu">
    <a class="dropdown-item scroll" data-target="#actie">Actie</a>
    <a class="dropdown-item scroll" data-target="#comedy">comedy</a>
    <a class="dropdown-item scroll" data-target="#avontuur">Avontuur</a>
    <a class="dropdown-item scroll" data-target="#drama">Drama</a>
    <a class="dropdown-item scroll" data-target="#horror">Horror</a>
  </div>
  </div>
            <li class="nav-item <?php if($_SERVER['PHP_SELF'] == '/overons.php') { echo ' active'; } ?>">
                <a class="nav-link" href="overons.php"><strong>  Over ons  </strong></a>
            </li>
            <li class="nav-item <?php if($_SERVER['PHP_SELF'] == '/contact.php') { echo ' active'; } ?>">
                <a class="nav-link" href="contact.php"><strong>  Contact  </strong></a>
            </li>
        </ul>
    </div>
</nav>