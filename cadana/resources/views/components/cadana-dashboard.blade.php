@if(Auth::user()->accounttype == "donor" || Auth::user()->accounttype == "clinic" || Auth::user()->accounttype == "superadminx" || Auth::user()->accounttype == "professional")
  {{ redirect(route('authenticatedsettings'))->send() }}
@endif
<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div
              class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-4 2xl:gap-7.5"
            >
              <!-- Card Item Start -->
              <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4"
                >
                  <svg
                    class="fill-primary dark:fill-white"
                    width="22"
                    height="16"
                    viewBox="0 0 22 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z"
                      fill=""
                    />
                    <path
                      d="M11 10.9219C9.38438 10.9219 8.07812 9.61562 8.07812 8C8.07812 6.38438 9.38438 5.07812 11 5.07812C12.6156 5.07812 13.9219 6.38438 13.9219 8C13.9219 9.61562 12.6156 10.9219 11 10.9219ZM11 6.625C10.2437 6.625 9.625 7.24375 9.625 8C9.625 8.75625 10.2437 9.375 11 9.375C11.7563 9.375 12.375 8.75625 12.375 8C12.375 7.24375 11.7563 6.625 11 6.625Z"
                      fill=""
                    />
                  </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                  <div>
                    <h4
                      class="text-title-md font-bold text-black dark:text-white"
                      id="dashboard-total-accounts-count"
                    >
                      00
                    </h4>
                    <span class="text-sm font-medium">Total Accounts</span>
                  </div>

                  <!-- <span
                    class="flex items-center gap-1 text-sm font-medium text-meta-3"
                  >
                    0.43%
                    <svg
                      class="fill-meta-3"
                      width="10"
                      height="11"
                      viewBox="0 0 10 11"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                        fill=""
                      />
                    </svg>
                  </span> -->
                </div>
              </div>
              <!-- Card Item End -->

              <!-- Card Item Start -->
              <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 384 512"
                    width="18"
                    height="18"
                    class="size-4 primary-color fill-primary dark:fill-white"
                  >
                    <path
                      d="M222.6 43.2l-.1 4.8L288 48c53 0 96 43 96 96s-43 96-96 96l-40 0 0-80 40 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-40 0-28 0-4.5 144 40.5 0c53 0 96 43 96 96s-43 96-96 96l-16 0 0-80 16 0c8.8 0 16-7.2 16-16s-7.2-16-16-16l-43 0-3.1 99.5L208.5 495l0 1c-.3 8.9-7.6 16-16.5 16s-16.2-7.1-16.5-16l0-1-1-31L136 464c-22.1 0-40-17.9-40-40s17.9-40 40-40l36 0-1-32-19 0c-53 0-96-43-96-96c0-47.6 34.6-87.1 80-94.7l0 94.7c0 8.8 7.2 16 16 16l16.5 0L164 128l-28 0-13.4 0c-9 18.9-28.3 32-50.6 32l-16 0c-30.9 0-56-25.1-56-56S25.1 48 56 48l8 0 8 0 89.5 0-.1-4.8L161 32c0-.7 0-1.3 0-1.9c.5-16.6 14.1-30 31-30s30.5 13.4 31 30c0 .6 0 1.3 0 1.9l-.4 11.2zM64 112a16 16 0 1 0 0-32 16 16 0 1 0 0 32z"
                    />
                  </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                  <div>
                    <h4
                      class="text-title-md font-bold text-black dark:text-white"
                      id="dashboard-total-clinics-accounts-count"
                    >
                      452
                    </h4>
                    <span class="text-sm font-medium">Total Clinics</span>
                  </div>

                  <!-- <span
                    class="flex items-center gap-1 text-sm font-medium text-meta-3"
                  >
                    4.35%
                    <svg
                      class="fill-meta-3"
                      width="10"
                      height="11"
                      viewBox="0 0 10 11"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                        fill=""
                      />
                    </svg>
                  </span> -->
                </div>
              </div>
              <!-- Card Item End -->

              <!-- Card Item Start -->
              <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    class="size-4 fill-current fill-primary dark:fill-white"
                    viewBox="0 0 448 512"
                  >
                    <path
                      d="M96 128l0-57.8c0-13.3 8.3-25.3 20.8-30l96-36c7.2-2.7 15.2-2.7 22.5 0l96 36c12.5 4.7 20.8 16.6 20.8 30l0 57.8-.3 0c.2 2.6 .3 5.3 .3 8l0 40c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-40c0-2.7 .1-5.4 .3-8l-.3 0zm48 48c0 44.2 35.8 80 80 80s80-35.8 80-80l0-16-160 0 0 16zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7L30.7 512C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6zM208 48l0 16-16 0c-4.4 0-8 3.6-8 8l0 16c0 4.4 3.6 8 8 8l16 0 0 16c0 4.4 3.6 8 8 8l16 0c4.4 0 8-3.6 8-8l0-16 16 0c4.4 0 8-3.6 8-8l0-16c0-4.4-3.6-8-8-8l-16 0 0-16c0-4.4-3.6-8-8-8l-16 0c-4.4 0-8 3.6-8 8z"
                    />
                  </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                  <div>
                    <h4
                      class="text-title-md font-bold text-black dark:text-white"
                      id="dashboard-total-professionals-accounts-count"
                    >
                      2450
                    </h4>
                    <span class="text-sm font-medium">Professionals</span>
                  </div>

                  <!-- <span
                    class="flex items-center gap-1 text-sm font-medium text-meta-3"
                  >
                    2.59%
                    <svg
                      class="fill-meta-3"
                      width="10"
                      height="11"
                      viewBox="0 0 10 11"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                        fill=""
                      />
                    </svg> -->
                  </span>
                </div>
              </div>
              <!-- Card Item End -->

              <!-- Card Item Start -->
              <div
                class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark"
              >
                <div
                  class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    class="size-4 fill-current fill-primary dark:fill-white"
                    viewBox="0 0 448 512"
                  >
                    <path
                      d="M96 128l0-57.8c0-13.3 8.3-25.3 20.8-30l96-36c7.2-2.7 15.2-2.7 22.5 0l96 36c12.5 4.7 20.8 16.6 20.8 30l0 57.8-.3 0c.2 2.6 .3 5.3 .3 8l0 40c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-40c0-2.7 .1-5.4 .3-8l-.3 0zm48 48c0 44.2 35.8 80 80 80s80-35.8 80-80l0-16-160 0 0 16zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7L30.7 512C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6zM208 48l0 16-16 0c-4.4 0-8 3.6-8 8l0 16c0 4.4 3.6 8 8 8l16 0 0 16c0 4.4 3.6 8 8 8l16 0c4.4 0 8-3.6 8-8l0-16 16 0c4.4 0 8-3.6 8-8l0-16c0-4.4-3.6-8-8-8l-16 0 0-16c0-4.4-3.6-8-8-8l-16 0c-4.4 0-8 3.6-8 8z"
                    />
                  </svg>
                </div>

                <div class="mt-4 flex items-end justify-between">
                  <div>
                    <h4
                      class="text-title-md font-bold text-black dark:text-white"
                      id="dashboard-total-donors-accounts-count"
                    >
                      456
                    </h4>
                    <span class="text-sm font-medium">Total Donors</span>
                  </div>

                  <!-- <span
                    class="flex items-center gap-1 text-sm font-medium text-meta-5"
                  >
                    0.95%
                    <svg
                      class="fill-meta-5"
                      width="10"
                      height="11"
                      viewBox="0 0 10 11"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M5.64284 7.69237L9.09102 4.33987L10 5.22362L5 10.0849L-8.98488e-07 5.22362L0.908973 4.33987L4.35716 7.69237L4.35716 0.0848701L5.64284 0.0848704L5.64284 7.69237Z"
                        fill=""
                      />
                    </svg>
                  </span> -->
                </div>
              </div>
              <!-- Card Item End -->
            </div>

            <div
              class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5"
            >
              <!-- ====== Chart One Start -->
              <div
  class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-8"
