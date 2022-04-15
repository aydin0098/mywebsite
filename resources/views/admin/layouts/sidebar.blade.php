<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('home.index')}}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">پنل مدیریت</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i><span class="menu-title" data-i18n="Email">پیشخوان</span></a>
            </li>
            @can('manage_home')
            <li class=" nav-item"><a href="{{route('admin.home.index')}}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Email">بخش خانه</span></a>
            </li>
            @endcan
            @can('manage_about')
            <li class=" nav-item"><a href="{{route('admin.about.index')}}"><i class="feather icon-activity"></i><span class="menu-title" data-i18n="Email">بخش درباره من</span></a>
            </li>
            @endcan
            @can('manage_contact')
            <li class=" nav-item"><a href="{{route('admin.contact.index')}}"><i class="fa fa-comment"></i><span class="menu-title" data-i18n="Email">بخش تماس با من</span></a>
            </li>
            @endcan
            @can('manage_services')
            <li class=" nav-item"><a href="index.html"><i class="fa fa-server"></i><span class="menu-title" data-i18n="Dashboard">مدیریت خدمات</span></a>
                <ul class="menu-content">
                    @can('manage_services')
                    <li><a href="{{route('services.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">لیست خدمات</span></a>
                    </li>
                    @endcan
                    @can('add_service')
                    <li><a href="{{route('services.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">ایجاد سرویس جدید</span></a>
                    </li>
                        @endcan
                </ul>
            </li>
            @endcan
            @can('manage_jobs')
            <li class=" nav-item"><a href="index.html"><i class="feather icon-box"></i><span class="menu-title" data-i18n="Dashboard">مدیریت تجربیات</span></a>
                <ul class="menu-content">
                    @can('manage_jobs')
                    <li><a href="{{route('jobs.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">لیست تجربیات</span></a>
                    </li>
                    @endcan
                    @can('add_job')
                    <li><a href="{{route('jobs.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">ایجاد تجربه جدید</span></a>
                    </li>
                        @endcan
                </ul>
            </li>
            @endcan
            @can('manage_educations')
            <li class=" nav-item"><a href="index.html"><i class="feather icon-book"></i><span class="menu-title" data-i18n="Dashboard">مدیریت تحصیلات</span></a>
                <ul class="menu-content">
                    @can('manage_educations')
                    <li><a href="{{route('educations.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">لیست تحصیلات</span></a>
                    </li>
                    @endcan
                    @can('add_education')
                    <li><a href="{{route('educations.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">ایجاد سابقه تحصیل جدید</span></a>
                    </li>
                        @endcan
                </ul>
            </li>
            @endcan
            @can('manage_skills')
            <li class=" nav-item"><a href="index.html"><i class="fa fa-won"></i><span class="menu-title" data-i18n="Dashboard">مدیریت مهارت ها</span></a>
                <ul class="menu-content">
                    @can('manage_skills')
                    <li><a href="{{route('skills.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">لیست مهارت</span></a>
                    </li>
                    @endcan
                    @can('add_skill')
                    <li><a href="{{route('skills.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">ایجاد مهارت جدید</span></a>
                    </li>
                        @endcan
                </ul>
            </li>
            @endcan
            @can('مدیریت نمونه کارها')
            <li class=" nav-item"><a href="index.html"><i class="feather icon-menu"></i><span class="menu-title" data-i18n="Dashboard">مدیریت نمونه کار ها</span></a>
                <ul class="menu-content">
                    @can('manage_categories')
                    <li><a href="{{route('categories.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">دسته بندی ها</span></a>
                    </li>
                    @endcan
                    @can('manage_categories')
                    <li><a href="{{route('portfolios.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">لیست نمونه کارها</span></a>
                    </li>
                        @endcan
                        @can('add_portfolio')
                    <li><a href="{{route('portfolios.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">ایجاد نمونه کار جدید</span></a>
                    </li>
                        @endcan
                </ul>
            </li>
            @endcan
            @can('manage_articles')
            <li class=" nav-item"><a href="index.html"><i class="fa fa-archive"></i><span class="menu-title" data-i18n="Dashboard">مدیریت مقالات</span></a>
                <ul class="menu-content">
                    @can('manage_categories')
                    <li><a href="{{route('categories.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">دسته بندی ها</span></a>
                    </li>
                    @endcan
                    @can('manage_articles')
                    <li><a href="{{route('articles.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">لیست مقالات</span></a>
                    </li>
                        @endcan
                        @can('add_articles')
                    <li><a href="{{route('articles.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">ایجاد مقاله جدید</span></a>
                    </li>
                        @endcan
                </ul>
            </li>
            @endcan
            @can('manage_rewards')
            <li class=" nav-item"><a href="index.html"><i class="fa fa-gift"></i><span class="menu-title" data-i18n="Dashboard">مدیریت جوایز</span></a>
                <ul class="menu-content">
                    @can('manage_rewards')
                    <li><a href="{{route('rewards.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">لیست جوایز</span></a>
                    </li>
                    @endcan
                    @can('add_reward')
                    <li><a href="{{route('rewards.create')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">ایجاد جایزه جدید</span></a>
                    </li>
                        @endcan
                </ul>
            </li>
            @endcan
            @can('manage_users')
            <li class=" nav-item"><a href="index.html"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Dashboard">مدیریت کاربران</span></a>
                <ul class="menu-content">
                    @can('manage_users')
                    <li><a href="{{route('users.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">لیست کاربران</span></a></li>
                    @endcan
                    @can('manage_permissions')
                    <li><a href="{{route('permissions.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">دسترسی ها</span></a>
                    </li>
                        @endcan
                        @can('manage_roles')
                    <li><a href="{{route('roles.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">نقش ها</span></a>
                    </li>
                        @endcan
                </ul>
            </li>
            @endcan
            @can('manage_settings')
            <li class=" nav-item"><a href="index.html"><i class="fa fa-gears"></i><span class="menu-title" data-i18n="Dashboard">تنظیمات سایت</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('admin.setting.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">تنظیمات کلی</span></a>
                    </li>
                    <li><a href="{{route('socials.index')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">شبکه های اجتماعی</span></a>
                    </li>
                </ul>
            </li>
            @endcan
            <hr>
        </ul>
    </div>
</div>
