<!-- CSS -->
      <link href="../css/main.css" rel="stylesheet" type="text/css"/>
<body>
<!--navigation-->
    <header>
      <nav>
        <ul>
          <li><a href="index.html">Gallery</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="commission.html">Commission</a></li>
          <li><a href="shop.html">Shop</a></li>
        </ul>
      </nav>
    </header>
  <main>
  <!--top banner-->
      <section class="top-section">
          <img src="../images/logo-white.png" alt="Baloney" title="Baloney">
      </section>
			<div class="default">
				<h1>Missing fields</h1>
				<p>Sorry, you have not completed all of the required fields.</p>
				<p>Please go back and complete the following required fields.</p>

				<ul>
				<?php
					for($i=0; $i<count($this->missing_required_fields); $i++){
						echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
					}
				?>
				</ul>

				<p><strong><a href="../commission.html" onClick="history.go(-1)">Back to form</a></strong></p>
			</div>
<!--footer-->
  <footer>
    <div class="socialmedia">
      <div class="icon">
        <a href="https://instagram.com/baloney_draws" target="_blank"><img src="../images/insta .png" alt="Instagram"></a>
      </div>
      <div class="icon">
      <a href="https://www.redbubble.com/people/baloneydraws/shop" target="_blank"><img src="../images/rb .png" alt="RedBubble"></a>
      </div>
      <div class="icon">
        <a href="https://youtube.com/channel/UC0iPP2fiOJ7101Lj0SQxcJA" target="_blank"> <img src="../images/Yt .png" alt="youtube"></a>
      </div>
    </div>
  </footer>
</body>
