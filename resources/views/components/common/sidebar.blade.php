<div :class="{ 'dark text-white-dark': $store.app.semidark }">
    <nav x-data="sidebar"
        class="sidebar fixed min-h-screen h-full top-0 bottom-0 w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] z-50 transition-all duration-300">
        <div class="bg-white dark:bg-[#0e1726] h-full">
            <div class="flex justify-between items-center px-4 py-3">
                <a href="/" class="main-logo flex items-center shrink-0">
                    <img class="w-8 ml-[5px] flex-none" src="/assets/images/logo.svg" alt="image" />
                    <span
                        class="text-2xl ltr:ml-1.5 rtl:mr-1.5  font-semibold  align-middle lg:inline dark:text-white-light">VRISTO</span>
                </a>
                <a href="javascript:;"
                    class="collapse-icon w-8 h-8 rounded-full flex items-center hover:bg-gray-500/10 dark:hover:bg-dark-light/10 dark:text-white-light transition duration-300 rtl:rotate-180"
                    @click="$store.app.toggleSidebar()">
                    <svg class="w-5 h-5 m-auto" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <ul class="perfect-scrollbar relative font-semibold space-y-0.5 h-[calc(100vh-80px)] overflow-y-auto overflow-x-hidden  p-4 py-0"
                x-data="{ activeDropdown: null }">
                <li class="menu nav-item">
                    <button type="button" class="nav-link group" :class="{ 'active': activeDropdown === 'dashboard' }"
                        @click="activeDropdown === 'dashboard' ? activeDropdown = null : activeDropdown = 'dashboard'">
                        <div class="flex items-center">

                            <svg class="group-hover:!text-primary shrink-0" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.5"
                                    d="M2 12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274C22 8.77128 22 9.91549 22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039Z"
                                    fill="currentColor" />
                                <path
                                    d="M9 17.25C8.58579 17.25 8.25 17.5858 8.25 18C8.25 18.4142 8.58579 18.75 9 18.75H15C15.4142 18.75 15.75 18.4142 15.75 18C15.75 17.5858 15.4142 17.25 15 17.25H9Z"
                                    fill="currentColor" />
                            </svg>

                            <span
                                class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
                        </div>
                        <div class="rtl:rotate-180" :class="{ '!rotate-90': activeDropdown === 'dashboard' }">

                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </button>
                    <ul x-cloak x-show="activeDropdown === 'dashboard'" x-collapse class="sub-menu text-gray-500">
                        <li>
                            <a href="/">Sales</a>
                        </li>
                        <li>
                            <a href="/analytics">Analytics</a>
                        </li>
                        <li>
                            <a href="/finance">Finance</a>
                        </li>
                        <li>
                            <a href="/crypto">Crypto</a>
                        </li>
                    </ul>
                </li>

                <h2
                    class="py-3 px-7 flex items-center uppercase font-extrabold bg-white-light/30 dark:bg-dark dark:bg-opacity-[0.08] -mx-4 mb-1">

                    <svg class="w-4 h-5 flex-none hidden" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>Apps</span>
                </h2>


                <ul>
                    <li class="nav-item">
                        <a href="/customer" class="group">
                            <div class="flex items-center">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z"
                                        fill="#1C274C" />
                                    <path opacity="0.5"
                                        d="M19.5 7.5C19.5 8.88071 18.3807 10 17 10C15.6193 10 14.5 8.88071 14.5 7.5C14.5 6.11929 15.6193 5 17 5C18.3807 5 19.5 6.11929 19.5 7.5Z"
                                        fill="#1C274C" />
                                    <path opacity="0.5"
                                        d="M4.5 7.5C4.5 8.88071 5.61929 10 7 10C8.38071 10 9.5 8.88071 9.5 7.5C9.5 6.11929 8.38071 5 7 5C5.61929 5 4.5 6.11929 4.5 7.5Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z"
                                        fill="#1C274C" />
                                    <path opacity="0.5"
                                        d="M22 16.5C22 17.8807 20.2091 19 18 19C15.7909 19 14 17.8807 14 16.5C14 15.1193 15.7909 14 18 14C20.2091 14 22 15.1193 22 16.5Z"
                                        fill="#1C274C" />
                                    <path opacity="0.5"
                                        d="M2 16.5C2 17.8807 3.79086 19 6 19C8.20914 19 10 17.8807 10 16.5C10 15.1193 8.20914 14 6 14C3.79086 14 2 15.1193 2 16.5Z"
                                        fill="#1C274C" />
                                </svg>


                                <span
                                    class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Pelanggan</span>
                            </div>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="/vehicle" class="group">
                            <div class="flex items-center">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.5">
                                        <path
                                            d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                            fill="#1C274C" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                            fill="#1C274C" />
                                    </g>
                                    <path
                                        d="M9.67217 17.5318L11.1967 14.8913C10.7001 14.7536 10.2553 14.4915 9.89804 14.1406L8.37377 16.7807C8.77077 17.0823 9.2065 17.3356 9.67217 17.5318Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M6.0464 12.7499H9.09446C9.0328 12.5102 9 12.259 9 12.0001C9 11.741 9.03283 11.4896 9.09456 11.2499H6.04644C6.01579 11.4956 6 11.746 6 12.0001C6 12.254 6.01577 12.5042 6.0464 12.7499Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M8.37388 7.21935L9.89814 9.85945C10.2555 9.50856 10.7003 9.24643 11.1968 9.10879L9.6723 6.46828C9.20662 6.66447 8.77089 6.91775 8.37388 7.21935Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M12.8031 9.10877L14.3276 6.46826C14.7933 6.66445 15.2291 6.91772 15.6261 7.21931L14.1018 9.85941C13.7445 9.50852 13.2997 9.2464 12.8031 9.10877Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M14.9055 12.7499C14.9672 12.5102 15 12.259 15 12.0001C15 11.741 14.9672 11.4896 14.9054 11.2499H17.9536C17.9842 11.4956 18 11.746 18 12.0001C18 12.254 17.9842 12.5042 17.9536 12.7499H14.9055Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M12.8034 14.8913C13.3 14.7536 13.7447 14.4914 14.102 14.1405L15.6263 16.7806C15.2293 17.0822 14.7936 17.3355 14.3279 17.5317L12.8034 14.8913Z"
                                        fill="#1C274C" />
                                </svg>



                                <span
                                    class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Kendaraan</span>
                            </div>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="/spare_part" class="group">
                            <div class="flex items-center">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5"
                                        d="M12.75 17.75V6.25H16V4.75H8V6.25H11.25V17.75H8V19.25H16V17.75H12.75Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M8 6.5V4.5C8 4.03534 8 3.80302 7.96157 3.60982C7.80376 2.81644 7.18356 2.19624 6.39018 2.03843C6.19698 2 5.96466 2 5.5 2C5.03534 2 4.80302 2 4.60982 2.03843C3.81644 2.19624 3.19624 2.81644 3.03843 3.60982C3 3.80302 3 4.03534 3 4.5V6.5C3 6.96466 3 7.19698 3.03843 7.39018C3.19624 8.18356 3.81644 8.80376 4.60982 8.96157C4.80302 9 5.03534 9 5.5 9C5.96466 9 6.19698 9 6.39018 8.96157C7.18356 8.80376 7.80376 8.18356 7.96157 7.39018C8 7.19698 8 6.96466 8 6.5Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M21 6.5V4.5C21 4.03534 21 3.80302 20.9616 3.60982C20.8038 2.81644 20.1836 2.19624 19.3902 2.03843C19.197 2 18.9647 2 18.5 2C18.0353 2 17.803 2 17.6098 2.03843C16.8164 2.19624 16.1962 2.81644 16.0384 3.60982C16 3.80302 16 4.03534 16 4.5V6.5C16 6.96466 16 7.19698 16.0384 7.39018C16.1962 8.18356 16.8164 8.80376 17.6098 8.96157C17.803 9 18.0353 9 18.5 9C18.9647 9 19.197 9 19.3902 8.96157C20.1836 8.80376 20.8038 8.18356 20.9616 7.39018C21 7.19698 21 6.96466 21 6.5Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M8 19.5V17.5C8 17.0353 8 16.803 7.96157 16.6098C7.80376 15.8164 7.18356 15.1962 6.39018 15.0384C6.19698 15 5.96466 15 5.5 15C5.03534 15 4.80302 15 4.60982 15.0384C3.81644 15.1962 3.19624 15.8164 3.03843 16.6098C3 16.803 3 17.0353 3 17.5V19.5C3 19.9647 3 20.197 3.03843 20.3902C3.19624 21.1836 3.81644 21.8038 4.60982 21.9616C4.80302 22 5.03534 22 5.5 22C5.96466 22 6.19698 22 6.39018 21.9616C7.18356 21.8038 7.80376 21.1836 7.96157 20.3902C8 20.197 8 19.9647 8 19.5Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M21 19.5V17.5C21 17.0353 21 16.803 20.9616 16.6098C20.8038 15.8164 20.1836 15.1962 19.3902 15.0384C19.197 15 18.9647 15 18.5 15C18.0353 15 17.803 15 17.6098 15.0384C16.8164 15.1962 16.1962 15.8164 16.0384 16.6098C16 16.803 16 17.0353 16 17.5V19.5C16 19.9647 16 20.197 16.0384 20.3902C16.1962 21.1836 16.8164 21.8038 17.6098 21.9616C17.803 22 18.0353 22 18.5 22C18.9647 22 19.197 22 19.3902 21.9616C20.1836 21.8038 20.8038 21.1836 20.9616 20.3902C21 20.197 21 19.9647 21 19.5Z"
                                        fill="#1C274C" />
                                </svg>



                                <span
                                    class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Suku
                                    Cadang</span>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/user" class="group">
                            <div class="flex items-center">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="6" r="4" fill="#1C274C" />
                                    <ellipse opacity="0.5" cx="12" cy="17" rx="7"
                                        ry="4" fill="#1C274C" />
                                </svg>




                                <span
                                    class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Users</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu nav-item">
                        <button type="button" class="nav-link group"
                            :class="{ 'active': activeDropdown === 'transaction' }"
                            @click="activeDropdown === 'transaction' ? activeDropdown = null : activeDropdown = 'transaction'">
                            <div class="flex items-center">

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.5"
                                        d="M7.24502 2H16.755C17.9139 2 18.4933 2 18.9606 2.16261C19.8468 2.47096 20.5425 3.18719 20.842 4.09946C21 4.58055 21 5.17705 21 6.37006V20.3742C21 21.2324 20.015 21.6878 19.3919 21.1176C19.0258 20.7826 18.4742 20.7826 18.1081 21.1176L17.625 21.5597C16.9834 22.1468 16.0166 22.1468 15.375 21.5597C14.7334 20.9726 13.7666 20.9726 13.125 21.5597C12.4834 22.1468 11.5166 22.1468 10.875 21.5597C10.2334 20.9726 9.26659 20.9726 8.625 21.5597C7.98341 22.1468 7.01659 22.1468 6.375 21.5597L5.8919 21.1176C5.52583 20.7826 4.97417 20.7826 4.6081 21.1176C3.985 21.6878 3 21.2324 3 20.3742V6.37006C3 5.17705 3 4.58055 3.15795 4.09946C3.45748 3.18719 4.15322 2.47096 5.03939 2.16261C5.50671 2 6.08614 2 7.24502 2Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M7 6.75C6.58579 6.75 6.25 7.08579 6.25 7.5C6.25 7.91421 6.58579 8.25 7 8.25H7.5C7.91421 8.25 8.25 7.91421 8.25 7.5C8.25 7.08579 7.91421 6.75 7.5 6.75H7Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M10.5 6.75C10.0858 6.75 9.75 7.08579 9.75 7.5C9.75 7.91421 10.0858 8.25 10.5 8.25H17C17.4142 8.25 17.75 7.91421 17.75 7.5C17.75 7.08579 17.4142 6.75 17 6.75H10.5Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M7 10.25C6.58579 10.25 6.25 10.5858 6.25 11C6.25 11.4142 6.58579 11.75 7 11.75H7.5C7.91421 11.75 8.25 11.4142 8.25 11C8.25 10.5858 7.91421 10.25 7.5 10.25H7Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M10.5 10.25C10.0858 10.25 9.75 10.5858 9.75 11C9.75 11.4142 10.0858 11.75 10.5 11.75H17C17.4142 11.75 17.75 11.4142 17.75 11C17.75 10.5858 17.4142 10.25 17 10.25H10.5Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M7 13.75C6.58579 13.75 6.25 14.0858 6.25 14.5C6.25 14.9142 6.58579 15.25 7 15.25H7.5C7.91421 15.25 8.25 14.9142 8.25 14.5C8.25 14.0858 7.91421 13.75 7.5 13.75H7Z"
                                        fill="#1C274C" />
                                    <path
                                        d="M10.5 13.75C10.0858 13.75 9.75 14.0858 9.75 14.5C9.75 14.9142 10.0858 15.25 10.5 15.25H17C17.4142 15.25 17.75 14.9142 17.75 14.5C17.75 14.0858 17.4142 13.75 17 13.75H10.5Z"
                                        fill="#1C274C" />
                                </svg>

                                <span
                                    class="ltr:pl-3 rtl:pr-3 text-black dark:text-[#506690] dark:group-hover:text-white-dark">Transaksi</span>
                            </div>
                            <div class="rtl:rotate-180" :class="{ '!rotate-90': activeDropdown === 'transaction' }">

                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </button>
                        <ul x-cloak x-show="activeDropdown === 'transaction'" x-collapse
                            class="sub-menu text-gray-500">
                            <li>
                                <a href="/transaction/create">Pembayaran</a>
                            </li>
                            <li>
                                <a href="/history">Riwayat</a>
                            </li>
                        </ul>
                    </li>
                </ul>
        </div>
    </nav>
</div>
<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("sidebar", () => ({
            init() {
                const selector = document.querySelector('.sidebar ul a[href="' + window.location
                    .pathname + '"]');
                if (selector) {
                    selector.classList.add('active');
                    const ul = selector.closest('ul.sub-menu');
                    if (ul) {
                        let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                        if (ele) {
                            ele = ele[0];
                            setTimeout(() => {
                                ele.click();
                            });
                        }
                    }
                }
            },
        }));
    });
</script>
