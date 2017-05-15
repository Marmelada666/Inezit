        <!-- FOOTER-->
        <footer>
            <div class="footer-main">
            <a name="kontakt" id="kontakt" href=""></a>
                <div class="container">
                    <div class="footer-main-wrapper">
                        <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="edugate-widget widget kontakt">
                                        <div class="title-widget">Kontakt</div>
                                        <div class="content-widget">
                                            <div class="info-list">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-envelope-o"></i><a href="#"><?php the_field('emailova_adresa',163) ?></a></li>
                                                    <li><i class="fa fa-phone"></i><a href="tel:<?php the_field('telefonne_cislo',163) ?>"><?php the_field('telefonne_cislo',163) ?></a></li>
                                                    <li><i class="fa fa-map-marker"></i>
                                                        <a href="#">
                                                            <p><?php the_field('firemna_adresa_ulica',163) ?></p>
                                                            <p><?php the_field('firemna_adresa_mesto',163) ?></p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-6">
                                    <div class="mailing-widget widget">
                                        <div class="title-widget">Napíšte nám</div>
                                        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
                                    </div>
                                </div>
                        </div> <!-- end of row -->
                    </div>
                </div> <!-- end of container -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="map-wrapper">
                                <div class="overlay" onClick="style.pointerEvents='none'"></div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2629.4738587136253!2d18.617738515485026!3d48.772843114680654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4714dcf1c911d323%3A0x737b64512a616081!2sMgr.+J%C3%A1n+Svitok+-+TOP+Systemsa!5e0!3m2!1ssk!2ssk!4v1494414475697" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>  
                            </div>
                        </div> <!-- end of row -->
                    </div>
                    <div class="container">
                    <div class="hyperlink">
                        <div class="pull-left hyper-left">
                            <ul class="list-inline">
                                <li><a href="index.html">Domov</a></li>
                                <li><a href="courses.html">Kurzy</a></li>
                                <li><a href="about-us.html">Re-pas</a></li>
                                <li><a href="404.html">Obchodne podmienky</a></li>
                            </ul>
                        </div>
                        <div class="pull-right hyper-right">@ SWLABS</div>
                    </div>
                </div> <!-- end of container -->
            </div>
        </footer>
        <script type="text/javascript">
                        /*
             Sticky-kit v1.1.2 | WTFPL | Leaf Corcoran 2015 | http://leafo.net
            */
            (function(){var b,f;b=this.jQuery||window.jQuery;f=b(window);b.fn.stick_in_parent=function(d){var A,w,J,n,B,K,p,q,k,E,t;null==d&&(d={});t=d.sticky_class;B=d.inner_scrolling;E=d.recalc_every;k=d.parent;q=d.offset_top;p=d.spacer;w=d.bottoming;null==q&&(q=0);null==k&&(k=void 0);null==B&&(B=!0);null==t&&(t="is_stuck");A=b(document);null==w&&(w=!0);J=function(a,d,n,C,F,u,r,G){var v,H,m,D,I,c,g,x,y,z,h,l;if(!a.data("sticky_kit")){a.data("sticky_kit",!0);I=A.height();g=a.parent();null!=k&&(g=g.closest(k));
            if(!g.length)throw"failed to find stick parent";v=m=!1;(h=null!=p?p&&a.closest(p):b("<div />"))&&h.css("position",a.css("position"));x=function(){var c,f,e;if(!G&&(I=A.height(),c=parseInt(g.css("border-top-width"),10),f=parseInt(g.css("padding-top"),10),d=parseInt(g.css("padding-bottom"),10),n=g.offset().top+c+f,C=g.height(),m&&(v=m=!1,null==p&&(a.insertAfter(h),h.detach()),a.css({position:"",top:"",width:"",bottom:""}).removeClass(t),e=!0),F=a.offset().top-(parseInt(a.css("margin-top"),10)||0)-q,
            u=a.outerHeight(!0),r=a.css("float"),h&&h.css({width:a.outerWidth(!0),height:u,display:a.css("display"),"vertical-align":a.css("vertical-align"),"float":r}),e))return l()};x();if(u!==C)return D=void 0,c=q,z=E,l=function(){var b,l,e,k;if(!G&&(e=!1,null!=z&&(--z,0>=z&&(z=E,x(),e=!0)),e||A.height()===I||x(),e=f.scrollTop(),null!=D&&(l=e-D),D=e,m?(w&&(k=e+u+c>C+n,v&&!k&&(v=!1,a.css({position:"fixed",bottom:"",top:c}).trigger("sticky_kit:unbottom"))),e<F&&(m=!1,c=q,null==p&&("left"!==r&&"right"!==r||a.insertAfter(h),
            h.detach()),b={position:"",width:"",top:""},a.css(b).removeClass(t).trigger("sticky_kit:unstick")),B&&(b=f.height(),u+q>b&&!v&&(c-=l,c=Math.max(b-u,c),c=Math.min(q,c),m&&a.css({top:c+"px"})))):e>F&&(m=!0,b={position:"fixed",top:c},b.width="border-box"===a.css("box-sizing")?a.outerWidth()+"px":a.width()+"px",a.css(b).addClass(t),null==p&&(a.after(h),"left"!==r&&"right"!==r||h.append(a)),a.trigger("sticky_kit:stick")),m&&w&&(null==k&&(k=e+u+c>C+n),!v&&k)))return v=!0,"static"===g.css("position")&&g.css({position:"relative"}),
            a.css({position:"absolute",bottom:d,top:"auto"}).trigger("sticky_kit:bottom")},y=function(){x();return l()},H=function(){G=!0;f.off("touchmove",l);f.off("scroll",l);f.off("resize",y);b(document.body).off("sticky_kit:recalc",y);a.off("sticky_kit:detach",H);a.removeData("sticky_kit");a.css({position:"",bottom:"",top:"",width:""});g.position("position","");if(m)return null==p&&("left"!==r&&"right"!==r||a.insertAfter(h),h.remove()),a.removeClass(t)},f.on("touchmove",l),f.on("scroll",l),f.on("resize",
            y),b(document.body).on("sticky_kit:recalc",y),a.on("sticky_kit:detach",H),setTimeout(l,0)}};n=0;for(K=this.length;n<K;n++)d=this[n],J(b(d));return this}}).call(this);
            $("#sticky").stick_in_parent();
        </script>
        <!-- LOADING-->
        <!-- <div class="body-2 loading">
            <div class="dots-loader"></div>
        </div> -->
        <!-- JAVASCRIPT LIBS-->
        <!--script.-->
        <!--    if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {-->
        <!--        $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');-->
        <!--    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {-->
        <!--        $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');-->
        <!--    }-->
        <!-- <script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script> -->
        <!-- <script src="assets/libs/count-to/jquery.countTo.js"></script> -->
        <!-- <script src="assets/libs/fancybox/js/jquery.fancybox.js"></script> -->
        <!-- <script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script> -->
        <!-- MAIN JS-->
        <?php wp_footer(); ?>
</body>

</html>