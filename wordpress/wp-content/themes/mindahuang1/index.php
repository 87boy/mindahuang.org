<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage MinDaHuang1
 * @since MinDaHuang1 1.0
 */

get_header(); ?>

<?php
// if (have_posts()) :
//    while (have_posts()) :
//       the_post();
//       the_content();
//    endwhile;
// endif;
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php endwhile; ?>
<?php endif; ?>

<h2 id="post-<?php the_ID(); ?>">
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
  <?php the_title(); ?><!--文章标题-->
</a>
</h2>
<small>
  <?php the_time('F jS, Y') ?><!--日期-->
  by <?php the_author() ?><!--作者-->
</small>

<div class="entry">
<?php the_content('阅读全文 &raquo;'); ?>
</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
