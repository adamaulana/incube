<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
                <li class="sidebar-item {{ (request()->is('/')) ? 'selected' : '' }}" > <a data-locs="{{url('/')}}" class="sidebar-link waves-effect waves-dark sidebar-link {{ (request()->is('/')) ? 'active' : '' }}"
                         aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu" >Dashboard</span></a></li>
                @if(@session('id_produk'))
                <li class="sidebar-item {{ (request()->is('produk')) ? 'selected' : '' }}"> <a data-locs="{{url('/produk')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-apps"></i><span
                class="hide-menu">Produk</span></a></li>      
                @endif
                <li class="sidebar-item {{ (request()->is('feedback')) ? 'selected' : '' }}"> <a data-locs="{{url('/feedback')}}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"><i class="mdi mdi-comment-check"></i><span
                class="hide-menu">Feedback Mentor</span></a></li>                             
                <li class="sidebar-item {{ (request()->is('penilaian')) ? 'selected' : '' }}"> <a data-locs="{{url('/penilaian')}}" class="sidebar-link waves-effect waves-dark sidebar-link"
                         aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                            class="hide-menu">Penilaian</span></a></li>    
                <li class="sidebar-item {{ (request()->is('tentang')) ? 'selected' : '' }}"> <a data-locs="{{url('/tentang')}}" class="sidebar-link waves-effect waves-dark sidebar-link"
                         aria-expanded="false"><i class="mdi mdi-alert-circle-outline"></i><span
                            class="hide-menu">Tentang Aplikasi</span></a></li>             
                <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                         aria-expanded="false"><i class="mdi mdi-border-inside"></i><span
                            class="hide-menu">Mentoring</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                         aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span
                            class="hide-menu">Pengujian</span></a></li>                            
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                         aria-expanded="false"><i class="mdi mdi-rocket"></i><span
                            class="hide-menu">Launching</span></a></li> -->
                            
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>