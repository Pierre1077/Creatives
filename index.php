<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creatives</title>
    <?php wp_head(); ?>

</head>
<body>

<?php
$args_blog = array(
    'post_type' => 'post',
    'posts_per_page' => 2
);

$req_blog = new WP_Query($args_blog);
?>

    <section class="accueil">
        <div><h1 class="text-center"></h1>
            <span class="subtitle">Power by PSDfreebies.com</span>
        </div>
        <div class="scroll">
            <p>Scroll Down</p>
            <a href="#section-features"><img src="<?php echo get_template_directory_uri(); ?>/images/scroll.png" alt="scroll"></a>
        </div>
    </section>

    <section id="section-features">
        <div class="container">
            <h2 class="text-center">We Are An Awesome Agency<span class="w">W</span></h2>
            <div class="row features">
                <div class="col-lg-3 col-md-6 col-sm-12 feature-one reveal-1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Write.png" alt="Write">
                    <h3>FEATURE ONE</h3>
                    <p class="text-center">Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-two reveal-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Write.png" alt="Write">
                    <h3>FEATURE TWO</h3>
                    <p class="text-center">Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-three reveal-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Search.png" alt="Search">
                    <h3>FEATURE THREE</h3>
                    <p class="text-center">Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 feature-four reveal-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Says.png" alt="Says">
                    <h3>FEATURE FOUR</h3>
                    <p class="text-center">Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="articles">
        <div class="container-fluid">
            <?php while ($req_blog->have_posts()): $req_blog->the_post(); ?>
                <?php if (in_category('Catégorie 2')) continue; ?>
            <div class="row article1">
                    <div class="ml-auto article_right excerpt">
                        <div>
                        <p><?php the_date()?> | <?php the_category(' ');?></p>
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <div class=" p-0 thumbnail">
                        <?php the_post_thumbnail('medium', ['class' => 'card-img-top img-fluid', 'alt' => '', 'style' => 'height : auto;']); ?>
                    </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>


            <?php while ($req_blog->have_posts()): $req_blog->the_post(); ?>
                <?php if (in_category('Catégorie 1')) continue; ?>
            <div class="row article2">
                    <div class="p-0 thumbnail">
                        <?php the_post_thumbnail('medium', ['class' => 'card-img-top img-fluid', 'alt' => '', 'style' => 'height : auto;']); ?>
                    </div>

                    <div class="mr-auto article_left">
                        <div>
                        <p><?php the_date()?> | <?php the_category(' ');?></p>

                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>
        </div>
    </section>

    <section id="section-infos">
        <div class="container">
            <div class="row infos">
                <div class="col-lg-6 col-md-12 infos_container reveal-1">
                    <img class="infos_item" src="<?php echo get_template_directory_uri(); ?>/images/Write2.png" alt="">
                    <p class="infos_item">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis.</p>
                </div>
                <div class="col-lg-6 col-md-12 infos_container reveal-2">
                    <img class="infos_item" src="<?php echo get_template_directory_uri(); ?>/images/Write2.png" alt="">
                    <p class="infos_item">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="section-contact">
        <h2 class="text-center">We’d love to hear about your project.<span class="c">C</span></h2>
        <div class="container p-0">
            <form method="post" action="<?php echo get_template_directory_uri(); ?>/Form/form.php">
                <div class="row labels m-0">
                    <div class="col-lg-3 col-md-12 col-sm-12 contact-item">
                        <label for="Name"></label>
                        <input type="text" name="Name" id="Name" placeholder="Name" value="<?php if(isset($_POST['Name'])) { echo $_POST['Name']; } ?>">
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 contact-item">
                        <label for="Email"></label>
                        <input type="email" name="Email" id="Email" placeholder="Email" value="<?php if(isset($_POST['Email'])) { echo $_POST['Email']; } ?>">
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 contact-item">
                        <label for="Phone"></label>
                        <input type="tel" name="Phone" id="Phone" placeholder="Phone" value="<?php if(isset($_POST['Phone'])) { echo $_POST['Phone']; } ?>">
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-lg-12">
                        <textarea name="Message" id="Message" placeholder="Message"><?php if(isset($_POST['Message'])) { echo $_POST['Message']; } ?></textarea>
                    </div>
                </div>
                <div class="row justify-content-center m-0">
                    <div>
                        <button type="submit" class="submit" name="mailform">SUBMIT</button>
                    </div>
                </div>
                <?php
                if(isset($msg))
                {
                    echo $msg;
                }
                ?>
            </form>
        </div>
    </section>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>

</body>
</html>