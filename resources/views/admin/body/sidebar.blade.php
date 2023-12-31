<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('admin.admin_dashboard') }}" class="sidebar-brand">
            <img src="{{ asset('images/uhub-logo.png') }}" alt="logo" width="150px" />
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.admin_dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item nav-category">Contacts</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false"
                    aria-controls="uiComponents">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">Staff Contact</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="uiComponents">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.counselling.show') }}" class="nav-link">Counsellings</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.show') }}" class="nav-link">Faculty Information</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.showTA') }}" class="nav-link">TA Information</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.showLA') }}" class="nav-link">Lab attendant</a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item nav-category">Club</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false"
                    aria-controls="general-pages">
                    <i class="link-icon" data-feather="book"></i>
                    <span class="link-title">Club Details</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="general-pages">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.club.showclubs')}}" class="nav-link">Club List</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.club.add')}}" class="nav-link">Add Club</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item nav-category">Notification</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#messagead" role="button" aria-expanded="false"
                    aria-controls="messagead">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">messeges</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="messagead">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.message.showmesseges')}}" class="nav-link">Message List</a>
                        </li>
                    </ul>
                </div>
            </li>



        </ul>
    </div>
</nav>
