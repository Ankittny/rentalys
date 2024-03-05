<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>Rentalys-dashboard</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="Rentalys">
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/favicon.png">
		 <link href="{{asset("admin")}}/assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet" type="text/css"/>
		 <link href="{{asset("admin")}}/assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
		 <link href="{{asset("admin")}}/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
		 <link href="{{asset("admin")}}/assets/css/style.css" rel="stylesheet" type="text/css"/>

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

	<!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

		<!--**********************************
    Nav header start
***********************************-->
<div class="nav-header">
    <a href="index.html" class="brand-logo">
        <img class="logo-abbr" src="{{asset("admin")}}/assets/images/logo.png" alt="/" >
        <img class="logo-compact" src="{{asset("admin")}}/assets/images/logo-text.png" alt="/">
        <img class="brand-title" src="{{asset("admin")}}/assets/images/logo-text.png" alt="/">
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->
 <!--**********************************
	Header start
***********************************-->
<div class="header">
	<div class="header-content">
		<nav class="navbar navbar-expand">
			<div class="collapse navbar-collapse justify-content-between">
				<div class="header-left">
					<div class="dashboard_bar">
						<div class="search_bar dropdown">
							<div class="dropdown-menu p-0 m-0">
								<form>
									<div class="input-group search-area d-xl-inline-flex d-none">
										<input class="form-control" type="text" placeholder="Search Here" aria-label="Search">
										<button class="input-group-text">
											<span class="search_icon p-3 c-pointer">
												<svg class="ms-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z" fill="#3B4CB8"/>
												</svg>
											</span>
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<ul class="navbar-nav header-right">
					<li class="nav-item dropdown notification_dropdown">
						<a class="nav-link  ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z" fill="#3B4CB8"/>
							</svg>
							<div class="pulse-css"></div>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
								<ul class="timeline">
									<li>
										<div class="timeline-panel">
											<div class="media me-2">
												<img alt="image" width="50" src="public/assets/images/avatar/1.jpg">
											</div>
											<div class="media-body">
												<h6 class="mb-1">Dr sultads Send you Photo</h6>
												<small class="d-block">29 July 2020 - 02:26 PM</small>
											</div>
										</div>
									</li>
									<li>
										<div class="timeline-panel">
											<div class="media me-2 media-info">
												KG
											</div>
											<div class="media-body">
												<h6 class="mb-1">Resport created successfully</h6>
												<small class="d-block">29 July 2020 - 02:26 PM</small>
											</div>
										</div>
									</li>
									<li>
										<div class="timeline-panel">
											<div class="media me-2 media-success">
												<i class="fas fa-home"></i>
											</div>
											<div class="media-body">
												<h6 class="mb-1">Reminder : Treatment Time!</h6>
												<small class="d-block">29 July 2020 - 02:26 PM</small>
											</div>
										</div>
									</li>
										<li>
										<div class="timeline-panel">
											<div class="media me-2">
												<img alt="image" width="50" src="public/assets/images/avatar/1.jpg">
											</div>
											<div class="media-body">
												<h6 class="mb-1">Dr sultads Send you Photo</h6>
												<small class="d-block">29 July 2020 - 02:26 PM</small>
											</div>
										</div>
									</li>
									<li>
										<div class="timeline-panel">
											<div class="media me-2 media-danger">
												KG
											</div>
											<div class="media-body">
												<h6 class="mb-1">Resport created successfully</h6>
												<small class="d-block">29 July 2020 - 02:26 PM</small>
											</div>
										</div>
									</li>
									<li>
										<div class="timeline-panel">
											<div class="media me-2 media-primary">
												<i class="fas fa-home"></i>
											</div>
											<div class="media-body">
												<h6 class="mb-1">Reminder : Treatment Time!</h6>
												<small class="d-block">29 July 2020 - 02:26 PM</small>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-right"></i></a>
						</div>
					</li>

					<li class="nav-item dropdown notification_dropdown">
						<a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M22.625 5.125H21.75V1.625C21.75 1.47262 21.7102 1.32289 21.6345 1.19062C21.5589 1.05835 21.45 0.948128 21.3186 0.870868C21.1873 0.793609 21.0381 0.751989 20.8857 0.750126C20.7333 0.748264 20.5831 0.786224 20.4499 0.86025L13 4.99909L5.55007 0.86025C5.41688 0.786224 5.26667 0.748264 5.11431 0.750126C4.96194 0.751989 4.8127 0.793609 4.68136 0.870868C4.55002 0.948128 4.44113 1.05835 4.36547 1.19062C4.28981 1.32289 4.25001 1.47262 4.25 1.625V5.125H3.375C2.67904 5.12576 2.01181 5.40257 1.51969 5.89469C1.02757 6.3868 0.750764 7.05404 0.75 7.75V10.375C0.750764 11.071 1.02757 11.7382 1.51969 12.2303C2.01181 12.7224 2.67904 12.9992 3.375 13H4.25V22.625C4.25076 23.321 4.52757 23.9882 5.01969 24.4803C5.51181 24.9724 6.17904 25.2492 6.875 25.25H19.125C19.821 25.2492 20.4882 24.9724 20.9803 24.4803C21.4724 23.9882 21.7492 23.321 21.75 22.625V13H22.625C23.321 12.9992 23.9882 12.7224 24.4803 12.2303C24.9724 11.7382 25.2492 11.071 25.25 10.375V7.75C25.2492 7.05404 24.9724 6.3868 24.4803 5.89469C23.9882 5.40257 23.321 5.12576 22.625 5.125ZM20 5.125H16.3769L20 3.1125V5.125ZM6 3.1125L9.62311 5.125H6V3.1125ZM6 22.625V13H12.125V23.5H6.875C6.64303 23.4997 6.42064 23.4074 6.25661 23.2434C6.09258 23.0793 6.0003 22.857 6 22.625ZM20 22.625C19.9997 22.857 19.9074 23.0793 19.7434 23.2434C19.5794 23.4074 19.357 23.4997 19.125 23.5H13.875V13H20V22.625ZM23.5 10.375C23.4997 10.607 23.4074 10.8294 23.2434 10.9934C23.0794 11.1574 22.857 11.2497 22.625 11.25H3.375C3.14303 11.2497 2.92064 11.1574 2.75661 10.9934C2.59258 10.8294 2.5003 10.607 2.5 10.375V7.75C2.5003 7.51803 2.59258 7.29564 2.75661 7.13161C2.92064 6.96758 3.14303 6.8753 3.375 6.875H22.625C22.857 6.8753 23.0794 6.96758 23.2434 7.13161C23.4074 7.29564 23.4997 7.51803 23.5 7.75V10.375Z" fill="#3B4CB8"/>
							</svg>
							<div class="pulse-css"></div>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 p-3 height370">
							<ul class="timeline">
								<li>
									<div class="timeline-badge primary"></div>
									<a class="timeline-panel text-muted" href="javascript:void(0);">
										<span>10 minutes ago</span>
										<h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
									</a>
								</li>
								<li>
									<div class="timeline-badge info">
									</div>
									<a class="timeline-panel text-muted" href="javascript:void(0);">
										<span>20 minutes ago</span>
										<h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
										<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
									</a>
								</li>
								<li>
									<div class="timeline-badge danger">
									</div>
									<a class="timeline-panel text-muted" href="javascript:void(0);">
										<span>30 minutes ago</span>
										<h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
									</a>
								</li>
								<li>
									<div class="timeline-badge success">
									</div>
									<a class="timeline-panel text-muted" href="javascript:void(0);">
										<span>15 minutes ago</span>
										<h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
									</a>
								</li>
								<li>
									<div class="timeline-badge warning">
									</div>
									<a class="timeline-panel text-muted" href="javascript:void(0);">
										<span>20 minutes ago</span>
										<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
									</a>
								</li>
								<li>
									<div class="timeline-badge dark">
									</div>
									<a class="timeline-panel text-muted" href="javascript:void(0);">
										<span>20 minutes ago</span>
										<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
									</a>
								</li>
							</ul>
						</div>
						</div>
					</li>
					<li class="nav-item dropdown header-profile">
						<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
							<div class="header-info">
								<span class="text-black">Henry Jr.</span>
								<p class="fs-12 mb-0">Admin</p>
							</div>
							<img src="{{asset("admin")}}/assets/images/profile/17.jpg" width="20" alt="/">
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="#" class="dropdown-item ai-icon">
								<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
								<span class="ms-2">Profile </span>
							</a>

							<a href="{{url('logoutadmin')}}" class="dropdown-item ai-icon">
								<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
								<span class="ms-2">Logout </span>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!--**********************************
	Header end
