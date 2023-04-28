<div class="sidebar p-20 bg-white p-relative">
            <h3 class="p-relative txt-c mt-0">Admin</h3>
            <ul>
                <li>
                    <a class="{{'redirect'==request()->path()? 'active' : ''}} d-flex df-align-center fs-14 c-black rad-6 p-10" href="{{url('redirect')}}">
                        <i class="fa-regular fa-chart-bar fa-fw"></i>
                        <span class="hide-in-mobile">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="{{'view_demandes'==request()->path()? 'active' : ''}} d-flex df-align-center fs-14 c-black rad-6 p-10" href="{{url('view_demandes')}}">
                        <i class="fa-solid fa-gear"></i>
                        <span class="hide-mobile">les Demandes non traitées </span>
                    </a>
                </li>
                <li>
                    <a class="{{'historique'==request()->path()? 'active' : ''}} d-flex df-align-center fs-14 c-black rad-6 p-10" href="{{url('historique')}}">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <span class="hide-mobile">Historique</span>
                    </a>
                </li>
                <li>
                    <a class="d-flex df-align-center fs-14 c-black rad-6 p-10" href="/out">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="hide-mobile">se déconnecter</span>
                    </a>
                </li>
            
        </ul>
</div>

