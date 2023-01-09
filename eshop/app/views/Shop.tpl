{extends file="Main.tpl"}
{block name=content}

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Filters</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Gender
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            {foreach $genders as $gender => $isSelected}
                                <li>
                                    <a class="{if $isSelected} text-decoration-underline {else} text-decoration-none{/if}"
                                       href="{$conf->app_url}/setFilter?type=gender&name={$gender}">{$gender}</a></li>
                            {/foreach}
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Brand
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            {foreach $brands as $brand => $isSelected}
                                <li>
                                    <a class="{if $isSelected} text-decoration-underline {else} text-decoration-none{/if}"
                                       href="{$conf->app_url}/setFilter?type=brand&name={$brand}">{$brand}</a></li>
                            {/foreach}
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Category
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            {foreach $categories as $category => $isSelected}
                                <li>
                                    <a class="{if $isSelected} text-decoration-underline {else} text-decoration-none{/if}"
                                       href="{$conf->app_url}/setFilter?type=category&name={$category}">{$category}</a>
                                </li>
                            {/foreach}
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6 pb-4 btn-group">
                        <div class="d-flex">
                            {if isset($conf->roles["Employee"])}
                                {include file="ProductAddModal.tpl"}
                            {/if}
                        </div>
                        <div class="d-flex" style="margin-left: 10px">
                            {if isset($conf->roles["Employee"])}
                                {include file="BrandAddModal.tpl"}
                            {/if}
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-auto pb-4">
                            {if !$msgs->isEmpty()}
                                {include file="Messages.tpl"}
                            {/if}
                        </div>
                    </div>
                </div>
                <div class="row">
                    {foreach $products as $product}
                        {include file="ProductThumb.tpl"}
                    {/foreach}
                </div>
            </div>

        </div>
    </div>
{/block}