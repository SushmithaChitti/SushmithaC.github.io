<?php

/**
 * Hero content.
 */
return array(
	'title'      => __( 'Hero', 'zeever' ),
	'categories' => array( 'zeever-basic' ),
	'content'    => '
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"black","layout":{"inherit":false,"contentSize":"1170px"}} -->
            <div class="wp-block-group has-black-background-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"' . esc_url( ZEEVER_URI ) . 'assets/img/background.webp","id":34,"dimRatio":0,"focalPoint":{"x":"0.72","y":"0.99"},"minHeight":563,"contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"bottom":"180px"}}}} -->
            <div class="wp-block-cover is-light" style="padding-bottom:180px;min-height:563px"><span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-34" alt="" src="' . esc_url( ZEEVER_URI ) . 'assets/img/background.webp" style="object-position:72% 99%" data-object-fit="cover" data-object-position="72% 99%"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"zeever"} /-->
            
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"200px"}}},"layout":{"wideSize":"1170px","contentSize":"1170px"}} -->
            <div class="wp-block-group" style="padding-top:200px"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"700px"} -->
            <div class="wp-block-column" style="flex-basis:700px"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"},"spacing":{"margin":{"right":"0px","bottom":"40px"}},"color":{"text":"#66fcf1"}},"className":"zeever-animate zeever-move-right zeever-delay-1","fontSize":"tiny"} -->
            <h1 class="zeever-animate zeever-move-right zeever-delay-1 has-text-color has-tiny-font-size" style="color:#66fcf1;font-style:normal;font-weight:500;line-height:1.2;margin-right:0px;margin-bottom:40px;text-transform:capitalize">CREATIVE MIND, CREATIVE WORKS.</h1>
            <!-- /wp:heading -->
            
            <!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700","fontSize":"76px","lineHeight":"1.2"},"spacing":{"margin":{"right":"0px","top":"23px"}}},"textColor":"white","className":"zeever-animate zeever-move-right zeever-delay-3"} -->
            <h1 class="zeever-animate zeever-move-right zeever-delay-3 has-white-color has-text-color" style="font-size:76px;font-style:normal;font-weight:700;line-height:1.2;margin-top:23px;margin-right:0px;text-transform:capitalize">We Are Digital Agency</h1>
            <!-- /wp:heading -->
            
            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"60px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:60px"><!-- wp:button {"style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"40px","right":"40px"}},"border":{"radius":"0px"},"color":{"text":"#fbfbfb"}},"className":"is-style-custombuttonfill zeever-animate zeever-animate zeever-move-right zeever-delay-1-move-right zeever-animate zeever-move-right zeever-delay-1-delay-5 is-style-custombuttonborder3","fontFamily":"helvetica-arial"} -->
            <div class="wp-block-button is-style-custombuttonfill zeever-animate zeever-move-right zeever-delay-1-move-right zeever-delay-1-delay-5 is-style-custombuttonborder3 has-helvetica-arial-font-family"><a class="wp-block-button__link has-text-color" href="#" style="border-radius:0px;color:#fbfbfb;padding-top:18px;padding-right:40px;padding-bottom:18px;padding-left:40px">Getting Started</a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons --></div>
            <!-- /wp:column -->
            
            <!-- wp:column -->
            <div class="wp-block-column"></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group --></div></div>
            <!-- /wp:cover --></div>
            <!-- /wp:group -->',
);
