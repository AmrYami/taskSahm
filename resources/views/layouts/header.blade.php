
<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Menu-->
        {{--                        @include('layouts.header_menue')--}}
        <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">
        {{--                        @include('layouts.search')--}}
        <!--begin::Notifications-->
            <div class="dropdown">
                <!--begin::Toggle-->
{{--                notifications--}}
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
											<span class="svg-icon svg-icon-xl svg-icon-primary">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
														<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                        <span class="pulse-ring"></span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                    <form>
                        <!--begin::Header-->
                        <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">
                            <!--begin::Title-->
                            <h4 class="d-flex flex-center rounded-top">
                                <span class="text-white">User Notifications</span>
                                <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2" id="notification-count">message</span>
                            </h4>
                            <!--end::Title-->
                            <!--begin::Tabs-->
                            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Alerts</a>
                                </li>
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>--}}
{{--                                </li>--}}
                            </ul>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Content-->
                        <div class="tab-content">
                            <!--begin::Tabpane-->
                            <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
                                <!--begin::Scroll-->
                                <!--end::Scroll-->
                                <!--begin::Action-->
                                <div class="d-flex flex-center pt-7">
                                    <a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Tabpane-->
                            <!--begin::Tabpane-->
                            <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                <!--begin::Nav-->
                                <div class="navi navi-hover scroll my-4" data-scroll="true" data-height="300" data-mobile-height="200">
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-line-chart text-success"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">New report has been received</div>
                                                <div class="text-muted">23 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-paper-plane text-danger"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">Finance report has been generated</div>
                                                <div class="text-muted">25 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-user flaticon2-line- text-success"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">New order has been received</div>
                                                <div class="text-muted">2 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-pin text-primary"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">New customer is registered</div>
                                                <div class="text-muted">3 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-sms text-danger"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">Application has been approved</div>
                                                <div class="text-muted">3 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-pie-chart-3 text-warning"></i>
                                            </div>
                                            <div class="navinavinavi-text">
                                                <div class="font-weight-bold">New file has been uploaded</div>
                                                <div class="text-muted">5 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon-pie-chart-1 text-info"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">New user feedback received</div>
                                                <div class="text-muted">8 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-settings text-success"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">System reboot has been successfully completed</div>
                                                <div class="text-muted">12 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon-safe-shield-protection text-primary"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">New order has been placed</div>
                                                <div class="text-muted">15 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-notification text-primary"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">Company meeting canceled</div>
                                                <div class="text-muted">19 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-fax text-success"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">New report has been received</div>
                                                <div class="text-muted">23 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon-download-1 text-danger"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">Finance report has been generated</div>
                                                <div class="text-muted">25 hrs ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon-security text-warning"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">New customer comment recieved</div>
                                                <div class="text-muted">2 days ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="navi-item">
                                        <div class="navi-link">
                                            <div class="navi-icon mr-2">
                                                <i class="flaticon2-analytics-1 text-success"></i>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">New customer is registered</div>
                                                <div class="text-muted">3 days ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--end::Item-->
                                </div>
                                <!--end::Nav-->
                            </div>
                            <!--end::Tabpane-->
                            <!--begin::Tabpane-->
                            <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                <!--begin::Nav-->
                                <div class="d-flex flex-center text-center text-muted min-h-200px">All caught up!
                                    <br />No new notifications.</div>
                                <!--end::Nav-->
                            </div>
                            <!--end::Tabpane-->
                        </div>
                        <!--end::Content-->
                    </form>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Notifications-->

{{--        @include('layouts.langs')--}}
        <!--begin::User-->
            <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{auth()->user()->name}}</span>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
											<span class="symbol-label font-size-h5 font-weight-bold">S</span>
										</span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
