<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link <?php if($title ==='Home'): ?>active<?php endif; ?>" href="index.php">Home</a>
      <a class="nav-item nav-link <?php if($title ==='About'): ?>active<?php endif; ?>" href="about.php">About</a>
      <a class="nav-item nav-link <?php if($title ==='Coffee'): ?>active<?php endif; ?>" href="coffee.php">Coffee</a>
      <a class="nav-item nav-link <?php if($title ==='Variation'): ?>active<?php endif; ?>" href="variations.php">Variations</a>
      <a class="nav-item nav-link <?php if($title ==='Contact'): ?>active<?php endif; ?>" href="contact.php">Contact</a>
    </div>
  </div>
</nav>
