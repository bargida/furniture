<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">AdminHub</span>
    </a>
    <ul class="side-menu top">
        <li class="@yield('dashboard')">
            <a href="#">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('admin.categories.index') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">Categories</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('admin.products.index') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">Products</span>
            </a>
        </li>
        <li class="">
            <a href="{{ route('admin.tags.index') }}">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">Tags</span>
            </a>
        </li>
        <li class="">
            <a href="#">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">Staff</span>
            </a>
        </li>


        <li>
            <a href="#">
                <i class='bx bxs-shopping-bag-alt' ></i>
                <span class="text">Classes</span>
            </a>
        </li>

    </ul>
    <ul class="side-menu">
        <li>
            <a href="#">
                <i class='bx bxs-cog' ></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
