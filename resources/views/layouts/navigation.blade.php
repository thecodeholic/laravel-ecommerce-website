<header
    x-data="{menuOpen: false}"
    class="flex justify-between bg-slate-800 shadow-md text-white"
>
    <div>
        <a href="/src" class="block py-navbar-item pl-5"> Logo </a>
    </div>
    <div
        class="block fixed z-10 top-0 bottom-0 height h-full w-[220px] transition-all bg-slate-900 md:hidden"
        :class="menuOpen ? 'left-0' : 'left-[-220px]'"
    >
        <ul>
            <li>
                <a
                    href="/src/index.html"
                    class="block py-2 px-3 transition-colors hover:bg-slate-800"
                >Home</a
                >
            </li>
            <li>
                <a
                    href="#"
                    class="block py-2 px-3 transition-colors hover:bg-slate-800"
                >Categories</a
                >
            </li>
            <li>
                <a
                    href="#"
                    class="block py-2 px-3 transition-colors hover:bg-slate-800"
                >Something</a
                >
            </li>
        </ul>
        <ul>
            <li>
                    <a
                        href="/src/cart.html"
                        class="flex relative items-center py-2 px-3 transition-colors hover:bg-slate-800"
                    >
                  <span class="flex items-center justify-between">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-2 -mt-1"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                      <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                      />
                    </svg>
                    Cart
                  </span>
                        <template x-if="cartItemCount > 0">
                    <span
                        class="absolute z-10 top-0 right-2 bg-red-600 text-white px-2 rounded-xl"
                        x-text="cartItemCount"
                    ></span>
                        </template>
                    </a>
            </li>
            @if (!Auth::guest())
                <li class="relative" x-data="{open: false}">
                <a
                    href="#"
                    class="flex justify-between items-center py-2 px-3 hover:bg-slate-800"
                    @click="open = !open"
                >
                  <span class="flex items-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-2"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                      <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                      />
                    </svg>
                    My Account
                  </span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </a>
                <ul
                    class="z-10 right-0 bg-slate-800 py-2"
                    x-show="open"
                    x-transition
                >
                    <li>
                        <a
                            href="/src/profile.html"
                            class="flex px-3 py-2 hover:bg-slate-900"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                />
                            </svg>
                            My Profile
                        </a>
                    </li>
                    <li>
                        <a
                            href="/src/watchlist.html"
                            class="flex items-center px-3 py-2 hover:bg-slate-900"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                />
                            </svg>
                            Watchlist
                        </a>
                    </li>
                    <li class="hover:bg-slate-900">
                        <a
                            href="/src/orders.html"
                            class="flex items-center px-3 py-2 hover:bg-slate-900"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                                />
                            </svg>
                            My Orders
                        </a>
                    </li>
                    <li class="hover:bg-slate-900">
                        <a
                            href="/src/logout.html"
                            class="flex items-center px-3 py-2 hover:bg-slate-900"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                                />
                            </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </li>
            @else
                <li>
                    <a
                        href="{{ route('login') }}"
                        class="flex items-center py-2 px-3 transition-colors hover:bg-slate-800"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 mr-2"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                            />
                        </svg>
                        Login
                    </a>
                </li>
                <li class="px-3 py-3">
                <a
                    href="{{ route('register') }}"
                    class="block text-center text-white bg-emerald-600 py-2 px-3 rounded shadow-md hover:bg-emerald-700 active:bg-emerald-800 transition-colors w-full"
                >
                    Register now
                </a>
            </li>
            @endif
        </ul>
    </div>
    <nav class="hidden md:block">
        <ul class="grid grid-flow-col">
            <li>
                <a
                    href="/src/index.html"
                    class="block py-navbar-item px-navbar-item hover:bg-slate-900"
                >Home</a
                >
            </li>
            <li>
                <a
                    href="#"
                    class="block py-navbar-item px-navbar-item hover:bg-slate-900"
                >Categories</a
                >
            </li>
            <li>
                <a
                    href="#"
                    class="block py-navbar-item px-navbar-item hover:bg-slate-900"
                >Something</a
                >
            </li>
        </ul>
    </nav>
    <nav class="hidden md:block">
        <ul class="grid grid-flow-col items-center">
            <li>
                <a
                    href="/src/cart.html"
                    class="flex relative items-center py-navbar-item px-navbar-item hover:bg-slate-900"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 mr-2"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                        />
                    </svg>
                    Cart
                    <template x-if="cartItemCount > 0">
                <span
                    class="absolute top-4 -right-1 bg-red-600 text-white px-2 rounded-xl"
                    x-text="cartItemCount"
                ></span>
                    </template>
                </a>
            </li>
            @if (!Auth::guest())
                <li class="relative" x-data="{open: false}">
                <a
                    href="#"
                    class="flex items-center py-navbar-item px-navbar-item pr-5 hover:bg-slate-900"
                    @click="open = !open"
                    @click.outside="open = false"
                >
              <span class="flex items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 mr-2"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                  <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                  />
                </svg>
                My Account
              </span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 ml-2"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </a>
                <ul
                    class="absolute z-10 right-0 bg-slate-800 py-2 w-48"
                    x-show="open"
                    x-transition
                >
                    <li>
                        <a
                            href="/src/profile.html"
                            class="flex px-3 py-2 hover:bg-slate-900"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                />
                            </svg>
                            My Profile
                        </a>
                    </li>
                    <li>
                        <a
                            href="/src/watchlist.html"
                            class="flex items-center px-3 py-2 hover:bg-slate-900"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                                />
                            </svg>
                            Watchlist
                        </a>
                    </li>
                    <li>
                        <a
                            href="/src/orders.html"
                            class="flex px-3 py-2 hover:bg-slate-900"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 mr-2"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                                />
                            </svg>
                            My Orders
                        </a>
                    </li>
                    <li>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                this.closest('form').submit();"
                                class="flex px-3 py-2 hover:bg-slate-900"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 mr-2"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                                    />
                                </svg>
                                Logout
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
            @else
                <li>
                    <a
                        href="{{ route('login') }}"
                        class="flex items-center py-navbar-item px-navbar-item hover:bg-slate-900"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 mr-2"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                            />
                        </svg>
                        Login
                    </a>
                </li>
                <li>
                <a
                    href="{{ route('register') }}"
                    class="inline-flex items-center text-white bg-emerald-600 py-2 px-3 rounded shadow-md hover:bg-emerald-700 active:bg-emerald-800 transition-colors mx-5"
                >
                    Register now
                </a>
            </li>
            @endif
        </ul>
    </nav>
    <button class="p-4 block md:hidden" @click="menuOpen = !menuOpen">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16"
            />
        </svg>
    </button>
</header>