>
  <div class="flex flex-wrap items-start justify-between gap-3 sm:flex-nowrap">
    <div class="flex w-full flex-wrap gap-3 sm:gap-5">
      <div class="flex min-w-47.5">
        <span
          class="mr-2 mt-1 flex h-4 w-full max-w-4 items-center justify-center rounded-full border border-primary"
        >
          <span
            class="block h-2.5 w-full max-w-2.5 rounded-full bg-primary"
          ></span>
        </span>
        <div class="w-full">
          <p class="font-semibold text-primary">Total Donors Accounts</p>
          <p class="text-sm font-medium">12.04.2022 - 12.05.2022</p>
        </div>
      </div>
      <div class="flex min-w-47.5">
        <span
          class="mr-2 mt-1 flex h-4 w-full max-w-4 items-center justify-center rounded-full border border-secondary"
        >
          <span
            class="block h-2.5 w-full max-w-2.5 rounded-full bg-secondary"
          ></span>
        </span>
        <div class="w-full">
          <p class="font-semibold text-secondary">Total Professionals Accounts</p>
          <p class="text-sm font-medium">12.04.2022 - 12.05.2022</p>
        </div>
      </div>
    </div>
    <div class="flex w-full max-w-45 justify-end">
      <div
        class="inline-flex items-center rounded-md bg-whiter p-1.5 dark:bg-meta-4"
      >
        <button
          class="rounded bg-white px-3 py-1 text-xs font-medium text-black shadow-card hover:bg-white hover:shadow-card dark:bg-boxdark dark:text-white dark:hover:bg-boxdark"
        >
          Day
        </button>
        <button
          class="rounded px-3 py-1 text-xs font-medium text-black hover:bg-white hover:shadow-card dark:text-white dark:hover:bg-boxdark"
        >
          Week
        </button>
        <button
          class="rounded px-3 py-1 text-xs font-medium text-black hover:bg-white hover:shadow-card dark:text-white dark:hover:bg-boxdark"
        >
          Month
        </button>
      </div>
    </div>
  </div>
  <div>
    <div id="chartOne" class="-ml-5"></div>
  </div>
