<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="{{ route('app') }}" class="d-flex align-items-center justify-content-center">
            <img alt="Logo" src="{{ asset('assets/images/favicon.png') }}" class="h-50px app-sidebar-logo-default" />
            <h1 class="app-sidebar-logo-default mx-4 text-white">LCPA</h1>
            <img alt="Logo" src="{{ asset('assets/images/favicon.png') }}" class="h-40px app-sidebar-logo-minimize">
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-2 rotate-180">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="currentColor" />
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <div class="menu-item px-0 py-1">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->routeIs('app*') ? 'active' : '' }}" href="{{ route('app') }}">
                        <span class="menu-icon">
                            <i class="bi bi-speedometer"></i>
                        </span>
                        <span class="menu-title">App</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item px-0 py-1">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->routeIs('chefs*') ? 'active' : '' }}" href="{{ route('chefs') }}">
                        <span class="menu-icon">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <span class="menu-title">Chefs</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item px-0 py-1">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->routeIs('restaurants*') ? 'active' : '' }}"
                        href="{{ route('restaurants') }}">
                        <span class="menu-icon">
                            <i class="bi bi-building-fill"></i>
                        </span>
                        <span class="menu-title">Restaurants</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="menu-item px-0 py-1 here {{ request()->routeIs('insurances*') ? 'show' : '' }} {{ request()->routeIs('insurance_applications*') ? 'show' : '' }} menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <img src="{{ asset('assets/images/staycare/staycare.png') }}" class="img-fluid">
                        </span>
                        <span class="menu-title">STAYCARE</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item px-0 py-1">
                            <!--begin:Menu item-->
                            <div class="menu-item px-0 py-1">
                                <!--begin:Menu link-->
                                <a class="menu-link {{ request()->routeIs('insurance_applications*') ? 'active' : '' }}"
                                    href="{{ route('insurance_applications') }}">
                                    <span class="menu-icon">
                                        <i class="bi bi-file-text-fill"></i>
                                    </span>
                                    <span class="menu-title">Applications</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item px-0 py-1">
                                <!--begin:Menu link-->
                                <a class="menu-link {{ request()->routeIs('insurances*') ? 'active' : '' }}"
                                    href="{{ route('insurances') }}">
                                    <span class="menu-icon">
                                        <i class="bi bi-credit-card-2-front-fill"></i>
                                    </span>
                                    <span class="menu-title">Insurances</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="menu-item px-0 py-1 here {{ request()->routeIs('records*') ? 'show' : '' }} menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <img src="{{ asset('assets/images/golden-book/golden-book.png') }}" class="img-fluid">
                        </span>
                        <span class="menu-title">GOLDEN BOOK</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item px-0 py-1">
                            <!--begin:Menu item-->
                            <div class="menu-item px-0 py-1">
                                <!--begin:Menu link-->
                                <a class="menu-link {{ request()->routeIs('records*') ? 'active' : '' }}"
                                    href="{{ route('records') }}">
                                    <span class="menu-icon">
                                        <i class="bi bi-stars"></i>
                                    </span>
                                    <span class="menu-title">Records</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="menu-item px-0 py-1 here {{ request()->routeIs('courses*') ? 'show' : '' }} {{ request()->routeIs('enrollments*') ? 'show' : '' }} {{ request()->routeIs('certificates*') ? 'show' : '' }} menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <img src="{{ asset('assets/images/ghi/GHI.png') }}" class="img-fluid">
                        </span>
                        <span class="menu-title">GHI</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item px-0 py-1">
                            <!--begin:Menu item-->
                            <div class="menu-item px-0 py-1">
                                <!--begin:Menu link-->
                                <a class="menu-link {{ request()->routeIs('certificates*') ? 'active' : '' }}"
                                    href="{{ route('certificates') }}">
                                    <span class="menu-icon">
                                        <i class="bi bi-patch-check-fill"></i>
                                    </span>
                                    <span class="menu-title">Certificates</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item px-0 py-1">
                                <!--begin:Menu link-->
                                <a class="menu-link {{ request()->routeIs('courses*') ? 'active' : '' }}"
                                    href="{{ route('courses') }}">
                                    <span class="menu-icon">
                                        <i class="bi bi-book-half"></i>
                                    </span>
                                    <span class="menu-title">Courses</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item px-0 py-1">
                                <!--begin:Menu link-->
                                <a class="menu-link {{ request()->routeIs('enrollments*') ? 'active' : '' }}"
                                    href="{{ route('enrollments') }}">
                                    <span class="menu-icon">
                                        <i class="bi bi-clipboard2-plus-fill"></i>
                                    </span>
                                    <span class="menu-title">Enrollments</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                {{--
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item px-0 py-1 here menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <img src="{{ asset('assets/images/ghc/GHC.png') }}" class="img-fluid">
                        </span>
                        <span class="menu-title">GHC</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                --}}

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click"
                    class="menu-item px-0 py-1 here {{ request()->routeIs('events*') ? 'show' : '' }} menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <img src="{{ asset('assets/images/global-hospitality-events/global-hospitality-events.png') }}"
                                class="img-fluid">
                        </span>
                        <span class="menu-title">GHE</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item px-0 py-1">
                            <!--begin:Menu link-->
                            <a class="menu-link {{ request()->routeIs('events*') ? 'active' : '' }}"
                                href="{{ route('events') }}">
                                <span class="menu-icon">
                                    <i class="bi bi-calendar-event"></i>
                                </span>
                                <span class="menu-title">Events</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                @if (Auth::user()->role == 'admin')
                <!--begin:Menu item-->
                <div class="menu-item px-0 py-1">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->routeIs('users*') ? 'active' : '' }}" href="{{ route('users') }}">
                        <span class="menu-icon">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <span class="menu-title">Users</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item px-0 py-1">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->routeIs('logs*') ? 'active' : '' }}" href="{{ route('logs') }}">
                        <span class="menu-icon">
                            <i class="bi bi-file-text-fill"></i>
                        </span>
                        <span class="menu-title">Logs</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div class="menu-item px-0 py-1">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->routeIs('settings*') ? 'active' : '' }}"
                        href="{{ route('settings') }}">
                        <span class="menu-icon">
                            <i class="bi bi-gear-fill"></i>
                        </span>
                        <span class="menu-title">Settings</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                @endif
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
</div>
<!--end::Sidebar-->