{if $brand->getLogo() != ""}
    <div class="col-3 p-md-5">
        <img class="img-fluid brand-img"
             src="{$conf->brand_logo_path}/{$brand->getLogo()}"
             alt="${$brand->getName()}">
    </div>
{/if}