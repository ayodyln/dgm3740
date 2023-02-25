<?php
$clientLocation = 'home';
$title = "Cabot Cruises";
include('_top.php')
  ?>

<section id="main__wrapper">
  <div class="Slider">
    <picture>
      <source media="(max-width: 350px)" srcset="/cabotcruise-content/images/slider1-square.jpg" />
      <source media="(max-width: 390px)" srcset="/cabotcruise-content/images/slider1-390px.jpg" />
      <source media="(max-width: 560px)" srcset="/cabotcruise-content/images/slider1-560px.jpg" />
      <source media="(max-width: 1028px)" srcset="/cabotcruise-content/images/slider1-1028px.jpg" />
      <img src="/cabotcruise-content/images/slider1.jpg" alt="Cruise Image One" />
    </picture>

    <picture>
      <source media="(max-width: 350px)" srcset="/cabotcruise-content/images/slider2-square.jpg" />
      <source media="(max-width: 390px)" srcset="/cabotcruise-content/images/slider2-390px.jpg" />
      <source media="(max-width: 560px)" srcset="/cabotcruise-content/images/slider2-560px.jpg" />
      <source media="(max-width: 1028px)" srcset="/cabotcruise-content/images/slider2-1028px.jpg" />
      <img src="/cabotcruise-content/images/slider2.jpg" alt="Cruise Image One" />
    </picture>

    <picture>
      <source media="(max-width: 350px)" srcset="/cabotcruise-content/images/slider3-square.jpg" />
      <source media="(max-width: 390px)" srcset="/cabotcruise-content/images/slider3-390px.jpg" />
      <source media="(max-width: 560px)" srcset="/cabotcruise-content/images/slider3-560px.jpg" />
      <source media="(max-width: 1028px)" srcset="/cabotcruise-content/images/slider3-1028px.jpg" />
      <img src="/cabotcruise-content/images/slider3.jpg" alt="Cruise Image One" />
    </picture>

    <picture>
      <source media="(max-width: 350px)" srcset="/cabotcruise-content/images/slider4-square.jpg" />
      <source media="(max-width: 390px)" srcset="/cabotcruise-content/images/slider4-390px.jpg" />
      <source media="(max-width: 560px)" srcset="/cabotcruise-content/images/slider4-560px.jpg" />
      <source media="(max-width: 1028px)" srcset="/cabotcruise-content/images/slider4-1028px.jpg" />
      <img src="/cabotcruise-content/images/slider4.jpg" alt="Cruise Image One" />
    </picture>
  </div>

  <section id="BlogArticles">
    <h2>Recent Blog Articles</h2>

    <div>
      <div class="blogCTA">
        <div class="blog_title">
          <p>Caribbean Cruises</p>
        </div>
        <div class="blogImg">
          <img src="/cabotcruise-content/articles/blog_1-square.jpg" alt="Article 1" />
        </div>
        <div class="blog_date">

          Jan 1, 2023

        </div>
      </div>
      <div class="blogCTA">
        <div class="blog_title">
          <p>
            Solo Getaways
          </p>
        </div>
        <div class="blogImg">
          <img src="/cabotcruise-content/articles/blog_2-square.jpg" alt="Article 2" />
        </div>
        <div class="blog_date">
          <p>
            Jan 22, 2023
          </p>
        </div>
      </div>
      <div class="blogCTA">
        <div class="blog_title">
          <p>Popular Cruises</p>
        </div>
        <div class="blogImg">
          <img src="/cabotcruise-content/articles/blog_3-article.jpg" alt="Article 3" />
        </div>
        <div class="blog_date">
          <p>Feb 1, 2023</p>
        </div>
      </div>
      <div class="blogCTA">
        <div class="blog_title">
          <p>Dinner Options</p>
        </div>
        <div class="blogImg">
          <img src="/cabotcruise-content/articles/blog_4-article.jpg" alt="Article 4" />
        </div>
        <div class="blog_date">
          <p>Feb 4, 2023</p>
        </div>
      </div>
    </div>
  </section>
</section>

<?php include('_bot.php') ?>