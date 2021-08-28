<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
   $(function() {
      $('a').each(function() {
         if ($(this).prop('href') == window.location.href) {
            $(this).addClass('active');
            $(this).parents('li').addClass('active');
         }
      });
   });
</script>

<!-- (nav) -->
<div class="header">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-5 col-md-9 col-sm-9">
            <nav class="navigation navbar navbar-expand-md navbar-dark ">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarsExample04">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="<?= self::ROOT ?>/home">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= self::ROOT ?>/home/specialists">Specialists</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= self::ROOT ?>/catalog">Menu</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?= self::ROOT ?>/home/feedback">Feedbacks</a>
                     </li>
                        <li class="nav-item">
                           <a class="nav-link" href="<?= self::ROOT ?>/home/contact">Contact</a>
                        </li>
                     <?php if ($this->currentUser === 'admin123') { ?>
                        <li>
                           <a class="nav-link" href="<?= self::ROOT ?>/admin">Admin-panel</a>
                        </li>
                     <?php  } ?>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
            <div class="full">
               <div class="center-desk">
                  <div class="logo">
                     <a href="<?= self::ROOT ?>/home"><img src="<?= self::RES ?>/images/logo.png" alt="#" /></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5">
            <ul class="email">
               <?php if ($this->currentUser === 'Guest') { ?>
                  <li><a href="<?= self::ROOT ?>/auth/reg">Register</a></li>
                  <li><a href="<?= self::ROOT ?>/auth/entry">Login</a></li>
               <?php } else { ?>
                  <li><a href="<?= self::ROOT ?>/auth/profile">Hi,
                     <span style="color: maroon">
                        <?= $this->currentUser ?>
                     </span></a></li>
                  <li><a href="<?= self::ROOT ?>/auth/exit">Exit</a></li>
               <?php } ?>
            </ul>
         </div>
      </div>
   </div>
</div>