<?php get_header(); ?>

<style>
  .single-title {
    color: #F35525;
  }

  .back-btn {
    background-color: #000;
    color: #fff;
    padding: 8px 16px;
    display: inline-block;
    text-decoration: none;
    margin-top: 20px;
    transition: all 0.3s ease;
  }

  .back-btn:hover {
    background-color: #F35525;
    color: #fff;
  }

  .custom-thumb {
    max-width: 600px;
    height: auto;
    display: block;
    margin: 0 auto 20px;
  }

  .comment-item {
    margin-bottom: 20px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
  }

  .comment-item strong {
    color: #F35525;
  }

  .comment-form input,
  .comment-form textarea {
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .comment-form input[type="submit"] {
    background-color: #000;
    color: #fff;
    border: none;
    padding: 10px 20px;
    transition: 0.3s;
  }

  .comment-form input[type="submit"]:hover {
    background-color: #F35525;
  }
</style>

<!-- Breadcrumb -->
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <span class="breadcrumb">
          <a href="<?php echo home_url(); ?>">Home</a> / <?php echo get_the_title(); ?>
        </span>
        <h3><?php echo get_the_title(); ?></h3>
      </div>
    </div>
  </div>
</div>

<!-- Single Property Layout -->
<div class="single-property section py-5">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
          <div class="col-lg-8">

            <!-- Main Image -->
            <div class="main-image mb-4">
              <?php 
                if (has_post_thumbnail()) {
                  the_post_thumbnail('large', ['class' => 'img-fluid w-100']);
                } else {
                  echo '<img src="' . get_template_directory_uri() . '/assets/images/default.jpg" class="img-fluid" alt="No image">';
                }
              ?>
            </div>

            <!-- Main Content -->
            <div class="main-content">
              <?php
                $categories = get_the_category();
                $cat_name = !empty($categories) ? $categories[0]->name : 'Property';
              ?>
              <span class="category"><?php echo esc_html($cat_name); ?></span>
              <h4><?php the_title(); ?></h4>
              <p><?php the_content(); ?></p>
            </div>

            <!-- Accordion Section -->
            <div class="accordion mt-4" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What makes this property special?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    This property offers modern living with spacious interiors and a strategic location close to key facilities like schools, markets, and hospitals. Ideal for peaceful living.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What facilities are included?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    24/7 security, power backup, high-speed internet, reserved parking, and access to fitness areas and swimming pool.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Why choose us?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    We ensure hassle-free buying/selling process with full transparency and expert guidance from start to finish.
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Right Side Column (optional) -->
          <div class="col-lg-4">
            <h4>Extra Info</h4>
            <p>If you are interested in this property, feel free to reach out. Our team is available to schedule a visit or provide more information tailored to your needs.</p>

            <div class="icon-button mt-3">
              <a href="#contact"><i class="fa fa-calendar"></i> Schedule a visit</a>
            </div>
          </div>
        </div>
         <div class="mt-5">
          <h4>Leave a Comment</h4>
          <?php comment_form(); ?>
        </div>

        <!-- Approved Comments List -->
        <div class="mt-5">
          <h4>Comments</h4>
          <?php
          $comments = get_comments(array(
              'post_id' => get_the_ID(),
              'status' => 'approve'
          ));

          if ($comments) :
              foreach ($comments as $comment) :
          ?>
                <div class="comment-item">
                  <strong><?php echo esc_html($comment->comment_author); ?></strong>
                  <p class="text-muted small"><?php echo get_comment_date('', $comment); ?> at <?php echo get_comment_time('', $comment); ?></p>
                  <p><?php echo esc_html($comment->comment_content); ?></p>
                </div>
          <?php
              endforeach;
          else :
              echo '<p>No comments yet.</p>';
          endif;
          ?>
        </div>
    <?php endwhile; endif; ?>
  </div>
</div>


<?php get_footer(); ?>
