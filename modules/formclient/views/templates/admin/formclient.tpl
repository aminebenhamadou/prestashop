{if $errors}
    <div class="alert alert-danger">
        {foreach from=$errors item=error}
            {$error}<br />
        {/foreach}
    </div>
{/if}

{if $confirmation}
    <div class="alert alert-success">
        {$confirmation}
    </div>
{/if}

<form action="{$link->getPageLink('authentication', true)|escape:'html':'UTF-8'}" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="societe">{l s='Société'}:</label>
        <input type="text" id="societe" name="societe" class="form-control" value="{$customer.formclient_societe|escape:'html':'UTF-8'}" />
    </div>
    
    <div class="form-group">
        <label for="image">{l s='Image'}:</label>
        <input type="file" id="image" name="image" class="form-control-file" />
    </div>
    
    <div class="form-group">
        <button type="submit" name="submitFormclient" class="btn btn-primary">{l s='Enregistrer'}</button>
    </div>
    <input type="hidden" name="submitFormclient" value="1" />
    <input type="hidden" name="submitFormclientToken" value="{$form_token}" />
</form>



{if $customer.formclient_image}
    <div class="form-group">
        <label>{l s='Image téléchargée'}:</label>
        <img src="{$link->getBaseLink()}upload/{$customer.formclient_image}" alt="Image" />
    </div>
{/if}
