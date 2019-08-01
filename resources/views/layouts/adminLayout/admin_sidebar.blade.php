
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class=""><a href="{{ url('/admin/dashboard') }}"><i class="icon icon-home"></i> <span>Admin Dashboard</span></a> </li>
    
       



    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Add</span></a>
      <ul>
        <li><a href="{{('/admin/staff')}}">Warden</a></li>
      </ul>
    </li>





    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Security</span></a>
      <ul>
        <li><a href="{{('/admin/setting')}}">Update Account</a></li>
        <li><a href="{{('/warden/add-student')}}">Warden logs</a></li>
      </ul>
    </li>
   
  </ul>
</div>