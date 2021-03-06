{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{capture name=path}{l s='Search'}{/capture}

<h1 
{if isset($instant_search) && $instant_search}id="instant_search_results"{/if} 
class="page-heading {if !isset($instant_search) || (isset($instant_search) && !$instant_search)} product-listing{/if}">
    {l s='Search'}&nbsp;
    {if $nbProducts > 0}
        <span class="lighter">
            "{if isset($search_query) && $search_query}{$search_query|escape:'html':'UTF-8'}{elseif $search_tag}{$search_tag|escape:'html':'UTF-8'}{elseif $ref}{$ref|escape:'html':'UTF-8'}{/if}"
        </span>
    {/if}
    {if isset($instant_search) && $instant_search}
        <a href="#" class="close">
            {l s='Return to the previous page'}
        </a>
    {else}
        <span class="heading-counter">
            {if $nbProducts == 1}{l s='%d result has been found.' sprintf=$nbProducts|intval}{else}{l s='%d results have been found.' sprintf=$nbProducts|intval}{/if}
        </span>
    {/if}
</h1>

{include file="$tpl_dir./errors.tpl"}
{if !$nbProducts}
	<p class="alert alert-warning">
		{if isset($search_query) && $search_query}
			{l s='No results were found for your search'}&nbsp;"{if isset($search_query)}{$search_query|escape:'html':'UTF-8'}{/if}"
		{elseif isset($search_tag) && $search_tag}
			{l s='No results were found for your search'}&nbsp;"{$search_tag|escape:'html':'UTF-8'}"
		{else}
			{l s='Please enter a search keyword'}
		{/if}
	</p>
{else}
	{if isset($instant_search) && $instant_search}
        <p class="alert alert-info">
            {if $nbProducts == 1}{l s='%d result has been found.' sprintf=$nbProducts|intval}{else}{l s='%d results have been found.' sprintf=$nbProducts|intval}{/if}
        </p>
    {/if}
    <div class="content_sortPagiBar">               
        <div class="sortPagiBar clearfix">
            {include file="./product-compare.tpl"}
            {if !isset($instant_search) || (isset($instant_search) && !$instant_search)}
                {include file="./nbr-product-page.tpl"}
            {/if}
            <div class="views_float">               
                {include file="./product-sort.tpl"}                                         
            </div>
            {if isset($theme_settings.allcookies.listingView)}
                {if $theme_settings.allcookies.listingView == 'view_grid'}
                    {assign var='view_type' value="view_grid"}
                {/if}
                {if $theme_settings.allcookies.listingView == 'view_list'}
                    {assign var='view_type' value="view_list"}
                {/if}
            {else}
                {if $theme_settings.view == 'view_grid'}
                    {assign var='view_type' value="view_grid"}
                {/if}
                {if $theme_settings.view == 'view_list'}
                    {assign var='view_type' value="view_list"}
                {/if}
            {/if}
            {if $theme_settings.lc_buttons == 1}
            <div class="views dib">
                <div class="view_btn dib{if $view_type == 'view_grid'} active{/if} smooth02" id="view_grid" title="grid"></div><span class="grid_title">{l s='Grid'}</span>
                <div class="view_btn dib{if $view_type == 'view_list'} active{/if} smooth02" id="view_list" title="list"></div><span class="list_title">{l s='List'}</span>
            </div>                  
            {/if}             
        </div>
    </div>
    <div id="listing_view" class="{$view_type}">
        {include file="$tpl_dir./product-list.tpl" products=$search_products}        
    </div>
    {if !isset($instant_search) || (isset($instant_search) && !$instant_search)}
        {include file="$tpl_dir./pagination.tpl" paginationId='bottom'}
    {/if}
{/if}
