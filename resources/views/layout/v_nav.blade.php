  <ul class="sidebar-menu" data-widget="tree">
     <li class="header">MAIN NAVIGATION</li>
       <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
        <a href="/dashboard">
          <i class="fa fa-dashboard"></i>
          <span>DASHBOARD</span></a>
   		</li>
@if (auth()->user()->level == 1)


       <li class="{{ request()->is('kriteria') ? 'active' : '' }}">
        <a href="/kriteria">
          <i class="fa fa-list"></i>
          <span>KRITERIA</span></a>
        </li>   
  
       <li class="{{ request()->is('aturan') ? 'active' : '' }}">
        <a href="/aturan">
          <i class="fa fa-gear"></i>
          <span>ATURAN</span></a>
       </li>

       <li class="{{ request()->is('himpunan') ? 'active' : '' }}">
        <a href="/himpunan">
          <i class="fa fa-archive"></i>
          <span>DATA HIMPUNAN</span></a>
       </li>



      <li class="{{ request()->is('perhitungan') ? 'active' : '' }}">
      <a href="/perhitungan">
        <i class="fa fa-calculator"></i>
        <span>PERHITUNGAN</span></a>
      </li>      

@elseif (auth()->user()->level == 2)
<li class="{{ request()->is('user') ? 'active' : '' }}">
  <a href="/user">
    <i class="fa fa-book"></i> 
    <span>user</span></a>
  </li>  

<li class="{{ request()->is('datadiri') ? 'active' : '' }}">
<a href="/datadiri"><i class="fa fa-book"></i> 
  <span>Datadiri</span></a>
</li>

<li class="{{ request()->is('pengajuan') ? 'active' : '' }} ">
  <a href="/pengajuan"><i class="fa fa-book"></i>
    <span>Pengajuan</span></a>
</li>

@endif      

</ul>