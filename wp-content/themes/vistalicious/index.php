<?php get_header(); ?>

<div id="contentwrapper"><div id="content">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div class="post">
<h2 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<div class="postMeta">Filed in <?php the_category(', '); ?> on <?php the_time('M.d, Y') ?></div>
<div class="postContent"><?php the_content('[Read the rest of this entry...]'); ?></div>
<div class="postTags"><?php the_tags('Tags: ', ', ', ''); ?></div>
<p class="comments"><?php comments_popup_link('Leave a Comment', 'Comments (1)', 'Comments (%)'); ?></p>
</div> <!-- Closes Post -->

<?php endwhile; ?>

<?php else : ?>

<div class="post">
<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
</div> <!-- Closes Post -->

<?php endif; ?>

<div id="nextprevious">
 <div class="left"><?php posts_nav_link('','','&laquo; previous entries') ?>&nbsp;&nbsp;</div>
 <div class="right"><?php posts_nav_link('','next entries &raquo;','') ?></div>
</div>

</div></div> <!-- Closes Content -->

<?php get_sidebar(); ?>

<div class="cleared"></div>

</div> <!-- Closes Main -->

<?php get_footer(); ?>
