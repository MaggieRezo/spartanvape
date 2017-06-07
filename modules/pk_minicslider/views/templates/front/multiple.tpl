{if $slides.$lang_iso|@count != 0}
<div id="minic_slider" class="unslider load-animate homemodule clearfix theme-default{if $minicSlider.options.thumbnail == 1 and $minicSlider.options.control != 0} controlnav-thumbs{/if}">
    {foreach from=$slides key=iso item=slide}
        {if $iso == $lang_iso and $iso|@count != 0}
            <ul id="slider" class="nivoSlider">
                {foreach from=$slide item=image name=images}
                <li>
                    {if $image.url != ''}<a href="{$image.url}">{/if}
                        <img src="{$minicSlider.path.images}{$image.image}" class="slider_image" alt="{$image.alt}"
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
        {/if}
    {/foreach}
</div>
{/if}