</div>

              <!-- ====== Chart One End -->

              <!-- ====== Chart Two Start -->
              <div
  class="col-span-12 rounded-sm border border-stroke bg-white p-7.5 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4"
>
  <div class="mb-4 justify-between gap-4 sm:flex">
    <div>
      <h4 class="text-xl font-bold text-black dark:text-white">
        Accounts Created this week
      </h4>
    </div>
    <div>
      <div class="relative z-20 inline-block">
        <select
          name="#"
          id="#"
          class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 text-sm font-medium outline-none"
        >
          <option value="">This Week</option>
          <option value="">Last Week</option>
        </select>
        <span class="absolute right-3 top-1/2 z-10 -translate-y-1/2">
          <svg
            width="10"
            height="6"
            viewBox="0 0 10 6"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
              fill="#637381"
            />
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M1.22659 0.546578L5.00141 4.09604L8.76422 0.557869C9.08459 0.244537 9.54201 0.329403 9.79139 0.578788C10.112 0.899434 10.0277 1.36122 9.77668 1.61224L9.76644 1.62248L5.81552 5.33722C5.36257 5.74249 4.6445 5.7544 4.19352 5.32924C4.19327 5.32901 4.19377 5.32948 4.19352 5.32924L0.225953 1.61241C0.102762 1.48922 -4.20186e-08 1.31674 -3.20269e-08 1.08816C-2.40601e-08 0.905899 0.0780105 0.712197 0.211421 0.578787C0.494701 0.295506 0.935574 0.297138 1.21836 0.539529L1.22659 0.546578ZM4.51598 4.98632C4.78076 5.23639 5.22206 5.23639 5.50155 4.98632L9.44383 1.27939C9.5468 1.17642 9.56151 1.01461 9.45854 0.911642C9.35557 0.808672 9.19376 0.793962 9.09079 0.896932L5.14851 4.60386C5.06025 4.67741 4.92785 4.67741 4.85431 4.60386L0.912022 0.896932C0.809051 0.808672 0.647241 0.808672 0.54427 0.911642C0.500141 0.955772 0.47072 1.02932 0.47072 1.08816C0.47072 1.16171 0.50014 1.22055 0.558981 1.27939L4.51598 4.98632Z"
              fill="#637381"
            />
          </svg>
        </span>
      </div>
    </div>
  </div>

  <div>
    <div id="chartTwo" class="-mb-9 -ml-5"></div>
  </div>
</div>

              <!-- ====== Chart Two End -->

              <!-- ====== Chart Three Start -->
              <div
  class="hidden col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-5"
