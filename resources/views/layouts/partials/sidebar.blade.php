<div class="sidebar" data-color="black" data-active-color="danger">
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/logo-small.png">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal" style="font-weight: bold">
           ZOUNKONOU
            <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active ">
                <a href="{{ route('listUser') }}">
                    <i class="nc-icon nc-tile-56" style="color: #0f0"></i>
                    <p style="color: #0f0; font-weight:bold">Agents de collecte</p>
                </a>
            </li>
            <li>
               {{--  <a href="{{route('register')}}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Ajouter un agent</p>
                </a> --}}
            </li>
            <li>
                <a href="{{route('listePoubelle')}}">
                    <i class="nc-icon nc-tile-56" style="color: #0f0; font-weight:bold"></i>
                    <p style="color: #0f0; font-weight:bold">Poubelles</p>
                </a>
            </li>
            <li>
                <a href="{{route('map')}}"  >
                    <i class="nc-icon nc-pin-3" style="color: #0f0; font-weight:bold"></i>
                    <p style="color: #0f0; font-weight:bold">Localisations
                    </p>
                </a>
            </li>
            <li>
                <a href="{{route('notification')}}">
                    <i class="nc-icon nc-bell-55" style="color: #0f0; font-weight:bold"></i>
                    <p style="color: #0f0; font-weight:bold">Notifications</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="./upgrade.html">
                  {{--   <i class="nc-icon nc-spaceship"></i>
                    <p>Upgrade to PRO</p> --}}
                </a>
            </li>
        </ul>
    </div>
</div>
