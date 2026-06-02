<?php
$setting = App\Models\dashboard\Setting::where('id', 1)->first();
?>
<button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
<div class="sidebar-scroll">
    <div class="user-account">
        <img src="{{ url('/') }}/dashboard/assets/images/user.png" class="rounded-circle user-photo"
            alt="User Profile Picture">
        <div class="dropdown">
            <span>Welcome,</span>
            <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pamela
                    Petrus</strong></a>
            <ul class="dropdown-menu dropdown-menu-right account">
                <li><a href=""><i class="icon-user"></i>My Profile</a></li>
                <li><a href=""><i class="icon-envelope-open"></i>Messages</a></li>
                <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                <li class="divider"></li>
                <li><a href=""><i class="icon-power"></i>Logout</a></li>
                {{-- <li><a href="{{ route('dashboard.auth.user.show', $logged_in_user->id) }}"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="{{ route('dashboard.auth.app.inbox') }}"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('frontend.auth.logout') }}"><i class="icon-power"></i>Logout</a></li> --}}
            </ul>
        </div>
        <hr>
        <ul class="row list-unstyled">
            <li class="col-4">
                <small>Sales</small>
                <h6>561</h6>
            </li>
            <li class="col-4">
                <small>Order</small>
                <h6>920</h6>
            </li>
            <li class="col-4">
                <small>Revenue</small>
                <h6>$23B</h6>
            </li>
        </ul>
    </div>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a>
        </li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a>
        </li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content padding-0">
        <div class="tab-pane active" id="menu">
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu li_animation_delay">
                    <li
                        class="{{ Request::is('admin/dashboard') ? 'active' : '' }}{{ Request::is('admin/h_menu') ? 'active' : '' }}{{ Request::is('admin/iot') ? 'active' : '' }}{{ Request::is('admin/demographic') ? 'active' : '' }}{{ Request::is('admin/project_board') ? 'active' : '' }}{{ Request::is('admin/crypto_dashboard') ? 'active' : '' }}{{ Request::is('admin/eCommerce') ? 'active' : '' }}">
                        <a href="#Dashboard" class="has-arrow"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                        <ul>
                            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a
                                    href="{{ route('dashboard.dashboard') }}">Analytical</a></li>
                            <li class="{{ Request::is('admin/h_menu') ? 'active' : '' }}"><a
                                    href="{{ route('dashboard.h_menu') }}">Analytical H-Menu</a></li>
                            <li class="{{ Request::is('admin/iot') ? 'active' : '' }}"><a
                                    href="{{ route('dashboard.iot') }}">IoT Dashboard</a></li>
                            <li class="{{ Request::is('admin/demographic') ? 'active' : '' }}"><a
                                    href="{{ route('dashboard.demographic') }}">Demographic</a></li>
                            <li class="{{ Request::is('admin/project_board') ? 'active' : '' }}"><a
                                    href="{{ route('dashboard.project_board') }}">Project Board</a></li>
                            <li class="{{ Request::is('admin/crypto_dashboard') ? 'active' : '' }}"><a
                                    href="{{ route('dashboard.crypto_dashboard') }}">Crypto Dashboard</a></li>
                            <li class="{{ Request::is('admin/eCommerce') ? 'active' : '' }}"><a
                                    href="{{ route('dashboard.eCommerce') }}">eCommerce</a></li>
                        </ul>
                    </li>
                    {{-- @if ($logged_in_user->isAdmin()) --}}
                    <li
                        class="{{ Request::is('admin/auth/user*') ? 'active' : '' }}{{ Request::is('admin/auth/role*') ? 'active' : '' }}">
                        <a href="#App" class="has-arrow"><i class="fa fa-lock"></i><span>Access</span></a>
                        <ul>
                            <li class="{{ Request::is('admin/auth/user*') ? 'active' : '' }}"><a
                                    href="">@lang('labels.backend.access.users.management')</a></li>
                            <li class="{{ Request::is('admin/auth/role*') ? 'active' : '' }}"><a
                                    href="">@lang('labels.backend.access.roles.management')</a></li>
                            {{-- <li class="{{Request::is('admin/auth/user*') ? 'active' : ''}}"><a href="{{ route('dashboard.auth.user.index') }}">@lang('labels.backend.access.users.management')</a></li>
                                    <li class="{{Request::is('admin/auth/role*') ? 'active' : ''}}"><a href="{{ route('dashboard.auth.role.index') }}">@lang('labels.backend.access.roles.management')</a></li> --}}
                        </ul>
                    </li>
                    {{-- @endif --}}
                    <li
                        class="{{ Request::is('admin/auth/inbox') ? 'active' : '' }}{{ Request::is('admin/auth/chat') ? 'active' : '' }}{{ Request::is('admin/auth/calendar') ? 'active' : '' }}{{ Request::is('admin/auth/contact') ? 'active' : '' }}{{ Request::is('admin/auth/contactGrid') ? 'active' : '' }}{{ Request::is('admin/auth/taskboard') ? 'active' : '' }}{{ Request::is('admin/auth/blogDashboard') ? 'active' : '' }}{{ Request::is('admin/auth/blogPost') ? 'active' : '' }}{{ Request::is('admin/auth/blogList') ? 'active' : '' }}{{ Request::is('admin/auth/blogDetails') ? 'active' : '' }}{{ Request::is('admin/auth/fileDashboard') ? 'active' : '' }}{{ Request::is('admin/auth/fileDocuments') ? 'active' : '' }}{{ Request::is('admin/auth/fileMedia') ? 'active' : '' }}{{ Request::is('admin/auth/fileImages') ? 'active' : '' }}">

                        <a href="#App" class="has-arrow"><i class="fa fa-th-large"></i><span>Ready App</span></a>
                        <ul>
                            <li class="{{ Request::is('admin/auth/inbox') ? 'active' : '' }}"><a
                                    href="">Inbox</a></li>
                            <li class="{{ Request::is('admin/auth/chat') ? 'active' : '' }}"><a href="">Chat</a>
                            </li>
                            <li class="{{ Request::is('admin/auth/calendar') ? 'active' : '' }}"><a
                                    href="">Calendar</a></li>
                            <li class="{{ Request::is('admin/auth/contact') ? 'active' : '' }}"><a
                                    href="">Contact list</a></li>
                            <li class="{{ Request::is('admin/auth/contactGrid') ? 'active' : '' }}"><a
                                    href="">Contact Card <span
                                        class="badge badge-warning float-right">New</span></a></li>
                            <li class="{{ Request::is('admin/auth/taskboard') ? 'active' : '' }}"><a
                                    href="">Taskboard</a></li>
                            {{-- **blogs** --}}
                            <li
                                class="{{ Request::is('admin/auth/blogDashboard') ? 'active' : '' }}{{ Request::is('admin/auth/blogPost') ? 'active' : '' }}{{ Request::is('admin/auth/blogList') ? 'active' : '' }}{{ Request::is('admin/auth/blogDetails') ? 'active' : '' }}">
                                <a href="javascript:void(0);">
                                    <span>
                                        Blog
                                    </span>
                                </a>
                                <ul>
                                    <li class="{{ Request::is('admin/auth/blogDashboard') ? 'active' : '' }}">
                                        <a href="">
                                            Dashboard
                                        </a>
                                    </li>
                                    {{-- **create blog** --}}
                                    <li class="{{ Request::is('admin/auth/blogPost') ? 'active' : '' }}">
                                        <a href="">
                                            New Post
                                        </a>
                                    </li>
                                    {{-- **blog list** --}}
                                    <li class="{{ Request::is('admin/auth/blogList') ? 'active' : '' }}">
                                        <a href="">
                                            Blog List
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('admin/auth/blogDetails') ? 'active' : '' }}">
                                        <a href="">
                                            Blog Detail
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="{{ Request::is('admin/auth/fileDashboard') ? 'active' : '' }}{{ Request::is('admin/auth/fileDocuments') ? 'active' : '' }}{{ Request::is('admin/auth/fileMedia') ? 'active' : '' }}{{ Request::is('admin/auth/fileImages') ? 'active' : '' }}">
                                <a href="javascript:void(0);"><span>File Manager</span></a>
                                <ul>
                                    <li class="{{ Request::is('admin/auth/fileDashboard') ? 'active' : '' }}"><a
                                            href="">Dashboard</a></li>
                                    <li class="{{ Request::is('admin/auth/fileDocuments') ? 'active' : '' }}"><a
                                            href="">Documents</a></li>
                                    <li class="{{ Request::is('admin/auth/fileMedia') ? 'active' : '' }}"><a
                                            href="">Media</a></li>
                                    <li class="{{ Request::is('admin/auth/fileImages') ? 'active' : '' }}"><a
                                            href="">Images</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="{{ Request::is('admin/auth/widgetStatistics') ? 'active' : '' }}{{ Request::is('admin/auth/widgetData') ? 'active' : '' }}{{ Request::is('admin/auth/widgetChart') ? 'active' : '' }}{{ Request::is('admin/auth/widgetWeather') ? 'active' : '' }}{{ Request::is('admin/auth/widgetSocial') ? 'active' : '' }}{{ Request::is('admin/auth/widgetBlog') ? 'active' : '' }}{{ Request::is('admin/auth/widgeteCommerce') ? 'active' : '' }}">
                        <a href="#Widgets" class="has-arrow"><i
                                class="fa fa-puzzle-piece"></i><span>Widgets</span></a>
                        <ul>
                            <li class="{{ Request::is('admin/auth/widgetStatistics') ? 'active' : '' }}"><a
                                    href="">Statistics</a></li>
                            <li class="{{ Request::is('admin/auth/widgetData') ? 'active' : '' }}"><a
                                    href="">Data</a></li>
                            <li class="{{ Request::is('admin/auth/widgetChart') ? 'active' : '' }}"><a
                                    href="">Chart</a></li>
                            <li class="{{ Request::is('admin/auth/widgetWeather') ? 'active' : '' }}"><a
                                    href="">Weather</a></li>
                            <li class="{{ Request::is('admin/auth/widgetSocial') ? 'active' : '' }}"><a
                                    href="">Social</a></li>
                            <li class="{{ Request::is('admin/auth/widgetBlog') ? 'active' : '' }}"><a
                                    href="">Blog</a></li>
                            <li class="{{ Request::is('admin/auth/widgeteCommerce') ? 'active' : '' }}"><a
                                    href="">eCommerce</a></li>
                        </ul>
                    </li>
                    <li
                        class="{{ Request::is('admin/auth/typoGraphy') ? 'active' : '' }}{{ Request::is('admin/auth/tabs') ? 'active' : '' }}{{ Request::is('admin/auth/buttons') ? 'active' : '' }}{{ Request::is('admin/auth/bootstrap') ? 'active' : '' }}{{ Request::is('admin/auth/icons') ? 'active' : '' }}{{ Request::is('admin/auth/notifications') ? 'active' : '' }}{{ Request::is('admin/auth/colors') ? 'active' : '' }}{{ Request::is('admin/auth/dialogs') ? 'active' : '' }}{{ Request::is('admin/auth/listGroup') ? 'active' : '' }}{{ Request::is('admin/auth/mediaObject') ? 'active' : '' }}{{ Request::is('admin/auth/modals') ? 'active' : '' }}{{ Request::is('admin/auth/nestable') ? 'active' : '' }}{{ Request::is('admin/auth/progressBars') ? 'active' : '' }}{{ Request::is('admin/auth/rangeSliders') ? 'active' : '' }}{{ Request::is('admin/auth/treeview') ? 'active' : '' }}">
                        <a href="#uiElements" class="has-arrow"><i class="fa fa-diamond"></i><span>UI
                                Elements</span></a>
                        <ul>
                            <li class="{{ Request::is('admin/auth/typoGraphy') ? 'active' : '' }}"><a
                                    href="">Typography</a></li>
                            <li class="{{ Request::is('admin/auth/tabs') ? 'active' : '' }}"><a
                                    href="">Tabs</a></li>
                            <li class="{{ Request::is('admin/auth/buttons') ? 'active' : '' }}"><a
                                    href="">Buttons</a></li>
                            <li class="{{ Request::is('admin/auth/bootstrap') ? 'active' : '' }}"><a
                                    href="">Bootstrap UI</a></li>
                            <li class="{{ Request::is('admin/auth/icons') ? 'active' : '' }}"><a
                                    href="">Icons</a></li>
                            <li class="{{ Request::is('admin/auth/notifications') ? 'active' : '' }}"><a
                                    href="">Notifications</a></li>
                            <li class="{{ Request::is('admin/auth/colors') ? 'active' : '' }}"><a
                                    href="">Colors</a></li>
                            <li class="{{ Request::is('admin/auth/dialogs') ? 'active' : '' }}"><a
                                    href="">Dialogs</a></li>
                            <li class="{{ Request::is('admin/auth/listGroup') ? 'active' : '' }}"><a
                                    href="">List Group</a></li>
                            <li class="{{ Request::is('admin/auth/mediaObject') ? 'active' : '' }}"><a
                                    href="">Media Object</a></li>
                            <li class="{{ Request::is('admin/auth/modals') ? 'active' : '' }}"><a
                                    href="">Modals</a></li>
                            <li class="{{ Request::is('admin/auth/nestable') ? 'active' : '' }}"><a
                                    href="">Nestable</a></li>
                            <li class="{{ Request::is('admin/auth/progressBars') ? 'active' : '' }}"><a
                                    href="">Progress Bars</a></li>
                            <li class="{{ Request::is('admin/auth/rangeSliders') ? 'active' : '' }}"><a
                                    href="">Range Sliders</a></li>
                            <li class="{{ Request::is('admin/auth/treeview') ? 'active' : '' }}"><a
                                    href="">Treeview</a></li>
                        </ul>
                    </li>
                    <li
                        class="{{ Request::is('admin/auth/apex') ? 'active' : '' }}{{ Request::is('admin/auth/c3') ? 'active' : '' }}{{ Request::is('admin/auth/morris') ? 'active' : '' }}{{ Request::is('admin/auth/flot') ? 'active' : '' }}{{ Request::is('admin/auth/chartJs') ? 'active' : '' }}{{ Request::is('admin/auth/knob') ? 'active' : '' }}{{ Request::is('admin/auth/sparkline') ? 'active' : '' }}{{ Request::is('admin/auth/peity') ? 'active' : '' }}{{ Request::is('admin/auth/gauges') ? 'active' : '' }}">
                        <a href="#charts" class="has-arrow"><i class="fa fa-area-chart"></i><span>Charts</span></a>
                        <ul>
                            <li class="{{ Request::is('admin/auth/apex') ? 'active' : '' }}"><a
                                    href="">Apex</a> </li>
                            <li class="{{ Request::is('admin/auth/c3') ? 'active' : '' }}"><a href="">C3
                                    Charts</a></li>
                            <li class="{{ Request::is('admin/auth/morris') ? 'active' : '' }}"><a
                                    href="">Morris</a> </li>
                            <li class="{{ Request::is('admin/auth/flot') ? 'active' : '' }}"><a
                                    href="">Flot</a> </li>
                            <li class="{{ Request::is('admin/auth/chartJs') ? 'active' : '' }}"><a
                                    href="">ChartJS</a> </li>
                            <li class="{{ Request::is('admin/auth/knob') ? 'active' : '' }}"><a
                                    href="">Jquery Knob</a> </li>
                            <li class="{{ Request::is('admin/auth/sparkline') ? 'active' : '' }}"><a
                                    href="">Sparkline Chart</a></li>
                            <li class=" {{ Request::is('admin/auth/peity') ? 'active' : '' }}"><a
                                    href="">Peity</a></li>
                            <li class="{{ Request::is('admin/auth/gauges') ? 'active' : '' }}"><a
                                    href="">Gauges</a></li>
                        </ul>
                    </li>
                    <li
                        class="{{ Request::is('admin/auth/validation') ? 'active' : '' }}{{ Request::is('admin/auth/advanced') ? 'active' : '' }}{{ Request::is('admin/auth/basic') ? 'active' : '' }}{{ Request::is('admin/auth/wizard') ? 'active' : '' }}{{ Request::is('admin/auth/dragdropupload') ? 'active' : '' }}{{ Request::is('admin/auth/cropping') ? 'active' : '' }}{{ Request::is('admin/auth/summernote') ? 'active' : '' }}{{ Request::is('admin/auth/editors') ? 'active' : '' }}{{ Request::is('admin/auth/markdown') ? 'active' : '' }}">
                        <a href="#forms" class="has-arrow"><i class="fa fa-pencil"></i><span>Forms</span></a>
                        <ul>
                            <li class="{{ Request::is('admin/auth/validation') ? 'active' : '' }}"><a
                                    href=" ">Form Validation</a></li>
                            <li class="{{ Request::is('admin/auth/advanced') ? 'active' : '' }}"><a
                                    href=" ">Advanced Elements</a></li>
                            <li class="{{ Request::is('admin/auth/basic') ? 'active' : '' }}"><a
                                    href="">Basic Elements</a></li>
                            <li class="{{ Request::is('admin/auth/wizard') ? 'active' : '' }}"><a
                                    href="">Form Wizard</a></li>
                            <li class="{{ Request::is('admin/auth/dragdropupload') ? 'active' : '' }}"><a
                                    href="">Drag &amp; Drop Upload</a></li>
                            <li class="{{ Request::is('admin/auth/cropping') ? 'active' : '' }}"><a
                                    href="">Image Cropping</a></li>
                            <li class="{{ Request::is('admin/auth/summernote') ? 'active' : '' }}"><a
                                    href="">Summernote</a></li>
                            <li class="{{ Request::is('admin/auth/editors') ? 'active' : '' }}"><a
                                    href="">CKEditor</a></li>
                            <li class="{{ Request::is('admin/auth/markdown') ? 'active' : '' }}"><a
                                    href="">Markdown</a></li>
                        </ul>
                    </li>
                    <li
                        class="{{ Request::is('admin/auth/tableBasic') ? 'active' : '' }}{{ Request::is('admin/auth/normal') ? 'active' : '' }}{{ Request::is('admin/auth/datatable') ? 'active' : '' }}{{ Request::is('admin/auth/editable') ? 'active' : '' }}{{ Request::is('admin/auth/color') ? 'active' : '' }}{{ Request::is('admin/auth/filter') ? 'active' : '' }}{{ Request::is('admin/auth/dragger') ? 'active' : '' }}">
                        <a href="#Tables" class="has-arrow"><i class="fa fa-table"></i><span>Tables</span></a>
                        <ul>
                            <li class="{{ Request::is('admin/auth/tableBasic') ? 'active' : '' }}"><a
                                    href="">Tables Example<span
                                        class="badge badge-info float-right">New</span></a> </li>
                            <li class="{{ Request::is('admin/auth/normal') ? 'active' : '' }}"><a
                                    href="">Normal Tables</a> </li>
                            <li class="{{ Request::is('admin/auth/datatable') ? 'active' : '' }}"><a
                                    href="">Jquery Datatables</a> </li>
                            <li class="{{ Request::is('admin/auth/editable') ? 'active' : '' }}"><a
                                    href="">Editable Tables</a> </li>
                            <li class="{{ Request::is('admin/auth/color') ? 'active' : '' }}"><a
                                    href="">Tables Color</a> </li>
                            <li class="{{ Request::is('admin/auth/filter') ? 'active' : '' }}"><a
                                    href="">Table Filter <span
                                        class="badge badge-info float-right">New</span></a> </li>
                            <li class="{{ Request::is('admin/auth/dragger') ? 'active' : '' }}"><a
                                    href="">Table dragger <span
                                        class="badge badge-info float-right">New</span></a> </li>
                        </ul>
                    </li>
                    <li
                        class="{{ Request::is('admin/auth/blank') ? 'active' : '' }}{{ Request::is('admin/auth/profile') ? 'active' : '' }}{{ Request::is('admin/auth/profile2') ? 'active' : '' }}{{ Request::is('admin/auth/gallery') ? 'active' : '' }}{{ Request::is('admin/auth/gallery2') ? 'active' : '' }}{{ Request::is('admin/auth/timeline') ? 'active' : '' }}{{ Request::is('admin/auth/timelineH') ? 'active' : '' }}{{ Request::is('admin/auth/pricing') ? 'active' : '' }}{{ Request::is('admin/auth/invoices') ? 'active' : '' }}{{ Request::is('admin/auth/invoices2') ? 'active' : '' }}{{ Request::is('admin/auth/results') ? 'active' : '' }}{{ Request::is('admin/auth/helperClass') ? 'active' : '' }}{{ Request::is('admin/auth/board') ? 'active' : '' }}{{ Request::is('admin/auth/list') ? 'active' : '' }}{{ Request::is('admin/auth/maintenance') ? 'active' : '' }}{{ Request::is('admin/auth/testimonials') ? 'active' : '' }}{{ Request::is('admin/auth/faq') ? 'active' : '' }}">
                        <a href="#Pages" class="has-arrow"><i class="fa fa-file"></i><span>Extra Pages</span></a>
                        <ul>
                            <li class="{{ Request::is('admin/auth/blank') ? 'active' : '' }}"><a
                                    href="">Blank Page</a> </li>
                            <li class="{{ Request::is('admin/auth/profile') ? 'active' : '' }}"><a
                                    href="">Profile <span class="badge badge-default float-right">v1</span></a>
                            </li>
                            <li class="{{ Request::is('admin/auth/profile2') ? 'active' : '' }}"><a
                                    href="">Profile <span class="badge badge-warning float-right">v2</span></a>
                            </li>
                            <li class="{{ Request::is('admin/auth/gallery') ? 'active' : '' }}"><a
                                    href="">Image Gallery <span
                                        class="badge badge-default float-right">v1</span></a> </li>
                            <li class="{{ Request::is('admin/auth/gallery2') ? 'active' : '' }}"><a
                                    href="">Image Gallery <span
                                        class="badge badge-warning float-right">v2</span></a> </li>
                            <li class="{{ Request::is('admin/auth/timeline') ? 'active' : '' }}"><a
                                    href="">Timeline</a></li>
                            <li class="{{ Request::is('admin/auth/timelineH') ? 'active' : '' }}"><a
                                    href="">Horizontal Timeline</a></li>
                            <li class="{{ Request::is('admin/auth/pricing') ? 'active' : '' }}"><a
                                    href="">Pricing</a></li>
                            <li class="{{ Request::is('admin/auth/invoices') ? 'active' : '' }}"><a
                                    href="">Invoices</a></li>
                            <li class="{{ Request::is('admin/auth/invoices2') ? 'active' : '' }}"><a
                                    href="">Invoices <span
                                        class="badge badge-warning float-right">v2</span></a></li>
                            <li class="{{ Request::is('admin/auth/results') ? 'active' : '' }}"><a
                                    href="">Search Results</a></li>
                            <li class="{{ Request::is('admin/auth/helperClass') ? 'active' : '' }}"><a
                                    href="">Helper Classes</a></li>
                            <li class="{{ Request::is('admin/auth/board') ? 'active' : '' }}"><a
                                    href="">Teams Board</a></li>
                            <li class="{{ Request::is('admin/auth/list') ? 'active' : '' }}"><a
                                    href="">Projects List</a></li>
                            <li class="{{ Request::is('admin/auth/maintenance') ? 'active' : '' }}"><a
                                    href="">Maintenance</a></li>
                            <li class="{{ Request::is('admin/auth/testimonials') ? 'active' : '' }}"><a
                                    href="">Testimonials</a></li>
                            <li class="{{ Request::is('admin/auth/faq') ? 'active' : '' }}"><a
                                    href="">FAQ</a></li>
                        </ul>
                    </li>
                    <li
                        class="{{ Request::is('admin/auth/mapGoogle') ? 'active' : '' }}{{ Request::is('admin/auth/mapYandex') ? 'active' : '' }}{{ Request::is('admin/auth/mapJvectormap') ? 'active' : '' }}">
                        <a href="#Maps" class="has-arrow"><i class="fa fa-map"></i><span>Maps</span></a>
                        <ul>
                            <li class="{{ Request::is('admin/auth/mapGoogle') ? 'active' : '' }}"><a
                                    href="">Google Map</a></li>
                            <li class="{{ Request::is('admin/auth/mapYandex') ? 'active' : '' }}"><a
                                    href="">Yandex Map</a></li>
                            <li class="{{ Request::is('admin/auth/mapJvectormap') ? 'active' : '' }}"><a
                                    href="">jVector Map</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="tab-pane" id="Chat">
            <form>
                <div class="input-group m-b-20">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-magnifier"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            </form>
            <ul class="right_chat list-unstyled li_animation_delay">
                <li>
                    <a href="javascript:void(0);" class="media">
                        <img class="media-object" src="{{ url('/') }}/dashboard/assets/images/xs/avatar1.jpg"
                            alt="">
                        <div class="media-body">
                            <span class="name d-flex justify-content-between">Chris Fox <i
                                    class="fa fa-heart-o font-12"></i></span>
                            <span class="message">chrisfox@gmail.com</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="media">
                        <img class="media-object" src="{{ url('/') }}/dashboard/assets/images/xs/avatar2.jpg"
                            alt="">
                        <div class="media-body">
                            <span class="name d-flex justify-content-between">Joge Lucky <i
                                    class="fa fa-heart-o font-12"></i></span>
                            <span class="message">Jogelucky@gmail.com</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="media">
                        <img class="media-object" src="{{ url('/') }}/dashboard/assets/images/xs/avatar3.jpg"
                            alt="">
                        <div class="media-body">
                            <span class="name d-flex justify-content-between">Isabella <i
                                    class="fa fa-heart-o font-12"></i></span>
                            <span class="message">Isabella@gmail.com</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="media">
                        <img class="media-object" src="{{ url('/') }}/dashboard/assets/images/xs/avatar4.jpg"
                            alt="">
                        <div class="media-body">
                            <span class="name d-flex justify-content-between">Folisise Chosielie <i
                                    class="fa fa-heart font-12"></i></span>
                            <span class="message">FolisiseChosielie@gmail.com</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="media">
                        <img class="media-object" src="{{ url('/') }}/dashboard/assets/images/xs/avatar5.jpg"
                            alt="">
                        <div class="media-body">
                            <span class="name d-flex justify-content-between">Alexander <i
                                    class="fa fa-heart-o font-12"></i></span>
                            <span class="message">Alexander@gmail.com</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        {{-- **setting color** --}}
        <div class="tab-pane" id="setting">
            <h6>Choose Skin</h6>
            <ul class="choose-skin list-unstyled" id="themeColor">
                <li value="p" data-theme="purple" class="{{ $setting->theme == 'p' ? 'active' : '' }}">
                    <div class="purple"></div>
                </li>
                <li value="b" data-theme="blue" class="{{ $setting->theme == 'b' ? 'active' : '' }}">
                    <div class="blue"></div>
                </li>
                <li value="c" data-theme="cyan" class="{{ $setting->theme == 'c' ? 'active' : '' }}">
                    <div class="cyan"></div>
                </li>
                <li value="g" data-theme="green" class="{{ $setting->theme == 'g' ? 'active' : '' }}">
                    <div class="green"></div>
                </li>
                <li value="o" data-theme="orange" class="{{ $setting->theme == 'o' ? 'active' : '' }}">
                    <div class="orange"></div>
                </li>
                <li value="bh" data-theme="blush" class="{{ $setting->theme == 'bh' ? 'active' : '' }}">
                    <div class="blush"></div>
                </li>
                <li value="r" data-theme="red" class="{{ $setting->theme == 'r' ? 'active' : '' }}">
                    <div class="red"></div>
                </li>
            </ul>
            {{-- **setting font** --}}
            <ul class="list-unstyled font_setting mt-3">
                <li>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" data="font-nunito"
                            value="n" {{ $setting->font == 'n' ? 'checked' : '' }}>
                        <span class="custom-control-label">Nunito Google Font</span>
                    </label>
                </li>
                <li>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" data="font-ubuntu"
                            value="u" {{ $setting->font == 'u' ? 'checked' : '' }}>
                        <span class="custom-control-label">Ubuntu Font</span>
                    </label>
                </li>
                <li>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" data="font-raleway"
                            value="r" {{ $setting->font == 'r' ? 'checked' : '' }}>
                        <span class="custom-control-label">Raleway Google Font</span>
                    </label>
                </li>
                <li>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="font" data="font-IBMplex"
                            value="i" {{ $setting->font == 'i' ? 'checked' : '' }}>
                        <span class="custom-control-label">IBM Plex Google Font</span>
                    </label>
                </li>
            </ul>

            <ul class="list-unstyled mt-3">
                <li class="d-flex align-items-center mb-2">
                    <label class="toggle-switch theme-switch">
                        <input type="checkbox" data="dark" name="dark_mode" value="d"
                            {{ $setting->data_theme == 'd' ? 'checked' : '' }}>
                        <span class="toggle-switch-slider"></span>
                    </label>
                    <span class="ml-3">Enable Dark Mode!</span>
                </li>
                <li class="d-flex align-items-center mb-2">
                    <label class="toggle-switch theme-rtl">
                        <input type="checkbox" value="Y" {{ $setting->mode_type == 'Y' ? 'checked' : '' }}>
                        <span class="toggle-switch-slider"></span>
                    </label>
                    <span class="ml-3">Enable RTL Mode!</span>
                </li>
                <li class="d-flex align-items-center mb-2">
                    <label class="toggle-switch theme-high-contrast">
                        <input type="checkbox" value="hc" {{ $setting->data_theme == 'hc' ? 'checked' : '' }}>
                        <span class="toggle-switch-slider"></span>
                    </label>
                    <span class="ml-3">Enable High Contrast Mode!</span>
                </li>
            </ul>

            <hr>
            <h6>General Settings</h6>
            <ul class="setting-list list-unstyled">
                <li>
                    <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox" checked>
                        <span>Allowed Notifications</span>
                    </label>
                </li>
                <li>
                    <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox">
                        <span>Offline</span>
                    </label>
                </li>
                <li>
                    <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox">
                        <span>Location Permission</span>
                    </label>
                </li>
            </ul>

            <a href="#" target="_blank" class="btn btn-block btn-primary">Buy this item</a>
            <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank"
                class="btn btn-block btn-secondary">View portfolio</a>
        </div>
        <div class="tab-pane" id="question">
            <form>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="icon-magnifier"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
            </form>
            <ul class="list-unstyled question">
                <li class="menu-heading">HOW-TO</li>
                <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                <li><a href="javascript:void(0);">Website Analytics</a></li>
                <li class="menu-heading">ACCOUNT</li>
                <li><a href="javascript:void(0);">Cearet New Account</a></li>
                <li><a href="javascript:void(0);">Change Password?</a></li>
                <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                <li class="menu-heading">BILLING</li>
                <li><a href="javascript:void(0);">Payment info</a></li>
                <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                <li class="menu-button mt-3">
                    <a href="../docs/index.html" class="btn btn-primary btn-block">Documentation</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@push('after-scripts')
    <script>
        jQuery(document).ready(function() {
            jQuery('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', jQuery(e.target).attr('href'));
            });
            var activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                jQuery('#myTab a[href="' + activeTab + '"]').tab('show');
            }

            jQuery(function() {
                jQuery('ul.choose-skin li').click(function() {
                    var theme = jQuery(this).attr("value");
                    var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                    var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                    if (is_chk.checked == true) {
                        $("body").addClass('rtl_mode');
                        var mode_type = 'Y';
                    } else {
                        $("body").removeClass('rtl_mode');
                        var mode_type = 'N';
                    }
                    var toggleSwitch = document.querySelector(
                        '.theme-switch input[type="checkbox"]');
                    var toggleHcSwitch = document.querySelector(
                        '.theme-high-contrast input[type="checkbox"]');
                    if ($('input[name="dark_mode"]').is(':checked')) {
                        if (toggleSwitch.checked == true) {
                            $.ajax({
                                url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "mode_type": mode_type,
                                    "data_theme": 'd',
                                }
                            });
                        } else {
                            $.ajax({
                                url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "mode_type": mode_type,
                                    "data_theme": 'l',
                                }
                            });
                        }
                    } else {
                        if (toggleHcSwitch.checked == true) {
                            $.ajax({
                                url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "mode_type": mode_type,
                                    "data_theme": 'hc',
                                }
                            });
                        } else {
                            $.ajax({
                                url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "mode_type": mode_type,
                                    "data_theme": 'l',
                                }
                            });
                        }
                    }
                    return false;
                });

                jQuery('.font_setting input:radio').click(function() {
                    var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                    var font = jQuery(this).attr("value");
                    var bodyClass = $('body').attr('class');
                    $('body').removeClass(bodyClass).addClass($(this).attr('data'));
                    var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                    if (is_chk.checked == true) {
                        $("body").addClass('rtl_mode');
                        var mode_type = 'Y';
                    } else {
                        $("body").removeClass('rtl_mode');
                        var mode_type = 'N';
                    }

                    var toggleSwitch = document.querySelector(
                        '.theme-switch input[type="checkbox"]');
                    var toggleHcSwitch = document.querySelector(
                        '.theme-high-contrast input[type="checkbox"]');
                    if ($('input[name="dark_mode"]').is(':checked')) {
                        if (toggleSwitch.checked == true) {
                            $.ajax({
                                url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "mode_type": mode_type,
                                    "data_theme": 'd',
                                }
                            });
                        } else {
                            $.ajax({
                                url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "mode_type": mode_type,
                                    "data_theme": 'l',
                                }
                            });
                        }
                    } else {
                        if (toggleHcSwitch.checked == true) {
                            $.ajax({
                                url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "mode_type": mode_type,
                                    "data_theme": 'hc',
                                }
                            });
                        } else {
                            $.ajax({
                                url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                type: 'PATCH',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    "theme": theme,
                                    "font": font,
                                    "mode_type": mode_type,
                                    "data_theme": 'l',
                                }
                            });
                        }
                    }
                });

                jQuery(".theme-rtl input").on('change', function() {
                    if (this.checked) {
                        var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                        var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                        var mode_type = jQuery(this).attr("value");
                        $("body").addClass('rtl_mode');
                        var toggleSwitch = document.querySelector(
                            '.theme-switch input[type="checkbox"]');
                        var toggleHcSwitch = document.querySelector(
                            '.theme-high-contrast input[type="checkbox"]');
                        if ($('input[name="dark_mode"]').is(':checked')) {
                            if (toggleSwitch.checked == true) {
                                $.ajax({
                                    url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                    type: 'PATCH',
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        "theme": theme,
                                        "font": font,
                                        "data_theme": 'd',
                                        "mode_type": 'Y',
                                    }
                                });
                            } else {
                                $.ajax({
                                    url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                    type: 'PATCH',
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        "theme": theme,
                                        "font": font,
                                        "data_theme": 'l',
                                        "mode_type": 'Y',
                                    }
                                });
                            }
                        } else {
                            if (toggleHcSwitch.checked == true) {
                                $.ajax({
                                    url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                    type: 'PATCH',
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        "theme": theme,
                                        "font": font,
                                        "data_theme": 'hc',
                                        "mode_type": 'Y',
                                    }
                                });
                            } else {
                                $.ajax({
                                    url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                    type: 'PATCH',
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        "theme": theme,
                                        "font": font,
                                        "data_theme": 'l',
                                        "mode_type": 'Y',
                                    }
                                });
                            }
                        }
                    } else {
                        var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                        var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                        var mode_type = jQuery(this).attr("value");
                        $("body").removeClass('rtl_mode');
                        var toggleSwitch = document.querySelector(
                            '.theme-switch input[type="checkbox"]');
                        var toggleHcSwitch = document.querySelector(
                            '.theme-high-contrast input[type="checkbox"]');
                        if ($('input[name="dark_mode"]').is(':checked')) {
                            if (toggleSwitch.checked == true) {
                                $.ajax({
                                    url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                    type: 'PATCH',
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        "theme": theme,
                                        "font": font,
                                        "data_theme": 'd',
                                        "mode_type": 'N',
                                    }
                                });
                            } else {
                                $.ajax({
                                    url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                    type: 'PATCH',
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        "theme": theme,
                                        "font": font,
                                        "data_theme": 'l',
                                        "mode_type": 'N',
                                    }
                                });
                            }
                        } else {
                            if (toggleHcSwitch.checked == true) {
                                $.ajax({
                                    url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                    type: 'PATCH',
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        "theme": theme,
                                        "font": font,
                                        "data_theme": 'hc',
                                        "mode_type": 'N',
                                    }
                                });
                            } else {
                                $.ajax({
                                    url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                                    type: 'PATCH',
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        "theme": theme,
                                        "font": font,
                                        "data_theme": 'l',
                                        "mode_type": 'N',
                                    }
                                });
                            }
                        }
                    }
                });

                var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
                var toggleHcSwitch = document.querySelector('.theme-high-contrast input[type="checkbox"]');
                jQuery(toggleSwitch).on('change', function() {
                    if (toggleSwitch.checked == true) {
                        var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                        var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                        var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                        if (is_chk.checked == true) {
                            var mode_type = 'Y';
                        } else {
                            var mode_type = 'N';
                        }
                        jQuery('body').attr('data-theme', 'dark');
                        $.ajax({
                            url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'd',
                            }
                        });
                    } else {
                        var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                        var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                        var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                        if (is_chk.checked == true) {
                            var mode_type = 'Y';
                        } else {
                            var mode_type = 'N';
                        }
                        jQuery('body').attr('data-theme', 'light');
                        $.ajax({
                            url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'l',
                            }
                        });
                    }
                });
                jQuery(toggleHcSwitch).on('change', function() {
                    if (toggleHcSwitch.checked == true) {
                        var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                        var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                        var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                        if (is_chk.checked == true) {
                            var mode_type = 'Y';
                        } else {
                            var mode_type = 'N';
                        }
                        jQuery('body').attr('data-theme', 'high-contrast');
                        $.ajax({
                            url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'hc',
                            }
                        });
                    } else {
                        var theme = jQuery('ul.choose-skin').find('li.active').attr('value');
                        var font = jQuery('ul.font_setting').find('li input:checked').attr('value');
                        var is_chk = document.querySelector('.theme-rtl input[type="checkbox"]');
                        if (is_chk.checked == true) {
                            var mode_type = 'Y';
                        } else {
                            var mode_type = 'N';
                        }
                        jQuery('body').attr('data-theme', 'light');
                        $.ajax({
                            url: "{{ route('dashboard.auth.setting.update', $setting) }}",
                            type: 'PATCH',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "theme": theme,
                                "font": font,
                                "mode_type": mode_type,
                                "data_theme": 'l',
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
