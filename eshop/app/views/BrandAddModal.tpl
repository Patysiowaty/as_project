<button type="button" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#brandModal">
    + Add Brand
</button>
<!-- Modal -->
<div class="modal fade" id="brandModal" tabindex="-1"
     aria-labelledby="brandModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="brandModalLabel">Adding brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{$conf->app_url}/addBrand" method="post" role="form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group mt-2 w-50">
                            <label for="icon">Icon path</label>
                            <input type="file" class="form-control mt-2" id="icon"
                                   name="icon">
                        </div>
                        <div class="form-group mt-2 w-50">
                            <label for="login">Name</label>
                            <input type="text" class="form-control mt-2" id="name"
                                   name="name" min="1" max="10000">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-success btn-lg px-3">Add
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>