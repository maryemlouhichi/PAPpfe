
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{url("/home")}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Tableau De Bord
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDepartmentLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-sitemap"></i></div>
                    {{ __('Informations Departement') }}
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseDepartmentLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route("add-department")}}">{{ __('Ajouter Departement') }}</a>
                        <a class="nav-link" href="{{route("manage-department")}}">{{ __('Gestion Departements') }}</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManagerLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                     {{ __('Informations Team Leader') }}
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseManagerLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route("add-manager")}}">{{ __('Ajouter Team Leader') }}</a>
                        <a class="nav-link" href="{{route("manage-manager")}}">{{ __('Gestion Team Leader') }}</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTaskLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-tasks"></i></div>
                    {{ __('Informations Affectation') }}
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTaskLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route("add-task")}}">{{ __('Ajouter Affectation') }}</a>
                        <a class="nav-link" href="{{route("manage-task")}}">{{ __('Gestion Affectations') }}</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployeeLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    {{ __('Informations Collaborateur') }}
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseEmployeeLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route("manage-employee")}}">{{ __('Gestion Collaborateurs') }}</a>
                        <a class="nav-link" href="{{route('show-employee-rating')}}">{{ __('Evaluation Collaborateur') }}</a>
                    </nav>
                </div>
{{--                <div class="sb-sidenav-menu-heading">Addons</div>--}}
{{--                <a class="nav-link" href="charts.html">--}}
{{--                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>--}}
{{--                    Charts--}}
{{--                </a>--}}
{{--                <a class="nav-link" href="">--}}
{{--                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>--}}
{{--                    {{"Manage Rating"}}--}}
{{--                </a>--}}
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Connecté en Tant que:</div>
            Manager
        </div>
    </nav>
</div>
