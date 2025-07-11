<?php get_header(); ?>

<style>
  .blog-title a {
    color: #F35525;
    text-decoration: none;
  }

  .blog-title a:hover {
    text-decoration: underline;
  }

  .read-more-btn {
    background-color: #000;
    color: #fff;
    border: none;
    padding: 8px 16px;
    display: inline-block;
    transition: all 0.3s ease;
    border-radius: 20px;
  }

  .read-more-btn:hover {
    background-color: #F35525;
    color: #fff;
  }

  .comment-count {
    font-size: 14px;
    color: #888;
    margin-top: 10px;
  }
</style>

<div class="container py-5">
  <h1 class="mb-4">
    Posts in Category: <?php single_cat_title(); ?>
  </h1>

  <div class="row">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
              </a>
            <?php endif; ?>

            <div class="card-body">
              <h5 class="card-title blog-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <p class="comment-count">
                💬 
                <?php
                $comments_number = get_comments_number();
                if ($comments_number == 0) {
                  echo 'No Comments';
                } elseif ($comments_number == 1) {
                  echo '1 Comment';
                } else {
                  echo $comments_number . ' Comments';
                }
                ?>
              </p>
            </div>

            <div class="card-footer bg-transparent border-0">
              <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <div class="col-12">
        <p>No posts found in this category.</p>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
