  <footer>

    <div class="container">
      <div class="row">
      </div>
      <div class="row">
        <div class="col xl4 l4 m4 s6 center-align">
          <a onmouseover="changeLogo('/media/imgs/components/githublogo-black.png','github')" onmouseout="changeLogo('/media/imgs/components/githublogo.png','github')" class="button-b" target="_blank" href="https://github.com/LPauzies"><img id="github" class="logo-footer" src="/media/imgs/components/githublogo.png"> Github</a>
        </div>
        <div class="col xl4 l4 m4 s6 center-align">
          <a onmouseover="changeLogo('/media/imgs/components/logolinkedin-black.png','linkedin')" onmouseout="changeLogo('/media/imgs/components/logolinkedin.png','linkedin')" class="button-b" target="_blank" href="https://www.linkedin.com/in/lucas-pauzies/"><img id="linkedin" class="logo-footer" src="/media/imgs/components/logolinkedin.png"> Linkedin</a>
        </div>
        <div class="col xl4 l4 m4 s12 center-align">
          <a class="button-b modal-trigger" href="#modalForm"><h7><?php echo $top['contact']; ?></h7></a>
        </div>
      </div>
    </div>
    <div class="footer-copyright container center-align">
      <div class="row">
        <?php echo $footer['done']; ?>
      </div>
    </div>

  </footer>

  <!-- Import Javascript framework & JS from scratch -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="../static/js/particles.js"></script>
  <script type="text/javascript" src="../static/js/particles_setup.js"></script>
  <script type="text/javascript" src="../static/js/typewriter_<?php echo $lang; ?>.js"></script>
  <script type="text/javascript" src="../static/js/static.js"></script>
</html>
