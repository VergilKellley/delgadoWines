<?php
  require 'includes/header.inc.php';
?>
<section class="first-shopping-page-container">
  <div class="shop-online-text">
    <h2>Shop</h2><h2>Online</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique quam eum ipsam voluptates libero sunt voluptas, obcaecati iusto voluptatum, quis ea molestias tenetur nobis accusamus. Error ipsum corrupti aut? Laborum.</p>
  </div>
  <div class="shop-online-box">
    <h3>Join Our<br> Wine Club</h3>
    <button class='wine-club-btn-2' type='submit'>Learn More</button>
  </div>
  <div id="join-bg-image"></div>
</section>
<section class="second-shopping-page-container">
  <div class="year-buttons-container">
    <button class="year-buttons" type='submit'>2012</button>
    <button class="year-buttons" type='submit'>2013</button>
    <button class="year-buttons" type='submit'>2014</button>
    <button class="year-buttons" type='submit'>2015</button>
    <button class="year-buttons" type='submit'>2016</button>
    <button class="year-buttons" type='submit'>2017</button>
  </div>
  <div class="vintage-text-container">
    <h2>2020 Vintage</h2>
  </div>
  <div id="twenty-twenty-container-shop-page">
      <h2 id="twenty-twenty-text-shop-page">2020</h2>
      <img src="images/wine12.png" alt="bottle of wine"/>
    </div>
</section>

<?php
  require 'includes/footer.inc.php';
?>

<?php

$fruit_counts=array('apple'=>3, 'banana'=>4, 'orange'=>0);
$fruit_colors=array('apple'=>'red', 'banana'=>'yellow', 'orange'=>'orange', 'plum'=>'purple');

$fruit_counts['apple'] = 4;
print_r($fruit_counts)

?>

<?php

  $x = 1;

  switch ($x) {
    case 1:
      echo "The answer is 1";
    break;
  }

?>