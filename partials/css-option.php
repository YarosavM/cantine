<?php
$ale_background = ale_get_option('background');

$ale_headerfont = ale_get_option('headerfont');
$ale_font = ale_get_option('bodystyle');

$ale_main_font = ale_get_option('main_font');
$ale_additional_font = ale_get_option('additional_font');
$ale_special_links_font = ale_get_option('special_links_font');
$ale_decored_font1 = ale_get_option('decored_font1');
$ale_decored_font2 = ale_get_option('decored_font2');


$ale_h1 = ale_get_option('h1sty');
$ale_h2 = ale_get_option('h2sty');
$ale_h3 = ale_get_option('h3sty');
$ale_h4 = ale_get_option('h4sty');
$ale_h5 = ale_get_option('h5sty');
$ale_h6 = ale_get_option('h6sty');
?>
<?php
    /*
    if(ale_get_option('headerfontex')){ $headerfontex = ":".ale_get_option('headerfontex'); } else {$headerfontex =""; }
    if(ale_get_option('main_fontex')){ $main_fontex = ":".ale_get_option('main_fontex'); } else {$main_fontex = "";}
    if(ale_get_option('headerfont')){ echo "<link href='http://fonts.googleapis.com/css?family=".ale_get_option('headerfont').$headerfontex."|".ale_get_option('main_font').$main_fontex."' rel='stylesheet' type='text/css'>"; }
    */


    if($ale_main_font){
        echo "<link href='https://fonts.googleapis.com/css?family=".$ale_main_font."&display=swap' rel='stylesheet'>";
    }
    if($ale_additional_font){
        echo "<link href='https://fonts.googleapis.com/css?family=".$ale_additional_font."&display=swap' rel='stylesheet'>";?>
        <style type="text/css">
            .additional-font{
                <?php if($ale_additional_font){ $additional_font_name =  str_replace ('+',' ',$ale_additional_font); echo "font-family:".$additional_font_name.";"; }?>
            }
        </style> <?php 
    }

    if($ale_special_links_font){
        echo "<link href='https://fonts.googleapis.com/css?family=".$ale_special_links_font."&display=swap' rel='stylesheet'>";?>
        <style type="text/css">
            .special-links-font{
                <?php if($ale_special_links_font){ $special_links_font_name =  str_replace ('+',' ',$ale_special_links_font); echo "font-family:".$special_links_font_name.";"; }?>
            }
        </style> <?php 
    }

    if($ale_decored_font1){
        echo "<link href='https://fonts.googleapis.com/css?family=".$ale_decored_font1."&display=swap' rel='stylesheet'>";?>
        <style type="text/css">
            .decored-font-1{
                <?php if($ale_decored_font1){ $decored_font1_name =  str_replace ('+',' ',$ale_decored_font1); echo "font-family:".$decored_font1_name.";"; }?>
            }
        </style> <?php 
    }

    if($ale_decored_font2){
        echo "<link href='https://fonts.googleapis.com/css?family=".$ale_decored_font2."&display=swap' rel='stylesheet'>"; ?>
        <style type="text/css">
            .decored-font-2{
                <?php if($ale_decored_font2){ $decored_font2_name =  str_replace ('+',' ',$ale_decored_font2); echo "font-family:".$decored_font2_name.";"; } ?>
            }
        </style> <?php 
    }
