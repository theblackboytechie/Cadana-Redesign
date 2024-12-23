<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="w-full">
              <!-- Breadcrumb Start -->
              <div
                class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
              >
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                   <!-- {{$owner}} -->
                  @if($owner == "viewalldonors")
                    Donors
                  @elseif($owner == "viewallclinics")
                    Clinics
                  @elseif($owner == "viewallprofessionals")
                    Professionals
                  @else
                    Users
                  @endif
                </h2>

                <nav>
                  <ol class="flex items-center gap-2">
                    <li>
                      <a class="font-medium" href="/">Dashboard /</a>
                    </li>
                    <li class="text-primary">Users</li>
                  </ol>
                </nav>
              </div>
              <!-- Breadcrumb End -->

              <!-- ====== Profile Section Start -->
              <div
                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5"
                >
                  <div class="col-span-3 flex items-center">
                    <p class="font-medium">Name</p>
                  </div>
                  <div class="col-span-2 hidden items-center sm:flex">
                    <p class="font-medium">User Type</p>
                  </div>

                  <div class="col-span-1 flex items-center">
                    <p class="font-medium">Actions</p>
                  </div>
                </div>

                @foreach($params as $params)
                <div
                  class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5"
                >
                  <div class="col-span-3 flex items-center">
                    <div
                      class="flex flex-col gap-4 sm:flex-row sm:items-center"
                    >
                      <div class="">
                        <img
                            @if(empty($params->profile_picture))
                              @php
                                $img_for_use = "user-01.png";
                                $imgowner = "asset";
                              @endphp
                            @else
                              @php
                                $img_for_use = "$params->profile_picture";
                                $imgowner = "database";
                              @endphp
                            @endif
                          @endphp

                          @if($imgowner == "asset")
                            src="{{ asset('storage/assets/images/'.$img_for_use) }}"
                          @else
                            src="{{ asset('storage/uploads/'.$img_for_use) }}"
                          @endif
                          alt="User Profile Image"
                          class="h-15 w-15 rounded-full"
                        />
                      </div>
                      <p class="text-sm font-medium text-black dark:text-white">
                        {{$params->name}}
                      </p>
                    </div>
                  </div>
                  <div class="col-span-2 hidden items-center sm:flex">
                    <p class="text-sm font-medium text-black dark:text-white">
                      {{ ucfirst($params->accounttype) }}
                    </p>
                  </div>

                  <div class="col-span-1 flex items-center">
                    <div class="flex items-center space-x-3.5">
                      <a
                        href="/profile/{{$params->id}}"
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
                        href="/usersettings/{{$params->id}}"
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
                      <!-- <button class="hover:text-primary">
                        <svg
                          class="fill-current"
                          width="18"
                          height="18"
                          viewBox="0 0 18 18"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.8754 11.6719C16.5379 11.6719 16.2285 11.9531 16.2285 12.3187V14.8219C16.2285 15.075 16.0316 15.2719 15.7785 15.2719H2.22227C1.96914 15.2719 1.77227 15.075 1.77227 14.8219V12.3187C1.77227 11.9812 1.49102 11.6719 1.12539 11.6719C0.759766 11.6719 0.478516 11.9531 0.478516 12.3187V14.8219C0.478516 15.7781 1.23789 16.5375 2.19414 16.5375H15.7785C16.7348 16.5375 17.4941 15.7781 17.4941 14.8219V12.3187C17.5223 11.9531 17.2129 11.6719 16.8754 11.6719Z"
                            fill=""
                          />
                          <path
                            d="M8.55074 12.3469C8.66324 12.4594 8.83199 12.5156 9.00074 12.5156C9.16949 12.5156 9.31012 12.4594 9.45074 12.3469L13.4726 8.43752C13.7257 8.1844 13.7257 7.79065 13.5007 7.53752C13.2476 7.2844 12.8539 7.2844 12.6007 7.5094L9.64762 10.4063V2.1094C9.64762 1.7719 9.36637 1.46252 9.00074 1.46252C8.66324 1.46252 8.35387 1.74377 8.35387 2.1094V10.4063L5.40074 7.53752C5.14762 7.2844 4.75387 7.31252 4.50074 7.53752C4.24762 7.79065 4.27574 8.1844 4.50074 8.43752L8.55074 12.3469Z"
                            fill=""
                          />
                        </svg>
                      </button> -->
                    </div>
                  </div>
                </div>
                @endforeach
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
              </div>
              <!-- ====== Profile Section End -->
            </div>
          </div>