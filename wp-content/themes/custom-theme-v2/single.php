<?php get_header(); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<style>
.DefaultSingle p {
    line-height: 1.67;
    opacity: 0.66;
    padding: 10px 0;
}
.DefaultSingle li {
    line-height: 1.67;
    opacity: 0.66;
    padding: 5px 0;
}
.DefaultSingle h1,
.DefaultSingle h2,
.DefaultSingle h3,
.DefaultSingle h4,
.DefaultSingle h5,
.DefaultSingle h6 {
    margin-top: 20px;
}
.DefaultSingle ul,
.DefaultSingle ol {
    list-style: disc;
    margin: 20px 0 0 20px;
}
.DefaultSingle img {
    width: 90%;
    display: block;
    margin: 20px 5%;
    border-radius: 3px;
}
form#commentform textarea,
form#commentform input {
    width: 50%;
    display: block;
    border: 1px solid #80808070;
    padding: 10px;
    border-radius: 5px;
}
form#commentform label {
    font-size: 20px;
    font-weight: 600;
    text-transform: uppercase;
}
form#commentform input#submit {
    background: black;
    color: white;
    text-transform: uppercase;
}
form#commentform p.comment-form-cookies-consent label {
    font-size: 15px !important;
    text-transform: none !important;
}
form#commentform p.comment-form-cookies-consent input {
    width: fit-content !important;
    margin-right: 10px;
}
form#commentform p.comment-form-cookies-consent {
    display: flex;
}
div#comments img {
    width: 50px;
    height: 50px;
    margin: 10px 0;
}
div#comments footer.comment-meta {
    all: unset;
}
div#comments > ul {all: unset;list-style: none;}
div#comments li article {
    position: relative;
}
div#comments .comment-metadata {
    position: absolute;
    top: 30px;
    left: 60px;
}
div#comments > ul > li {
    border-bottom: 2px solid #80808038;
    padding-top: 25px;
    padding-bottom: 10px;
}
div#comments h3#reply-title a {
    margin-left: 10px;
}
div#comments ul ul.children {
    list-style: none;
    margin-left: 60px !important;
}
div#comments ul.children li {
    opacity: 1;
}
section.DefaultSingle article > a,
section.DefaultSingle article > a > img{
    width: 80% !important;
    display: block;
    margin: 0 auto 35px;
}
section.DefaultSingle {
    padding: 50px 0;
}
</style>
<main role="main" aria-label="Content">
  <section class="DefaultSingle">
    <div class="container">  
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( has_post_thumbnail() ): ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        <?php endif; ?>
        <h1>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h1>
        <span class="date">
          <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
            <?php the_date(); ?> <?php the_time(); ?>
          </time>
        </span>
        <span class="author"><?php esc_html_e('Post by', 'wp-blank' ); ?> <?php the_author(); ?></span>
        <span class="comments"><?php if (comments_open(get_the_ID())) comments_popup_link(__('Leave your thoughts', 'wp-blank'), __('1 Comment', 'wp-blank'), __('% Comments', 'wp-blank')); ?></span>
        <?php the_content(); ?>
        <?php comments_template(); ?>
      </article>
    <?php endwhile; ?>
    <?php else : ?>
      <article>
        <h1><?php esc_html_e( 'Sorry, nothing to display.', 'wp-blank' ); ?></h1>
      </article>
    <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
