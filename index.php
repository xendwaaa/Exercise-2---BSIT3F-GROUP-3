<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Group 3 Profile</title>
  <link rel="shortcut icon" type="x-con" href="images/logo.jpg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container swiper">
    <div class="slider-wrapper">
      <div class="card-list swiper-wrapper">
        <?php
          $members = [
            ["name" => "Xendra Catubigan", "profession" => "Assistant", "image" => "images/nex.jpg", "link" => "https://www.facebook.com/profile.php?id=100009397804282"],
            ["name" => "Joemel Bedeo", "profession" => "Leader", "image" => "images/mel.jpg", "link" => "https://www.facebook.com/Japrozx"],
            ["name" => "Son Mathew Reyes", "profession" => "Assistant", "image" => "images/mat.jpg", "link" => "https://www.facebook.com/mathew.reyes.9022"],
            ["name" => "John Mark Octavio", "profession" => "Assistant", "image" => "images/jm.jpg", "link" => "https://www.facebook.com/johnmark.octavio.50"],
            ["name" => "Andrian Bello", "profession" => "Sub.Leader", "image" => "images/adi.jpg", "link" => "https://www.facebook.com/adrianbello0112"]
          ];

          foreach ($members as $member) {
            echo '<div class="card-item swiper-slide">';
            echo '<img src="' . $member["image"] . '" alt="User Image" class="user-image">';
            echo '<h2 class="user-name">' . $member["name"] . '</h2>';
            echo '<p class="user-profession">' . $member["profession"] . '</p>';
            echo '<a href="' . $member["link"] . '" class="message-button">Message</a>';
            echo '</div>';
          }
        ?>
        <div class="card-item swiper-slide">
          <img src="images/logo.jpg" alt="User Image" class="user-image">
        </div>
      </div>

      <div class="swiper-pagination"></div>
      <div class="swiper-slide-button swiper-button-prev"></div>
      <div class="swiper-slide-button swiper-button-next"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
 