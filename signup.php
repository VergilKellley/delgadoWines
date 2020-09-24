<?php
    require "includes/header.inc.php";
?>
    <section class="signup-container">
      <div class="overlay"></div>
      <div id="signup-hero-image"></div>
      <section class="signup-form-container">
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
      </section>
    </section>


    <div class="signup-section-wrapper">
        
    </div>

<?php
    require "includes/footer.inc.php";
?>