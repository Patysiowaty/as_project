{extends file="Main.tpl"}
{block name=content}
    <div class="container py-5">
        <div class="row">
            <section class="h-100 h-custom">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-8">
                                        <div class="p-5">
                                            <div class="d-flex justify-content-between align-items-center mb-5">
                                                <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                                <h6 class="mb-0 text-muted">{$numOfItems} items</h6>
                                            </div>
                                            {foreach $products as $id => $product}
                                                {include file="CartItem.tpl"}
                                            {/foreach}
                                        </div>
                                    </div>
                                    <div class="col-lg-4 bg-grey">
                                        <div class="p-5">
                                            <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                            <hr class="my-4">

                                            <div class="d-flex justify-content-between mb-4">
                                                <h5 class="text-uppercase">items {$numOfItems}</h5>
                                                <h5>${$price}</h5>
                                            </div>

                                            <h5 class="text-uppercase mb-3">Shipping</h5>

                                            <div class="mb-4 pb-2">
                                                <select class="form-select">
                                                    <option value="1">Standard delivery - $0.00</option>
                                                </select>
                                            </div>

                                            <hr class="my-4">

                                            <div class="d-flex justify-content-between mb-5">
                                                <h5 class="text-uppercase">Total price</h5>
                                                <h5>${$price}</h5>
                                            </div>
                                            <form action="{$conf->app_url}/doCheckout" method="post">
                                                <button type="submit" class="btn btn-success btn-block btn-lg"
                                                        data-mdb-ripple-color="dark" name="check" value="1"
                                                        {if count($products) == 0} disabled{/if}>Checkout
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
{/block}