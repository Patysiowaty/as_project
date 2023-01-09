{extends file="Main.tpl"}
{block name=content}
    <div class="container py-5">
        <form class="input-group" action="{$conf->app_url}/search" method="post">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" name="email"/>
            <button type="submit" class="btn btn-outline-primary" name="pls">search</button>
        </form>
        {if !$msgs->isEmpty()}
            {include file="templates/Messages.tpl"}
        {/if}
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Email</th>
                {foreach $roles as $role}
                    <th scope="col">{$role}</th>
                {/foreach}
                <th scope="col">Active</th>
            </tr>
            </thead>
            <tbody>
            {foreach $users as $user}
                <tr>
                    <td>
                        {$user->getId()}
                    </td>
                    <td>
                        {$user->getEmail()}
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="AdminCheck" value="{$user->getId()}"
                                   {if $user->isAdmin()}checked{/if}/>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="EmployeeCheck" value="{$user->getId()}"
                                   {if $user->isEmployee()}checked{/if}/>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="UserCheck" value="{$user->getId()}"
                                   {if $user->isCustomer()}checked{/if}/>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="ActiveCheck" value="{$user->getId()}"
                                   {if $user->isActive()}checked{/if}/>
                        </div>
                    </td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
{/block}