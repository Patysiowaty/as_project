<button type="button" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#productModal">
    + Add product
</button>
<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1"
     aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModal">Adding product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{$conf->app_url}/addProduct" method="post" role="form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group mt-2 w-50">
                            <label for="login">Icon path</label>
                            <input type="file" class="form-control mt-2" id="icon"
                                   name="icon"
                                   placeholder="path/to/img">
                        </div>
                        <div class="form-group mt-2 w-50">
                            <label for="login">Name</label>
                            <input type="text" class="form-control mt-2" id="name"
                                   name="name" min="1" max="10000">
                        </div>
                        <div class="form-group mt-2 w-50">
                            <label for="login">Price</label>
                            <input type="number" class="form-control mt-2" id="price"
                                   name="price">
                        </div>
                        <div class="form-group mt-2 w-50">
                            <label for="login">Brand</label>
                            <select type="" class="form-control mt-2" id="brand"
                                    name="brand">
                                {foreach $brands as $brand => $un}
                                    <option value="{$brand}">{$brand}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="form-group mt-2 w-50">
                            <label for="login">Category</label>
                            <select type="" class="form-select mt-2" id="category"
                                    name="category">
                                {foreach $categories as $cat => $un}
                                    <option value="{$cat}">{$cat}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="form-group mt-2 w-50">
                            <label for="login">Gender</label>
                            <select type="" class="form-select mt-2" id="gender"
                                    name="gender">
                                <option value="Man">Man</option>
                                <option value="Woman">Woman</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success btn-lg px-3">Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>