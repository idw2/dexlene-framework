<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            {if $page == "welcome"}
                Página inicial
            {elseif $page == "users"}
                Usuários <small>Grupos e premissões</small>
            {/if}    
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="{$request_uri}app/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-desktop"></i>
                {if $page == "welcome"}
                    Boas vindas
                {elseif $page == "users"}
                    Usuários <small>Grupos e premissões</small>
                {/if}
            </li>
        </ol>
    </div>
</div>