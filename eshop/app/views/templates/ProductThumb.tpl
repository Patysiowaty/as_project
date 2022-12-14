<div class="col-md-4">
    <div class="card mb-4 product-wap rounded-0">
        <div class="card rounded-0">
            <img class="card-img rounded-0 img-fluid" src="{$conf->product_thumbs_path}/{$product->getThumbnail()}">
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                    <li>
                        {if $conf->is_logged}
                            <form method="post" action="{$conf->app_url}/addToCart">
                                <button class="btn btn-success text-white mt-2" name="id" value="{$product->getId()}"><i
                                            class="fas fa-cart-plus"></i></button>
                            </form>
                        {/if}
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <a class="h3 text-decoration-none">{$product->getName()}</a>
            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>{$product->getBrand()}</li>
                <li class="pt-2">
                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
            </ul>
            <p class="text-center mb-0">${$product->getPrice()}</p>
        </div>
    </div>
</div>