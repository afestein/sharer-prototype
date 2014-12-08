<div id="footer" class="container">
  <div class="container">
    <ul class="list-inline" style="float:left;">
      <li>Cras justo odio</li>
      <li>Dapibus ac</li>
      <li>Facilisis in</li>
      <li>Morbi leo risus</li>
    </ul>
    <ul class="list-inline" style="float:right;">
      <li>Morbi leo risus</li>
      <li>Porta ac consectetur ac</li>
      <li>Vestibulum at eros</li>
    </ul>
  </div>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<?php if ($_SERVER['REQUEST_URI'] == "/index.php" || $_SERVER['REQUEST_URI'] == "/"): ?>
  <script type="text/javascript" src="/assets/js/home.js"></script>
<?php else: ?>
  <script type="text/javascript" src="/assets/js/ui.js"></script>
<?php endif; ?>

</body>
</html>