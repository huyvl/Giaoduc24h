<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
            data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"></div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <?php $currentPath = Route::getCurrentRoute()->getName(); ?>
            @foreach(Module::all() as $key => $nav)
                {{--@if($nav['show'] && (($nav['slug'] == 'dashboard') || ($nav['slug'] != 'dashboard' && Auth::user()->can($nav['slug'].'-list'))))--}}
                <li class="nav-item @if($key == 0) start @endif @if(starts_with($currentPath, 'admin.'.$nav['slug'])) active @endif ">
                    <a href="{{ url($nav['url']) }}" class="nav-link nav-toggle">
                        <i class="{{ $nav['icon'] }}"></i>
                        <span class="title">{{ $nav['title'] }}</span>
                        @if(starts_with($currentPath, 'admin.'.$nav['slug']))
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        @else
                            <span class="arrow"></span>
                        @endif
                    </a>
                    @if($nav['slug'] != 'dashboard')
                        <ul class="sub-menu">
                            {{--<li class="nav-item">--}}
                                {{--<a href="{{ url($nav['url']) }}/create" class="nav-link ">--}}
                                    {{--<span class="title">Tạo mới</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            <li class="nav-item">
                                <a href="{{ url($nav['url']) }}" class="nav-link ">
                                    <span class="title">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    @endif
                </li>
                {{--@endif--}}
            @endforeach
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
