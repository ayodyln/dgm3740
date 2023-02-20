<?php
$clientLocation = 'home';
$title = "Cabot Cruises";
include('_top.php')
  ?>

<section id="main__wrapper">
  <div class="Slider">
    <picture>
      <source media="(max-width: 350px)" srcset="./content/images/slider1-square.jpg" />
      <source media="(max-width: 390px)" srcset="./content/images/slider1-390px.jpg" />
      <source media="(max-width: 560px)" srcset="./content/images/slider1-560px.jpg" />
      <source media="(max-width: 1028px)" srcset="./content/images/slider1-1028px.jpg" />
      <img src="./content/images/slider1.jpg" alt="Cruise Image One" />
    </picture>

    <picture>
      <source media="(max-width: 350px)" srcset="./content/images/slider2-square.jpg" />
      <source media="(max-width: 390px)" srcset="./content/images/slider2-390px.jpg" />
      <source media="(max-width: 560px)" srcset="./content/images/slider2-560px.jpg" />
      <source media="(max-width: 1028px)" srcset="./content/images/slider2-1028px.jpg" />
      <img src="./content/images/slider2.jpg" alt="Cruise Image One" />
    </picture>

    <picture>
      <source media="(max-width: 350px)" srcset="./content/images/slider3-square.jpg" />
      <source media="(max-width: 390px)" srcset="./content/images/slider3-390px.jpg" />
      <source media="(max-width: 560px)" srcset="./content/images/slider3-560px.jpg" />
      <source media="(max-width: 1028px)" srcset="./content/images/slider3-1028px.jpg" />
      <img src="./content/images/slider3.jpg" alt="Cruise Image One" />
    </picture>

    <picture>
      <source media="(max-width: 350px)" srcset="./content/images/slider4-square.jpg" />
      <source media="(max-width: 390px)" srcset="./content/images/slider4-390px.jpg" />
      <source media="(max-width: 560px)" srcset="./content/images/slider4-560px.jpg" />
      <source media="(max-width: 1028px)" srcset="./content/images/slider4-1028px.jpg" />
      <img src="./content/images/slider4.jpg" alt="Cruise Image One" />
    </picture>
  </div>

  <section id="BlogArticles">
    <h2>Recent Blog Articles</h2>

    <div>
      <a href="#" class="blogCTA">
        <span>Caribbean Cruises</span>
        <img src="./content/articles/blog_1-square.jpg" alt="Article 1" />
        <span>Jan 1, 2023</span>
      </a>
      <a href="#" class="blogCTA">
        <span>Solo Getaways</span>
        <img src="./content/articles/blog_2-square.jpg" alt="Article 2" />
        <span>Jan 22, 2023</span>
      </a>
      <a href="#" class="blogCTA">
        <span>Popular Cruises</span>
        <img src="./content/articles/blog_3-article.jpg" alt="Article 3" />
        <span>Feb 1, 2023</span>
      </a>
      <a href="#" class="blogCTA">
        <span>Dinner Options</span>
        <img src="./content/articles/blog_4-article.jpg" alt="Article 4" />
        <span>Feb 4, 2023</span>
      </a>
    </div>
  </section>
</section>

<?php include('_bot.php') ?>