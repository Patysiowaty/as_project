<div class="row">
    {foreach $msgs->getMessages() as $msg}
        {if $msg->isError()}
            <div class="alert alert-danger mt-3 col-md-10 m-auto" role="alert">
                {$msg->text}
            </div>
        {elseif $msg->isWarrning()}
            <div class="alert alert-warning mt-3 col-md-10 m-auto" role="alert">
                {$msg->text}
            </div>
        {else}
            <div class="alert alert-info mt-3 col-md-10 m-auto" role="alert">
                {$msg->text}
            </div>
        {/if}
    {/foreach}
</div>