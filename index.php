<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blog
 */
include ('wp-blog-header.php');
get_header(); ?><!-- Вивід шапки-->

<!--Вставляємо ваш код-->
<div class="userinfo">
	<div class="photo">
		<img src="images/noimage.jpg" alt="Моє фото">
	</div>
	<div class="main">
		<h1>ELENA</h1>
		<h2>CSS, HTML, JavaScript master</h2>
		<ul class="social">
			<li><a href="https://uk-ua.facebook.com" class="fa fa-facebook" target="_blank">facebook</a></li>
			<li><a href="https://twitter.com/?lang=ru" class="fa fa-twitter" target="_blank">twitter</a></li>
			<li><a href="https://new.vk.com" class="fa fa-vk" target="_blank">vk</a></li>
		</ul>
	</div>
	<div class="contacts">
		<p>+38 068 ** ** ***</p>
		<p><a href="mailto:el.en@meta.ua" target="_blank">Напишите мне на @mail</a></p>
	</div>
</div>
<div class="slider">
	<div class="fluid_container">
		<div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
			<div data-src="images/75_bg2.jpg"></div>
			<div data-src="images/75_bg3.jpg"></div>
			<div data-src="images/75_bg.jpg"></div>
		</div>
	</div>
</div>

<!--кінець коду-->
<div class="pages">
  <div class="pages__item">
    <div class="content_wrap">
      <div class="content">
      	<h1 >Blog</h1>
      	<!--Початок циклу виводу блога-->
      	<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post();?><!--Перебір всіх записів блогу-->
				<article class="blog__item">  
					<!--Заголовок блогу-->       
		          <h3><?php the_title();?></h3>
		          <p class="details"><?php echo get_the_time('Y-m-d g:i:s', get_the_id()); ?><!--Вивід дати--> / by <?php echo get_the_author(); ?><!--Вивід автора--></p>
		          <!-- Добаляєм картинку блогу-->
		          <?php the_post_thumbnail();?>
		          <!--Добавляє текст блогу-->
		          <p><?php the_content();?></p>
		          <div class="clr"></div>
		        </article>
			<?php endwhile;?>
		<?php endif;?>  <!--Кінець циклу виводу блога-->   
      </div>
    </div>
  </div>
</div>

<!-- Вивід підвалу--><?php get_footer();
