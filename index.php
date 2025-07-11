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

  .sidebar {
    background-color: #f9f9f9;
    padding: 20px;
    border-left: 1px solid #eee;
  }

  .sidebar h2,
  .sidebar h3 {
    font-size: 18px;
    color: #333;
    border-bottom: 1px solid #ddd;
    padding-bottom: 5px;
    margin-bottom: 15px;
  }

  .sidebar ul {
    padding-left: 20px;
  }

  .sidebar ul li {
    margin-bottom: 10px;
  }

  .widget {
    margin-bottom: 30px;
  }
  /* Search bar styling */
.search-form .input-group {
  max-width: 500px;
  margin-bottom: 20px;
}

.search-form input[type="text"] {
  border-radius: 30px 0 0 30px;
  border: 1px solid #ccc;
  padding: 10px 20px;
}

.search-form button {
  border-radius: 0 30px 30px 0;
  background-color: #F35525;
  color: #fff;
  border: none;
  padding: 10px 20px;
  transition: background-color 0.3s ease;
}

.search-form button:hover {
  background-color: #000;
}

/* Pagination styling */
/* Pagination outer container */
.pagination {
  display: flex;
  justify-content: center;
  padding-top: 30px;
}

/* Pagination list (ul) */
.page-numbers {
  display: flex;
  gap: 10px;
  padding-left: 0;
  list-style: none;
}

/* Individual pagination items (li) */
.page-numbers li {
  display: inline-block;
}

/* Links and spans inside pagination */
.page-numbers a,
.page-numbers span {
  display: inline-block;
  padding: 8px 16px;
  border-radius: 20px;
  background-color: #f1f1f1;
  color: #333;
  text-decoration: none;
  transition: all 0.3s ease;
}

/* Hover effect on page links */
.page-numbers a:hover {
  background-color: #F35525;
  color: #fff;
}

/* Current page */
.page-numbers .current {
  background-color: #F35525;
  color: #fff;
  font-weight: bold;
}


</style>
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="breadcrumb">
          <a href="<?php echo home_url(); ?>">Home</a> / <?php echo get_the_title(get_option('page_for_posts')); ?>
        </span>
        <h3><?php echo get_the_title(get_option('page_for_posts')); ?></h3>
      </div>
    </div>
  </div>
</div>

<div class="container py-5">
  <h1 class="mb-4">
    <?php
    if (is_search()) {
      echo 'Search Results for: "' . get_search_query() . '"';
    } else {
      echo get_the_title(get_option('page_for_posts'));
    }
    ?>
  </h1>

  <!-- Search Form -->
  <form method="get" action="<?php echo home_url(); ?>" class="search-form mb-4">
    <div class="input-group">
      <input type="text" name="s" class="form-control" placeholder="Search blog..." value="<?php echo get_search_query(); ?>">
      <button type="submit">Search</button>
    </div>
  </form>

  <div class="row">
    <!-- Main Blog Posts -->
    <div class="col-md-8">
      <div class="row">
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <div class="col-md-6 mb-4">
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
                    echo $comments_number == 0 ? 'No Comments' : ($comments_number == 1 ? '1 Comment' : $comments_number . ' Comments');
                    ?>
                  </p>
                </div>

                <div class="card-footer bg-transparent border-0">
                  <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More</a>
                </div>
              </div>
            </div>
        <?php
          endwhile;
        else :
          echo '<p>No posts found.</p>';
        endif;
        ?>

        <!-- Pagination -->
        <div class="col-12">
          <div class="pagination">
            <?php
            echo paginate_links(array(
              'total' => $wp_query->max_num_pages,
              'current' => max(1, get_query_var('paged')),
              'prev_text' => __('« Prev'),
              'next_text' => __('Next »'),
              'type' => 'list'
            ));
            ?>
          </div>
        </div>

      </div>
    </div>

    <!-- Sidebar -->
    <div class="col-md-4">
      <div class="sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>