>
  <div class="mb-3 justify-between gap-4 sm:flex">
    <div>
      <h4 class="text-xl font-bold text-black dark:text-white">
        Accounts Analytics
      </h4>
    </div>
    <div>
      <div class="relative z-20 inline-block">
        <select
          name=""
          id=""
          class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 text-sm font-medium outline-none"
        >
          <option value="">Monthly</option>
          <option value="">Yearly</option>
        </select>
        <span class="absolute right-3 top-1/2 z-10 -translate-y-1/2">
          <svg
            width="10"
            height="6"
            viewBox="0 0 10 6"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
              fill="#637381"
            />
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M1.22659 0.546578L5.00141 4.09604L8.76422 0.557869C9.08459 0.244537 9.54201 0.329403 9.79139 0.578788C10.112 0.899434 10.0277 1.36122 9.77668 1.61224L9.76644 1.62248L5.81552 5.33722C5.36257 5.74249 4.6445 5.7544 4.19352 5.32924C4.19327 5.32901 4.19377 5.32948 4.19352 5.32924L0.225953 1.61241C0.102762 1.48922 -4.20186e-08 1.31674 -3.20269e-08 1.08816C-2.40601e-08 0.905899 0.0780105 0.712197 0.211421 0.578787C0.494701 0.295506 0.935574 0.297138 1.21836 0.539529L1.22659 0.546578ZM4.51598 4.98632C4.78076 5.23639 5.22206 5.23639 5.50155 4.98632L9.44383 1.27939C9.5468 1.17642 9.56151 1.01461 9.45854 0.911642C9.35557 0.808672 9.19376 0.793962 9.09079 0.896932L5.14851 4.60386C5.06025 4.67741 4.92785 4.67741 4.85431 4.60386L0.912022 0.896932C0.809051 0.808672 0.647241 0.808672 0.54427 0.911642C0.500141 0.955772 0.47072 1.02932 0.47072 1.08816C0.47072 1.16171 0.50014 1.22055 0.558981 1.27939L4.51598 4.98632Z"
              fill="#637381"
            />
          </svg>
        </span>
      </div>
    </div>
  </div>
  <div class="mb-2">
    <div id="chartThree" class="mx-auto flex justify-center"></div>
  </div>
  <div class="-mx-8 flex flex-wrap items-center justify-center gap-y-3">
    <div class="w-full px-8 sm:w-1/2">
      <div class="flex w-full items-center">
        <span
          class="mr-2 block h-3 w-full max-w-3 rounded-full bg-primary"
        ></span>
        <p
          class="flex w-full justify-between text-sm font-medium text-black dark:text-white"
        >
          <span> Clinics </span>
          <span> 65% </span>
        </p>
      </div>
    </div>
    <div class="w-full px-8 sm:w-1/2">
      <div class="flex w-full items-center">
        <span
          class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#6577F3]"
        ></span>
        <p
          class="flex w-full justify-between text-sm font-medium text-black dark:text-white"
        >
          <span> Professionals </span>
          <span> 34% </span>
        </p>
      </div>
    </div>
    <div class="w-full px-8 sm:w-1/2">
      <div class="flex w-full items-center">
        <span
          class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#8FD0EF]"
        ></span>
        <p
          class="flex w-full justify-between text-sm font-medium text-black dark:text-white"
        >
          <span> Donors </span>
          <span> 45% </span>
        </p>
      </div>
    </div>
    <div class="w-full px-8 sm:w-1/2">
      <div class="flex w-full items-center">
        <span
          class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#0FADCF]"
        ></span>
        <p
          class="flex w-full justify-between text-sm font-medium text-black dark:text-white"
        >
          <span> Unassigned </span>
          <span> 12% </span>
        </p>
      </div>
    </div>
  </div>
</div>

              <!-- ====== Chart Three End -->

              <!-- ====== Map One Start -->
              <div
  class="hidden col-span-12 rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-7"
>
  <h4 class="mb-2 text-xl font-bold text-black dark:text-white">
    Region labels
  </h4>
  <div id="mapOne" class="mapOne map-btn h-90"></div>
</div>

              <!-- ====== Map One End -->

              <!-- ====== Table One Start -->
              <div class="col-span-12 xl:col-span-8">
                <div
  class="hidden rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1 hiddenx"
>
  <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
    Top Channels
  </h4>

  <div class="flex flex-col">
    <div
      class="grid grid-cols-3 rounded-sm bg-gray-2 dark:bg-meta-4 sm:grid-cols-3"
    >
      <div class="p-2.5 xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Source</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Visitors</h5>
      </div>
      <div class="p-2.5 text-center xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Revenues</h5>
      </div>
      <!-- <div class="hidden p-2.5 text-center sm:block xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Sales</h5>
      </div> -->
      <!-- <div class="hidden p-2.5 text-center sm:block xl:p-5">
        <h5 class="text-sm font-medium uppercase xsm:text-base">Conversion</h5>
      </div> -->
    </div>

    <div class="grid grid-cols-3 sm:grid-cols-3">
      <div class="flex items-center gap-3 p-2.5 xl:p-5">
        <div class="flex-shrink-0">
          <img src="src/images/brand/brand-05.svg" alt="Brand" />
        </div>
        <p class="hidden font-medium text-black dark:text-white sm:block">
          Facebook
        </p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-black dark:text-white">1.2K</p>
      </div>

      <div class="flex items-center justify-center p-2.5 xl:p-5">
        <p class="font-medium text-meta-3">$2,740</p>
      </div>

      <!-- <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-black dark:text-white">230</p>
      </div> -->

      <!-- <div class="hidden items-center justify-center p-2.5 sm:flex xl:p-5">
        <p class="font-medium text-meta-5">1.9%</p>
      </div> -->
    </div>
  </div>
