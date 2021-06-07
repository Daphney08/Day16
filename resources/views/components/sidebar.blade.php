<div style="height:88vh;" class="bg-danger d-flex flex-column flex-shrink-0 p-3 bg-danger">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                    <span class="fs-4 text-white">Sidebar</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                        <a href="/dashboard" class=" text-white nav-link @if($active == 'dashboard') active @endif">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                            <i class="fa fa-home"></i>
                            Return
                            </a>
                        </li>
                        <li>
                            <a href="/departments" class=" text-white nav-link @if($active == 'departments') active @endif">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                            <i class="fa fa-building"></i>
                            Delivery
                            </a>
                        </li>
                        <li>
                            <a href="/employees" class=" text-white nav-link @if($active == 'employees') active @endif">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                            <i class="fa fa-users"></i>
                            Transportation
                            </a>
                        </li>
                        <li>
                            <a href="/loans" class=" text-white nav-link @if($active == 'loans') active @endif">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            <i class="fa fa-money"></i>
                            Distribution
                            </a>
                        </li>
                        <li>
                            <a href="/leaves" class=" text-white nav-link @if($active == 'leaves') active @endif">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                            <i class="fa fa-user"></i>
                           Asset
                            </a>
                        </li>
                        <li>
                            <a href="/deductions" class=" text-white nav-link @if($active == 'deductions') active @endif">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                            <i class="fa fa-list"></i>
                            Storage
                            </a>
                        </li>
                        <li>
                            <a href="/timekeeping" class=" text-white nav-link @if($active == 'timekeeping') active @endif">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                            <i class="fa fa-clock-o"></i>
                            Supplie
                            </a>
                        </li>
                       
                    </ul>
                    <hr>
                    <div class="dropdown">
                    <a href="#" class=" text-white d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScFg5JWha4MBxppXUaL0A3ZAtPAwakciulvQ&usqp=CAU" alt="" width="32" height="32" class="rounded-circle me-2">
                        <strong>mdo</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
    </div>
</div>