{if $brand->getLogo() != ""}
    <div class="col-3 p-md-5">
        <img class="img-fluid brand-img"
             src="{$conf->app_url}/{$brand->getLogo()}"
             alt="Brand Logo"></a>
    </div>
{/if}