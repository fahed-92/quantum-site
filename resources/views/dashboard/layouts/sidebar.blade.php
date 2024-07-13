        <!-- ========== Right Sidebar Start ========== -->
        <div class="vertical-menu" style="background-color: #175f3f">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Right Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li>
                            <a href="{{ route('dashboard.index') }}" class="waves-effect">
                                <i class="bx bx-home-circle"></i>
                                <span key="t-dashboards">{{ __('messages.dashboard') }}</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-globe"></i>
                                <span key="t-sites">{{ __('messages.site') }}</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('dashboard.settings.edit', 1) }}" key="t-home">{{ __('messages.site settings') }}</a></li>
                                <li><a href="{{ route('dashboard.aboutus.edit', 1) }}" key="t-about">{{ __('messages.About US') }}</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-layout"></i>
                                <span key="t-categories">{{ __('messages.Product\'s features') }}</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('dashboard.services.create') }}" key="t-add-cat">{{ __('messages.Add features') }}</a></li>
                                <li><a href="{{ route('dashboard.services.index') }}" key="t-view-cats">{{ __('messages.All features') }}</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="bx bx-group"></i>
                                <span key="t-clients">{{ __('messages.Clients and partners') }}</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('dashboard.clients.create') }}" key="t-add-client">{{ __('messages.add') }}</a></li>
                                <li><a href="{{ route('dashboard.clients.index') }}" key="t-view-client">{{ __('messages.view all') }}</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Right Sidebar End -->
