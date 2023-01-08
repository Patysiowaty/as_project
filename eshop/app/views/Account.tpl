{extends file="Main.tpl"}
{block name=content}
    <div class="row py-5 m-auto">
        <form class="col-md-9 m-auto" method="post" role="form" action="{$conf->app_url}/updateAccount">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="{$user->getEmail()}" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="**********">
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="{$user->getStreet()}">
            </div>
            <div class="row">
                <div class="form-group col-md-5">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="{$user->getCity()}">
                </div>
                <div class="form-group col-md-2">
                    <label for="postal">Zip</label>
                    <input type="text" class="form-control" id="postal" name="postal"
                           placeholder="{$user->getPostalCode()}">
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary btn-lg px-3">Update</button>
            </div>
        </form>
        {if !$msgs->isEmpty()}
            {include file="Messages.tpl"}
        {/if}
    </div>
{/block}