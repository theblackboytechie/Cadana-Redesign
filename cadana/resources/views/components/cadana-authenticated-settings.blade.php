<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mx-auto max-w-270">
              <!-- Breadcrumb Start -->
              <div
                class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
              >
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                   <!-- {{$owner}} -->
                  @if($owner == "view_accounts_profile")
                    Profile
                  @else
                    Settings Page
                  @endif
                </h2>

                <nav>
                  <ol class="flex items-center gap-2">
                    <li>
                      <a class="font-medium" href="index.html">Dashboard /</a>
                    </li>
                    <li class="font-medium text-primary">Settings</li>
                  </ol>
                </nav>
              </div>
              <!-- Breadcrumb End -->

              <!-- ====== Settings Section Start -->
              <div class="grid grid-cols-5 gap-8">
                <div class="col-span-5 xl:col-span-3">
                  <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                  >
                    <div
                      class="border-b border-stroke px-7 py-4 dark:border-strokedark"
                    >
                      <h3 class="font-medium text-black dark:text-white">
                        Personal Information
                      </h3>
                    </div>
                    <div class="p-7">
                      <form action="#">
                        <div class="mb-5.5 flex flex-col gap-5.5 sm:flex-row">
                          <div class="w-full sm:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                              for="fullName"
                              >Full Name</label
                            >
                            <div class="relative">
                              <span class="absolute left-4.5 top-4">
                                <svg
                                  class="fill-current"
                                  width="20"
                                  height="20"
                                  viewBox="0 0 20 20"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <g opacity="0.8">
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M3.72039 12.887C4.50179 12.1056 5.5616 11.6666 6.66667 11.6666H13.3333C14.4384 11.6666 15.4982 12.1056 16.2796 12.887C17.061 13.6684 17.5 14.7282 17.5 15.8333V17.5C17.5 17.9602 17.1269 18.3333 16.6667 18.3333C16.2064 18.3333 15.8333 17.9602 15.8333 17.5V15.8333C15.8333 15.1703 15.5699 14.5344 15.1011 14.0655C14.6323 13.5967 13.9964 13.3333 13.3333 13.3333H6.66667C6.00363 13.3333 5.36774 13.5967 4.8989 14.0655C4.43006 14.5344 4.16667 15.1703 4.16667 15.8333V17.5C4.16667 17.9602 3.79357 18.3333 3.33333 18.3333C2.8731 18.3333 2.5 17.9602 2.5 17.5V15.8333C2.5 14.7282 2.93899 13.6684 3.72039 12.887Z"
                                      fill=""
                                    />
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M9.99967 3.33329C8.61896 3.33329 7.49967 4.45258 7.49967 5.83329C7.49967 7.214 8.61896 8.33329 9.99967 8.33329C11.3804 8.33329 12.4997 7.214 12.4997 5.83329C12.4997 4.45258 11.3804 3.33329 9.99967 3.33329ZM5.83301 5.83329C5.83301 3.53211 7.69849 1.66663 9.99967 1.66663C12.3009 1.66663 14.1663 3.53211 14.1663 5.83329C14.1663 8.13448 12.3009 9.99996 9.99967 9.99996C7.69849 9.99996 5.83301 8.13448 5.83301 5.83329Z"
                                      fill=""
                                    />
                                  </g>
                                </svg>
                              </span>
                              @if($owner == "view_accounts_profile")
                                <div 
                                  class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary fullname_frm"
                                  id="fullName"
                                >Devid Jhon</div>
                              @else
                                <input
                                    class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary fullname_frm"
                                    type="text"
                                    name="fullName"
                                    id="fullName"
                                    
                                    value="Devid Jhon"
                                  />
                              @endif
                            </div>
                          </div>

                          <div class="w-full sm:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                              for="phoneNumber"
                              >Phone Number</label
                            >
                            @if($owner == "view_accounts_profile")
                              <div
                                class="w-full rounded border border-stroke bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary phone_frm"
                                id="phoneNumber"                                
                              >
                              +990 3343 7865
                              </div>
                            @else
                              <input
                                class="w-full rounded border border-stroke bg-gray px-4.5 py-3 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary phone_frm"
                                type="text"
                                name="phoneNumber"
                                id="phoneNumber"
                                placeholder="+990 3343 7865"
                                value="+990 3343 7865"
                              />
                            @endif
                          </div>
                        </div>

                        <div class="mb-5.5">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="emailAddress"
                            >Email Address</label
                          >
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <svg
                                class="fill-current"
                                width="20"
                                height="20"
                                viewBox="0 0 20 20"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <g opacity="0.8">
                                  <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M3.33301 4.16667C2.87658 4.16667 2.49967 4.54357 2.49967 5V15C2.49967 15.4564 2.87658 15.8333 3.33301 15.8333H16.6663C17.1228 15.8333 17.4997 15.4564 17.4997 15V5C17.4997 4.54357 17.1228 4.16667 16.6663 4.16667H3.33301ZM0.833008 5C0.833008 3.6231 1.9561 2.5 3.33301 2.5H16.6663C18.0432 2.5 19.1663 3.6231 19.1663 5V15C19.1663 16.3769 18.0432 17.5 16.6663 17.5H3.33301C1.9561 17.5 0.833008 16.3769 0.833008 15V5Z"
                                    fill=""
                                  />
                                  <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M0.983719 4.52215C1.24765 4.1451 1.76726 4.05341 2.1443 4.31734L9.99975 9.81615L17.8552 4.31734C18.2322 4.05341 18.7518 4.1451 19.0158 4.52215C19.2797 4.89919 19.188 5.4188 18.811 5.68272L10.4776 11.5161C10.1907 11.7169 9.80879 11.7169 9.52186 11.5161L1.18853 5.68272C0.811486 5.4188 0.719791 4.89919 0.983719 4.52215Z"
                                    fill=""
                                  />
                                </g>
                              </svg>
                            </span>
                            @if($owner == "view_accounts_profile")
                              <div
                                class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary email_frm"
                                id="emailAddress"
                              >
                                devidjond45@gmail.com
                              </div>
                            @else
                              <input
                                class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary email_frm"
                                type="email"
                                name="emailAddress"
                                id="emailAddress"
                                placeholder="devidjond45@gmail.com"
                                value="devidjond45@gmail.com"
                              />
                            @endif
                          </div>
                        </div>

                        <div class="mb-5.5">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                            for="Biography"
                            >BIO</label
                          >
                          <div class="relative">
                            <span class="absolute left-4.5 top-4">
                              <svg
                                class="fill-current"
                                width="20"
                                height="20"
                                viewBox="0 0 20 20"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <g
                                  opacity="0.8"
                                  clip-path="url(#clip0_88_10224)"
                                >
                                  <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M1.56524 3.23223C2.03408 2.76339 2.66997 2.5 3.33301 2.5H9.16634C9.62658 2.5 9.99967 2.8731 9.99967 3.33333C9.99967 3.79357 9.62658 4.16667 9.16634 4.16667H3.33301C3.11199 4.16667 2.90003 4.25446 2.74375 4.41074C2.58747 4.56702 2.49967 4.77899 2.49967 5V16.6667C2.49967 16.8877 2.58747 17.0996 2.74375 17.2559C2.90003 17.4122 3.11199 17.5 3.33301 17.5H14.9997C15.2207 17.5 15.4326 17.4122 15.5889 17.2559C15.7452 17.0996 15.833 16.8877 15.833 16.6667V10.8333C15.833 10.3731 16.2061 10 16.6663 10C17.1266 10 17.4997 10.3731 17.4997 10.8333V16.6667C17.4997 17.3297 17.2363 17.9656 16.7674 18.4344C16.2986 18.9033 15.6627 19.1667 14.9997 19.1667H3.33301C2.66997 19.1667 2.03408 18.9033 1.56524 18.4344C1.0964 17.9656 0.833008 17.3297 0.833008 16.6667V5C0.833008 4.33696 1.0964 3.70107 1.56524 3.23223Z"
                                    fill=""
                                  />
                                  <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M16.6664 2.39884C16.4185 2.39884 16.1809 2.49729 16.0056 2.67253L8.25216 10.426L7.81167 12.188L9.57365 11.7475L17.3271 3.99402C17.5023 3.81878 17.6008 3.5811 17.6008 3.33328C17.6008 3.08545 17.5023 2.84777 17.3271 2.67253C17.1519 2.49729 16.9142 2.39884 16.6664 2.39884ZM14.8271 1.49402C15.3149 1.00622 15.9765 0.732178 16.6664 0.732178C17.3562 0.732178 18.0178 1.00622 18.5056 1.49402C18.9934 1.98182 19.2675 2.64342 19.2675 3.33328C19.2675 4.02313 18.9934 4.68473 18.5056 5.17253L10.5889 13.0892C10.4821 13.196 10.3483 13.2718 10.2018 13.3084L6.86847 14.1417C6.58449 14.2127 6.28409 14.1295 6.0771 13.9225C5.87012 13.7156 5.78691 13.4151 5.85791 13.1312L6.69124 9.79783C6.72787 9.65131 6.80364 9.51749 6.91044 9.41069L14.8271 1.49402Z"
                                    fill=""
                                  />
                                </g>
                                <defs>
                                  <clipPath id="clip0_88_10224">
                                    <rect width="20" height="20" fill="white" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </span>
                            @if($owner == "view_accounts_profile")
                              <div
                                class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary biography_frm"
                                id="bio"                              
                              >
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere fermentum urna, eu condimentum mauris tempus ut. Donec fermentum blandit aliquet.                              
                              </div>
                            @else
                              <textarea
                                class="w-full rounded border border-stroke bg-gray py-3 pl-11.5 pr-4.5 font-medium text-black focus:border-primary focus-visible:outline-none dark:border-strokedark dark:bg-meta-4 dark:text-white dark:focus:border-primary biography_frm"
                                name="bio"
                                id="bio"
                                rows="6"
                                placeholder="Write your bio here"
                              >
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque posuere fermentum urna, eu condimentum mauris tempus ut. Donec fermentum blandit aliquet.
                              </textarea>
                            @endif
                          </div>
                        </div>

                        <div class="flex justify-end gap-4.5">
                          <!-- <button
                            class="flex justify-center rounded border border-stroke px-6 py-2 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white"
                            type="submit"
                          >
                            Cancel
                          </button> -->
                          @if($owner == "view_accounts_profile")

                          @else
                            <i class="fa-solid fa-circle-notch fa-spin" id="settingspage-processing-loading" style="display: none;"></i>
                            <button
                              class="flex justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90 trigger-settings-submit"
                              type="submit"
                            >
                              Save
                            </button>
                          @endif
                        </div>
                      </form>
                    </div>
                  </div>
                  <!-- <div
                    class="mt-6 rounded-sm border border-stroke bg-white shadow-default "
                  >
                    <div class="px-4 py-6 md:px-6 xl:px-7.5">
                      <h4 class="text-xl font-bold text-black dark:text-white">
                        Medical Records
                      </h4>
                    </div>

                    <div
                            class="grid grid-cols-6 border-t border-stroke px-4 py-4.5  sm:grid-cols-8 md:px-6 2xl:px-7.5"
                    >
                      <div class="col-span-3 flex items-center">
                        <p class="font-medium">Doctor Name</p>
                      </div>
                      <div class="col-span-2 hidden items-center sm:flex">
                        <p class="font-medium">Speciality</p>
                      </div>
                      <div class="col-span-1 flex items-center">
                        <p class="font-medium">Price</p>
                      </div>
                      <div class="col-span-1 flex items-center">
                        <p class="font-medium">Sold</p>
                      </div>
                      <div class="col-span-1 flex items-center">
                        <p class="font-medium">Actions</p>
                      </div>
                    </div>

                    <div
                            class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5"
                    >
                      <div class="col-span-3 flex items-center">
                        <div
                                class="flex flex-col gap-4 sm:flex-row sm:items-center"
                        >
                          <div class="">
                            <img
                                    src="{{ asset('storage/assets/images/user-01.png') }}"
                                    alt="Product"
                                    class="h-15 w-15 rounded-full"
                            />
                          </div>
                          <p
                                  class="text-sm font-medium text-black dark:text-white"
                          >
                            John Doe
                          </p>
                        </div>
                      </div>
                      <div class="col-span-2 hidden items-center sm:flex">
                        <p
                                class="text-sm font-medium text-black dark:text-white"
                        >
                          Sorogacy
                        </p>
                      </div>
                      <div class="col-span-1 flex items-center">
                        <p
                                class="text-sm font-medium text-black dark:text-white"
                        >
                          $269
                        </p>
                      </div>
                      <div class="col-span-1 flex items-center">
                        <p
                                class="text-sm font-medium text-black dark:text-white"
                        >
                          22
                        </p>
                      </div>
                      <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-3.5">
                          <a
                                  href="./clinic-profile.html"
                                  class="hover:text-primary"
                          >
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-6 w-6"
                            >
                              <path
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
                              />
                            </svg>
                          </a>
                          <a
                                  href="./clinic-settings.html"
                                  class="hover:text-primary"
                          >
                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-6 w-6"
                            >
                              <path
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z"
                              />
                              <path
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                              />
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div
                            class="flex h-16 w-full items-center justify-between border-t border-neutral-200 px-3"
                    >
                      <p class="pl-2 text-sm text-gray-700">
                        Showing <span class="font-medium">1</span> to
                        <span class="font-medium">10</span> of
                        <span class="font-medium">89</span> results
                      </p>
                      <nav>
                        <ul
                                class="flex h-9 items-center divide-x divide-neutral-200 rounded border border-neutral-200 bg-white text-sm leading-tight text-neutral-500"
                        >
                          <li class="h-full">
                            <a
                                    href="#"
                                    class="group relative ml-0 inline-flex h-full items-center rounded-l px-3 hover:text-primary"
                            >
                              <span>Previous</span>
                            </a>
                          </li>
                          <li class="hidden h-full md:block">
                            <a
                                    href="#"
                                    class="group relative inline-flex h-full items-center bg-gray-50 px-3 text-primary"
                            >
                              <span>1</span>
                              <span
                                      class="absolute bottom-0 left-0 -mx-px box-content h-px w-full translate-y-px border-l border-r border-primary bg-primary"
                              ></span>
                            </a>
                          </li>
                          <li class="hidden h-full md:block">
                            <a
                                    href="#"
                                    class="group relative inline-flex h-full items-center px-3 hover:text-primary"
                            >
                              <span>2</span>
                              <span
                                      class="absolute bottom-0 left-1/2 -mx-px box-content h-px w-0 translate-y-px border-transparent bg-primary duration-200 ease-out group-hover:left-0 group-hover:w-full group-hover:border-l group-hover:border-r group-hover:border-primary"
                              ></span>
                            </a>
                          </li>
                          <li class="hidden h-full md:block">
                            <a
                                    href="#"
                                    class="group relative inline-flex h-full items-center px-3 hover:text-primary"
                            >
                              <span>3</span>
                              <span
                                      class="absolute bottom-0 left-1/2 -mx-px box-content h-px w-0 translate-y-px border-transparent bg-primary duration-200 ease-out group-hover:left-0 group-hover:w-full group-hover:border-l group-hover:border-r group-hover:border-primary"
                              ></span>
                            </a>
                          </li>
                          <li class="hidden h-full md:block">
                            <div
                                    class="group relative inline-flex h-full items-center px-2.5"
                            >
                              <span>...</span>
                            </div>
                          </li>
                          <li class="hidden h-full md:block">
                            <a
                                    href="#"
                                    class="group relative inline-flex h-full items-center px-3 hover:text-primary"
                            >
                              <span>6</span>
                              <span
                                      class="absolute bottom-0 left-1/2 -mx-px box-content h-px w-0 translate-y-px border-transparent bg-primary duration-200 ease-out group-hover:left-0 group-hover:w-full group-hover:border-l group-hover:border-r group-hover:border-primary"
                              ></span>
                            </a>
                          </li>
                          <li class="hidden h-full md:block">
                            <a
                                    href="#"
                                    class="group relative inline-flex h-full items-center px-3 hover:text-primary"
                            >
                              <span>7</span>
                              <span
                                      class="absolute bottom-0 left-1/2 -mx-px box-content h-px w-0 translate-y-px border-transparent bg-primary duration-200 ease-out group-hover:left-0 group-hover:w-full group-hover:border-l group-hover:border-r group-hover:border-primary"
                              ></span>
                            </a>
                          </li>
                          <li class="hidden h-full md:block">
                            <a
                                    href="#"
                                    class="group relative inline-flex h-full items-center px-3 hover:text-primary"
                            >
                              <span>8</span>
                              <span
                                      class="absolute bottom-0 left-1/2 -mx-px box-content h-px w-0 translate-y-px border-transparent bg-primary duration-200 ease-out group-hover:left-0 group-hover:w-full group-hover:border-l group-hover:border-r group-hover:border-primary"
                              ></span>
                            </a>
                          </li>
                          <li class="h-full">
                            <a
                                    href="#"
                                    class="group relative inline-flex h-full items-center rounded-r px-3 hover:text-primary"
                            >
                              <span>Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div> -->
                </div>
                <div class="col-span-5 xl:col-span-2">
                  <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                  >
                    <div
                      class="border-b border-stroke px-7 py-4 dark:border-strokedark"
                    >
                      <h3 class="font-medium text-black dark:text-white">
                        Your Photo
                      </h3>
                    </div>
                    <div class="p-7">
                      <form action="#">
                        <div class="mb-4 flex items-center gap-3">
                          <div class="h-14 w-14 rounded-full">
                            @if (!empty(auth()->user()->profile_picture))
                                <img src="{{ asset('storage/uploads/'.auth()->user()->profile_picture) }}" alt="User" class="profile_picture_thumbnail" style="height: 40px; width: 40px;border-radius: 50%;" />
                            @else
                                <img src="{{ asset('storage/assets/images/user-01.png') }}" alt="User" class="profile_picture_thumbnail" />
                            @endif
                          </div>
                          <div>
                            <span
                              class="mb-1.5 font-medium text-black dark:text-white"
                              >Edit your photo</span
                            >
                            <!-- <span class="flex gap-2.5 hidden">
                              <button
                                class="text-sm font-medium hover:text-primary"
                              >
                                Delete
                              </button>
                              <button
                                class="text-sm font-medium hover:text-primary"
                              >
                                Update
                              </button>
                            </span> -->
                          </div>
                        </div>
                        <div id="credentials_error_wraps text-primary"></div>
                        <div
                          id="FileUpload"
                          class="relative mb-5.5 block w-full cursor-pointer appearance-none rounded border border-dashed border-primary bg-gray px-4 py-4 dark:bg-meta-4 sm:py-7.5"
                        >
                        
                          <input
                            type="file"
                            accept="image/*"
                            class="absolute inset-0 z-50 m-0 h-full w-full cursor-pointer p-0 opacity-0 outline-none"
                            id="file_profile_picture_input_tag"
                          />
                          <i class="fa-solid fa-circle-notch fa-spin" id="profileimage-uploading-processing-loading" style="display: none;"></i>
                          <div
                            class="flex flex-col items-center justify-center space-y-3"
                          >
                            <span
                              class="flex h-10 w-10 items-center justify-center rounded-full border border-stroke bg-white dark:border-strokedark dark:bg-boxdark"
                            >
                              <svg
                                width="16"
                                height="16"
                                viewBox="0 0 16 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M1.99967 9.33337C2.36786 9.33337 2.66634 9.63185 2.66634 10V12.6667C2.66634 12.8435 2.73658 13.0131 2.8616 13.1381C2.98663 13.2631 3.1562 13.3334 3.33301 13.3334H12.6663C12.8431 13.3334 13.0127 13.2631 13.1377 13.1381C13.2628 13.0131 13.333 12.8435 13.333 12.6667V10C13.333 9.63185 13.6315 9.33337 13.9997 9.33337C14.3679 9.33337 14.6663 9.63185 14.6663 10V12.6667C14.6663 13.1971 14.4556 13.7058 14.0806 14.0809C13.7055 14.456 13.1968 14.6667 12.6663 14.6667H3.33301C2.80257 14.6667 2.29387 14.456 1.91879 14.0809C1.54372 13.7058 1.33301 13.1971 1.33301 12.6667V10C1.33301 9.63185 1.63148 9.33337 1.99967 9.33337Z"
                                  fill="#3C50E0"
                                />
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M7.5286 1.52864C7.78894 1.26829 8.21106 1.26829 8.4714 1.52864L11.8047 4.86197C12.0651 5.12232 12.0651 5.54443 11.8047 5.80478C11.5444 6.06513 11.1223 6.06513 10.8619 5.80478L8 2.94285L5.13807 5.80478C4.87772 6.06513 4.45561 6.06513 4.19526 5.80478C3.93491 5.54443 3.93491 5.12232 4.19526 4.86197L7.5286 1.52864Z"
                                  fill="#3C50E0"
                                />
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M7.99967 1.33337C8.36786 1.33337 8.66634 1.63185 8.66634 2.00004V10C8.66634 10.3682 8.36786 10.6667 7.99967 10.6667C7.63148 10.6667 7.33301 10.3682 7.33301 10V2.00004C7.33301 1.63185 7.63148 1.33337 7.99967 1.33337Z"
                                  fill="#3C50E0"
                                />
                              </svg>
                            </span>
                            <p class="text-sm font-medium">
                              <span class="text-primary">Click to upload</span>
                              or drag and drop
                            </p>
                            <p class="mt-1.5 text-sm font-medium">
                              SVG, PNG, JPG or GIF
                            </p>
                            <p class="text-sm font-medium">
                              (max, 800 X 800px)
                            </p>
                          </div>
                        </div>

                        <div class="flex justify-end gap-4.5 hidden">
                          <button
                            class="flex justify-center rounded border border-stroke px-6 py-2 font-medium text-black hover:shadow-1 dark:border-strokedark dark:text-white"
                            type="submit"
                          >
                            Cancel
                          </button>
                          <button
                            class="flex justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90"
                            type="submit"
                          >
                            Save
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ====== Settings Section End -->
            </div>
          </div>