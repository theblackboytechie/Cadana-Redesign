
@php
  $thefullurl = Request::url();
  $parts = explode('/', $thefullurl);
  $accountId = end($parts);
@endphp
@if(Auth::user()->accounttype == "clinicx" || Auth::user()->accounttype == "professionalx")
  <x-app-layout>
    <div style="height: 100vh; width: 100vw;display: flex;align-items: center;justify-content: center;text-align: center;"><div>You aren't authorized to access the <b class="text-primary">Cadana Application!</b></div></div>
  </x-app-layout>
@else
<x-app-layout>
      <?php
          if($owner == 'viewdashboard'){
              $thepage = "home";
          }elseif($owner == "viewallusers"){
              $thepage = "users";
          }else{
              $thepage = "";
          }
      ?>
      <body
          x-data="{ page: '{{$thepage}}', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
          x-init="
              darkMode = JSON.parse(localStorage.getItem('darkMode'));
              $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
          :class="{'dark text-bodydark bg-boxdark-2': darkMode === true} font-sans antialiased"
          id="cadanamaps"
          database_update="{{ route('database_update') }}"
          database_upload_file="{{ route('database_upload_file') }}"
          database_upload_profileimg="{{ route('database_upload_profileimg') }}"
      >
      <!-- ===== Preloader Start ===== -->
      <div
          x-show="loaded"
          x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})"
          class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black"
      >
          <div
              class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent"
          ></div>
      </div>

      <!-- ===== Preloader End ===== -->

          <!-- ===== Page Wrapper Start ===== -->
          <div class="flex h-screen overflow-hidden">
        <!-- ===== Sidebar Start ===== -->
        <aside
    :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden border-r bg-white duration-300 ease-linear lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false"
  >
    <!-- SIDEBAR HEADER -->
    <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
      <a href="index.html">
        <img src="{{ asset('storage/assets/images/cadanalogo.png') }}" alt="Logo" class="h-12" />
      </a>

      <button
        class="block lg:hidden"
        @click.stop="sidebarToggle = !sidebarToggle"
      >
        <svg
          class="fill-current"
          width="20"
          height="18"
          viewBox="0 0 20 18"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
            fill=""
          />
        </svg>
      </button>
    </div>
    <!-- SIDEBAR HEADER -->

    <div
      class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear"
    >
    @php
      if(!empty(Auth::user()->accounttype)){
    @endphp
      <!-- Sidebar Menu -->
      <nav
        class="px-4 py-4 lg:px-6"
        x-data="{selected: $persist('Dashboard')}"
      >
        <!-- Menu Group -->
        <div>
          <ul class="mb-6 flex flex-col gap-1.5">
            <!-- Menu Item Dashboard -->
            @if(Auth::user()->accounttype != 'donor')
            <li>
              <a
                class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-black duration-300 ease-in-out hover:bg-primary hover:text-white"
                href="/dashboard"
                @click="selected = (selected === 'Dashboard' ? '':'Dashboard')"
                :class="{ 'bg-primary text-white': (selected === 'Dashboard') || (page === 'home') }"
              >
                <svg
                  class="fill-current"
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                    fill=""
                  />
                  <path
                    d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                    fill=""
                  />
                  <path
                    d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                    fill=""
                  />
                  <path
                    d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                    fill=""
                  />
                </svg>

                Dashboard
              </a>
            </li>

            <li>
              <a
                class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-black duration-300 ease-in-out hover:bg-primary/90 hover:text-white"
                href="/allusers"
                @click="selected = (selected === 'Users' ? '':'Users')"
                :class="{ 'bg-primary text-white': (selected === 'Users') && (page === 'users') }"
              >
                <svg
                  class="fill-current"
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9.0002 7.79065C11.0814 7.79065 12.7689 6.1594 12.7689 4.1344C12.7689 2.1094 11.0814 0.478149 9.0002 0.478149C6.91895 0.478149 5.23145 2.1094 5.23145 4.1344C5.23145 6.1594 6.91895 7.79065 9.0002 7.79065ZM9.0002 1.7719C10.3783 1.7719 11.5033 2.84065 11.5033 4.16252C11.5033 5.4844 10.3783 6.55315 9.0002 6.55315C7.62207 6.55315 6.49707 5.4844 6.49707 4.16252C6.49707 2.84065 7.62207 1.7719 9.0002 1.7719Z"
                    fill=""
                  />
                  <path
                    d="M10.8283 9.05627H7.17207C4.16269 9.05627 1.71582 11.5313 1.71582 14.5406V16.875C1.71582 17.2125 1.99707 17.5219 2.3627 17.5219C2.72832 17.5219 3.00957 17.2407 3.00957 16.875V14.5406C3.00957 12.2344 4.89394 10.3219 7.22832 10.3219H10.8564C13.1627 10.3219 15.0752 12.2063 15.0752 14.5406V16.875C15.0752 17.2125 15.3564 17.5219 15.7221 17.5219C16.0877 17.5219 16.3689 17.2407 16.3689 16.875V14.5406C16.2846 11.5313 13.8377 9.05627 10.8283 9.05627Z"
                    fill=""
                  />
                </svg>

                All Users
              </a>
            </li>

            <li>
              <a
                class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-black duration-300 ease-in-out hover:bg-primary/90 hover:text-white"
                href="/clinics"
                @click="selected = (selected === 'Clinics' ? '':'Clinics')"
                :class="{ 'bg-primary text-white': (selected === 'Clinics' ) && (page === 'clinics' || 'clinic-profile') }"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 384 512"
                  width="18"
                  height="18"
                  class="size-4 fill-current"
                >
                  <path
                    d="M222.6 43.2l-.1 4.8L288 48c53 0 96 43 96 96s-43 96-96 96l-40 0 0-80 40 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-40 0-28 0-4.5 144 40.5 0c53 0 96 43 96 96s-43 96-96 96l-16 0 0-80 16 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-43 0-3.1 99.5L208.5 495l0 1c-.3 8.9-7.6 16-16.5 16s-16.2-7.1-16.5-16l0-1-1-31L136 464c-22.1 0-40-17.9-40-40s17.9-40 40-40l36 0-1-32-19 0c-53 0-96-43-96-96c0-47.6 34.6-87.1 80-94.7l0 94.7c0 8.8 7.2 16 16 16l16.5 0L164 128l-28 0-13.4 0c-9 18.9-28.3 32-50.6 32l-16 0c-30.9 0-56-25.1-56-56S25.1 48 56 48l8 0 8 0 89.5 0-.1-4.8L161 32c0-.7 0-1.3 0-1.9c.5-16.6 14.1-30 31-30s30.5 13.4 31 30c0 .6 0 1.3 0 1.9l-.4 11.2zM64 112a16 16 0 1 0 0-32 16 16 0 1 0 0 32z"
                  />
                </svg>

                Clinics
              </a>
            </li>
            <li>
              <a
                class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-black duration-300 ease-in-out hover:bg-primary/90 hover:text-white"
                href="/professionals"
                @click="selected = (selected === 'Professionals' ? '':'Professionals')"
                :class="{ 'bg-primary text-white': (selected === 'Professionals') && (page === 'professionals') }"
                :class="page === 'Professionals' && 'bg-primary'"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  height="18"
                  class="size-4 fill-current"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M96 128l0-57.8c0-13.3 8.3-25.3 20.8-30l96-36c7.2-2.7 15.2-2.7 22.5 0l96 36c12.5 4.7 20.8 16.6 20.8 30l0 57.8-.3 0c.2 2.6 .3 5.3 .3 8l0 40c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-40c0-2.7 .1-5.4 .3-8l-.3 0zm48 48c0 44.2 35.8 80 80 80s80-35.8 80-80l0-16-160 0 0 16zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7L30.7 512C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6zM208 48l0 16-16 0c-4.4 0-8 3.6-8 8l0 16c0 4.4 3.6 8 8 8l16 0 0 16c0 4.4 3.6 8 8 8l16 0c4.4 0 8-3.6 8-8l0-16 16 0c4.4 0 8-3.6 8-8l0-16c0-4.4-3.6-8-8-8l-16 0 0-16c0-4.4-3.6-8-8-8l-16 0c-4.4 0-8 3.6-8 8z"
                  />
                </svg>
                Professionals
              </a>
            </li>

            <li>
              <a
                class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-black duration-300 ease-in-out hover:bg-primary/90 hover:text-white"
                href="/donors"
                @click="selected = (selected === 'Donors' ? '':'Donors')"
                :class="{ 'bg-primary text-white': (selected === 'Donors') || (page === 'donors') }"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  height="18"
                  class="size-4 fill-current"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M96 128l0-57.8c0-13.3 8.3-25.3 20.8-30l96-36c7.2-2.7 15.2-2.7 22.5 0l96 36c12.5 4.7 20.8 16.6 20.8 30l0 57.8-.3 0c.2 2.6 .3 5.3 .3 8l0 40c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-40c0-2.7 .1-5.4 .3-8l-.3 0zm48 48c0 44.2 35.8 80 80 80s80-35.8 80-80l0-16-160 0 0 16zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7L30.7 512C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6zM208 48l0 16-16 0c-4.4 0-8 3.6-8 8l0 16c0 4.4 3.6 8 8 8l16 0 0 16c0 4.4 3.6 8 8 8l16 0c4.4 0 8-3.6 8-8l0-16 16 0c4.4 0 8-3.6 8-8l0-16c0-4.4-3.6-8-8-8l-16 0 0-16c0-4.4-3.6-8-8-8l-16 0c-4.4 0-8 3.6-8 8z"
                  />
                </svg>

                Donors
              </a>
            </li>
            @endif
            <li>
              <a
                class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-black duration-300 ease-in-out hover:bg-primary/90 hover:text-white"
                href="/chats"
                @click="selected = (selected === 'Chats' ? '':'Chats')"
                :class="{ 'bg-primary text-white': (selected === 'Chats') && (page === 'chats') }"
                :class="page === 'Chats' && 'bg-primary'"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  height="18"
                  class="size-4 fill-current"
                  viewBox="0 0 512 512"
                >
                  <path
                    d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c0 0 0 0 0 0s0 0 0 0s0 0 0 0c0 0 0 0 0 0l.3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"
                  />
                </svg>

                Chats
              </a>
            </li>
            <li>
              <a
                class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-black duration-300 ease-in-out hover:bg-primary/90 hover:text-white"
                href="/search"
                @click="selected = (selected === 'Search' ? '':'Search')"
                :class="{ 'bg-primary text-white': (selected === 'Search') && (page === 'Search') }"
                :class="page === 'Search' && 'bg-primary'"
              >
                <i class="fa-solid fa-magnifying-glass"></i>
                Search
              </a>
            </li>
            <li>
              <a
                class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-black duration-300 ease-in-out hover:bg-primary/90 hover:text-white"
                href="/usersettings/{{ auth()->id() }}"
                @click="selected = (selected === 'Settings' ? '':'Settings')"
                :class="{ 'bg-primary text-white': (selected === 'Settings') && (page === 'settings') }"
                :class="page === 'Settings' && 'bg-primary'"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  height="18"
                  class="size-4 fill-current"
                  viewBox="0 0 512 512"
                >
                  <path
                    d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"
                  />
                </svg>

                Settings
              </a>
            </li>
            <li>
              <a
                class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-black duration-300 ease-in-out hover:bg-primary/90 hover:text-white"
                href=""
                @click="selected = (selected === 'Logout' ? '':'Logout')"
                :class="{ 'bg-primary text-white': (selected === 'Chats') && (page === 'logout') }"
                :class="page === 'Logout' && 'bg-primary'"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="18"
                  height="18"
                  class="size-4 fill-current"
                  viewBox="0 0 512 512"
                >
                  <path
                    d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"
                  />
                </svg>

                Logout
              </a>
            </li>
          </ul>
        </div>
      </nav>
      @php
        }
      @endphp
      <!-- Sidebar Menu -->
    </div>
  </aside>

        <!-- ===== Sidebar End ===== -->

        <!-- ===== Content Area Start ===== -->
        <div
          class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
        >
          <!-- ===== Header Start ===== -->
          <header
    class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none"
  >
    <div
      class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 2xl:px-11"
    >
      <div class="flex items-center gap-2 sm:gap-4 lg:hidden">
        <!-- Hamburger Toggle BTN -->
        <button
          class="z-99999 block rounded-sm border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-boxdark lg:hidden"
          @click.stop="sidebarToggle = !sidebarToggle"
        >
          <span class="relative block h-5.5 w-5.5 cursor-pointer">
            <span class="du-block absolute right-0 h-full w-full">
              <span
                class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-[0] duration-200 ease-in-out dark:bg-white"
                :class="{ '!w-full delay-300': !sidebarToggle }"
              ></span>
              <span
                class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-150 duration-200 ease-in-out dark:bg-white"
                :class="{ '!w-full delay-400': !sidebarToggle }"
              ></span>
              <span
                class="relative left-0 top-0 my-1 block h-0.5 w-0 rounded-sm bg-black delay-200 duration-200 ease-in-out dark:bg-white"
                :class="{ '!w-full delay-500': !sidebarToggle }"
              ></span>
            </span>
            <span class="du-block absolute right-0 h-full w-full rotate-45">
              <span
                class="absolute left-2.5 top-0 block h-full w-0.5 rounded-sm bg-black delay-300 duration-200 ease-in-out dark:bg-white"
                :class="{ '!h-0 delay-[0]': !sidebarToggle }"
              ></span>
              <span
                class="delay-400 absolute left-0 top-2.5 block h-0.5 w-full rounded-sm bg-black duration-200 ease-in-out dark:bg-white"
                :class="{ '!h-0 dealy-200': !sidebarToggle }"
              ></span>
            </span>
          </span>
        </button>
        @if($accountId == "chats")
          <span class="chats_mobile_toggle"><i class="fa-solid fa-list"></i></span>
        @endif
        <!-- Hamburger Toggle BTN -->
        <a class="block flex-shrink-0 lg:hidden" href="index.html">
          <img src="{{ asset('storage/assets/images/cadanalogo.png') }}" class="h-12" alt="Logo" />
        </a>
      </div>
      <div class="hidden sm:block">
        <form action="https://formbold.com/s/unique_form_id" method="POST">
          <div class="relative">
            <button class="absolute left-0 top-1/2 -translate-y-1/2 hidden">
              <svg
                class="fill-body hover:fill-primary dark:fill-bodydark dark:hover:fill-primary"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M9.16666 3.33332C5.945 3.33332 3.33332 5.945 3.33332 9.16666C3.33332 12.3883 5.945 15 9.16666 15C12.3883 15 15 12.3883 15 9.16666C15 5.945 12.3883 3.33332 9.16666 3.33332ZM1.66666 9.16666C1.66666 5.02452 5.02452 1.66666 9.16666 1.66666C13.3088 1.66666 16.6667 5.02452 16.6667 9.16666C16.6667 13.3088 13.3088 16.6667 9.16666 16.6667C5.02452 16.6667 1.66666 13.3088 1.66666 9.16666Z"
                  fill=""
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M13.2857 13.2857C13.6112 12.9603 14.1388 12.9603 14.4642 13.2857L18.0892 16.9107C18.4147 17.2362 18.4147 17.7638 18.0892 18.0892C17.7638 18.4147 17.2362 18.4147 16.9107 18.0892L13.2857 14.4642C12.9603 14.1388 12.9603 13.6112 13.2857 13.2857Z"
                  fill=""
                />
              </svg>
            </button>

            <input
              type="text"
              placeholder="Type to search..."
              class="w-full bg-transparent pl-9 pr-4 focus:outline-none xl:w-125 hidden"
            />
          </div>
        </form>
      </div>

      <div class="flex items-center gap-3 2xsm:gap-7">
        <ul class="flex items-center gap-2 2xsm:gap-4 hidden">
          <!-- Notification Menu Area -->
          <li
            class="relative"
            x-data="{ dropdownOpen: false, notifying: true }"
            @click.outside="dropdownOpen = false"
          >
            <a
              class="relative flex h-8.5 w-8.5 items-center justify-center rounded-full border-[0.5px] border-stroke bg-gray hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white"
              href="#"
              @click.prevent="dropdownOpen = ! dropdownOpen; notifying = false"
            >
              <span
                :class="!notifying && 'hidden'"
                class="absolute -top-0.5 right-0 z-1 h-2 w-2 rounded-full bg-meta-1"
              >
                <span
                  class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-meta-1 opacity-75"
                ></span>
              </span>

              <svg
                class="fill-current duration-300 ease-in-out"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M16.1999 14.9343L15.6374 14.0624C15.5249 13.8937 15.4687 13.7249 15.4687 13.528V7.67803C15.4687 6.01865 14.7655 4.47178 13.4718 3.31865C12.4312 2.39053 11.0812 1.7999 9.64678 1.6874V1.1249C9.64678 0.787402 9.36553 0.478027 8.9999 0.478027C8.6624 0.478027 8.35303 0.759277 8.35303 1.1249V1.65928C8.29678 1.65928 8.24053 1.65928 8.18428 1.6874C4.92178 2.05303 2.4749 4.66865 2.4749 7.79053V13.528C2.44678 13.8093 2.39053 13.9499 2.33428 14.0343L1.7999 14.9343C1.63115 15.2155 1.63115 15.553 1.7999 15.8343C1.96865 16.0874 2.2499 16.2562 2.55928 16.2562H8.38115V16.8749C8.38115 17.2124 8.6624 17.5218 9.02803 17.5218C9.36553 17.5218 9.6749 17.2405 9.6749 16.8749V16.2562H15.4687C15.778 16.2562 16.0593 16.0874 16.228 15.8343C16.3968 15.553 16.3968 15.2155 16.1999 14.9343ZM3.23428 14.9905L3.43115 14.653C3.5999 14.3718 3.68428 14.0343 3.74053 13.6405V7.79053C3.74053 5.31553 5.70928 3.23428 8.3249 2.95303C9.92803 2.78428 11.503 3.2624 12.6562 4.2749C13.6687 5.1749 14.2312 6.38428 14.2312 7.67803V13.528C14.2312 13.9499 14.3437 14.3437 14.5968 14.7374L14.7655 14.9905H3.23428Z"
                  fill=""
                />
              </svg>
            </a>

            <!-- Dropdown Start -->
            <div
              x-show="dropdownOpen"
              class="absolute -right-27 mt-2.5 flex h-90 w-75 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark sm:right-0 sm:w-80"
            >
              <div class="px-4.5 py-3">
                <h5 class="text-sm font-medium text-bodydark2">Notification</h5>
              </div>

              <ul class="flex h-auto flex-col overflow-y-auto">
                <li>
                  <a
                    class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                    href="#"
                  >
                    <p class="text-sm">
                      <span class="text-black dark:text-white"
                        >Edit your information in a swipe</span
                      >
                      Sint occaecat cupidatat non proident, sunt in culpa qui
                      officia deserunt mollit anim.
                    </p>

                    <p class="text-xs">12 May, 2025</p>
                  </a>
                </li>
                <li>
                  <a
                    class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                    href="#"
                  >
                    <p class="text-sm">
                      <span class="text-black dark:text-white"
                        >It is a long established fact</span
                      >
                      that a reader will be distracted by the readable.
                    </p>

                    <p class="text-xs">24 Feb, 2025</p>
                  </a>
                </li>
                <li>
                  <a
                    class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                    href="#"
                  >
                    <p class="text-sm">
                      <span class="text-black dark:text-white"
                        >There are many variations</span
                      >
                      of passages of Lorem Ipsum available, but the majority have
                      suffered
                    </p>

                    <p class="text-xs">04 Jan, 2025</p>
                  </a>
                </li>
                <li>
                  <a
                    class="flex flex-col gap-2.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                    href="#"
                  >
                    <p class="text-sm">
                      <span class="text-black dark:text-white"
                        >There are many variations</span
                      >
                      of passages of Lorem Ipsum available, but the majority have
                      suffered
                    </p>

                    <p class="text-xs">01 Dec, 2024</p>
                  </a>
                </li>
              </ul>
            </div>
            <!-- Dropdown End -->
          </li>
          <!-- Notification Menu Area -->

          <!-- Chat Notification Area -->
          <li
            class="relative"
            x-data="{ dropdownOpen: false, notifying: true }"
            @click.outside="dropdownOpen = false"
          >
            <a
              class="relative flex h-8.5 w-8.5 items-center justify-center rounded-full border-[0.5px] border-stroke bg-gray hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white"
              href="#"
              @click.prevent="dropdownOpen = ! dropdownOpen; notifying = false"
            >
              <span
                :class="!notifying && 'hidden'"
                class="absolute -right-0.5 -top-0.5 z-1 h-2 w-2 rounded-full bg-meta-1"
              >
                <span
                  class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-meta-1 opacity-75"
                ></span>
              </span>

              <svg
                class="fill-current duration-300 ease-in-out"
                width="18"
                height="18"
                viewBox="0 0 18 18"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M10.9688 1.57495H7.03135C3.43135 1.57495 0.506348 4.41558 0.506348 7.90308C0.506348 11.3906 2.75635 13.8375 8.26885 16.3125C8.40947 16.3687 8.52197 16.3968 8.6626 16.3968C8.85947 16.3968 9.02822 16.3406 9.19697 16.2281C9.47822 16.0593 9.64697 15.75 9.64697 15.4125V14.2031H10.9688C14.5688 14.2031 17.522 11.3625 17.522 7.87495C17.522 4.38745 14.5688 1.57495 10.9688 1.57495ZM10.9688 12.9937H9.3376C8.80322 12.9937 8.35322 13.4437 8.35322 13.9781V15.0187C3.6001 12.825 1.74385 10.8 1.74385 7.9312C1.74385 5.14683 4.10635 2.8687 7.03135 2.8687H10.9688C13.8657 2.8687 16.2563 5.14683 16.2563 7.9312C16.2563 10.7156 13.8657 12.9937 10.9688 12.9937Z"
                  fill=""
                />
                <path
                  d="M5.42812 7.28442C5.0625 7.28442 4.78125 7.56567 4.78125 7.9313C4.78125 8.29692 5.0625 8.57817 5.42812 8.57817C5.79375 8.57817 6.075 8.29692 6.075 7.9313C6.075 7.56567 5.79375 7.28442 5.42812 7.28442Z"
                  fill=""
                />
                <path
                  d="M9.00015 7.28442C8.63452 7.28442 8.35327 7.56567 8.35327 7.9313C8.35327 8.29692 8.63452 8.57817 9.00015 8.57817C9.33765 8.57817 9.64702 8.29692 9.64702 7.9313C9.64702 7.56567 9.33765 7.28442 9.00015 7.28442Z"
                  fill=""
                />
                <path
                  d="M12.5719 7.28442C12.2063 7.28442 11.925 7.56567 11.925 7.9313C11.925 8.29692 12.2063 8.57817 12.5719 8.57817C12.9375 8.57817 13.2188 8.29692 13.2188 7.9313C13.2188 7.56567 12.9094 7.28442 12.5719 7.28442Z"
                  fill=""
                />
              </svg>
            </a>

            <!-- Dropdown Start -->
            <div
              x-show="dropdownOpen"
              class="absolute -right-16 mt-2.5 flex h-90 w-75 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark sm:right-0 sm:w-80"
            >
              <div class="px-4.5 py-3">
                <h5 class="text-sm font-medium text-bodydark2">Messages</h5>
              </div>

              <ul class="flex h-auto flex-col overflow-y-auto">
                <li>
                  <a
                    class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                    href="messages.html"
                  >
                    <div class="h-12.5 w-12.5 rounded-full">
                      <img src="{{ asset('storage/assets/images/user-01.png') }}" alt="User" />
                    </div>

                    <div>
                      <h6 class="text-sm font-medium text-black dark:text-white">
                        Mariya Desoja
                      </h6>
                      <p class="text-sm">I like your confidence 💪</p>
                      <p class="text-xs">2min ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a
                    class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                    href="messages.html"
                  >
                    <div class="h-12.5 w-12.5 rounded-full">
                      <img src="{{ asset('storage/assets/images/user-01.png') }}" alt="User" />
                    </div>

                    <div>
                      <h6 class="text-sm font-medium text-black dark:text-white">
                        Robert Jhon
                      </h6>
                      <p class="text-sm">Can you share your offer?</p>
                      <p class="text-xs">10min ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a
                    class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                    href="messages.html"
                  >
                    <div class="h-12.5 w-12.5 rounded-full">
                      <img src="{{ asset('storage/assets/images/user-01.png') }}" alt="User" />
                    </div>

                    <div>
                      <h6 class="text-sm font-medium text-black dark:text-white">
                        Henry Dholi
                      </h6>
                      <p class="text-sm">I cam across your profile and...</p>
                      <p class="text-xs">1day ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a
                    class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                    href="messages.html"
                  >
                    <div class="h-12.5 w-12.5 rounded-full">
                      <img src="src/images/user/user-04.png" alt="User" />
                    </div>

                    <div>
                      <h6 class="text-sm font-medium text-black dark:text-white">
                        Cody Fisher
                      </h6>
                      <p class="text-sm">I’m waiting for you response!</p>
                      <p class="text-xs">5days ago</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a
                    class="flex gap-4.5 border-t border-stroke px-4.5 py-3 hover:bg-gray-2 dark:border-strokedark dark:hover:bg-meta-4"
                    href="messages.html"
                  >
                    <div class="h-12.5 w-12.5 rounded-full">
                      <img src="src/images/user/user-02.png" alt="User" />
                    </div>

                    <div>
                      <h6 class="text-sm font-medium text-black dark:text-white">
                        Mariya Desoja
                      </h6>
                      <p class="text-sm">I like your confidence 💪</p>
                      <p class="text-xs">2min ago</p>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <!-- Dropdown End -->
          </li>
          <!-- Chat Notification Area -->
        </ul>

        <!-- User Area -->
        <div
          class="relative"
          x-data="{ dropdownOpen: false }"
          @click.outside="dropdownOpen = false"
        >
          <a
            class="flex items-center gap-4"
            href="#"
            @click.prevent="dropdownOpen = ! dropdownOpen"
          >
            <span class="hidden text-right lg:block">
              <span class="block text-sm font-medium text-black dark:text-white"
                >{{Auth::user()->name}}</span
              >
              <span class="block text-xs font-medium">{{Auth::user()->accounttype}}</span>
            </span>

            <span class="h-12 w-12 rounded-full">
              @if($accountId == auth()->user()->id)
                @php
                  $theclass = "profile_picture_thumbnail";
                @endphp
              @else
                @php
                  $theclass = "";
                @endphp
              @endif
              @if (!empty(auth()->user()->profile_picture))
                  <img src="{{ asset('storage/uploads/'.auth()->user()->profile_picture) }}" alt="User" class="{{$theclass}}" style="height: 50px; width: 50px;border-radius: 50%;" />
              @else
                  <img src="{{ asset('storage/assets/images/user-01.png') }}" alt="User" class="{{$theclass}}" />
              @endif
            </span>

            <svg
              :class="dropdownOpen && 'rotate-180'"
              class="hidden fill-current sm:block"
              width="12"
              height="8"
              viewBox="0 0 12 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                fill=""
              />
            </svg>
          </a>

          <!-- Dropdown Start -->
          @php
            if(!empty(Auth::user()->accounttype)){
          @endphp
          <div
            x-show="dropdownOpen"
            class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
          >
            <ul
              class="flex flex-col gap-5 border-b border-stroke px-6 py-7.5 dark:border-strokedark"
            >
              <li class="hidden">
                <a
                  href="profile.html"
                  class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base"
                >
                  <svg
                    class="fill-current"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11 9.62499C8.42188 9.62499 6.35938 7.59687 6.35938 5.12187C6.35938 2.64687 8.42188 0.618744 11 0.618744C13.5781 0.618744 15.6406 2.64687 15.6406 5.12187C15.6406 7.59687 13.5781 9.62499 11 9.62499ZM11 2.16562C9.28125 2.16562 7.90625 3.50624 7.90625 5.12187C7.90625 6.73749 9.28125 8.07812 11 8.07812C12.7188 8.07812 14.0938 6.73749 14.0938 5.12187C14.0938 3.50624 12.7188 2.16562 11 2.16562Z"
                      fill=""
                    />
                    <path
                      d="M17.7719 21.4156H4.2281C3.5406 21.4156 2.9906 20.8656 2.9906 20.1781V17.0844C2.9906 13.7156 5.7406 10.9656 9.10935 10.9656H12.925C16.2937 10.9656 19.0437 13.7156 19.0437 17.0844V20.1781C19.0094 20.8312 18.4594 21.4156 17.7719 21.4156ZM4.53748 19.8687H17.4969V17.0844C17.4969 14.575 15.4344 12.5125 12.925 12.5125H9.07498C6.5656 12.5125 4.5031 14.575 4.5031 17.0844V19.8687H4.53748Z"
                      fill=""
                    />
                  </svg>
                  My Profile
                </a>
              </li>
              <li class="hidden">
                <a
                  href="messages.html"
                  class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base"
                >
                  <svg
                    class="fill-current"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M17.6687 1.44374C17.1187 0.893744 16.4312 0.618744 15.675 0.618744H7.42498C6.25623 0.618744 5.25935 1.58124 5.25935 2.78437V4.12499H4.29685C3.88435 4.12499 3.50623 4.46874 3.50623 4.91562C3.50623 5.36249 3.84998 5.70624 4.29685 5.70624H5.25935V10.2781H4.29685C3.88435 10.2781 3.50623 10.6219 3.50623 11.0687C3.50623 11.4812 3.84998 11.8594 4.29685 11.8594H5.25935V16.4312H4.29685C3.88435 16.4312 3.50623 16.775 3.50623 17.2219C3.50623 17.6687 3.84998 18.0125 4.29685 18.0125H5.25935V19.25C5.25935 20.4187 6.22185 21.4156 7.42498 21.4156H15.675C17.2218 21.4156 18.4937 20.1437 18.5281 18.5969V3.47187C18.4937 2.68124 18.2187 1.95937 17.6687 1.44374ZM16.9469 18.5625C16.9469 19.2844 16.3625 19.8344 15.6406 19.8344H7.3906C7.04685 19.8344 6.77185 19.5594 6.77185 19.2156V17.875H8.6281C9.0406 17.875 9.41873 17.5312 9.41873 17.0844C9.41873 16.6375 9.07498 16.2937 8.6281 16.2937H6.77185V11.7906H8.6281C9.0406 11.7906 9.41873 11.4469 9.41873 11C9.41873 10.5875 9.07498 10.2094 8.6281 10.2094H6.77185V5.63749H8.6281C9.0406 5.63749 9.41873 5.29374 9.41873 4.84687C9.41873 4.39999 9.07498 4.05624 8.6281 4.05624H6.77185V2.74999C6.77185 2.40624 7.04685 2.13124 7.3906 2.13124H15.6406C15.9844 2.13124 16.2937 2.26874 16.5687 2.50937C16.8094 2.74999 16.9469 3.09374 16.9469 3.43749V18.5625Z"
                      fill=""
                    />
                  </svg>
                  My Contacts
                </a>
              </li>
              <li>
                <a
                  href="/settings"
                  class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base"
                >
                  <svg
                    class="fill-current"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M20.8656 8.86874C20.5219 8.49062 20.0406 8.28437 19.525 8.28437H19.4219C19.25 8.28437 19.1125 8.18124 19.0781 8.04374C19.0437 7.90624 18.975 7.80312 18.9406 7.66562C18.8719 7.52812 18.9406 7.39062 19.0437 7.28749L19.1125 7.21874C19.4906 6.87499 19.6969 6.39374 19.6969 5.87812C19.6969 5.36249 19.525 4.88124 19.1469 4.50312L17.8062 3.12812C17.0844 2.37187 15.8469 2.33749 15.0906 3.09374L14.9875 3.16249C14.8844 3.26562 14.7125 3.29999 14.5406 3.23124C14.4031 3.16249 14.2656 3.09374 14.0937 3.05937C13.9219 2.99062 13.8187 2.85312 13.8187 2.71562V2.54374C13.8187 1.47812 12.9594 0.618744 11.8937 0.618744H9.96875C9.45312 0.618744 8.97187 0.824994 8.62812 1.16874C8.25 1.54687 8.07812 2.02812 8.07812 2.50937V2.64687C8.07812 2.78437 7.975 2.92187 7.8375 2.99062C7.76875 3.02499 7.73437 3.02499 7.66562 3.05937C7.52812 3.12812 7.35625 3.09374 7.25312 2.99062L7.18437 2.88749C6.84062 2.50937 6.35937 2.30312 5.84375 2.30312C5.32812 2.30312 4.84687 2.47499 4.46875 2.85312L3.09375 4.19374C2.3375 4.91562 2.30312 6.15312 3.05937 6.90937L3.12812 7.01249C3.23125 7.11562 3.26562 7.28749 3.19687 7.39062C3.12812 7.52812 3.09375 7.63124 3.025 7.76874C2.95625 7.90624 2.85312 7.97499 2.68125 7.97499H2.57812C2.0625 7.97499 1.58125 8.14687 1.20312 8.52499C0.824996 8.86874 0.618746 9.34999 0.618746 9.86562L0.584371 11.7906C0.549996 12.8562 1.40937 13.7156 2.475 13.75H2.57812C2.75 13.75 2.8875 13.8531 2.92187 13.9906C2.99062 14.0937 3.05937 14.1969 3.09375 14.3344C3.12812 14.4719 3.09375 14.6094 2.99062 14.7125L2.92187 14.7812C2.54375 15.125 2.3375 15.6062 2.3375 16.1219C2.3375 16.6375 2.50937 17.1187 2.8875 17.4969L4.22812 18.8719C4.95 19.6281 6.1875 19.6625 6.94375 18.9062L7.04687 18.8375C7.15 18.7344 7.32187 18.7 7.49375 18.7687C7.63125 18.8375 7.76875 18.9062 7.94062 18.9406C8.1125 19.0094 8.21562 19.1469 8.21562 19.2844V19.4219C8.21562 20.4875 9.075 21.3469 10.1406 21.3469H12.0656C13.1312 21.3469 13.9906 20.4875 13.9906 19.4219V19.2844C13.9906 19.1469 14.0937 19.0094 14.2312 18.9406C14.3 18.9062 14.3344 18.9062 14.4031 18.8719C14.575 18.8031 14.7125 18.8375 14.8156 18.9406L14.8844 19.0437C15.2281 19.4219 15.7094 19.6281 16.225 19.6281C16.7406 19.6281 17.2219 19.4562 17.6 19.0781L18.975 17.7375C19.7312 17.0156 19.7656 15.7781 19.0094 15.0219L18.9406 14.9187C18.8375 14.8156 18.8031 14.6437 18.8719 14.5406C18.9406 14.4031 18.975 14.3 19.0437 14.1625C19.1125 14.025 19.25 13.9562 19.3875 13.9562H19.4906H19.525C20.5562 13.9562 21.4156 13.1312 21.45 12.0656L21.4844 10.1406C21.4156 9.72812 21.2094 9.21249 20.8656 8.86874ZM19.8344 12.1C19.8344 12.3062 19.6625 12.4781 19.4562 12.4781H19.3531H19.3187C18.5281 12.4781 17.8062 12.9594 17.5312 13.6469C17.4969 13.75 17.4281 13.8531 17.3937 13.9562C17.0844 14.6437 17.2219 15.5031 17.7719 16.0531L17.8406 16.1562C17.9781 16.2937 17.9781 16.5344 17.8406 16.6719L16.4656 18.0125C16.3625 18.1156 16.2594 18.1156 16.1906 18.1156C16.1219 18.1156 16.0187 18.1156 15.9156 18.0125L15.8469 17.9094C15.2969 17.325 14.4719 17.1531 13.7156 17.4969L13.5781 17.5656C12.8219 17.875 12.3406 18.5625 12.3406 19.3531V19.4906C12.3406 19.6969 12.1687 19.8687 11.9625 19.8687H10.0375C9.83125 19.8687 9.65937 19.6969 9.65937 19.4906V19.3531C9.65937 18.5625 9.17812 17.8406 8.42187 17.5656C8.31875 17.5312 8.18125 17.4625 8.07812 17.4281C7.80312 17.2906 7.52812 17.2562 7.25312 17.2562C6.77187 17.2562 6.29062 17.4281 5.9125 17.8062L5.84375 17.8406C5.70625 17.9781 5.46562 17.9781 5.32812 17.8406L3.9875 16.4656C3.88437 16.3625 3.88437 16.2594 3.88437 16.1906C3.88437 16.1219 3.88437 16.0187 3.9875 15.9156L4.05625 15.8469C4.64062 15.2969 4.8125 14.4375 4.50312 13.75C4.46875 13.6469 4.43437 13.5437 4.36562 13.4406C4.09062 12.7187 3.40312 12.2031 2.6125 12.2031H2.50937C2.30312 12.2031 2.13125 12.0312 2.13125 11.825L2.16562 9.89999C2.16562 9.76249 2.23437 9.69374 2.26875 9.62499C2.30312 9.59062 2.40625 9.52187 2.54375 9.52187H2.64687C3.4375 9.55624 4.15937 9.07499 4.46875 8.35312C4.50312 8.24999 4.57187 8.14687 4.60625 8.04374C4.91562 7.35624 4.77812 6.49687 4.22812 5.94687L4.15937 5.84374C4.02187 5.70624 4.02187 5.46562 4.15937 5.32812L5.53437 3.98749C5.6375 3.88437 5.74062 3.88437 5.80937 3.88437C5.87812 3.88437 5.98125 3.88437 6.08437 3.98749L6.15312 4.09062C6.70312 4.67499 7.52812 4.84687 8.28437 4.53749L8.42187 4.46874C9.17812 4.15937 9.65937 3.47187 9.65937 2.68124V2.54374C9.65937 2.40624 9.72812 2.33749 9.7625 2.26874C9.79687 2.19999 9.9 2.16562 10.0375 2.16562H11.9625C12.1687 2.16562 12.3406 2.33749 12.3406 2.54374V2.68124C12.3406 3.47187 12.8219 4.19374 13.5781 4.46874C13.6812 4.50312 13.8187 4.57187 13.9219 4.60624C14.6437 4.94999 15.5031 4.81249 16.0875 4.26249L16.1906 4.19374C16.3281 4.05624 16.5687 4.05624 16.7062 4.19374L18.0469 5.56874C18.15 5.67187 18.15 5.77499 18.15 5.84374C18.15 5.91249 18.1156 6.01562 18.0469 6.11874L17.9781 6.18749C17.3594 6.70312 17.1875 7.56249 17.4625 8.24999C17.4969 8.35312 17.5312 8.45624 17.6 8.55937C17.875 9.28124 18.5625 9.79687 19.3531 9.79687H19.4562C19.5937 9.79687 19.6625 9.86562 19.7312 9.89999C19.8 9.93437 19.8344 10.0375 19.8344 10.175V12.1Z"
                      fill=""
                    />
                    <path
                      d="M11 6.32498C8.42189 6.32498 6.32501 8.42186 6.32501 11C6.32501 13.5781 8.42189 15.675 11 15.675C13.5781 15.675 15.675 13.5781 15.675 11C15.675 8.42186 13.5781 6.32498 11 6.32498ZM11 14.1281C9.28126 14.1281 7.87189 12.7187 7.87189 11C7.87189 9.28123 9.28126 7.87186 11 7.87186C12.7188 7.87186 14.1281 9.28123 14.1281 11C14.1281 12.7187 12.7188 14.1281 11 14.1281Z"
                      fill=""
                    />
                  </svg>
                  Account Settings
                </a>
              </li>
            </ul>
            <button
              class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base"
            >
              <svg
                class="fill-current"
                width="22"
                height="22"
                viewBox="0 0 22 22"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M15.5375 0.618744H11.6531C10.7594 0.618744 10.0031 1.37499 10.0031 2.26874V4.64062C10.0031 5.05312 10.3469 5.39687 10.7594 5.39687C11.1719 5.39687 11.55 5.05312 11.55 4.64062V2.23437C11.55 2.16562 11.5844 2.13124 11.6531 2.13124H15.5375C16.3625 2.13124 17.0156 2.78437 17.0156 3.60937V18.3562C17.0156 19.1812 16.3625 19.8344 15.5375 19.8344H11.6531C11.5844 19.8344 11.55 19.8 11.55 19.7312V17.3594C11.55 16.9469 11.2062 16.6031 10.7594 16.6031C10.3125 16.6031 10.0031 16.9469 10.0031 17.3594V19.7312C10.0031 20.625 10.7594 21.3812 11.6531 21.3812H15.5375C17.2219 21.3812 18.5625 20.0062 18.5625 18.3562V3.64374C18.5625 1.95937 17.1875 0.618744 15.5375 0.618744Z"
                  fill=""
                />
                <path
                  d="M6.05001 11.7563H12.2031C12.6156 11.7563 12.9594 11.4125 12.9594 11C12.9594 10.5875 12.6156 10.2438 12.2031 10.2438H6.08439L8.21564 8.07813C8.52501 7.76875 8.52501 7.2875 8.21564 6.97812C7.90626 6.66875 7.42501 6.66875 7.11564 6.97812L3.67814 10.4844C3.36876 10.7938 3.36876 11.275 3.67814 11.5844L7.11564 15.0906C7.25314 15.2281 7.45939 15.3312 7.66564 15.3312C7.87189 15.3312 8.04376 15.2625 8.21564 15.125C8.52501 14.8156 8.52501 14.3344 8.21564 14.025L6.05001 11.7563Z"
                  fill=""
                />
              </svg>
              Log Out
            </button>
          </div>
          @php
            }
          @endphp
          <!-- Dropdown End -->
        </div>
        <!-- User Area -->
      </div>
    </div>
  </header>
          <!-- ===== Header End ===== -->

          <!-- ===== Main Content Start ===== -->
          <main>
              @if (Auth::user()->accounttype == '')
                <div style="margin-left: 2vw;margin-top: 5vh;">
                  <div><h2><b>Select Account type</b></h2></div>
                  <select
                    name=""
                    id="account-type-list"
                    class="relative z-20 appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                  >
                    <option value="">--</option>
                    <option value="donor">Donor</option>
                    <option value="professional">Professional</option>
                    <option value="clinic">Clinic</option>
                    <!-- <option value="superadmin">Superadmin</option> -->
                  </select>
                  <br>
                  <button
                    id="update-account-type"
                    class="inline-flex items-center justify-center rounded-md bg-primary px-2 py-2 text-center font-medium text-white hover:bg-opacity-90 mt-2 lg:px-2 xl:px-2"
                  >Update Account</button>
                </div>
              @elseif($owner == "viewsearch_page")
                <!-- <h2 class="mt-6.5 ml-6.5 text-title-md2 font-bold text-black dark:text-white">
                  Account Settings
                </h2> -->
                <div class="p-6.5">
                  <div class="mb-4"><input type="text" placeholder="Type to search..." id="keyup-trigger-search" class="w-full bg-transparent pl-9 pr-4 focus:outline-none xl:w-125"></div>
                  <div class="load_search_results"></div>
                </div>
              @elseif($owner == "view_chats_page")
                <x-cadana-chat-dashboard />
              @elseif($owner == "viewdashboard")
                  <x-cadana-dashboard />
              @elseif($owner == "viewallusers" || $owner == "viewallprofessionals" || $owner == "viewalldonors" || $owner == "viewallclinics")
                  <x-cadana-users :params="$params" :owner="$owner" />
              @elseif($owner == "viewclinicprofile")
                  <x-cadana-clinic-profile :params="$params" />
              @elseif($owner == "viewdonorprofile")
                  <x-cadana-donor-profile />
              @elseif($owner == "viewdonorsettings" || $owner == "viewvettedcredentials" || $owner == "viewupdatepassword" || $owner == "viewaccountsverification" || $owner == "viewmedicalrecords" || $owner == "viewdonationrecords")
                <x-cadana-donor-settings :params="$params" :owner="$owner" :params2="$params2" :thegender="$thegender" :verifystatus="$verify_status" />
              @elseif($owner == "viewclinicsettings")
                  <x-cadana-clinic-settings />
              @elseif($owner == "viewauthenticatedsettings" || $owner == "view_accounts_profile")
                  <x-cadana-authenticated-settings :params="$params" :owner="$owner" />
              @elseif($owner == "view_edit_medical_history")
                <x-cadana-edit-medical-history :params="$params" />
              @elseif($owner == "view_edit_donating_history")
                <!-- kuku! -->
                <!-- {{$params}} -->
                <x-cadana-edit-donating-history :params="$params" :thegender="$thegender" />
              @else
              
              @endif
          </main>
          <!-- ===== Main Content End ===== -->
        </div>
        <!-- ===== Content Area End ===== -->
      </div>
      <!-- ===== Page Wrapper End ===== -->
      </body>
  </x-app-layout>
@endif
