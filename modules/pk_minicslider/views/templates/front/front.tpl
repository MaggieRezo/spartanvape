
    {if $minicSlider.options.front == 1}
        {if $page_name == 'index'}        
            <!-- MINIC SLIDER -->
            {include file="{$minicSlider.tpl}"}
        {/if}
    {else}
        <!-- MINIC SLIDER -->
        {include file="{$minicSlider.tpl}"}
    {/if} 

    <script type="text/javascript">
    $(document).ready(function(){
        /*$('#slider2').nivoSlider({
            effect: '{if $minicSlider.options.current != ''}{$minicSlider.options.current}{else}random{/if}', 
            slices: {if $minicSlider.options.slices != ''}{$minicSlider.options.slices}{else}15{/if}, 
            boxCols: {if $minicSlider.options.slices != ''}{$minicSlider.options.cols}{else}8{/if}, 
            boxRows: {if $minicSlider.options.rows != ''}{$minicSlider.options.rows}{else}4{/if}, 
            animSpeed: {if $minicSlider.options.speed != ''}{$minicSlider.options.speed}{else}500{/if}, 
            pauseTime: {if $minicSlider.options.pause != ''}{$minicSlider.options.pause}{else}3000{/if}, 
            startSlide: {if $minicSlider.options.startSlide != ''}{$minicSlider.options.startSlide}{else}0{/if},
            directionNav: {if $minicSlider.options.buttons == 1}true{else}false{/if}, 
            controlNav: {if $minicSlider.options.control == 1}true{else}false{/if}, 
            controlNavThumbs: {if $minicSlider.options.thumbnail == 1}true{else}false{/if},
            pauseOnHover: {if $minicSlider.options.hover == 1}true{else}false{/if}, 
            manualAdvance: {if $minicSlider.options.manual == 1}true{else}false{/if}, 
            prevText: "<svg class='svgic svgic-left-arrow'><use xlink:href='#si-left-arrow'></use></svg>", 
            nextText: "<svg class='svgic svgic-right-arrow'><use xlink:href='#si-right-arrow'></use></svg>", 
            randomStart: {if $minicSlider.options.random == 1}true{else}false{/if},
            beforeChange: function(){
                $(".nivo-caption").removeClass("anim").fadeOut();
                $(".nivo-control").removeClass("main_bg main_bord");
            },
            afterChange: function(){
                $(".nivo-caption").addClass("anim").fadeIn();
                $(".nivo-control.active").addClass("main_bg main_bord");
            },
            afterLoad: function(){
                $(".nivo-caption").addClass("anim");
                $(".nivo-control.active").addClass("main_bg main_bord");
            } 
        });

        var unslider = $('#minic_slider').unslider({
           speed: 500,               //  The speed to animate each slide (in milliseconds)
           delay: 4000000,     
        });
        unslider.data('unslider').dots();
        $('.nivo-nextNav').click(function() {
            var fn = this.className.split(' ')[1];
            unslider.data('unslider').next();
            unslider.data('unslider')[fn]();
        });
        $('.nivo-prevNav').click(function() {
            var fn = this.className.split(' ')[1];
            unslider.data('unslider').prev();
            unslider.data('unslider')[fn]();
        });*/

        if (!!$.prototype.bxSlider) {
            $('#slider').bxSlider({
                useCSS: false,
                maxSlides: 1,
                mode:"fade",
                auto: {if $minicSlider.options.manual == 1}true{else}false{/if},
                speed: {if $minicSlider.options.speed != ''}{$minicSlider.options.speed}{else}500{/if}, 
                pause: {if $minicSlider.options.pause != ''}{$minicSlider.options.pause}{else}4000{/if}, 
                nextText: '<svg class="svgic svgic-right-arrow"><use xlink:href="#si-right-arrow"></use></svg>',
                prevText: '<svg class="svgic svgic-left-arrow"><use xlink:href="#si-left-arrow"></use></svg>',
                //slideWidth: homeslider_width,
                //infiniteLoop: homeslider_loop,
                hideControlOnEnd: false,
                pager: {if $minicSlider.options.control == 1}true{else}false{/if},
                autoHover: true,
                //auto: homeslider_loop,
                //speed: parseInt(homeslider_speed),
                //pause: homeslider_pause,
                controls: {if $minicSlider.options.buttons == 1}true{else}false{/if},
                onSlideBefore: function() {
                    $(".nivo-caption").fadeOut('fast');
                },
                onSlideAfter: function() {
                    //$(".nivo-caption").fadeIn('fast');
                    $(".nivo-caption").slideDown(400);
                },
                onSlideNext: function() {},
                onSlidePrev: function() {}
            });

        }


    });
    </script>   
