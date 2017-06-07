<div id="layered-theme" class="homemodule load-animate">
    {if $minicSlider.options.buttons == 1}
    <ul class="controls">
        <li class="status"></li>
        <li class="prev"></li>
        <li class="pause"></li>
        <li class="next"></li>
    </ul>
    {/if}
    {if $minicSlider.options.control == 1}
    <ul class="nav">
        {foreach from=$slides.$lang_iso item=image name=singleimage}
        <li data-id="{$image.id_slide}"></li>
        {/foreach}
    </ul>
    {/if}
    <div id="layered">
        <ul>
            {foreach from=$slides.$lang_iso key=iso item=slide}        
            <li class="animate-in" id="slide{$slide.id_slide}" data-id="{$slide.id_slide}">                          
                <img src="{$minicSlider.path.images}{$slide.image}" class="slide{$slide.id_slide} mainImg" {if $slide.alt}alt="{$slide.alt}"{/if} {if $slide.title != '' or $slide.caption != ''}title="{$image.title|escape:'htmlall':'UTF-8'}"{/if} />
                <div class="slide-text">      
                 {if $subImages[$slide.lang_iso][$slide.id_slide][0] != ""}
                   <div class="page_width">
                     {foreach $subImages[$slide.lang_iso][$slide.id_slide] key=imgId item=imgName}
                        <img src="{$minicSlider.path.images}{$imgName}" class="slideImg{$imgId}" alt="{$imgId}" />
                     {/foreach}
                     </div>
                 {/if}
                     <div id="htmlcaption_{$slide.id_slide}" class="slide-text-{$slide.id_slide} slide-content lmromancaps">
                       {if ($image.title)}<h3 class="trajan">{$image.title}</h3>{/if}
                       <div>{$slide.caption}</div>
                       {if ($slide.url != "")}<a href="{$slide.url}" {if ($image.target == 1)}target="_blank"{/if} class="button">{l s='Details' mod='pk_sequenceminicslider'}</a>{/if}
                     </div>
                </div>
            </li>
            {/foreach}            
        </ul>
        </div>
    </div>