<li class="nav-item px-0">
    <a class="nav-link" href="#"><h5>Dashboard Ciah2o</h5></a>
</li>
<li class="nav-item px-0">
    <a class="nav-link" href="/"><i class="fas fa-house"></i>Principal</a>
</li>
<li class="nav-item  px-0">
    <a class="nav-link nav-cadastro" href="#"
       data-bs-toggle="collapse"
       data-bs-target="#cadastro-collapse" >
        <i class="fas fa-barcode text"></i>Cadastros <i class="fas fa-caret-right dropdown m-dropdow"></i>
    </a>
    <div class="collapse " id="cadastro-collapse">
        <ul class="nav nav-sm flex-column bg-item_menu_color">
            <li class="sub-item">
                <a class="nav-link" href="{{ route('user.index') }}"><i class="fas fa-user"></i><span class="text-font_menu_color">Usuarios</span></a>
            </li>
            <li class="sub-item">
                <a class="nav-link" href="{{ route('produto.index') }}"><i class="fas fa-box"></i><span class="text-font_menu_color">Produtos</span></a>
            </li>
            <li class="sub-item">
                <a class="nav-link" href="#"><i class="fas fa-calendar-day"></i><span class="text-font_menu_color">Eventos</span></a>
            </li>
            <li class="sub-item">
                <a class="nav-link" href="#"><i class="fas fa-ticket"></i><span class="text-font_menu_color">Tickets</span></a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item px-0">
    <a class="nav-link nav-config" href="#"
       data-bs-toggle="collapse"
       data-bs-target="#config-collapse"><i class="fas fa-gear"></i>Configuração<i class="fas fa-caret-right dropdown m-dropdow"></i>
    </a>
    <div class="collapse " id="config-collapse">
        <ul class="nav nav-sm flex-column bg-item_menu_color">
            <li class="sub-item">
                <a class="nav-link" href="#"><i class="fas fa-envelope"></i><span class="text-font_menu_color">Convite</span></a>
            </li>
            <li class="sub-item">
                <a class="nav-link" href="#"><i class="fas fa-bullhorn"></i><span class="text-font_menu_color">Divulgador</span></a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item px-0">
    <a class="nav-link nav-config" href="#"
       data-bs-toggle="collapse"
       data-bs-target="#security-collapse">
        <i class="fas fa-user-group"></i>Segurança<i class="fas fa-caret-right dropdown m-dropdow"></i>
    </a>
    <div class="collapse " id="security-collapse">
        <ul class="nav nav-sm flex-column bg-item_menu_color">
            <li class="sub-item">
                <a class="nav-link" href="{{ route('lista.roles') }}"><i class="fas fa-right-from-bracket"></i><span class="text-font_menu_color">Cargo</span></a>
            </li>
            <li class="sub-item">
                <a class="nav-link" href="#"><i class="fas fa-right-from-bracket"></i><span class="text-font_menu_color">Permissão</span></a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item px-0">
    <a class="nav-link" href="#"><i class="fas fa-cash-register"></i>Vendas</a>
</li>
<li class="nav-item px-0">
    <a class="nav-link" href="#"><i class="fas fa-file-lines"></i>Relatório</a>
</li>
