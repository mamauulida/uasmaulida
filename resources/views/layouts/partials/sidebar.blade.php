<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link bg-primary">
      <img src="{{ asset('/AdminLTE/dist/img/maulida.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIM APOTEK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @php
                $imagePath = auth()->user()->path_image ? asset('storage/' . auth()->user()->path_image) : asset('images/default-profile.png');
            @endphp
            <img src="{{ $imagePath }}" class="img-circle elevation-2 rounded-circle" style="width: 35px; height: 35px;">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
    </div>
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

                    {{-- Menu Servis --}}
                    <li class="nav-item">
                      <a href="{{ route('pegawai.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-users"></i>
                        <p>
                          Pegawai
                        </p>
                      </a>
                    </li>

                    
                    {{-- Menu Servis --}}
                    <li class="nav-item">
                      <a href="{{ route('jadwal_pegawai.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-users"></i>
                        <p>
                          Jadwal Pegawai
                        </p>
                      </a>
                    </li>

                    {{-- Menu Servis --}}
                    <li class="nav-item">
                      <a href="{{ route('obat.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-boxes"></i>
                        <p>
                          Obat
                        </p>
                      </a>
                    </li>

                     {{-- Menu Servis --}}
                     <li class="nav-item">
                      <a href="{{ route('transaksi.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-box"></i>
                        <p>
                          Transaksi
                        </p>
                      </a>
                    </li>

                     {{-- Menu Servis --}}
                     <li class="nav-item">
                      <a href="{{ route('pelanggan.index') }}" class="nav-link">
                        <i class="nav-icon fas fas fa-users"></i>
                        <p>
                          Pelanggan
                        </p>
                      </a>
                    </li>

                  


          {{-- Pengaturan --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fas fa-user-cog"></i>
              <p>
                Pengaturan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if (auth()->user()->hasRole('admin'))
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>
              @endif
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profil</p>
                </a>
              </li>
            </ul>
          </li> --}}
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>