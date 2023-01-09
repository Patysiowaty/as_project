<hr class="my-4" xmlns="http://www.w3.org/1999/html">

<div class="row mb-4 d-flex justify-content-between align-items-center">
    <div class="col-md-2 col-lg-2 col-xl-2">
        <img
                src="{$conf->product_thumbs_path}/{$product->getThumbnail()}"
                class="img-fluid rounded-3" alt="Cotton T-shirt">
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3">
        <h6 class="text-muted">{$product->getCategory()}</h6>
        <h6 class="text-black mb-0">{$product->getName()}</h6>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
        <form action="{$conf->app_url}/removeFromCart" method="post">
            <button class="btn btn-link px-2" type="submit" name="id" value="{$product->getId()}">
                <i class="fas fa-minus"></i>
            </button>
        </form>

        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
            <h6 class="mb-0">{$quantities[$product->getId()]}</h6>
        </div>

        <form action="{$conf->app_url}/addToCart" method="post">
            <button class="btn btn-link px-2" type="submit" name="id" value="{$product->getId()}">
                <i class="fas fa-plus"></i>
            </button>
        </form>
    </div>
    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
        <h6 class="mb-0">${$product->getPrice()}</h6>
    </div>

    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
            <form action="{$conf->app_url}/forceRemoveFromCart" method="post">
                <button class="btn text-muted" type="submit" name="id" value="{$product->getId()}"><i
                            class="fas fa-times"></i></button>
            </form>
        </div>
    </div>
</div>
