

<div class="row">
    <div class="col-lg-6" style="line-height: 6;">
        <button type="button" class="btn btn-lg btn-default">Novo usuário</button>
        <button type="button" class="btn btn-lg btn-default">Grupos</button>
    </div>
    <div class="col-lg-6" style="text-align: right;">
        {$paginator}
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        {$th}
                    </tr>
                </thead>
                <tbody>
                    {counter assign=i start=0 print=false} 
                    {foreach item=row from=$rows}
                        {if $i == 0}
                            <tr class="active">
                            {elseif $i == 1}
                            <tr class="success">
                            {elseif $i == 2}
                            <tr class="warning">
                            {elseif $i == 3}
                            <tr class="danger">
                            {elseif $i == 4}
                            <tr>
                                {counter assign=i start=0 print=false} 
                            {/if}

                            <td>{$row->created}</td>
                            <td>{$row->modified}</td>
                            <td>{$row->name}</td>
                            <td>{$row->username}</td>
                            <td>{$row->email}</td>
                            <td>{$row->ordem}</td>
                            <td>{$row->status}</td>
                            <td>{$row->owner}</td>
                        </tr>
                        {counter}
                    {/foreach}
                </tbody>
            </table>
        </div>       
    </div>
</div>
<div class="row">
    <div class="col-lg-6" style="line-height: 6;">
        <button type="button" class="btn btn-lg btn-default">Novo usuário</button>
        <button type="button" class="btn btn-lg btn-default">Grupos</button>
    </div>
    <div class="col-lg-6" style="text-align: right;">
        {$paginator}
    </div>
</div>
<!-- /.row -->