?>

    <style type='text/css'>
        body {
            <?php
            if($ale_font['size']){ echo "font-size:".$ale_font['size'].";"; };
            if($ale_font['style']){ echo "font-style:".$ale_font['style'].";"; };
            if($ale_font['color']){ echo "color:".$ale_font['color'].";"; };
            if($ale_font['face']){ $fontfamily =  str_replace ('+',' ',$ale_font['face']); echo "font-family:".$fontfamily.";"; };

            if($ale_background['color']){ echo "background-color:".$ale_background['color'].";"; }
            if($ale_background['image']){ echo "background-image: url(".$ale_background['image'].");"; }
            if($ale_background['repeat']){ echo "background-repeat:".$ale_background['repeat'].";"; }
            if($ale_background['position']){ echo "background-position:".$ale_background['position'].";"; }
            if($ale_background['attachment']){ echo "background-attachment:".$ale_background['attachment'].";"; }
            ?>
        }
        h1 {
            <?php
            if($ale_h1['size']){ echo "font-size:".$ale_h1['size'].";"; };
            if($ale_h1['style']){ echo "font-style:".$ale_h1['style'].";"; };
            if($ale_h1['color']){ echo "color:".$ale_h1['color'].";"; };
            if($ale_h1['face']){ $h1family =  str_replace ('+',' ',$ale_h1['face']); echo "font-family:".$h1family.";"; };
            ?>
        }
        h2 {
            <?php
            if($ale_h2['size']){ echo "font-size:".$ale_h2['size'].";"; };
            if($ale_h2['style']){ echo "font-style:".$ale_h2['style'].";"; };
            if($ale_h2['color']){ echo "color:".$ale_h2['color'].";"; };
            if($ale_h2['face']){ $h2family =  str_replace ('+',' ',$ale_h2['face']); echo "font-family:".$h2family.";"; };
            ?>
        }
        h3 {
            <?php
            if($ale_h3['size']){ echo "font-size:".$ale_h3['size'].";"; };
            if($ale_h3['style']){ echo "font-style:".$ale_h3['style'].";"; };
            if($ale_h3['color']){ echo "color:".$ale_h3['color'].";"; };
            if($ale_h3['face']){ $h3family =  str_replace ('+',' ',$ale_h3['face']); echo "font-family:".$h3family.";"; };
            ?>
        }
        h4 {
            <?php
            if($ale_h4['size']){ echo "font-size:".$ale_h4['size'].";"; };
            if($ale_h4['style']){ echo "font-style:".$ale_h4['style'].";"; };
            if($ale_h4['color']){ echo "color:".$ale_h4['color'].";"; };
            if($ale_h4['face']){ $h4family =  str_replace ('+',' ',$ale_h4['face']); echo "font-family:".$h4family.";"; };
            ?>
        }
        h5 {
            <?php
            if($ale_h5['size']){ echo "font-size:".$ale_h5['size'].";"; };
            if($ale_h5['style']){ echo "font-style:".$ale_h5['style'].";"; };
            if($ale_h5['color']){ echo "color:".$ale_h5['color'].";"; };
            if($ale_h5['face']){ $h5family =  str_replace ('+',' ',$ale_h5['face']); echo "font-family:".$h5family.";"; };
            ?>
        }
        h6 {
            <?php
            if($ale_h6['size']){ echo "font-size:".$ale_h6['size'].";"; };
            if($ale_h6['style']){ echo "font-style:".$ale_h6['style'].";"; };
            if($ale_h6['color']){ echo "color:".$ale_h6['color'].";"; };
            if($ale_h6['face']){ $h6family =  str_replace ('+',' ',$ale_h6['face']); echo "font-family:".$h6family.";"; };
            ?>
        }

        /*Header Font*/
        body, .blog-center-align .blog-filter-line .search input[type=search], .blog-center-align .blog-single .right-side ul a,
        .blog-center-align .blog-single .right-side .location p.loc, .blog-center-align .blog-single .left-side .blog-comments #comment-form input,
        .contacts-center .content .left .contacts, .contacts-center .content .left .info, .contacts-center .content .right input,
        .contacts-center .content .right textarea, .contacts-center .content .contact-footer, .portfolio-center-align .portfolio-categories,
        .portfolio-line .scrollable .img .portfolio-text, .portfolio-line .scrollable .img .portfolio-text .by, .portfolio-line .scrollable .img .portfolio-text .text,
        .portfolio-single-title p {
            <?php if($ale_main_font){ $main_fontname =  str_replace ('+',' ',$ale_main_font); echo "font-family:".$main_fontname.";"; } ?>
        }

        /*Main Font*/
        #background-slider section .section-content .caption, .blog-center-align .blog-item .item-content .caption,
        .blog-center-align .blog-footer, .blog-center-align .blog-single .right-side p.caption, .blog-center-align .blog-single .left-side .caption,
        .blog-center-align .blog-single .left-side .blog-comments .comments-header .left, .blog-center-align .blog-single .left-side .blog-comments #comment-form p,
        .blog-center-align .blog-single .left-side .blog-comments .comment1 .content .time,
        .blog-center-align .blog-single .left-side .blog-comments .comment2 .content .time,
        .blog-center-align .blog-single .left-side .blog-comments .comment1 .content .name,
        .blog-center-align .blog-single .left-side .blog-comments .comment2 .content .name,
        .about-center-align .content-left .peoples li h2, .portfolio-line .scrollable .img .portfolio-text h2,
        .portfolio-single-title h2, .menu-align .menu-click-drop, .menu-align .menu-click-drop ul.dropdown-menu, .menu-align .menu-click-drop ul.dropdown-menu li ul {
            <?php if($ale_headerfont){ $headerfontname =  str_replace ('+',' ',$ale_headerfont); echo "font-family:".$headerfontname.";"; } ?>
        }

    </style>