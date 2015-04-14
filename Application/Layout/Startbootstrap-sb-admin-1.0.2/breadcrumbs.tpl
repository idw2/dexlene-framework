<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            {if $page == "AppController/welcome"}
                Página inicial
            {elseif $page == "UsersController/index"}
                Usuários <small>Grupos e premissões</small>
            {/if}    
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="{$request_uri}app/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-desktop"></i>
                {if $page == "AppController/welcome"}
                    Boas vindas
                {elseif $page == "UsersController/index"}
                    Usuários <small>Grupos e premissões</small>
                {elseif $page == "UsersController/add"}
                    Usuários <small>Novo usuário</small>    
                {/if}
            </li>
        </ol>
    </div>
</div>