***********************************-->        <!--**********************************
    Sidebar start
***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-dashboard-1"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard</a></li>
                    <li><a href="analytics.html">Analytics</a></li>
                    <li><a href="review.html">Review</a></li>
                    <li><a href="order_list.html">Order List</a></li>
                    <li><a href="customer_list.html">Customer</a></li>

                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-user-7"></i>
                    <span class="nav-text">Agents</span>
                    <span class="badge badge-sm badge-danger ms-3">New</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="add_agent.html">Add Agent</a></li>
                    <li><a href="add_agent_wizard.html">Add Agent Wizard</a></li>
                    <li><a href="all_agents.html">All Agents</a></li>
                    <li><a href="agent_profile.html">Agent Profile</a></li>

                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void(0)" aria-expanded="false">
                    <i class="flaticon-381-layer-1"></i>
                    <span class="nav-text">Property</span>
                    <span class="badge badge-sm badge-danger ms-3">New</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="add_property.html">Add Property</a></li>
                    <li><a href="property_list.html">Property List</a></li>
                    <li><a href="property_details.html">Property Details</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-app"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="app_profile.html">Profile</a></li>
                    <li><a href="post_details.html">Post Details</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email_compose.html">Compose</a></li>
                            <li><a href="email_inbox.html">Inbox</a></li>
                            <li><a href="email_read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="app_calender.html">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="ecom_product_grid.html">Product Grid</a></li>
							<li><a href="ecom_product_list.html">Product List</a></li>
							<li><a href="ecom_product_details.html">Product Details</a></li>
							<li><a href="ecom_product_order.html">Order</a></li>
							<li><a href="ecom_checkout.html">Checkout</a></li>
							<li><a href="ecom_invoice.html">Invoice</a></li>
							<li><a href="ecom_customers.html">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-file"></i>
                    <span class="nav-text">Icons</span>
                    <span class="badge badge-sm badge-danger ms-3">New</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="flat_icons.html">Flaticons</a></li>
                    <li><a href="svg_icons.html">SVG Icons</a></li>

                </ul>
            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-database-1"></i>
                    <span class="nav-text">CMS</span>
                    <span class="badge badge-sm badge-danger ms-3">New</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="content.html">Content</a></li>
                    <li><a href="add_content.html">Add Content</a></li>
                    <li><a href="menu.html">Menus</a></li>
                    <li><a href="email_template.html">Email Template</a></li>
                    <li><a href="add_email.html">Add Email</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="add_blog.html">Add Blog</a></li>
                    <li><a href="blog_category.html">Blog Category</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-bar-chart-2"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="flot.html">Flot</a></li>
					<li><a href="morris.html">Morris</a></li>
					<li><a href="chartjs.html">Chartjs</a></li>
					<li><a href="chartist.html">Chartist</a></li>
					<li><a href="sparkline.html">Sparkline</a></li>
					<li><a href="peity.html">Peity</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-money"></i>
                    <span class="nav-text">Bootstrap</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="accordion.html">Accordion</a></li>
					<li><a href="alert.html">Alert</a></li>
					<li><a href="badge.html">Badge</a></li>
					<li><a href="button.html">Button</a></li>
					<li><a href="modal.html">Modal</a></li>
                    <li><a href="button_group.html">Button Group</a></li>
                    <li><a href="list_group.html">List Group</a></li>
                    <li><a href="media_object.html">Media Object</a></li>
                    <li><a href="card.html">Cards</a></li>
                    <li><a href="carousel.html">Carousel</a></li>
                    <li><a href="dropdown.html">Dropdown</a></li>
                    <li><a href="popover.html">Popover</a></li>
                    <li><a href="progressbar.html">Progressbar</a></li>
                    <li><a href="tab.html">Tab</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="pagination.html">Pagination</a></li>
                    <li><a href="grid.html">Grid</a></li>

                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-plugin"></i>
                    <span class="nav-text">Plugins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="select2.html">Select 2</a></li>
					<li><a href="nestable.html">Nestable</a></li>
					<li><a href="noui_slider.html">Noui Slider</a></li>
					<li><a href="sweetalert.html">Sweet Alert</a></li>
					<li><a href="toastr.html">Toastr</a></li>
					<li><a href="map_jqvmap.html">Jqv Map</a></li>
					<li><a href="lightgallery.html">Light Gallery</a></li>
                </ul>
            </li>
            <li><a href="widget_basic.html" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-settings"></i>
                    <span class="nav-text">Widget</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-form-1"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="form_element.html">Form Elements</a></li>
                    <li><a href="form_wizard.html">Wizard</a></li>
                    <li><a href="form_editor.html">Editor</a></li>
					<li><a href="form_pickers.html">Pickers</a></li>
					<li><a href="form_validation_jquery.html">Form Validate</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-table"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="table_bootstrap.html">Bootstrap</a></li>
					<li><a href="table_datatable.html">Datatable</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-landing-page"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="page_register.html">Register</a></li>
                    <li><a href="page_login.html">Login</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="page_error_400.html">Error 400</a></li>
                            <li><a href="page_error_403.html">Error 403</a></li>
                            <li><a href="page_error_404.html">Error 404</a></li>
                            <li><a href="page_error_500.html">Error 500</a></li>
                            <li><a href="page_error_503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="page_lock_screen.html">Lock Screen</a></li>
                    <li><a href="page_empty.html">Empty Page</a></li>
                </ul>
            </li>
        </ul>

        <div class="copyright">
            <p><strong>Omah Dashboard</strong> © 2023 All Rights Reserved</p>
            <p>by DexignZone</p>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->        <!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="form-head d-md-flex mb-sm-4 mb-3 align-items-start">
			<div class="me-auto d-lg-block d-block">
				<h2 class="text-black font-w600">Dashboard</h2>
				<p class="mb-0">Welcome to Omah Property Admin</p>
			</div>
			<a href="index.html" class="btn btn-primary rounded light">Refresh</a>
		</div>
		<div class="row">
			<div class="col-xl-6 col-xxl-6">
				<div class="row">
					<div class="col-xl-12">
						<div class="card bg-danger property-bx text-white">
							<div class="card-body">
								<div class="media d-sm-flex d-block align-items-center">
									<span class="me-4 d-block mb-sm-0 mb-3">
										<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M31.8333 79.1667H4.16659C2.33325 79.1667 0.833252 77.6667 0.833252 75.8333V29.8333C0.833252 29 1.16659 28 1.83325 27.5L29.4999 1.66667C30.4999 0.833332 31.8333 0.499999 32.9999 0.999999C34.3333 1.66667 34.9999 2.83333 34.9999 4.16667V76C34.9999 77.6667 33.4999 79.1667 31.8333 79.1667ZM7.33325 72.6667H28.4999V11.6667L7.33325 31.3333V72.6667Z" fill="white"/>
											<path d="M75.8333 79.1667H31.6666C29.8333 79.1667 28.3333 77.6667 28.3333 75.8334V36.6667C28.3333 34.8334 29.8333 33.3334 31.6666 33.3334H75.8333C77.6666 33.3334 79.1666 34.8334 79.1666 36.6667V76C79.1666 77.6667 77.6666 79.1667 75.8333 79.1667ZM34.9999 72.6667H72.6666V39.8334H34.9999V72.6667Z" fill="white"/>
											<path d="M60.1665 79.1667H47.3332C45.4999 79.1667 43.9999 77.6667 43.9999 75.8334V55.5C43.9999 53.6667 45.4999 52.1667 47.3332 52.1667H60.1665C61.9999 52.1667 63.4999 53.6667 63.4999 55.5V75.8334C63.4999 77.6667 61.9999 79.1667 60.1665 79.1667ZM50.6665 72.6667H56.9999V58.8334H50.6665V72.6667Z" fill="white"/>
										</svg>
									</span>
									<div class="media-body mb-sm-0 mb-3 me-5">
										<h4 class="fs-22 text-white">Total Properties</h4>
										<div class="progress mt-3 mb-2" style="height:8px;">
											<div class="progress-bar bg-white progress-animated" style="width: 86%; height:8px;" role="progressbar">
												<span class="sr-only">86% Complete</span>
											</div>
										</div>
										<span class="fs-14">431 more to break last month record</span>
									</div>
									<span class="fs-35 font-w500">4,562</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="card property-card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body me-3">
										<h2 class="fs-28 text-black font-w600">2,356</h2>
										<p class="property-p mb-0 text-black font-w500">Properties for Sale</p>
										<span class="fs-13">Target 3k/month</span>
									</div>
									<div class="d-inline-block position-relative donut-chart-sale">
										<span class="donut1" data-peity='{ "fill": ["rgb(60, 76, 184)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>5/8</span>
										<small class="text-primary">71%</small>
										<span class="circle bgl-primary"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="card property-card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body me-3">
										<h2 class="fs-28 text-black font-w600">2,206</h2>
										<p class="property-p mb-0 text-black font-w500">Properties for Rent</p>
										<span class="fs-13">Target 3k/month</span>
									</div>
									<div class="d-inline-block position-relative donut-chart-sale">
										<span class="donut1" data-peity='{ "fill": ["rgb(55, 209, 90)", "rgba(236, 236, 236, 1)"],   "innerRadius": 38, "radius": 10}'>7/8</span>
										<small class="text-success">90%</small>
										<span class="circle bgl-success"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-xxl-6">
				<div class="card">
					<div class="card-header border-0 pb-0">
						<h3 class="fs-18 text-black">Total Revenue</h3>
						<div class="dropdown ms-auto">
							<div class="btn-link" data-bs-toggle="dropdown" >
								<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
							</div>
							<div class="dropdown-menu dropdown-menu-end" >
								<a class="dropdown-item" href="javascript:void(0);">Edit</a>
								<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
							</div>
						</div>
					</div>
					<div class="card-body pt-2 pb-0">
						<div class="d-flex flex-wrap align-items-center">
							<span class="fs-28 text-black font-w600 me-3">$678,345</span>
							<p class="me-sm-auto me-3 mb-sm-0 mb-3">last month $563,443</p>
							<div class="d-flex align-items-center">
								<svg class="me-3" width="87" height="47" viewBox="0 0 87 47" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M29.8043 20.9254C15.2735 14.3873 5.88029 27.282 3 34.5466V46.2406H85V4.58005C70.8925 -0.868404 70.5398 8.66639 60.8409 19.5633C51.1419 30.4602 47.9677 29.0981 29.8043 20.9254Z" fill="url(#paint0_linear)"/>
									<path d="M3 35.2468C5.88029 27.9822 15.2735 15.0875 29.8043 21.6257C47.9677 29.7984 51.1419 31.1605 60.8409 20.2636C70.5398 9.36665 70.8925 -0.168147 85 5.28031" stroke="#37D159" stroke-width="6"/>
									<defs>
									<linearGradient id="paint0_linear" x1="44" y1="-36.4332" x2="44" y2="45.9686" gradientUnits="userSpaceOnUse">
									<stop stop-color="#37D159" offset="0"/>
									<stop offset="1" stop-color="#37D159" stop-opacity="0"/>
									</linearGradient>
									</defs>
								</svg>
								<span class="fs-22 text-success me-2">7%</span>
								<svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M0 6L6 2.62268e-07L12 6" fill="#37D159"/>
								</svg>
							</div>
						</div>
						<div id="chartTimeline"></div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-xxl-9">
				<div class="row">
					<div class="col-xl-8 col-xxl-8">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h3 class="fs-18 text-black">Overview</h3>
								<div class="dropdown ms-auto">
									<div class="btn-link" data-bs-toggle="dropdown" >
										<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end" >
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="d-sm-flex flex-wrap  justify-content-around">
									<div class="d-flex mb-4 align-items-center">
										<span class="rounded me-3 bg-primary p-3">
											<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10.3458 25.7292H1.35412C0.758283 25.7292 0.270782 25.2417 0.270782 24.6458V9.69583C0.270782 9.42499 0.379116 9.09999 0.595783 8.93749L9.58745 0.541659C9.91245 0.270825 10.3458 0.162492 10.725 0.324992C11.1583 0.541659 11.375 0.920825 11.375 1.35416V24.7C11.375 25.2417 10.8875 25.7292 10.3458 25.7292ZM2.38328 23.6167H9.26245V3.79166L2.38328 10.1833V23.6167Z" fill="white"/>
												<path d="M24.6458 25.7292H10.2916C9.69578 25.7292 9.20828 25.2417 9.20828 24.6458V11.9167C9.20828 11.3208 9.69578 10.8333 10.2916 10.8333H24.6458C25.2416 10.8333 25.7291 11.3208 25.7291 11.9167V24.7C25.7291 25.2417 25.2416 25.7292 24.6458 25.7292ZM11.375 23.6167H23.6166V12.9458H11.375V23.6167Z" fill="white"/>
												<path d="M19.5541 25.7292H15.3833C14.7874 25.7292 14.2999 25.2417 14.2999 24.6458V18.0375C14.2999 17.4417 14.7874 16.9542 15.3833 16.9542H19.5541C20.1499 16.9542 20.6374 17.4417 20.6374 18.0375V24.6458C20.6374 25.2417 20.1499 25.7292 19.5541 25.7292ZM16.4666 23.6167H18.5249V19.1208H16.4666V23.6167Z" fill="white"/>
											</svg>
										</span>
										<div>
											<p class="fs-14 mb-1">Total Sale</p>
											<span class="fs-18 text-black font-w700">2,346 Unit</span>
										</div>
									</div>
									<div class="d-flex mb-4 align-items-center">
										<span class="rounded me-3 bg-success p-3">
											<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10.3458 25.7292H1.35412C0.758283 25.7292 0.270782 25.2417 0.270782 24.6458V9.69583C0.270782 9.42499 0.379116 9.09999 0.595783 8.93749L9.58745 0.541659C9.91245 0.270825 10.3458 0.162492 10.725 0.324992C11.1583 0.541659 11.375 0.920825 11.375 1.35416V24.7C11.375 25.2417 10.8875 25.7292 10.3458 25.7292ZM2.38328 23.6167H9.26245V3.79166L2.38328 10.1833V23.6167Z" fill="white"/>
												<path d="M24.6458 25.7292H10.2916C9.69578 25.7292 9.20828 25.2417 9.20828 24.6458V11.9167C9.20828 11.3208 9.69578 10.8333 10.2916 10.8333H24.6458C25.2416 10.8333 25.7291 11.3208 25.7291 11.9167V24.7C25.7291 25.2417 25.2416 25.7292 24.6458 25.7292ZM11.375 23.6167H23.6166V12.9458H11.375V23.6167Z" fill="white"/>
												<path d="M19.5541 25.7292H15.3833C14.7874 25.7292 14.2999 25.2417 14.2999 24.6458V18.0375C14.2999 17.4417 14.7874 16.9542 15.3833 16.9542H19.5541C20.1499 16.9542 20.6374 17.4417 20.6374 18.0375V24.6458C20.6374 25.2417 20.1499 25.7292 19.5541 25.7292ZM16.4666 23.6167H18.5249V19.1208H16.4666V23.6167Z" fill="white"/>
											</svg>
										</span>
										<div>
											<p class="fs-14 mb-1">Total Rent</p>
											<span class="fs-18 text-black font-w700">1,252 Unit</span>
										</div>
									</div>
								</div>
								<div id="chartBar"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-xxl-4">
						<div class="row">
							<div class="col-xl-12 col-xxl-12 col-md-6">
								<div class="card">
									<div class="card-body">
										<div id="monocromeChart"></div>
										<div class="d-flex flex-wrap mt-3">
											<span class="text-black font-w600 me-5 mb-2">
											<svg class="me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="20" height="20" rx="8" fill="#FFB067"/>
											</svg>Agent</span>
											<span class="text-black font-w600 mb-2">
											<svg class="me-2" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect width="20" height="20" rx="8" fill="#B655E4"/>
											</svg>Customers</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-xxl-12 col-md-6">
								<div class="card">
									<div class="card-body">
										<p class="mb-2 d-flex  fs-16 text-black font-w500">Product Viewed
											<span class="pull-right ms-auto text-dark fs-14">561/days</span>
										</p>
										<div class="progress mb-4" style="height:10px">
											<div class="progress-bar bg-primary progress-animated" style="width:75%; height:10px;" role="progressbar">
												<span class="sr-only">75% Complete</span>
											</div>
										</div>
										<p class="mb-2 d-flex  fs-16 text-black font-w500">Product Listed
											<span class="pull-right ms-auto text-dark fs-14">3,456 Unit</span>
										</p>
										<div class="progress mb-3" style="height:10px">
											<div class="progress-bar bg-primary progress-animated" style="width:90%; height:10px;" role="progressbar">
												<span class="sr-only">90% Complete</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h3 class="fs-18 text-black">Properties Map Location</h3>
								<div class="dropdown ms-auto">
									<div class="btn-link" data-bs-toggle="dropdown" >
										<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end" >
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-lg-3">
										<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Europe
											<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
										</p>
										<div class="progress mb-4" style="height:10px">
											<div class="progress-bar bg-primary progress-animated" style="width:75%; height:10px;" role="progressbar">
												<span class="sr-only">75% Complete</span>
											</div>
										</div>
										<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Asia
											<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
										</p>
										<div class="progress mb-4" style="height:10px">
											<div class="progress-bar bg-primary progress-animated" style="width:100%; height:10px;" role="progressbar">
												<span class="sr-only">100% Complete</span>
											</div>
										</div>
										<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Africa
											<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
										</p>
										<div class="progress mb-4" style="height:10px">
											<div class="progress-bar bg-primary progress-animated" style="width:75%; height:10px;" role="progressbar">
												<span class="sr-only">75% Complete</span>
											</div>
										</div>
										<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">Australia
											<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
										</p>
										<div class="progress mb-4" style="height:10px">
											<div class="progress-bar bg-primary progress-animated" style="width:50%; height:10px;" role="progressbar">
												<span class="sr-only">50% Complete</span>
											</div>
										</div>
										<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">America
											<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
										</p>
										<div class="progress mb-4" style="height:10px">
											<div class="progress-bar bg-primary progress-animated" style="width:70%; height:10px;" role="progressbar">
												<span class="sr-only">70% Complete</span>
											</div>
										</div>
										<p class="mb-2 d-flex align-items-center  fs-16 text-black font-w500">USA
											<span class="pull-right text-dark fs-14 ms-2">653 Unit</span>
										</p>
										<div class="progress mb-4" style="height:10px">
											<div class="progress-bar bg-primary progress-animated" style="width:40%; height:10px;" role="progressbar">
												<span class="sr-only">40% Complete</span>
											</div>
										</div>
									</div>
									<div class="col-lg-9">
										<div id="world-map"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-xxl-3">
				<div class="row">
					<div class="col-xl-12 col-lg-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h3 class="fs-18 text-black">Customer Review</h3>
								<div class="dropdown ms-auto">
									<div class="btn-link" data-bs-toggle="dropdown" >
										<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end" >
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body pb-0">
								<div class="pb-3 border-bottom mb-3">
									<div class="d-flex mb-3 flex-wrap align-items-end">
										<img class="rounded me-3" src="public/assets/images/customers/1.jpg" width="58" alt="/">
										<div>
											<h6 class="fs-16 text-black font-w600">John Doe</h6>
											<div class="star-icons">
												<i class="las la-star"></i>
												<i class="las la-star"></i>
												<i class="las la-star"></i>
												<i class="las la-star"></i>
												<i class="las la-star"></i>
											</div>
										</div>
										<span class="fs-14 ms-auto">5m ago</span>
									</div>
									<p class="fs-14 mb-0">Friendly service
									Josh, Lunar and everyone at Just Property in Hastings deserved a big Thank You from us for moving us from Jakarta to Medan during the lockdown.
									</p>
								</div>
								<div class="pb-3 mb-3">
									<div class="d-flex mb-3 flex-wrap align-items-end">
										<img class="rounded me-3" src="public/assets/images/customers/2.jpg" width="58" alt="/">
										<div>
											<h6 class="fs-16 text-black font-w600">Amelia Tuner</h6>
											<div class="star-icons">
												<i class="las la-star"></i>
												<i class="las la-star"></i>
												<i class="las la-star"></i>
												<i class="las la-star"></i>
												<i class="las la-star"></i>
											</div>
										</div>
										<span class="fs-14 ms-auto">10h ago</span>
									</div>
									<p class="fs-14 mb-0">I viewed a number of properties with Just Property and found them to be professional, efficient, patient, courteous and helpful every time.
									</p>
								</div>
							</div>
							<div class="card-footer border-0 p-0">
								<a href="review.html" class="btn d-block btn-primary rounded">See More Reviews</a>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<h3 class="fs-18 text-black">Recent Property</h3>
								<div class="dropdown ms-auto">
									<div class="btn-link" data-bs-toggle="dropdown" >
										<svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
									</div>
									<div class="dropdown-menu dropdown-menu-end" >
										<a class="dropdown-item" href="javascript:void(0);">Edit</a>
										<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="testimonial-one owl-carousel">
									<div class="items">
										<a href="property_details.html"><img src="public/assets/images/testimonial/1.png" alt="#" class="w-100 mw-100 mb-3 rounded"></a>
										<h5 class="fs-16 font-w600 mb-0"><a href="property_details.html" class="text-black">98AB Alexander Court, London</a></h5>
										<span class="fs-14 d-block mb-4">45 Connor St. London, 44523</span>
										<a href="javascript:void(0);" class="bgl-primary text-black p-1 ps-2 pe-2 me-3 font-w600 rounded">
										<svg class="me-2" width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M15.8125 5.54171C17.6264 5.54171 19.1667 7.01538 19.1667 8.89588V11.7709H17.7292V12.7292H16.7708V11.7709H2.39583V12.7292H1.4375V11.7709H0V8.89588C0 7.08201 1.48814 5.54171 3.35417 5.54171H15.8125ZM14.8542 0.270874C16.1425 0.270874 17.2504 1.30663 17.25 2.66671L17.2504 4.95601C16.8146 4.71707 16.3271 4.58337 15.8125 4.58337L14.8542 4.58289C14.8542 3.76226 14.1822 3.14587 13.4167 3.14587H10.5417C10.1735 3.14587 9.8377 3.28427 9.58338 3.51186C9.32939 3.28444 8.99338 3.14587 8.625 3.14587H5.75C4.95625 3.14587 4.31276 3.78921 4.3125 4.58289L3.35417 4.58337C2.83975 4.58337 2.35239 4.71699 1.91667 4.95579V2.66671C1.91667 1.37835 2.95002 0.270874 4.3125 0.270874H14.8542ZM8.625 4.10397C8.88503 4.10397 9.10417 4.34355 9.10417 4.58337L5.27083 4.58289C5.27083 4.28973 5.50427 4.10421 5.75 4.10421L8.625 4.10397ZM13.4167 4.10743C13.6878 4.10397 13.8956 4.33738 13.8958 4.58289H10.0625C10.0625 4.28554 10.2959 4.10421 10.5417 4.10421L13.4167 4.10743Z" fill="#3B4CB8"/>
										</svg>
										4</a>
										<a href="javascript:void(0);" class="bgl-primary text-black p-1 ps-3 pe-3 font-w600 rounded">
										<svg class="me-2" width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.92 7.00064L12.6744 8.22859C12.2819 10.1913 10.4996 11.6677 8.55634 11.6677H7.95079L9.11756 14.7791H1.5557V7.00064H12.92ZM3.50032 0C4.54604 0 5.44495 0.871336 5.44495 1.94462V5.05602H12.8345V5.83387H5.44495V6.22279H0.777849L0.777769 7.38965C0.327309 7.05126 0 6.47802 0 5.83387V1.94462C0 0.8989 0.851593 0 1.94462 0H3.50032Z" fill="#3B4CB8"/>
										</svg>
										2
										</a>
										<p class="fs-14 mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
									</div>
									<div class="items">
										<a href="property_details.html"><img src="public/assets/images/testimonial/2.png" alt="#" class="w-100 mw-100 mb-3 rounded"></a>
										<h5 class="fs-16 font-w600 mb-0"><a href="property_details.html" class="text-black">2AB Historical landmark, Paris</a></h5>
										<span class="fs-14 d-block mb-4">45 Connor St. London, 44523</span>
										<a href="javascript:void(0);" class="bgl-primary text-black p-1 ps-2 pe-2 me-3 font-w600 rounded">
										<svg class="me-2" width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M15.8125 5.54171C17.6264 5.54171 19.1667 7.01538 19.1667 8.89588V11.7709H17.7292V12.7292H16.7708V11.7709H2.39583V12.7292H1.4375V11.7709H0V8.89588C0 7.08201 1.48814 5.54171 3.35417 5.54171H15.8125ZM14.8542 0.270874C16.1425 0.270874 17.2504 1.30663 17.25 2.66671L17.2504 4.95601C16.8146 4.71707 16.3271 4.58337 15.8125 4.58337L14.8542 4.58289C14.8542 3.76226 14.1822 3.14587 13.4167 3.14587H10.5417C10.1735 3.14587 9.8377 3.28427 9.58338 3.51186C9.32939 3.28444 8.99338 3.14587 8.625 3.14587H5.75C4.95625 3.14587 4.31276 3.78921 4.3125 4.58289L3.35417 4.58337C2.83975 4.58337 2.35239 4.71699 1.91667 4.95579V2.66671C1.91667 1.37835 2.95002 0.270874 4.3125 0.270874H14.8542ZM8.625 4.10397C8.88503 4.10397 9.10417 4.34355 9.10417 4.58337L5.27083 4.58289C5.27083 4.28973 5.50427 4.10421 5.75 4.10421L8.625 4.10397ZM13.4167 4.10743C13.6878 4.10397 13.8956 4.33738 13.8958 4.58289H10.0625C10.0625 4.28554 10.2959 4.10421 10.5417 4.10421L13.4167 4.10743Z" fill="#3B4CB8"/>
										</svg>
										4</a>
										<a href="javascript:void(0);" class="bgl-primary text-black p-1 ps-3 pe-3 font-w600 rounded">
										<svg class="me-2" width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12.92 7.00064L12.6744 8.22859C12.2819 10.1913 10.4996 11.6677 8.55634 11.6677H7.95079L9.11756 14.7791H1.5557V7.00064H12.92ZM3.50032 0C4.54604 0 5.44495 0.871336 5.44495 1.94462V5.05602H12.8345V5.83387H5.44495V6.22279H0.777849L0.777769 7.38965C0.327309 7.05126 0 6.47802 0 5.83387V1.94462C0 0.8989 0.851593 0 1.94462 0H3.50032Z" fill="#3B4CB8"/>
										</svg>
										2
										</a>
										<p class="fs-14 mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--**********************************
	Content body end
***********************************-->
        <!--**********************************
    Footer start
***********************************-->
<footer class="footer">
    <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2023</p>
    </div>
</footer>
<!--**********************************
    Footer end
***********************************-->

	</div>
			<script src="{{asset("admin")}}/assets/vendor/global/global.min.js"></script>
			<script src="{{asset("admin")}}/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>


	        <script src="{{asset("admin")}}/assets/vendor/chartjs/chart.bundle.min.js"></script>
            <script src="{{asset("admin")}}/assets/vendor/owl-carousel/owl.carousel.js"></script>
            <script src="{{asset("admin")}}/assets/vendor/apexchart/apexchart.js"></script>
            <script src="{{asset("admin")}}/assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
            <script src="{{asset("admin")}}/assets/vendor/jqvmap/js/jquery.vmap.world.js"></script>
            <script src="{{asset("admin")}}/assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
            <script src="{{asset("admin")}}/assets/vendor/peity/jquery.peity.min.js"></script>
            <script src="{{asset("admin")}}/assets/js/dashboard/dashboard-1.js"></script>

			<script src="{{asset("admin")}}/assets/js/custom.min.js"></script>
			<script src="{{asset("admin")}}/assets/js/deznav-init.js"></script>
		<script>
	function carouselReview(){
		/*  testimonial one function by = owl.carousel.js */
		jQuery('.testimonial-one').owlCarousel({
			loop:true,
			autoplay:true,
			margin:0,
			nav:true,
			dots: false,
			navText: ['<i class="las la-long-arrow-alt-left"></i>', '<i class="las la-long-arrow-alt-right"></i>'],
			responsive:{
				0:{
					items:1
				},

				480:{
					items:1
				},

				767:{
					items:1
				},
				1000:{
					items:1
				}
			}
		})
		/*Custom Navigation work*/
		jQuery('#next-slide').on('click', function(){
			$('.testimonial-one').trigger('next.owl.carousel');
		});

		jQuery('#prev-slide').on('click', function(){
			$('.testimonial-one').trigger('prev.owl.carousel');
		});
		/*Custom Navigation work*/
	}

	jQuery(window).on('load',function(){
		setTimeout(function(){
			carouselReview();
		}, 1000);
	});
</script>
</body>
</html>
