<div class="card customer-last-connections-card">
    <h3 class="card-header">
      <i class="material-icons">remove_red_eye</i>
      Informations Supplémentaires
      <span class="badge badge-primary rounded">1</span>
    </h3>
    <div class="card-body">
      <table class="table">
        <thead>
        <tr>
          <th>Societe</th>
          <th>Telephone</th>
          <th>Pays</th>
        </tr>
        </thead>
        <tbody>
           <tr class="customer-last-connection">
           <td class="customer-last-connection-ciete">{if $societe}
    <div class="form-group">
        <div class="controls">{$societe}</div>
    </div>
    {/if}
        </td>
            <td class="customer-last-connection-date"> 
    {if $Telephone}
    <div class="form-group">
            <div class="controls">{$Telephone}</div>
    </div>
    {/if}
         </td>
            <td class="customer-last-connection-pages-viewed">
    {if $Pays}
    <div class="form-group">
       
        <div class="controls">{$Pays}</div>
    </div>
    {/if}</td>
            
          </tr>
                </tbody>
      </table>
    </div>

  
    </div>