</div>

              </div>
              <!-- ====== Table One End -->

              <!-- ====== Chat Card Start -->
              <div
                class="hidden col-span-12 rounded-sm border border-stroke bg-white py-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4"
              >
                <h4
                  class="mb-6 px-7.5 text-xl font-bold text-black dark:text-white"
                >
                  Chats
                </h4>

                <div>
                  <a
                    href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                  >
                    <div class="relative h-14 w-14 rounded-full">
                      <img src="{{ asset('storage/assets/images/user-01.png') }}" alt="User" />
                      <span
                        class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"
                      ></span>
                    </div>

                    <div class="flex flex-1 items-center justify-between">
                      <div>
                        <h5 class="font-medium text-black dark:text-white">
                          Devid Heilo
                        </h5>
                        <p>
                          <span
                            class="text-sm font-medium text-black dark:text-white"
                            >Hello, how are you?</span
                          >
                          <span class="text-xs"> . 12 min</span>
                        </p>
                      </div>
                      <div
                        class="flex h-6 w-6 items-center justify-center rounded-full bg-primary"
                      >
                        <span class="text-sm font-medium text-white">3</span>
                      </div>
                    </div>
                  </a>
                  <a
                    href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                  >
                    <div class="relative h-14 w-14 rounded-full">
                      <img src="{{ asset('storage/assets/images/user-01.png') }}" alt="User" />
                      <span
                        class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"
                      ></span>
                    </div>

                    <div class="flex flex-1 items-center justify-between">
                      <div>
                        <h5 class="font-medium">Henry Fisher</h5>
                        <p>
                          <span class="text-sm font-medium"
                            >I am waiting for you</span
                          >
                          <span class="text-xs"> . 5:54 PM</span>
                        </p>
                      </div>
                    </div>
                  </a>
                  <a
                    href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                  >
                    <div class="relative h-14 w-14 rounded-full">
                      <img src="{{ asset('storage/assets/images/user-01.png') }}" alt="User" />
                      <span
                        class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-6"
                      ></span>
                    </div>

                    <div class="flex flex-1 items-center justify-between">
                      <div>
                        <h5 class="font-medium">Wilium Smith</h5>
                        <p>
                          <span class="text-sm font-medium"
                            >Where are you now?</span
                          >
                          <span class="text-xs"> . 10:12 PM</span>
                        </p>
                      </div>
                    </div>
                  </a>
                  <a
                    href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                  >
                    <div class="relative h-14 w-14 rounded-full">
                      <img src="{{ asset('storage/assets/images/user-01.png') }}" alt="User" />
                      <span
                        class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"
                      ></span>
                    </div>

                    <div class="flex flex-1 items-center justify-between">
                      <div>
                        <h5 class="font-medium text-black dark:text-white">
                          Henry Deco
                        </h5>
                        <p>
                          <span
                            class="text-sm font-medium text-black dark:text-white"
                            >Thank you so much!</span
                          >
                          <span class="text-xs"> . Sun</span>
                        </p>
                      </div>
                      <div
                        class="flex h-6 w-6 items-center justify-center rounded-full bg-primary"
                      >
                        <span class="text-sm font-medium text-white">2</span>
                      </div>
                    </div>
                  </a>
                  <a
                    href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                  >
                    <div class="relative h-14 w-14 rounded-full">
                      <img src="{{ asset('storage/assets/images/user-01.png') }}" alt="User" />
                      <span
                        class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-7"
                      ></span>
                    </div>

                    <div class="flex flex-1 items-center justify-between">
                      <div>
                        <h5 class="font-medium">Jubin Jack</h5>
                        <p>
                          <span class="text-sm font-medium"
                            >I really love that!</span
                          >
                          <span class="text-xs"> . Oct 23</span>
                        </p>
                      </div>
                    </div>
                  </a>
                  <a
                    href="messages.html"
                    class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                  >
                    <div class="relative h-14 w-14 rounded-full">
                      <img src="{{ asset('storage/assets/images/user-01.png') }}" alt="User" />
                      <span
                        class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-6"
                      ></span>
                    </div>

                    <div class="flex flex-1 items-center justify-between">
                      <div>
                        <h5 class="font-medium">Wilium Smith</h5>
                        <p>
                          <span class="text-sm font-medium"
                            >Where are you now?</span
                          >
                          <span class="text-xs"> . Sep 20</span>
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- ====== Chat Card End -->
            </div>
          </div>
