<?php get_header(); ?>

<style>
  .error-container {
    text-align: center;
    padding: 100px 20px;
  }

  .error-code {
    font-size: 120px;
    font-weight: bold;
    color: #F35525;
  }

  .error-message {
    font-size: 24px;
    margin-top: 20px;
    color: #333;
  }

  .search-box {
    margin-top: 30px;
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
  }

  .home-btn {
    background-color: #000;
    color: #fff;
    padding: 10px 25px;
    display: inline-block;
    margin-top: 30px;
    border-radius: 20px;
    text-decoration: none;
    transition: 0.3s;
  }

  .home-btn:hover {
    background-color: #F35525;
    color: #fff;
  }
</style>

<div class="container error-container">
  <div class="error-code">404</div>
  <div class="error-message">Oops! Page not found.</div>
  <p>The page you are looking for doesn’t exist or has been moved.</p>

  <div class="search-box">
    <?php get_search_form(); ?>
  </div>

  <a href="<?php echo home_url(); ?>" class="home-btn">← Back to Homepage</a>
</div>

<?php get_footer(); ?>
