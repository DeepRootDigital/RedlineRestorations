<?php if ( have_comments() ) : ?>
<img src="<?php echo get_template_directory_uri(); ?>/images/comment-shadow.png" alt="Shadow" class="comment-shadow" />
<h3 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h3> 
<div class="navigation">
<div class="alignleft"><?php previous_comments_link() ?></div>
<div class="alignright"><?php next_comments_link() ?></div>
</div> 
<ol class="commentlist">
<?php wp_list_comments(); ?>
</ol> 
<div class="navigation">
        <div class="alignleft"><?php previous_comments_link() ?></div>
        <div class="alignright"><?php next_comments_link() ?></div>
</div>
<?php else : // this is displayed if there are no comments so far ?> 
<?php if ('open' == $post->comment_status) : ?>

<!-- If comments are open, but there are no comments. -->
<?php else : // comments are closed ?>

<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>
<?php endif; ?>
<?php endif; ?>
<?php if ('open' == $post->comment_status) : ?>
<?php endif; // if you delete this the sky will fall on your head ?>