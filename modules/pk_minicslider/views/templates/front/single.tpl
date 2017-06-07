<div id="minic_slider" class="homemodule load-animate clearfix theme-default{if $minicSlider.options.thumbnail == 1 and $minicSlider.options.control != 0} controlnav-thumbs{/if}">   
    <ul id="slider" class="nivoSlider">
        {foreach from=$slides.$defLang item=image name=singleimage}
            <li>
                {if $image.url != ''}<a href="{$image.url}">{/if}
                <img src="{$minicSlider.path.images}{$image.image}" class="slider_image" 
                    {if $image.alt}alt="{$image.alt}"{/if}
                    {if $image.title != '' or $image.caption != ''}title="#htmlcaption_{$image.id_slide}"{/if} 
                    {if $minicSlider.options.thumbnail == 1}data-thumb="{$minicSlider.path.thumbs}{$image.image}"{/if}/>
                {if $image.url != ''}</a>{/if}
                <div id="htmlcaption_{$image.id_slide}" class="nivo-caption">
                    <h3 class='lmromandemi main_title'>{$image.title}</h3>
                    <div class="nivo-capt">{$image.caption}</div>
                    {if $image.url != ''}
                    <br/><br/>
                    <a href="{$image.url}" class="button sec_bord_hvr sec_bg_hvr" {if $image.target == 1}target="_blank"{/if}>{l s='shop now' mod='pk_minicslider'}</a>
                    {/if}
                </div>
            </li>
        {/foreach}
    </ul>
</div> 