<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mx-auto w-full">
              <!-- Breadcrumb Start -->
              <div
                class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
              >
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                  Clinic Settings
                </h2>

                <nav>
                  <ol class="flex items-center gap-2">
                    <li>
                      <a class="font-medium" href="index.html">Dashboard /</a>
                    </li>
                    <li>
                      <a class="font-medium" href="clinics.html">Clinic /</a>
                    </li>
                    <li class="text-primary">Settings</li>
                  </ol>
                </nav>
              </div>
              <!-- Breadcrumb End -->
              <form x-data="{ formStep: 1 }" class="flex items-start gap-8">
                <div
                  class="w-4/12 space-y-6 rounded-sm border border-stroke bg-white p-6.5 shadow-default dark:border-strokedark dark:bg-boxdark"
                >
                  <button
                    type="button"
                    @click="formStep = 1"
                    class="group flex items-center gap-3.5 font-medium"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full border border-primary text-center text-sm transition group-hover:bg-primary group-hover:text-white"
                      :class="formStep === 1 ? 'bg-primary text-white' : 'text-black-2'"
                    >
                      1
                    </div>
                    <span
                      class="group-hover:text-primary"
                      :class="formStep === 1 ? ' text-primary' : 'text-black-2'"
                      >Clinic Information</span
                    >
                  </button>
                  <button
                    type="button"
                    @click="formStep = 2"
                    class="group flex items-center gap-3.5 font-medium"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full border border-primary text-center text-sm transition group-hover:bg-primary group-hover:text-white"
                      :class="formStep === 2 ? 'bg-primary text-white' : 'text-black-2'"
                    >
                      2
                    </div>
                    <span
                      class="group-hover:text-primary"
                      :class="formStep === 2 ? ' text-primary' : 'text-black-2'"
                      >Clinic Credentials</span
                    >
                  </button>
                  <button
                    type="button"
                    @click="formStep = 3"
                    class="group flex items-center gap-3.5 font-medium"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full border border-primary text-center text-sm transition group-hover:bg-primary group-hover:text-white"
                      :class="formStep === 3 ? 'bg-primary text-white' : 'text-black-2'"
                    >
                      3
                    </div>
                    <span
                      class="group-hover:text-primary"
                      :class="formStep === 3 ? ' text-primary' : 'text-black-2'"
                      >Services Offered</span
                    >
                  </button>

                  <button
                    type="button"
                    @click="formStep = 4"
                    class="group flex items-center gap-3.5 font-medium"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full border border-primary text-center text-sm transition group-hover:bg-primary group-hover:text-white"
                      :class="formStep === 4 ? 'bg-primary text-white' : 'text-black-2'"
                    >
                      4
                    </div>
                    <span
                      class="group-hover:text-primary"
                      :class="formStep === 4 ? ' text-primary' : 'text-black-2'"
                      >Additional Information</span
                    >
                  </button>
                </div>
                <div class="w-8/12">
                  <div x-cloak x-show="formStep === 1">
                    <div
                      class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                    >
                      <div
                        class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                      >
                        <h3 class="font-medium text-black dark:text-white">
                          Clinic Information
                        </h3>
                      </div>

                      <div class="p-6.5">
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Clinic name
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Clinic Type
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                              >
                                <option value="" class="text-body">
                                  Clinic Type
                                </option>
                                <option value="" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="" class="text-body">
                                  Reproductive Health Center
                                </option>
                                <option value="" class="text-body">
                                  Other (please specify)
                                </option>
                              </select>
                              <span
                                class="absolute right-4 top-1/2 z-30 -translate-y-1/2"
                              >
                                <svg
                                  class="fill-current"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <g opacity="0.8">
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                      fill=""
                                    ></path>
                                  </g>
                                </svg>
                              </span>
                            </div>
                          </div>
                        </div>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Primary Email
                            </label>
                            <input
                              type="email"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Secondary Email
                            </label>
                            <input
                              type="email"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>
                        </div>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Primary Phone Number
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Secondary Phone Number
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>
                        </div>

                        <div class="mb-6">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                          >
                            Primary Address
                          </label>
                          <input
                            type="address"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                          />
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Primary City
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                              >
                                <option value="" class="text-body">
                                  Select
                                </option>
                                <option value="" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="" class="text-body">
                                  Reproductive Health Center
                                </option>
                                <option value="" class="text-body">
                                  Other (please specify)
                                </option>
                              </select>
                              <span
                                class="absolute right-4 top-1/2 z-30 -translate-y-1/2"
                              >
                                <svg
                                  class="fill-current"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <g opacity="0.8">
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                      fill=""
                                    ></path>
                                  </g>
                                </svg>
                              </span>
                            </div>
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Primary State
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                              >
                                <option value="" class="text-body">
                                  Select
                                </option>
                                <option value="" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="" class="text-body">
                                  Reproductive Health Center
                                </option>
                                <option value="" class="text-body">
                                  Other (please specify)
                                </option>
                              </select>
                              <span
                                class="absolute right-4 top-1/2 z-30 -translate-y-1/2"
                              >
                                <svg
                                  class="fill-current"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <g opacity="0.8">
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                      fill=""
                                    ></path>
                                  </g>
                                </svg>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Primary Country
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                              >
                                <option value="" class="text-body">
                                  Select
                                </option>
                                <option value="" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="" class="text-body">
                                  Reproductive Health Center
                                </option>
                                <option value="" class="text-body">
                                  Other (please specify)
                                </option>
                              </select>
                              <span
                                class="absolute right-4 top-1/2 z-30 -translate-y-1/2"
                              >
                                <svg
                                  class="fill-current"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <g opacity="0.8">
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                      fill=""
                                    ></path>
                                  </g>
                                </svg>
                              </span>
                            </div>
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Primary Zip Code
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>
                        </div>
                        <div class="mb-6">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                          >
                            Secondary Address
                          </label>
                          <input
                            type="address"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                          />
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Secondary City
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                              >
                                <option value="" class="text-body">
                                  Select
                                </option>
                                <option value="" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="" class="text-body">
                                  Reproductive Health Center
                                </option>
                                <option value="" class="text-body">
                                  Other (please specify)
                                </option>
                              </select>
                              <span
                                class="absolute right-4 top-1/2 z-30 -translate-y-1/2"
                              >
                                <svg
                                  class="fill-current"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <g opacity="0.8">
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                      fill=""
                                    ></path>
                                  </g>
                                </svg>
                              </span>
                            </div>
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Secondary State
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                              >
                                <option value="" class="text-body">
                                  Select
                                </option>
                                <option value="" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="" class="text-body">
                                  Reproductive Health Center
                                </option>
                                <option value="" class="text-body">
                                  Other (please specify)
                                </option>
                              </select>
                              <span
                                class="absolute right-4 top-1/2 z-30 -translate-y-1/2"
                              >
                                <svg
                                  class="fill-current"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <g opacity="0.8">
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                      fill=""
                                    ></path>
                                  </g>
                                </svg>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Secondary Country
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                              >
                                <option value="" class="text-body">
                                  Select
                                </option>
                                <option value="" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="" class="text-body">
                                  Reproductive Health Center
                                </option>
                                <option value="" class="text-body">
                                  Other (please specify)
                                </option>
                              </select>
                              <span
                                class="absolute right-4 top-1/2 z-30 -translate-y-1/2"
                              >
                                <svg
                                  class="fill-current"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <g opacity="0.8">
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                      fill=""
                                    ></path>
                                  </g>
                                </svg>
                              </span>
                            </div>
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Secondary Zip Code
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div x-cloak x-show="formStep === 2">
                    <div
                      class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                    >
                      <div
                        class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                      >
                        <h3 class="font-medium text-black dark:text-white">
                          Clinic Credentials
                        </h3>
                      </div>

                      <div class="p-6.5">
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              License Number (if applicable)
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>
                          <div>
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Attach file
                            </label>
                            <input
                              type="file"
                              class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark dark:file:bg-white/30 dark:file:text-white dark:focus:border-primary"
                            />
                          </div>
                        </div>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Accreditation (e.g., Joint Commission, ISO)
                            </label>
                            <input
                              type="email"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>
                          <div>
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Attach file
                            </label>
                            <input
                              type="file"
                              class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark dark:file:bg-white/30 dark:file:text-white dark:focus:border-primary"
                            />
                          </div>
                        </div>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Certification (e.g., ASRM, ESHRE)
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>

                          <div>
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Attach file
                            </label>
                            <input
                              type="file"
                              class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark dark:file:bg-white/30 dark:file:text-white dark:focus:border-primary"
                            />
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Years of Operation
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>
                          <div>
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Attach file
                            </label>
                            <input
                              type="file"
                              class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark dark:file:bg-white/30 dark:file:text-white dark:focus:border-primary"
                            />
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Others
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>
                          <div>
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Attach file
                            </label>
                            <input
                              type="file"
                              multiple
                              class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:file:border-form-strokedark dark:file:bg-white/30 dark:file:text-white dark:focus:border-primary"
                            />
                          </div>
                        </div>

                        <div
                          class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                        >
                          <div class="px-4 py-6 md:px-6 xl:px-7.5">
                            <h4
                              class="text-xl font-bold text-black dark:text-white"
                            >
                              Documents
                            </h4>
                          </div>

                          <div
                            class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5"
                          >
                            <div class="col-span-5 flex items-center">
                              <p class="font-medium">Document Name</p>
                            </div>
                            <div class="col-span-1 hidden items-center sm:flex">
                              <p class="font-medium">Action</p>
                            </div>
                          </div>

                          <div
                            class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5"
                          >
                            <div class="col-span-5 flex items-center">
                              <div
                                class="flex flex-col gap-4 sm:flex-row sm:items-center"
                              >
                                <p
                                  class="text-sm font-medium text-black dark:text-white"
                                >
                                  Apple Watch Series 7
                                </p>
                              </div>
                            </div>
                            <div class="col-span-1 hidden items-center sm:flex">
                              <button class="hover:text-primary">
                                <svg
                                  class="fill-current"
                                  width="18"
                                  height="18"
                                  viewBox="0 0 18 18"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M8.99981 14.8219C3.43106 14.8219 0.674805 9.50624 0.562305 9.28124C0.47793 9.11249 0.47793 8.88749 0.562305 8.71874C0.674805 8.49374 3.43106 3.20624 8.99981 3.20624C14.5686 3.20624 17.3248 8.49374 17.4373 8.71874C17.5217 8.88749 17.5217 9.11249 17.4373 9.28124C17.3248 9.50624 14.5686 14.8219 8.99981 14.8219ZM1.85605 8.99999C2.4748 10.0406 4.89356 13.5562 8.99981 13.5562C13.1061 13.5562 15.5248 10.0406 16.1436 8.99999C15.5248 7.95936 13.1061 4.44374 8.99981 4.44374C4.89356 4.44374 2.4748 7.95936 1.85605 8.99999Z"
                                    fill=""
                                  />
                                  <path
                                    d="M9 11.3906C7.67812 11.3906 6.60938 10.3219 6.60938 9C6.60938 7.67813 7.67812 6.60938 9 6.60938C10.3219 6.60938 11.3906 7.67813 11.3906 9C11.3906 10.3219 10.3219 11.3906 9 11.3906ZM9 7.875C8.38125 7.875 7.875 8.38125 7.875 9C7.875 9.61875 8.38125 10.125 9 10.125C9.61875 10.125 10.125 9.61875 10.125 9C10.125 8.38125 9.61875 7.875 9 7.875Z"
                                    fill=""
                                  />
                                </svg>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div x-cloak x-show="formStep === 3">
                    <div
                      class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                    >
                      <div
                        class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                      >
                        <h3 class="font-medium text-black dark:text-white">
                          Services Offered
                        </h3>
                      </div>
                      <div class="flex flex-col gap-6 p-6.5">
                        <div
                          x-data="{ switcherToggle: false }"
                          class="flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="toggle4"
                            class="h-5 w-5 accent-primary"
                            @change="switcherToggle = !switcherToggle"
                          />
                          <label for="toggle4" class="">
                            IVF (In Vitro Fertilization)
                          </label>
                        </div>
                        <div
                          x-data="{ switcherToggle: false }"
                          class="flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="toggle4"
                            class="h-5 w-5 accent-primary"
                            @change="switcherToggle = !switcherToggle"
                          />
                          <label for="toggle4" class="">
                            ICSI (Intracytoplasmic Sperm Injection)
                          </label>
                        </div>
                        <div
                          x-data="{ switcherToggle: false }"
                          class="flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="toggle4"
                            class="h-5 w-5 accent-primary"
                            @change="switcherToggle = !switcherToggle"
                          />
                          <label for="toggle4" class="">
                            IUI (Intrauterine Insemination)
                          </label>
                        </div>
                        <div
                          x-data="{ switcherToggle: false }"
                          class="flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="toggle4"
                            class="h-5 w-5 accent-primary"
                            @change="switcherToggle = !switcherToggle"
                          />
                          <label for="toggle4" class=""> Egg Donation </label>
                        </div>
                        <div
                          x-data="{ switcherToggle: false }"
                          class="flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="toggle4"
                            class="h-5 w-5 accent-primary"
                            @change="switcherToggle = !switcherToggle"
                          />
                          <label for="toggle4" class=""> Surrogacy </label>
                        </div>
                        <div
                          x-data="{ switcherToggle: false }"
                          class="flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="toggle4"
                            class="h-5 w-5 accent-primary"
                            @change="switcherToggle = !switcherToggle"
                          />
                          <label for="toggle4" class="">
                            Fertility Testing (e.g., semen analysis, ovarian
                            reserve testing)
                          </label>
                        </div>
                        <div
                          x-data="{ switcherToggle: false }"
                          class="flex items-center gap-2"
                        >
                          <input
                            type="checkbox"
                            id="toggle4"
                            class="h-5 w-5 accent-primary"
                            @change="switcherToggle = !switcherToggle"
                          />
                          <label for="toggle4" class="">
                            Other (please specify)
                          </label>
                        </div>
                        <input
                          type="text"
                          class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                        />
                      </div>
                    </div>
                  </div>

                  <div x-cloak x-show="formStep === 4">
                    <div
                      class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                    >
                      <div
                        class="border-b border-stroke px-6.5 py-4 dark:border-strokedark"
                      >
                        <h3 class="font-medium text-black dark:text-white">
                          Additional Information
                        </h3>
                      </div>

                      <div class="p-6.5">
                        <div class="mb-4.5 w-full">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                          >
                            Unique Features or Specializations
                          </label>
                          <input
                            type="text"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                          />
                        </div>

                        <div class="mb-4.5 w-full">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                          >
                            Awards or Recognition
                          </label>
                          <input
                            type="email"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                          />
                        </div>

                        <div class="mb-6 w-full">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                          >
                            Clinic Mission Statement
                          </label>
                          <textarea
                            rows="6"
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                          ></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4 flex items-center justify-between">
                    <button
                      x-bind:disabled="formStep === 1"
                      @click="formStep -= 1"
                      type="button"
                      class="inline-flex items-center justify-center rounded-md border border-primary px-10 py-2 text-center font-medium text-primary hover:bg-opacity-90 lg:px-8 xl:px-10"
                    >
                      Back
                    </button>
                    <button
                      x-bind:disabled="formStep === 4"
                      x-show="formStep < 4"
                      @click="formStep += 1"
                      type="button"
                      class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                    >
                      Next Step
                    </button>

                    <button
                      x-show="formStep === 4"
                      type="submit"
                      class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                    >
                      Submit
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>