{extends file="Main.tpl"}
{block name=content}
    <div class="row py-5 m-auto">
        <form class="col-md-9 m-auto" method="post" role="form" action="{$conf->app_url}/registration">
            <div class="row">
                <div class="form-group mt-2 w-50">
                    <label for="login">Email</label>
                    <input type="text" class="form-control mt-2" id="email" name="email">
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-2 w-50">
                    <label for="password">Password</label>
                    <input type="password" class="form-control mt-2" id="password" name="password">
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success btn-lg px-3">Sign up</button>
                </div>
            </div>
        </form>
        {if !$msgs->isEmpty()}
            {include file="Messages.tpl"}
        {/if}
    </div>
{/block}