<?php
    require "includes/header.inc.php";
?>
    <section class="signup-container">
      <div class="overlay"></div>
      <div id="signup-hero-image"></div>
      <div class="signup-form-container">
           <h2 class="h2-titles">Wine Club</h2>
           <h2 class="signup-text">Sign Up</h2>
           <p class="signup-p-text">Get exclusive <span>member's only discounts</span> by singing up!</p>
        <div class="form-text">
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username" required>
            <input type="text" name="mail" placeholder="E-mail" required>
            <input type="password" name="pwd" placeholder="Password" required>
            <input type="password" name="pwd-repeat" placeholder="Repeat Password" required>
            <button type="submit" name="signup-submit">Sign Up</button>
        </form> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni eum veniam reiciendis deserunt pariatur consequuntur sit obcaecati rerum quae quaerat temporibus in possimus iure, adipisci, nobis a! Tempora, consequuntur id.</p>
        </div>
        </div>
    </section>
    <section class="second-signup-container">
        <div class="shipments-container">
            <div class="shipments-box">
                <ul>
                    <li>4 shipments per Year</li>
                    <li>3, 6, or 12 bottles per shipment</li>
                    <li>Complimentary Tastings</li>
                    <li>VIP Event Access</li>
                    <li>Free Tours</li>
                </ul>
                <button class="buttons">View Pricing</button>
            </div>
            <div class="shipments-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad consequatur laudantium neque quos eaque corporis iure maxime accusamus dolorum repellat? Repellendus velit maxime repudiandae doloremque laboriosam labore quam debitis explicabo quae adipisci nam ex cupiditate rerum, exercitationem, incidunt voluptatum inventore non deleniti quis. Deleniti ratione tenetur odio laudantium. Eligendi, qui.</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad consequatur laudantium neque quos eaque corporis iure maxime accusamus dolorum repellat? Repellendus velit maxime repudiandae doloremque laboriosam labore quam debitis explicabo quae adipisci nam ex cupiditate rerum, exercitationem, incidunt voluptatum inventore non deleniti quis. Deleniti ratione tenetur odio laudantium. Eligendi, qui.</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad consequatur laudantium neque quos eaque corporis iure maxime accusamus dolorum repellat? Repellendus velit.</p>
            <div>
        </div>
    </section>
    <section class="third-container">
        <div class="third-container-discounts">
            <div class="discounts-bg-image"></div>
            <div class="discounts-text-container">
                <div class="discounts-text">
                    <h2>Discounts</h2>
                    <p>4 bottle wine club - 20% Off</p>
                    <p>6 bottle wine club - 25% Off</p>
                    <p>12 bottle wine club - 30% Off</p>
                    <button class="buttons" type="submit">Join Today</button>
                </div>
            </div>
        </div>
    </section>
    <section class="fourth-container-signup-page">
        <div class="bottle-club-container">
            <div class="bottle-club">
                <h2>4 Bottle Club</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam soluta necessitatibus amet ducimus magnam natus, accusamus excepturi possimus quod eveniet!</p>
                <button class="buttons" type="submit">Join Now</button>
                <p>4 Bottles 4 Times a Year</p>
                <p>$240 per Shipment</p>
            </div>
            <div class="bottle-club">
                <h2>8 Bottle Club</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam soluta necessitatibus amet ducimus magnam natus, accusamus excepturi possimus quod eveniet!</p>
                <button class="buttons" type="submit">Join Now</button>
                <p>8 Bottles 4 Times a Year</p>
                <p>$400 per Shipment</p>
            </div>
            <div class="bottle-club">
                <h2>12 Bottle Club</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam soluta necessitatibus amet ducimus magnam natus, accusamus excepturi possimus quod eveniet!</p>
                <button class="buttons" type="submit">Join Now</button>
                <p>12 Bottles 4 Times a Year</p>
                <p>$650 per Shipment</p>
            </div>
        </div>
    </section>
    <section class="fifth-container-signup-page">
        <img src="images/wine20.jpg" alt='wine bottle and wine glass' />
    </section>
      
<?php
    require "includes/footer.inc.php";
?>