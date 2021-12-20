<?php if(isset($user)){ ?>
<li>
    <a href="?option=painel">
        <i class="fa fa-desktop"></i>
        Painel Admin
    </a>
</li>

<li class="active">
    <a href="#homeEmpresas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fa fa-bank"></i>
        Empresas
    </a>
    <ul class="collapse list-unstyled" id="homeEmpresas">
        <li>
            <a href="?option=add_empresa"><i class="fa fa-plus"></i> Cadastrar</a>
        </li>
        <li>
            <a href="?option=manager_empresa"><i class="fa fa-cogs"></i> Gerenciar </a>
        </li>        
    </ul>
</li>

<li class="active">
    <a href="#homeUsers" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fa fa-users"></i>
        Colaboradores
    </a>
    <ul class="collapse list-unstyled" id="homeUsers">
        <li>
            <a href="?option=add_colaborador"><i class="fa fa-plus"></i> Cadastrar</a>
        </li>
        <li>
            <a href="?option=manager_colaborador"><i class="fa fa-cogs"></i> Gerenciar </a>
        </li>        
    </ul>
</li>



<li class="active">
    <a href="#homeFornecedor" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fa fa-credit-card-alt"></i>
        Fornecedor
    </a>
    <ul class="collapse list-unstyled" id="homeFornecedor">
        <li>
            <a href="?option="><i class="fa fa-plus"></i> Cadastrar</a>
        </li>
        <li>
            <a href="?option="><i class="fa fa-cogs"></i> Gerenciar </a>
        </li>        
    </ul>
</li>


<li>
    <a href="?option=base">
        <i class="fa fa-user"></i>
        Perfis
    </a>
</li>
<?php }elseif(isset($user) and $user["profile_page"]=="func.php") { ?>


<?php } ?>
<li>
    <a href="controllers/logout.php">
        <i class="fa fa-power-off"></i>
        Logout
    </a>
</li>