<?php
  require 'includes/header.inc.php';
?>
<section class="first-contact-page-container">
    <div class="contact-us-text-container">
      <h2>Contact Now</h2>
    </div>
    <div class="text-contact-info-container">   
        <div class="contact">
          <p>Phone</p>
          <p class="contact-text">(123) 555-5555</p>
        </div>
        <div class="contact">
          <p>Email</p>
          <p class="contact-text"><a href="mailto:	delgado@gmail.com">	info@delgadowinery.com</a></p>
        </div>
        <div class="contact">
          <p >Address</p>
          <p class="contact-text"><a href="https://www.google.com/maps/place/3713+Greenmount+Ave,+Baltimore,+MD+21218/@39.3343194,-76.6114889,17z/data=!3m1!4b1!4m5!3m4!1s0x89c8051b7450baf7:0x6d4439245f657973!8m2!3d39.3343194!4d-76.6093002" target="_blank" rel="noopener noreferrer" style="color: #333;">5555 Some Street
          Balitmore, <br />MD 21218</a></p>
       </div>
    </div>
</section>
<section class="second-contact-page-container">
  <div class="contact-page-image-container">
    <img src="images/winery22.jpg" alt="wine grapes" />
  </div>
</section>
<section class="third-contact-page-container">
  <div class="contact-page-box-form-container">
    <div class="contact-page-box">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In rem sed provident perferendis temporibus aspernatur dolore quibusdam, lorem ipsum dolor sit amet minima doloremque itaque!</p>
      <button class="buttons">Get Directions</button>
    </div>
    <div class="contact-page-form-container">
      <form class="contact-page-form" action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Name" required>
        <input type="text" name="mail" placeholder="E-mail" required>
        <br />
        <textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Message"></textarea>
      </form>
    </div>
  </div>
</section>

<?php
  require 'includes/footer.inc.php';
?>