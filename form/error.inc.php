<style type="text/css">
  * {
    border: 0;
    padding: 0;
    margin: 0;
    position: sticky;
  }

  header{
    background: #333;
    position: fixed;
    left: 0;
    right: 0;
    padding: 10px 0;
    z-index: 99;
  }

  header nav ul li{
    display: inline;
  }

  header nav a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    font-size: 20px;
    margin: 0 20px;
    transition: .3s;
    font-family: monospace;
  }

  a:hover {
    color: rgb(176,125,177);
    transition: .3s;

  }
  .default h1{
    font-family: monospace;
    font-size: 25px;
    margin: 50px 20px 20px;
}
  }

  .default p{
    font-family: Montserrat;
    font-size: 15px;
  }

  .default{
    text-align: center;
    margin: 0px;
    padding: 47px;
  }

  footer {
    background: #333;
    margin: 0px;
    padding: 30px;
  }
</style>
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
			</div>
<!--footer-->
  <footer>
  </footer>
</body>
