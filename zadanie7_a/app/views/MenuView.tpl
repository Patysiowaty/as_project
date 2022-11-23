{extends file="main.tpl"}

{block name=content}
    <div class="pure-g">
        <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
            <div class="menu">
                <form action="{$conf->getActionURL()}calculator" class="main-menu-selectors"
                      method="post">
                    <button type="submit" class="pure-button">Go to calculator</button>
                </form>
            </div>
        </div>
    </div>
    {include file='messages.tpl'}

{/block}