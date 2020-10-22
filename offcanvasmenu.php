<div id="menuToggle">
            <!--Now this is where things get interesting.The checkbox below is masked behind the Hamburger Icon on the  screen, 
			such that when the user clicks in it's general vicinity, the "chekced" psuedoclasses produce the off canvas menu-->
              <input type="checkbox"/>
              <!--Each span element corresponds to one of the three lines comprising the Hamburger Icon -->
               <span></span>
                <span></span>
                <span></span>
             <!--This is the off-canvas menu that appears when the Hamburger Icon is clicked-->    
            <ul id="menu" class="">
              <li><a href="/Template/index.php">Home</a></li>
              <li><a href="/Template/about.php">About Us</a></li>
              <li class="debug"><a class="debug" href="/Template/projects-gallery.php">See Our Work</a></li>
              <li><a href="/Template/contact.php">Contact</a></li>
			  <li><a href="/Template/pricing.php">Pricing</a></li>
			 <!-- <li><a href="/Template/request-quote.php">Free Quote</a></li>-->
            </ul>
</div>