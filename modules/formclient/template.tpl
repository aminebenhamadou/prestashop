{if $confirmation_message}
    <div class="alert alert-success">{$confirmation_message}</div>
{/if}
{if $error_message}
    <div class="alert alert-danger">{$error_message}</div>
{/if}

<form action="{$form_action}" method="post" enctype="multipart/form-data">
    <input type="text" name="societe" placeholder="Societe">
    <input type="text" name="telephone" placeholder="Telephone">
    <input type="text" name="pays" placeholder="Pays">
    <input type="file" name="image">
    <button type="submit" name="submitFormClient">Enregistrer</button>
</form>
