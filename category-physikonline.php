<?php 
get_header();
?>

 <!--MAIN-->       
<main>
<h1>PhysikOnline</h1>
<p>
<?php 
$post = get_posts( ["category" => 2] );
// print_r($post[0]);
print_r($post[0]->post_date . '<br>');
print_r($post[0]->post_title . '<br>');
print_r($post[0]->post_content . '<hr>');
// print_r($post[1]);
print_r($post[1]->post_date . '<br>');
print_r($post[1]->post_title . '<br>');
print_r($post[1]->post_content . '<br>');
?></p>
</main>




<!-- FOOTER -->
      
 <footer id="Footer" class="page-footer light-blue darken-4">
    <div class="footer-copyright">  
        <div class="footainer">
            © 2017 PhysikOnline 
            <ul>
            <li><a href="<?php echo home_url(); ?>/wp-admin">Bearbeiten</a>
            </ul>
        </div>
    </div>
</footer>        

<?php get_footer(); ?>
