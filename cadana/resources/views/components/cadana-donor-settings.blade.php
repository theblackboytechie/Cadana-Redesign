<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mx-auto w-full">
              <!-- Breadcrumb Start -->
              <div
                class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
              >
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                  Account Settings
                </h2>

                <nav>
                  <ol class="flex items-center gap-2">
                    <li>
                      <a class="font-medium" href="index.html">Dashboard /</a>
                    </li>
                    <li>
                      <a class="font-medium" href="donors.html">Donorxx /</a>
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
                      >Primary Information</span
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
                      >Vetted Credentials</span
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
                      >Account's Password</span
                    >
                  </button>
                  @if(Auth::user()->accounttype == 'superadmin' || Auth::user()->accounttype == 'professional' || Auth::user()->accounttype == 'clinic')
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
                      >Verification</span
                    >
                  </button>

                  <button
                    type="button"
                    @click="formStep = 5"
                    class="group flex items-center gap-3.5 font-medium"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full border border-primary text-center text-sm transition group-hover:bg-primary group-hover:text-white"
                      :class="formStep === 5 ? 'bg-primary text-white' : 'text-black-2'"
                    >
                      5
                    </div>
                    <span
                      class="group-hover:text-primary"
                      :class="formStep === 5 ? ' text-primary' : 'text-black-2'"
                      >Medical History</span
                    >
                  </button>
                  
                  <button
                    type="button"
                    @click="formStep = 6"
                    class="group flex items-center gap-3.5 font-medium"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full border border-primary text-center text-sm transition group-hover:bg-primary group-hover:text-white"
                      :class="formStep === 6 ? 'bg-primary text-white' : 'text-black-2'"
                    >
                      6
                    </div>
                    <span
                      class="group-hover:text-primary"
                      :class="formStep === 6 ? ' text-primary' : 'text-black-2'"
                      >Donation History</span
                    >
                  </button>
                  @endif
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
                          Primary Information 
                        </h3>
                      </div>

                      <div class="p-6.5">
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Donor name
                            </label>
                            <input
                              id="donor_name"
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Donor Gender
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="donor_gender"
                              >
                                <option value="" class="text-body">
                                  Donor Gender
                                </option>
                                <option value="male" class="text-body">Male</option>
                                <option value="female" class="text-body">
                                  Female
                                </option>
                                <option value="" class="text-body">
                                  Others
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
                              id="donor_primary_email"
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
                              id="donor_secondary_email"
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
                              id="donor_primary_phone"
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
                              id="donor_secondary_phone"
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
                            id="donor_primary_address"
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
                                id="donor_primary_city"
                              >
                                <option value="" class="text-body">
                                  Select
                                </option>
                                <option value="ivf" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="fertility" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="health" class="text-body">
                                  Reproductive Health Center
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
                                id="donor_primary_state"
                              >
                                <option value="" class="text-body">
                                  Select
                                </option>
                                <option value="ivf" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="hospital" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="reproductive" class="text-body">
                                  Reproductive Health Center
                                </option>
                                <option value="other" class="text-body">
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
                                id="donor_primary_country"
                              >
                                <option value="" class="text-body">
                                  Select
                                </option>
                                <option value="dfv1" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="dfv2" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="dfv3" class="text-body">
                                  Reproductive Health Center
                                </option>
                                <option value="dfv4" class="text-body">
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
                              id="donor_primary_zipcode"
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
                            id="donor_secondary_address"
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
                                id="donor_secondary_city"
                              >
                                <option value="" class="text-body">
                                  Select
                                </option>
                                <option value="dfv1" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="dfv2" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="dfv3" class="text-body">
                                  Reproductive Health Center
                                </option>
                                <option value="dfv4" class="text-body">
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
                                id="donor_secondary_state"
                              >
                                <option value="" class="text-body">
                                  Select
                                </option>
                                <option value="dfv1" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="dfv2" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="dfv3" class="text-body">
                                  Reproductive Health Center
                                </option>
                                <option value="dfv4" class="text-body">
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
                                id="donor_secondary_country"
                              >
                                <option value="" class="text-body">
                                  Select
                                </option>
                                <option value="dfv1" class="text-body">
                                  IVF Clinic
                                </option>
                                <option value="dfv2" class="text-body">
                                  Fertility Hospital
                                </option>
                                <option value="dfv3" class="text-body">
                                  Reproductive Health Center
                                </option>
                                <option value="dfv4" class="text-body">
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
                              id="donor_secondary_zipcode"
                            />
                          </div>
                        </div>
                        <button 
                          class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                          id="update_primary_info1"
                        >Update</button>
                        <i class="fa-solid fa-circle-notch fa-spin" id="primaryinfo-processing-loading" style="display: none;"></i>
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
                          Vetted Credentials
                        </h3>
                      </div>

                      <div class="p-6.5">
                        <div id="credentials_error_wraps" class="text-primary"></div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <form class="documentUploadForm" enctype="multipart/form-data">
                          <!-- <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Document Name
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              name="documentname"
                              id="documents_file_text_name"
                            />
                          </div> -->
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
                              name="documentfile"
                              id="documents_file_tag"
                            />
                            <i class="fa-solid fa-circle-notch fa-spin" id="document-uploading-processing" style="display: none;"></i>
                          </div>
                        </div>
                        <div>
                        <!-- <button 
                            class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                            id="document_uploading_password"
                          >Update</button>
                          <i class="fa-solid fa-circle-notch fa-spin" id="document-uploading-processing" style="display: none;"></i> -->
                        </div>
                        </div>
                        </form>

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

                          <div class="" id="list_of_all_documents">
                            <!--  -->
                            
                            <!--  -->
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
                          Account's Password
                        </h3>
                      </div>
                      <div class="flex flex-col gap-6 p-6.5">
                        <div class="w-full xl:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                          >
                            New Password
                          </label>
                          <input
                            type="password"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            id="frm_password"
                          />
                        </div>
                        <div class="w-full xl:w-1/2">
                          <label
                            class="mb-3 block text-sm font-medium text-black dark:text-white"
                          >
                            Confirm New Password
                          </label>
                          <input
                            type="password"
                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            id="frm_confirm_password"
                          />

                          <button 
                            class="inline-flex items-center justify-center rounded-md bg-primary mt-4 px-10 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                            id="update_password"
                          >Update</button>
                          <i class="fa-solid fa-circle-notch fa-spin" id="pswrd-processing-loading" style="display: none;"></i>
                        </div>
                        
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
                          Verification Status
                        </h3>
                      </div>

                      <div class="flex items-center gap-2 p-6.5" id="verification_status_checker" status="{{$verifystatus}}">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-6 w-6 text-primary"
                            id="user_verified_icon"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z"
                            />
                          </svg>
                          <p id="user_verified_text">
                            Your account has been successfully verified and now
                            has access to all the features of our fertility app.
                          </p>
                        
                          <p id="user_un-verified_icon">
                            You are yet to be verified. Check back soon or contact the Cadana support team for speedy response.
                          </p>
                        
                      </div>

                      @if($verifystatus === null || $verifystatus == 0)
                        <div class="p-6.5" id="verification_status_wraps"><i class="fa-solid fa-toggle-on text-primary drop-shadow-sm" id="trigger_verification_toggle"></i></div>
                      @elseif($verifystatus == 1)
                        <div class="p-6.5" id="verification_status_wraps"><i class="fa-solid fa-toggle-off text-primary drop-shadow-sm" id="trigger_verification_toggle"></i></div>
                      @endif
                    </div>
                  </div>
                  <div
                    x-cloak
                    x-show="formStep === 5"
                    x-data="{ formMode: false }"
                  >
                    <div
                      class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                    >
                      <div
                        class="flex items-center justify-between border-b border-stroke px-6.5 py-4"
                      >
                        <h3
                          class="font-medium text-black dark:text-white"
                          x-text="formMode ? 'Update Medical History' : 'Medical History'"
                        >
                          Medical History
                        </h3>
                        <button
                          type="button"
                          @click="formMode = !formMode"
                          x-text="formMode === false ? 'Update Medical History' : 'Medical History'"
                          class="focus:shadow-outline inline-flex items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                        ></button>
                      </div>

                      @foreach($params as $params)
                      <div class="p-6.5" x-cloak x-show="formMode === false">
                        <div class="pb-4 text-primary">
                          <a href="/medicalhistory/edit/{{$params->id}}"><b>Edit</b></a>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-2">
                          <span class="flex items-center gap-2 font-semibold">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 448 512"
                              class="h-6 w-6 fill-primary"
                            >
                              <path
                                d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l80 0 0 56-80 0 0-56zm0 104l80 0 0 64-80 0 0-64zm128 0l96 0 0 64-96 0 0-64zm144 0l80 0 0 64-80 0 0-64zm80-48l-80 0 0-56 80 0 0 56zm0 160l0 40c0 8.8-7.2 16-16 16l-64 0 0-56 80 0zm-128 0l0 56-96 0 0-56 96 0zm-144 0l0 56-64 0c-8.8 0-16-7.2-16-16l0-40 80 0zM272 248l-96 0 0-56 96 0 0 56z"
                              />
                            </svg>

                            Date Created
                          </span>
                          <span>{{ date('jS F, Y. g:iA', strtotime($params->created_at)) }}</span>
                        </div>
                        <div class="grid grid-cols-2 gap-6 gap-y-8">
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6 text-primary"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"
                                />
                              </svg>

                              Partner Full Name
                            </span>
                            <span>{{$params->partner_name}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M96 352L96 96c0-35.3 28.7-64 64-64l256 0c35.3 0 64 28.7 64 64l0 197.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7L160 416c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16l0 48-48 0c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l48 0 0 48c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-48 48 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-48 0 0-48c0-8.8-7.2-16-16-16l-32 0zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-160 0C60.9 512 0 451.1 0 376L0 152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88l160 0z"
                                />
                              </svg>

                              Are you healthy
                            </span>
                            <span>{{$params->healthy_question}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M192 0c13.3 0 24 10.7 24 24l0 13.5c0 35.6 43.1 53.5 68.3 28.3l9.5-9.5c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-9.5 9.5C293 124.9 310.9 168 346.5 168l13.5 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-13.5 0c-35.6 0-53.5 43.1-28.3 68.3l9.5 9.5c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-9.5-9.5C259.1 293 216 310.9 216 346.5l0 13.5c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-13.5c0-35.6-43.1-53.5-68.3-28.3l-9.5 9.5c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l9.5-9.5C91 259.1 73.1 216 37.5 216L24 216c-13.3 0-24-10.7-24-24s10.7-24 24-24l13.5 0c35.6 0 53.5-43.1 28.3-68.3l-9.5-9.5c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l9.5 9.5C124.9 91 168 73.1 168 37.5L168 24c0-13.3 10.7-24 24-24zm48 224a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm-48-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm320 80c0 33 39.9 49.5 63.2 26.2c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6C574.5 312.1 591 352 624 352c8.8 0 16 7.2 16 16s-7.2 16-16 16c-33 0-49.5 39.9-26.2 63.2c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0C551.9 446.5 512 463 512 496c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-33-39.9-49.5-63.2-26.2c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6C417.5 423.9 401 384 368 384c-8.8 0-16-7.2-16-16s7.2-16 16-16c33 0 49.5-39.9 26.2-63.2c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0C440.1 289.5 480 273 480 240c0-8.8 7.2-16 16-16s16 7.2 16 16zm0 112a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                                />
                              </svg>

                              Health Family History (1)
                            </span>
                            <span>{{$params->health_history_1}}</span>
                          </div>

                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M192 0c13.3 0 24 10.7 24 24l0 13.5c0 35.6 43.1 53.5 68.3 28.3l9.5-9.5c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-9.5 9.5C293 124.9 310.9 168 346.5 168l13.5 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-13.5 0c-35.6 0-53.5 43.1-28.3 68.3l9.5 9.5c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-9.5-9.5C259.1 293 216 310.9 216 346.5l0 13.5c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-13.5c0-35.6-43.1-53.5-68.3-28.3l-9.5 9.5c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l9.5-9.5C91 259.1 73.1 216 37.5 216L24 216c-13.3 0-24-10.7-24-24s10.7-24 24-24l13.5 0c35.6 0 53.5-43.1 28.3-68.3l-9.5-9.5c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l9.5 9.5C124.9 91 168 73.1 168 37.5L168 24c0-13.3 10.7-24 24-24zm48 224a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm-48-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm320 80c0 33 39.9 49.5 63.2 26.2c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6C574.5 312.1 591 352 624 352c8.8 0 16 7.2 16 16s-7.2 16-16 16c-33 0-49.5 39.9-26.2 63.2c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0C551.9 446.5 512 463 512 496c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-33-39.9-49.5-63.2-26.2c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6C417.5 423.9 401 384 368 384c-8.8 0-16-7.2-16-16s7.2-16 16-16c33 0 49.5-39.9 26.2-63.2c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0C440.1 289.5 480 273 480 240c0-8.8 7.2-16 16-16s16 7.2 16 16zm0 112a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                                />
                              </svg>

                              Details of First Chronic Illness
                            </span>
                            <span>{{$params->chronic_illness_details1}}</span>
                          </div>

                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M192 0c13.3 0 24 10.7 24 24l0 13.5c0 35.6 43.1 53.5 68.3 28.3l9.5-9.5c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-9.5 9.5C293 124.9 310.9 168 346.5 168l13.5 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-13.5 0c-35.6 0-53.5 43.1-28.3 68.3l9.5 9.5c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-9.5-9.5C259.1 293 216 310.9 216 346.5l0 13.5c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-13.5c0-35.6-43.1-53.5-68.3-28.3l-9.5 9.5c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l9.5-9.5C91 259.1 73.1 216 37.5 216L24 216c-13.3 0-24-10.7-24-24s10.7-24 24-24l13.5 0c35.6 0 53.5-43.1 28.3-68.3l-9.5-9.5c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l9.5 9.5C124.9 91 168 73.1 168 37.5L168 24c0-13.3 10.7-24 24-24zm48 224a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm-48-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm320 80c0 33 39.9 49.5 63.2 26.2c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6C574.5 312.1 591 352 624 352c8.8 0 16 7.2 16 16s-7.2 16-16 16c-33 0-49.5 39.9-26.2 63.2c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0C551.9 446.5 512 463 512 496c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-33-39.9-49.5-63.2-26.2c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6C417.5 423.9 401 384 368 384c-8.8 0-16-7.2-16-16s7.2-16 16-16c33 0 49.5-39.9 26.2-63.2c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0C440.1 289.5 480 273 480 240c0-8.8 7.2-16 16-16s16 7.2 16 16zm0 112a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                                />
                              </svg>

                              Health Family History (2)
                            </span>
                            <span>{{$params->health_history_2}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M192 0c13.3 0 24 10.7 24 24l0 13.5c0 35.6 43.1 53.5 68.3 28.3l9.5-9.5c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-9.5 9.5C293 124.9 310.9 168 346.5 168l13.5 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-13.5 0c-35.6 0-53.5 43.1-28.3 68.3l9.5 9.5c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-9.5-9.5C259.1 293 216 310.9 216 346.5l0 13.5c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-13.5c0-35.6-43.1-53.5-68.3-28.3l-9.5 9.5c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l9.5-9.5C91 259.1 73.1 216 37.5 216L24 216c-13.3 0-24-10.7-24-24s10.7-24 24-24l13.5 0c35.6 0 53.5-43.1 28.3-68.3l-9.5-9.5c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l9.5 9.5C124.9 91 168 73.1 168 37.5L168 24c0-13.3 10.7-24 24-24zm48 224a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm-48-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm320 80c0 33 39.9 49.5 63.2 26.2c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6C574.5 312.1 591 352 624 352c8.8 0 16 7.2 16 16s-7.2 16-16 16c-33 0-49.5 39.9-26.2 63.2c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0C551.9 446.5 512 463 512 496c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-33-39.9-49.5-63.2-26.2c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6C417.5 423.9 401 384 368 384c-8.8 0-16-7.2-16-16s7.2-16 16-16c33 0 49.5-39.9 26.2-63.2c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0C440.1 289.5 480 273 480 240c0-8.8 7.2-16 16-16s16 7.2 16 16zm0 112a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                                />
                              </svg>

                              Details of Second Chronic Illness
                            </span>
                            <span>{{$params->chronic_illness_details2}}</span>
                          </div>
                          <!-- <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M192 0c13.3 0 24 10.7 24 24l0 13.5c0 35.6 43.1 53.5 68.3 28.3l9.5-9.5c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-9.5 9.5C293 124.9 310.9 168 346.5 168l13.5 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-13.5 0c-35.6 0-53.5 43.1-28.3 68.3l9.5 9.5c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-9.5-9.5C259.1 293 216 310.9 216 346.5l0 13.5c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-13.5c0-35.6-43.1-53.5-68.3-28.3l-9.5 9.5c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l9.5-9.5C91 259.1 73.1 216 37.5 216L24 216c-13.3 0-24-10.7-24-24s10.7-24 24-24l13.5 0c35.6 0 53.5-43.1 28.3-68.3l-9.5-9.5c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l9.5 9.5C124.9 91 168 73.1 168 37.5L168 24c0-13.3 10.7-24 24-24zm48 224a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm-48-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm320 80c0 33 39.9 49.5 63.2 26.2c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6C574.5 312.1 591 352 624 352c8.8 0 16 7.2 16 16s-7.2 16-16 16c-33 0-49.5 39.9-26.2 63.2c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0C551.9 446.5 512 463 512 496c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-33-39.9-49.5-63.2-26.2c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6C417.5 423.9 401 384 368 384c-8.8 0-16-7.2-16-16s7.2-16 16-16c33 0 49.5-39.9 26.2-63.2c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0C440.1 289.5 480 273 480 240c0-8.8 7.2-16 16-16s16 7.2 16 16zm0 112a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                                />
                              </svg>

                              Health Family History (3)
                            </span>
                            <span> Blindness: Chronic Family Illness </span>
                          </div> -->
                          <!-- <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M192 0c13.3 0 24 10.7 24 24l0 13.5c0 35.6 43.1 53.5 68.3 28.3l9.5-9.5c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-9.5 9.5C293 124.9 310.9 168 346.5 168l13.5 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-13.5 0c-35.6 0-53.5 43.1-28.3 68.3l9.5 9.5c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-9.5-9.5C259.1 293 216 310.9 216 346.5l0 13.5c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-13.5c0-35.6-43.1-53.5-68.3-28.3l-9.5 9.5c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l9.5-9.5C91 259.1 73.1 216 37.5 216L24 216c-13.3 0-24-10.7-24-24s10.7-24 24-24l13.5 0c35.6 0 53.5-43.1 28.3-68.3l-9.5-9.5c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l9.5 9.5C124.9 91 168 73.1 168 37.5L168 24c0-13.3 10.7-24 24-24zm48 224a16 16 0 1 0 0-32 16 16 0 1 0 0 32zm-48-64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm320 80c0 33 39.9 49.5 63.2 26.2c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6C574.5 312.1 591 352 624 352c8.8 0 16 7.2 16 16s-7.2 16-16 16c-33 0-49.5 39.9-26.2 63.2c6.2 6.2 6.2 16.4 0 22.6s-16.4 6.2-22.6 0C551.9 446.5 512 463 512 496c0 8.8-7.2 16-16 16s-16-7.2-16-16c0-33-39.9-49.5-63.2-26.2c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6C417.5 423.9 401 384 368 384c-8.8 0-16-7.2-16-16s7.2-16 16-16c33 0 49.5-39.9 26.2-63.2c-6.2-6.2-6.2-16.4 0-22.6s16.4-6.2 22.6 0C440.1 289.5 480 273 480 240c0-8.8 7.2-16 16-16s16 7.2 16 16zm0 112a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"
                                />
                              </svg>

                              Details of Third Chronic Illness
                            </span>
                            <span>{{$params->chronic_illness_details2}}</span>
                          </div> -->
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l0 288c0 53 43 96 96 96c28.6 0 54.2-12.5 71.8-32.3c.1-14.2 5.6-28.3 16.4-39.1c.2-.2 .1-.6-.2-.6c-30.9 0-56-25.1-56-56s25.1-56 56-56c.3 0 .4-.4 .2-.6c-21.9-21.9-21.9-57.3 0-79.2c2.4-2.4 5-4.6 7.8-6.5L224 96c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0L96 32 32 32zM96 192l0-96 64 0 0 96-64 0zM216 376c28.8 0 43.2 34.8 22.9 55.2c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0c20.4-20.4 55.2-5.9 55.2 22.9c0 13.3 10.7 24 24 24s24-10.7 24-24c0-28.8 34.8-43.2 55.2-22.9c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9C444.8 410.8 459.2 376 488 376c13.3 0 24-10.7 24-24s-10.7-24-24-24c-28.8 0-43.2-34.8-22.9-55.2c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0C410.8 259.2 376 244.8 376 216c0-13.3-10.7-24-24-24s-24 10.7-24 24c0 28.8-34.8 43.2-55.2 22.9c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9c20.4 20.4 5.9 55.2-22.9 55.2c-13.3 0-24 10.7-24 24s10.7 24 24 24zm104-88a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm40 96a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"
                                />
                              </svg>

                              Have You Ever Undergone any Fertility Tests or
                              Treatments?
                            </span>
                            <span>{{$params->fertility_test_treatment}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM224 160c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 48 48 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16l48 0 0-48z"
                                />
                              </svg>

                              Details of any Fertility Tests or Treatments?
                            </span>
                            <span>{{$params->fertility_tests_details}}</span>
                          </div>

                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l0 288c0 53 43 96 96 96c28.6 0 54.2-12.5 71.8-32.3c.1-14.2 5.6-28.3 16.4-39.1c.2-.2 .1-.6-.2-.6c-30.9 0-56-25.1-56-56s25.1-56 56-56c.3 0 .4-.4 .2-.6c-21.9-21.9-21.9-57.3 0-79.2c2.4-2.4 5-4.6 7.8-6.5L224 96c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0L96 32 32 32zM96 192l0-96 64 0 0 96-64 0zM216 376c28.8 0 43.2 34.8 22.9 55.2c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0c20.4-20.4 55.2-5.9 55.2 22.9c0 13.3 10.7 24 24 24s24-10.7 24-24c0-28.8 34.8-43.2 55.2-22.9c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9C444.8 410.8 459.2 376 488 376c13.3 0 24-10.7 24-24s-10.7-24-24-24c-28.8 0-43.2-34.8-22.9-55.2c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0C410.8 259.2 376 244.8 376 216c0-13.3-10.7-24-24-24s-24 10.7-24 24c0 28.8-34.8 43.2-55.2 22.9c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9c20.4 20.4 5.9 55.2-22.9 55.2c-13.3 0-24 10.7-24 24s10.7 24 24 24zm104-88a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm40 96a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"
                                />
                              </svg>

                              Have You Ever been Diagnosed with any STI?
                            </span>
                            <span>{{$params->sti_diagnosis}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM224 160c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 48 48 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16l48 0 0-48z"
                                />
                              </svg>

                              Details of STI diagnosis
                            </span>
                            <span>{{$params->sti_diagnosis_details}}</span>
                          </div>

                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M112 96c-26.5 0-48 21.5-48 48l0 112 96 0 0-112c0-26.5-21.5-48-48-48zM0 144C0 82.1 50.1 32 112 32s112 50.1 112 112l0 224c0 61.9-50.1 112-112 112S0 429.9 0 368L0 144zM554.9 399.4c-7.1 12.3-23.7 13.1-33.8 3.1L333.5 214.9c-10-10-9.3-26.7 3.1-33.8C360 167.7 387.1 160 416 160c88.4 0 160 71.6 160 160c0 28.9-7.7 56-21.1 79.4zm-59.5 59.5C472 472.3 444.9 480 416 480c-88.4 0-160-71.6-160-160c0-28.9 7.7-56 21.1-79.4c7.1-12.3 23.7-13.1 33.8-3.1L498.5 425.1c10 10 9.3 26.7-3.1 33.8z"
                                />
                              </svg>

                              Are You Currently Taking any Medications or
                              Supplements?
                            </span>
                            <span>{{$params->taking_medications}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM224 160c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 48 48 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16l48 0 0-48z"
                                />
                              </svg>

                              Extra details of Medications or Supplements
                            </span>
                            <span>{{$params->taking_medications_details}}</span>
                          </div>

                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 208c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-176c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 272c0 1.5 0 3.1 .1 4.6L67.6 283c-16-15.2-41.3-14.6-56.6 1.4s-14.6 41.3 1.4 56.6L124.8 448c43.1 41.1 100.4 64 160 64l19.2 0c97.2 0 176-78.8 176-176l0-208c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-176c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 176c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-208zM240 336a16 16 0 1 1 32 0 16 16 0 1 1 -32 0zm80 16a16 16 0 1 1 0 32 16 16 0 1 1 0-32zm48-16a16 16 0 1 1 32 0 16 16 0 1 1 -32 0zm-16 80a16 16 0 1 1 0 32 16 16 0 1 1 0-32zM240 432a16 16 0 1 1 32 0 16 16 0 1 1 -32 0zm-48-48a16 16 0 1 1 0 32 16 16 0 1 1 0-32z"
                                />
                              </svg>

                              Do You Have any Known Allergies to Medications,
                              Foods or Environmental Factors?
                            </span>
                            <span>{{$params->known_allergies}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM224 160c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 48 48 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16l48 0 0-48z"
                                />
                              </svg>

                              Details of allergies
                            </span>
                            <span>{{$params->known_allergies_details}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M448 32l0 11c0 38.2 15.2 74.8 42.2 101.8l21 21c21 21 32.8 49.5 32.8 79.2l0 11c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-11c0-12.7-5.1-24.9-14.1-33.9l-21-21C405.9 151.1 384 98.1 384 43l0-11c0-17.7 14.3-32 32-32s32 14.3 32 32zM576 256l0-11c0-38.2-15.2-74.8-42.2-101.8l-21-21c-21-21-32.8-49.5-32.8-79.2l0-11c0-17.7 14.3-32 32-32s32 14.3 32 32l0 11c0 12.7 5.1 24.9 14.1 33.9l21 21c39 39 60.9 91.9 60.9 147.1l0 11c0 17.7-14.3 32-32 32s-32-14.3-32-32zM0 416c0-35.3 28.7-64 64-64l352 0c17.7 0 32 14.3 32 32l0 96c0 17.7-14.3 32-32 32L64 512c-35.3 0-64-28.7-64-64l0-32zm224 0l0 32 160 0 0-32-160 0zm288-64c17.7 0 32 14.3 32 32l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96c0-17.7 14.3-32 32-32zm96 0c17.7 0 32 14.3 32 32l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96c0-17.7 14.3-32 32-32z"
                                />
                              </svg>

                              Do You Smoke either socially or consistently?
                            </span>
                            <span>{{$params->smoke_status}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM224 160c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 48 48 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16l48 0 0-48z"
                                />
                              </svg>

                              Further Details of smoking history
                            </span>
                            <span>{{$params->smoke_status_details}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M155.6 17.3C163 3 179.9-3.6 195 1.9L320 47.5l125-45.6c15.1-5.5 32 1.1 39.4 15.4l78.8 152.9c28.8 55.8 10.3 122.3-38.5 156.6L556.1 413l41-15c16.6-6 35 2.5 41 19.1s-2.5 35-19.1 41l-71.1 25.9L476.8 510c-16.6 6.1-35-2.5-41-19.1s2.5-35 19.1-41l41-15-31.3-86.2c-59.4 5.2-116.2-34-130-95.2L320 188.8l-14.6 64.7c-13.8 61.3-70.6 100.4-130 95.2l-31.3 86.2 41 15c16.6 6 25.2 24.4 19.1 41s-24.4 25.2-41 19.1L92.2 484.1 21.1 458.2c-16.6-6.1-25.2-24.4-19.1-41s24.4-25.2 41-19.1l41 15 31.3-86.2C66.5 292.5 48.1 226 76.9 170.2L155.6 17.3zm44 54.4l-27.2 52.8L261.6 157l13.1-57.9L199.6 71.7zm240.9 0L365.4 99.1 378.5 157l89.2-32.5L440.5 71.7z"
                                />
                              </svg>

                              Do you Consume Alcohol either socially or
                              consistently?
                            </span>
                            <span>{{$params->alcohol_status}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM224 160c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 48 48 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16l48 0 0-48z"
                                />
                              </svg>

                              Details of Alcohol-Consumption History
                            </span>
                            <span>{{$params->alcohol_status_details}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M256 0c5.3 0 10.3 2.7 13.3 7.1c15.8 23.5 36.7 63.7 49.2 109c7.2 26.4 11.8 55.2 10.4 84c11.5-8.8 23.7-16.7 35.8-23.6c41-23.3 84.4-36.9 112.2-42.5c5.2-1 10.7 .6 14.4 4.4s5.4 9.2 4.4 14.5c-5.6 27.7-19.3 70.9-42.7 111.7c-9.1 15.9-19.9 31.7-32.4 46.3c27.8 6.6 52.4 17.3 67.2 25.5c5.1 2.8 8.2 8.2 8.2 14s-3.2 11.2-8.2 14c-15.2 8.4-40.9 19.5-69.8 26.1c-20.2 4.6-42.9 7.2-65.2 4.6l8.3 33.1c1.5 6.1-.6 12.4-5.5 16.4s-11.6 4.6-17.2 1.9L280 417.2l0 70.8c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-70.8-58.5 29.1c-5.6 2.8-12.3 2.1-17.2-1.9s-7-10.3-5.5-16.4l8.3-33.1c-22.2 2.6-45 0-65.2-4.6c-28.9-6.6-54.6-17.6-69.8-26.1c-5.1-2.8-8.2-8.2-8.2-14s3.2-11.2 8.2-14c14.8-8.2 39.4-18.8 67.2-25.5C78.9 296.3 68.1 280.5 59 264.6c-23.4-40.8-37.1-84-42.7-111.7c-1.1-5.2 .6-10.7 4.4-14.5s9.2-5.4 14.4-4.4c27.9 5.5 71.2 19.2 112.2 42.5c12.1 6.9 24.3 14.7 35.8 23.6c-1.4-28.7 3.1-57.6 10.4-84c12.5-45.3 33.4-85.5 49.2-109c3-4.4 8-7.1 13.3-7.1z"
                                />
                              </svg>

                              Do You Consume Hard Drugs either socially or
                              consistently?
                            </span>
                            <span>{{$params->hard_drugs}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM224 160c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 48 48 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16l48 0 0-48z"
                                />
                              </svg>

                              Details of Hard Drugs-Consumption History
                            </span>
                            <span>{{$params->hard_drugs_details}}</span>
                          </div>
                          <div class="col-span-2 flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM224 160c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 48 48 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16l48 0 0-48z"
                                />
                              </svg>

                              Comments
                            </span>
                            <span>{{$params->comments}}</span>
                          </div>
                        </div>
                      </div>
                      <hr>
                      @endforeach
                      <div class="p-6.5" x-cloak x-show="formMode">
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Full Name of Partner
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="partner_name_frm"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Do you consider yourself to be healthy?
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="healthy_question_frm"
                              >
                                <option value="" class="text-body">
                                  Do you consider yourself to be healthy?
                                </option>
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
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
                              Select any Health Family History (1)
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="health_history_1_frm"
                              >
                                <option value="" class="text-body">
                                  Select any Health Family History (1)
                                </option>
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
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
                              Select any Health Family History (2)
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="health_history_2_frm"
                              >
                                <option value="" class="text-body">
                                  Select any Health Family History (2)
                                </option>
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
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
                              Provide Further Details About Above Chronic
                              Illness
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="chronic_illness_details1_frm"
                            ></textarea>
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Provide Further Details About Above Chronic
                              Illness
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="chronic_illness_details2_frm"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Have You Ever Undergone any Fertility Tests or
                              Treatments?
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="fertility_test_treatment_frm"
                              >
                                <option value="" class="text-body">
                                  Have You Ever Undergone any Fertility Tests or
                                  Treatments?
                                </option>
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
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
                              Have You Ever been Diagnosed with any STI?
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="sti_diagnosis_frm"
                              >
                                <option value="" class="text-body">
                                  Have You Ever been Diagnosed with any STI?
                                </option>
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
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
                              If yes above, Please Provide Details
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="fertility_tests_details_frm"
                            ></textarea>
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              If yes above, Please Provide Details
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="sti_diagnosis_details_frm"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Are You Currently Taking any Medications or
                              Supplements
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="taking_medications_frm"
                              >
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
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
                              Do You Have any Known Allergies to Medications,
                              Foods or Environmental Factors
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="known_allergies_frm"
                              >
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
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
                              If Yes Above, Please List the Supplements and
                              Provide Extra Details
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="taking_medications_details_frm"
                            ></textarea>
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              If Yes Above, Please List Items You're Allergic to
                              and Provide Extra Details
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="known_allergies_details_frm"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Do You Smoke?
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="smoke_status_frm"
                              >
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
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
                              Do you Consume Alcohol either socially or
                              consistently?
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="alcohol_status_frm"
                              >
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
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
                              If Yes Above Briefly Explain Your Smoking History
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="smoke_status_details_frm"
                            ></textarea>
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              If Yes Above Briefly Explain Your
                              Alcohol-Consumption History, Stating How Much You
                              Take Per Day
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="alcohol_status_details_frm"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Do You Consume Hard Drugs either socially or
                              consistently?
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="hard_drugs_frm"
                              >
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
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
                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              If Yes Above Briefly Explain Your Drug-Use
                              History, Stating How Much of Drugs You Take Per
                              Day
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="hard_drugs_details_frm"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Comments
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="comments_frm"
                            ></textarea>
                          </div>
                        </div>
                        <button 
                          class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                          id="update_medical_hist"
                        >Update</button>
                        <i class="fa-solid fa-circle-notch fa-spin" id="processing-medical-history" style="display: none;"></i>
                      </div>
                    </div>
                  </div>
                  <div
                    x-cloak
                    x-show="formStep === 6"
                    x-data="{donorMode: 'history'}"
                  >
                    <div
                      class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                    >
                      <div
                        class="flex items-center justify-between border-b border-stroke px-6.5 py-4"
                      >
                        <h3
                          class="font-medium text-black dark:text-white"
                          x-text="donorMode === 'history' ? 'Donation History' : donorMode === 'create' ? 'Create Donation Form' : 'Edit Donation Form' "
                        ></h3>
                        <div class="flex items-center gap-2">
                          <button
                            type="button"
                            @click="donorMode = (donorMode === 'create' ? 'history' : 'create')"
                            class="focus:shadow-outline inline-flex items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 trigger-donation-create-form"
                          >
                            Create
                          </button>
                          <button
                            type="button"
                            class="focus:shadow-outline inline-flex items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 trigger-return-to-donation-history hidden"
                          >
                            Return!!
                          </button>
                        </div>
                      </div>

                      <!-- male -->
                      @foreach($params2 as $params2)
                      @if($thegender == "male")
                      <div class="p-6.5 male-donation-result donation-result">
                        <div class="text-primary"><a href="/donatinghistory/edit/{{$params2->id}}"><b>Edit</b></a></div>
                       <div class="mb-4.5 flex flex-col gap-2">
                          <span class="flex items-center gap-2 font-semibold">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 448 512"
                              class="h-6 w-6 fill-primary"
                            >
                              <path
                                d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l80 0 0 56-80 0 0-56zm0 104l80 0 0 64-80 0 0-64zm128 0l96 0 0 64-96 0 0-64zm144 0l80 0 0 64-80 0 0-64zm80-48l-80 0 0-56 80 0 0 56zm0 160l0 40c0 8.8-7.2 16-16 16l-64 0 0-56 80 0zm-128 0l0 56-96 0 0-56 96 0zm-144 0l0 56-64 0c-8.8 0-16-7.2-16-16l0-40 80 0zM272 248l-96 0 0-56 96 0 0 56z"
                              />
                            </svg>

                            Date Created
                          </span>
                          <span>{{ date('F j, Y h:i A', strtotime($params2->created_at)) }}</span>
                        </div>
                        <div class="grid grid-cols-2 gap-6 gap-y-8">
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l80 0 0 56-80 0 0-56zm0 104l80 0 0 64-80 0 0-64zm128 0l96 0 0 64-96 0 0-64zm144 0l80 0 0 64-80 0 0-64zm80-48l-80 0 0-56 80 0 0 56zm0 160l0 40c0 8.8-7.2 16-16 16l-64 0 0-56 80 0zm-128 0l0 56-96 0 0-56 96 0zm-144 0l0 56-64 0c-8.8 0-16-7.2-16-16l0-40 80 0zM272 248l-96 0 0-56 96 0 0 56z"
                                />
                              </svg>

                              Date of Sample Collection
                            </span>
                            <span>{{ date('F j, Y h:i A', strtotime($params2->collection_date)) }}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"
                                />
                              </svg>

                              Time of Sample Collection
                            </span>
                            <span>{{ date('g:iA', strtotime($params2->collection_time)) }}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M32 0C14.3 0 0 14.3 0 32S14.3 64 32 64l0 11c0 42.4 16.9 83.1 46.9 113.1L146.7 256 78.9 323.9C48.9 353.9 32 394.6 32 437l0 11c-17.7 0-32 14.3-32 32s14.3 32 32 32l32 0 256 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-11c0-42.4-16.9-83.1-46.9-113.1L237.3 256l67.9-67.9c30-30 46.9-70.7 46.9-113.1l0-11c17.7 0 32-14.3 32-32s-14.3-32-32-32L320 0 64 0 32 0zM288 437l0 11L96 448l0-11c0-25.5 10.1-49.9 28.1-67.9L192 301.3l67.9 67.9c18 18 28.1 42.4 28.1 67.9z"
                                />
                              </svg>

                              Duration of Abstinence
                            </span>
                            <span>{{$params2->duration_abstinence}}</span>
                          </div>

                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm72.4-118.5c9.7-9 10.2-24.2 1.2-33.9C315.3 344.3 290.6 328 256 328s-59.3 16.3-73.5 31.6c-9 9.7-8.5 24.9 1.2 33.9s24.9 8.5 33.9-1.2c7.4-7.9 20-16.4 38.5-16.4s31.1 8.5 38.5 16.4c9 9.7 24.2 10.2 33.9 1.2zM176.4 272c17.7 0 32-14.3 32-32c0-1.5-.1-3-.3-4.4l10.9 3.6c8.4 2.8 17.4-1.7 20.2-10.1s-1.7-17.4-10.1-20.2l-96-32c-8.4-2.8-17.4 1.7-20.2 10.1s1.7 17.4 10.1 20.2l30.7 10.2c-5.8 5.8-9.3 13.8-9.3 22.6c0 17.7 14.3 32 32 32zm192-32c0-8.9-3.6-17-9.5-22.8l30.2-10.1c8.4-2.8 12.9-11.9 10.1-20.2s-11.9-12.9-20.2-10.1l-96 32c-8.4 2.8-12.9 11.9-10.1 20.2s11.9 12.9 20.2 10.1l11.7-3.9c-.2 1.5-.3 3.1-.3 4.7c0 17.7 14.3 32 32 32s32-14.3 32-32z"
                                />
                              </svg>

                              Difficulty in Producing
                            </span>
                            <span>{{$params2->difficulty_producing}}</span>
                          </div>

                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M0 64C0 46.3 14.3 32 32 32l56 0 48 0 56 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 304c0 44.2-35.8 80-80 80s-80-35.8-80-80L32 96C14.3 96 0 81.7 0 64zM136 96L88 96l0 160 48 0 0-160zM288 64c0-17.7 14.3-32 32-32l56 0 48 0 56 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 304c0 44.2-35.8 80-80 80s-80-35.8-80-80l0-304c-17.7 0-32-14.3-32-32zM424 96l-48 0 0 160 48 0 0-160z"
                                />
                              </svg>

                              Was all sample Collected?
                            </span>
                            <span>{{$params2->all_sample_collected}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"
                                />
                              </svg>

                              Time of Production
                            </span>
                            <span>{{$params2->production_time}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"
                                />
                              </svg>

                              Time of Analysis
                            </span>
                            <span>{{$params2->analysis_time}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M342.6 9.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l9.4 9.4L28.1 342.6C10.1 360.6 0 385 0 410.5L0 416c0 53 43 96 96 96l5.5 0c25.5 0 49.9-10.1 67.9-28.1L448 205.3l9.4 9.4c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-32-32-96-96-32-32zM205.3 256L352 109.3 402.7 160l-96 96-101.5 0z"
                                />
                              </svg>

                              Volume of Production
                            </span>
                            <span>{{$params2->production_volume}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                class="h-6 w-6 stroke-primary"
                              >
                                <g
                                  fill="none"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.5"
                                >
                                  <path
                                    d="M15.4 19.85a3.142 3.142 0 1 1 4.444-4.444m.924 2.219a3.144 3.144 0 0 1-3.143 3.143m-.524-8.643h1.048m-.524 0v2.357m5.5 2.619v1.048m0-.524h-2.357m1.116 3.519l-.74.74m.37-.37l-1.667-1.667m-1.698 3.278h-1.048m.524 0v-2.357m-5.5-2.619v-1.048m0 .524h2.357m-1.116-3.519l.74-.74m-.37.37l1.667 1.667m7.722-3.278l-11 11m-2.188-3.503A6.46 6.46 0 0 1 1 13.661C1 8.82 7.454.75 7.454.75a43.4 43.4 0 0 1 5.682 9.435"
                                  />
                                  <path
                                    d="M7.454 17.137a3.476 3.476 0 0 1-3.476-3.476"
                                  />
                                </g>
                              </svg>

                              Liquefaction
                            </span>
                            <span>{{$params2->liquefaction}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 fill-primary"
                                viewBox="0 0 48 48"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M31.194 8.632c2.923-2.923 7.494-3.653 10.174-.973s1.95 7.25-.973 10.174c-2.298 2.297-5.519 3.206-8.125 2.267a.3.3 0 0 0-.148-.018l-.027.008l-.023.023a4.32 4.32 0 0 1-3.298 1.37l-3.013-.112c-1.61-.06-2.807 1.578-2.283 3.059l.256.723c1.447 4.089-1.828 8.432-6.161 8.23l-1.836-.084a.435.435 0 0 0-.435.498l.29 1.523c.565 2.956-1.544 5.823-4.532 6.206l-1.365.174a2.372 2.372 0 0 1-.602-4.704l1.468-.188a.437.437 0 0 0 .37-.496l-.29-1.523c-.63-3.303 2.06-6.398 5.42-6.242l1.835.086c.955.044 1.67-.934 1.362-1.803l-.256-.724c-1.657-4.683 2.069-9.673 7.039-9.488l2.78.104l.034-.033l.007-.025a.3.3 0 0 0-.012-.136c-.807-2.563.11-5.663 2.344-7.896m-2.34 8.058v-.001zm11.1-7.617c-1.62-1.62-4.893-1.48-7.345.973c-1.815 1.815-2.392 4.165-1.852 5.882c.214.68.134 1.55-.485 2.171l-.175.176c-.286.299-.691.47-1.117.454l-3.014-.112c-3.582-.134-6.257 3.492-5.079 6.822l.256.723c.79 2.23-.99 4.578-3.34 4.469l-1.835-.086c-2.072-.096-3.75 1.84-3.363 3.87l.29 1.522c.262 1.368-.708 2.679-2.08 2.855l-1.468.188a.371.371 0 1 0 .094.737l1.365-.175c1.86-.239 3.167-2.04 2.822-3.848l-.29-1.522c-.291-1.525.943-2.943 2.492-2.871l1.836.085c2.937.137 5.148-2.837 4.183-5.566l-.256-.723c-1.003-2.835 1.246-5.836 4.242-5.724l3.014.112a2.32 2.32 0 0 0 1.772-.748l.011-.012l.048-.048c.65-.652 1.57-.71 2.268-.459c1.728.623 4.161.072 6.033-1.8c2.452-2.452 2.593-5.725.973-7.345"
                                  clip-rule="evenodd"
                                />
                              </svg>

                              Debris
                            </span>
                            <span>{{$params2->debris}}</span>
                          </div>

                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l0 288c0 53 43 96 96 96c28.6 0 54.2-12.5 71.8-32.3c.1-14.2 5.6-28.3 16.4-39.1c.2-.2 .1-.6-.2-.6c-30.9 0-56-25.1-56-56s25.1-56 56-56c.3 0 .4-.4 .2-.6c-21.9-21.9-21.9-57.3 0-79.2c2.4-2.4 5-4.6 7.8-6.5L224 96c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0L96 32 32 32zM96 192l0-96 64 0 0 96-64 0zM216 376c28.8 0 43.2 34.8 22.9 55.2c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0c20.4-20.4 55.2-5.9 55.2 22.9c0 13.3 10.7 24 24 24s24-10.7 24-24c0-28.8 34.8-43.2 55.2-22.9c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9C444.8 410.8 459.2 376 488 376c13.3 0 24-10.7 24-24s-10.7-24-24-24c-28.8 0-43.2-34.8-22.9-55.2c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0C410.8 259.2 376 244.8 376 216c0-13.3-10.7-24-24-24s-24 10.7-24 24c0 28.8-34.8 43.2-55.2 22.9c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9c20.4 20.4 5.9 55.2-22.9 55.2c-13.3 0-24 10.7-24 24s10.7 24 24 24zm104-88a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm40 96a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"
                                />
                              </svg>

                              Sperm Agglutination
                            </span>
                            <span>{{$params2->agglutination}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 stroke-primary"
                                viewBox="0 0 48 48"
                              >
                                <g fill="none" stroke-width="4">
                                  <path
                                    fill="currentColor"
                                    fill-rule="evenodd"
                                    d="M18.237 24.475c1.856 1.299 2.33 2.674 3.609 3.57c1.4.98 2.947 1.5 4.169 1.014c2.307-.916 3.976-3.908 6.011-6.815c3.96-5.655 3.954-14.385.26-16.971c-3.692-2.586-11.843.433-15.802 6.088c-1.935 2.763-4.47 6.445-4.317 8.002c.129 1.311.57 2.042 1.958 3.275s2.132.45 4.112 1.837Z"
                                    clip-rule="evenodd"
                                  />
                                  <path
                                    stroke-linecap="round"
                                    d="M13.618 22.317q-5.312 5.847-1.403 8.885q3.908 3.038 9.815-2.995"
                                  />
                                  <path
                                    stroke-linecap="round"
                                    d="M12.239 31.227q-4.645 5.081-1.71 9.477c2.937 4.396 8.755 4.155 11.595.879s8.184-11.396 14.059-9.727s4.877 8.088.939 8.762"
                                  />
                                </g>
                              </svg>

                              Sperm Concentration
                            </span>
                            <span>{{$params2->concentration}}</span>
                          </div>

                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 fill-primary"
                                viewBox="0 0 24 24"
                              >
                                <path
                                  d="M11.06 20.1a2 2 0 0 1-.65-.48a2.47 2.47 0 0 1-.67-1.14a4.2 4.2 0 0 0-1.31-2.06a3.57 3.57 0 0 0-1-3.28a3.28 3.28 0 0 0-4.59-.35a3.29 3.29 0 0 0 .35 4.6a3.87 3.87 0 0 0 2.21 1.12h.36a2.85 2.85 0 0 0 1.53-.44a2.05 2.05 0 0 1 .51.93A4.46 4.46 0 0 0 9 21a4.3 4.3 0 0 0 1.2.88a1 1 0 0 0 .44.1a1 1 0 0 0 .44-1.9Zm-4.74-3.77a.86.86 0 0 1-.7.19A1.8 1.8 0 0 1 4.56 16c-.57-.56-.73-1.39-.36-1.77a.82.82 0 0 1 .56-.2a1.8 1.8 0 0 1 1.24.53a1.8 1.8 0 0 1 .55 1.06a.86.86 0 0 1-.23.71m15-6.12a2.2 2.2 0 0 1-.91-.59a2.47 2.47 0 0 1-.67-1.14a4.2 4.2 0 0 0-1.31-2.06a3.57 3.57 0 0 0-1.05-3.28a3.28 3.28 0 0 0-4.59-.35a3.29 3.29 0 0 0 .35 4.6a3.87 3.87 0 0 0 2.26 1.12h.36a2.85 2.85 0 0 0 1.53-.44a2.05 2.05 0 0 1 .51.93a4.54 4.54 0 0 0 1.2 2a4.36 4.36 0 0 0 1.7 1.08a1.3 1.3 0 0 0 .32.05a1 1 0 0 0 .95-.68a1 1 0 0 0-.65-1.24m-5-3.88a.86.86 0 0 1-.7.19A1.8 1.8 0 0 1 14.56 6c-.57-.56-.73-1.39-.36-1.77a.82.82 0 0 1 .56-.2a1.8 1.8 0 0 1 1.24.53a1.8 1.8 0 0 1 .55 1.06a.86.86 0 0 1-.23.71m5.39 14.12a4.45 4.45 0 0 0-3.23-3.23a3.2 3.2 0 0 1-1.39-.82a2.93 2.93 0 0 1-.8-1.38A4.65 4.65 0 0 0 13 11.77a2.9 2.9 0 0 1-1.38-.8a3 3 0 0 1-.81-1.39a4.7 4.7 0 0 0-1-1.86a3.9 3.9 0 0 0 .19-1.5a4.75 4.75 0 0 0-1.4-2.8A4.78 4.78 0 0 0 5.78 2A3.43 3.43 0 0 0 3 3a3.43 3.43 0 0 0-1 2.78a4.75 4.75 0 0 0 1.4 2.8A4.78 4.78 0 0 0 6.22 10h.43a3.4 3.4 0 0 0 2-.6a2.6 2.6 0 0 1 .31.71a5.12 5.12 0 0 0 3.6 3.59a2.61 2.61 0 0 1 1.83 1.84a5.11 5.11 0 0 0 3.6 3.6a2.57 2.57 0 0 1 1.8 1.86a3 3 0 0 0 .16.46a1 1 0 0 0 .88.54a1.2 1.2 0 0 0 .44-.1a1 1 0 0 0 .48-1.33s-.03-.1-.04-.12M7.64 7.64c-.64.63-1.92.41-2.81-.47A2.78 2.78 0 0 1 4 5.56a1.47 1.47 0 0 1 .35-1.2a1.4 1.4 0 0 1 1-.36a2.7 2.7 0 0 1 1.83.83A2.78 2.78 0 0 1 8 6.44a1.47 1.47 0 0 1-.36 1.2"
                                />
                              </svg>

                              Total Count in Ejaculate
                            </span>
                            <span>{{$params2->ejaculate_count}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 fill-primary"
                                viewBox="0 0 24 24"
                              >
                                <path
                                  d="M11.06 20.1a2 2 0 0 1-.65-.48a2.47 2.47 0 0 1-.67-1.14a4.2 4.2 0 0 0-1.31-2.06a3.57 3.57 0 0 0-1-3.28a3.28 3.28 0 0 0-4.59-.35a3.29 3.29 0 0 0 .35 4.6a3.87 3.87 0 0 0 2.21 1.12h.36a2.85 2.85 0 0 0 1.53-.44a2.05 2.05 0 0 1 .51.93A4.46 4.46 0 0 0 9 21a4.3 4.3 0 0 0 1.2.88a1 1 0 0 0 .44.1a1 1 0 0 0 .44-1.9Zm-4.74-3.77a.86.86 0 0 1-.7.19A1.8 1.8 0 0 1 4.56 16c-.57-.56-.73-1.39-.36-1.77a.82.82 0 0 1 .56-.2a1.8 1.8 0 0 1 1.24.53a1.8 1.8 0 0 1 .55 1.06a.86.86 0 0 1-.23.71m15-6.12a2.2 2.2 0 0 1-.91-.59a2.47 2.47 0 0 1-.67-1.14a4.2 4.2 0 0 0-1.31-2.06a3.57 3.57 0 0 0-1.05-3.28a3.28 3.28 0 0 0-4.59-.35a3.29 3.29 0 0 0 .35 4.6a3.87 3.87 0 0 0 2.26 1.12h.36a2.85 2.85 0 0 0 1.53-.44a2.05 2.05 0 0 1 .51.93a4.54 4.54 0 0 0 1.2 2a4.36 4.36 0 0 0 1.7 1.08a1.3 1.3 0 0 0 .32.05a1 1 0 0 0 .95-.68a1 1 0 0 0-.65-1.24m-5-3.88a.86.86 0 0 1-.7.19A1.8 1.8 0 0 1 14.56 6c-.57-.56-.73-1.39-.36-1.77a.82.82 0 0 1 .56-.2a1.8 1.8 0 0 1 1.24.53a1.8 1.8 0 0 1 .55 1.06a.86.86 0 0 1-.23.71m5.39 14.12a4.45 4.45 0 0 0-3.23-3.23a3.2 3.2 0 0 1-1.39-.82a2.93 2.93 0 0 1-.8-1.38A4.65 4.65 0 0 0 13 11.77a2.9 2.9 0 0 1-1.38-.8a3 3 0 0 1-.81-1.39a4.7 4.7 0 0 0-1-1.86a3.9 3.9 0 0 0 .19-1.5a4.75 4.75 0 0 0-1.4-2.8A4.78 4.78 0 0 0 5.78 2A3.43 3.43 0 0 0 3 3a3.43 3.43 0 0 0-1 2.78a4.75 4.75 0 0 0 1.4 2.8A4.78 4.78 0 0 0 6.22 10h.43a3.4 3.4 0 0 0 2-.6a2.6 2.6 0 0 1 .31.71a5.12 5.12 0 0 0 3.6 3.59a2.61 2.61 0 0 1 1.83 1.84a5.11 5.11 0 0 0 3.6 3.6a2.57 2.57 0 0 1 1.8 1.86a3 3 0 0 0 .16.46a1 1 0 0 0 .88.54a1.2 1.2 0 0 0 .44-.1a1 1 0 0 0 .48-1.33s-.03-.1-.04-.12M7.64 7.64c-.64.63-1.92.41-2.81-.47A2.78 2.78 0 0 1 4 5.56a1.47 1.47 0 0 1 .35-1.2a1.4 1.4 0 0 1 1-.36a2.7 2.7 0 0 1 1.83.83A2.78 2.78 0 0 1 8 6.44a1.47 1.47 0 0 1-.36 1.2"
                                />
                              </svg>

                              Sperm Motility
                            </span>
                            <span>{{$params2->sperm_motility}}</span>
                          </div>

                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 fill-primary"
                                viewBox="0 0 24 24"
                              >
                                <path
                                  d="M10 12v10H8v-8H6v-2zm8 2v6c0 1.11-.89 2-2 2h-2a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2m-4 0v6h2v-6zM11.5 3c2.65 0 5.05 1 6.9 2.6L21 3v7h-7l2.62-2.62C15.23 6.22 13.46 5.5 11.5 5.5c-3.54 0-6.55 2.31-7.6 5.5l-2.37-.78C2.92 6.03 6.85 3 11.5 3"
                                />
                              </svg>

                              Fast Progression
                            </span>
                            <span>{{$params2->fast_progression}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 fill-primary"
                                viewBox="0 0 24 24"
                              >
                                <path
                                  d="M11.5 3c-4.7 0-8.6 3-10 7.2l2.4.8c1-3.2 4.1-5.5 7.6-5.5c2 0 3.7.7 5.1 1.9L14 10h7V3l-2.6 2.6C16.5 4 14.1 3 11.5 3M19 14v6c0 1.1-.9 2-2 2h-2c-1.1 0-2-.9-2-2v-6c0-1.1.9-2 2-2h2c1.1 0 2 .9 2 2m-4 0v6h2v-6zm-8-2c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h2c1.1 0 2-.9 2-2v-2c0-1.1-.9-2-2-2H7v-2h4v-2zm0 6h2v2H7z"
                                />
                              </svg>

                              Slow Progression
                            </span>
                            <span>{{$params2->slow_progression}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 fill-primary"
                                viewBox="0 0 24 24"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10m-4.906-3.68L18.32 7.094A8 8 0 0 1 7.094 18.32M5.68 16.906A8 8 0 0 1 16.906 5.68z"
                                />
                              </svg>

                              Non-Progression
                            </span>
                            <span>{{$params2->non_progression}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 fill-primary"
                                viewBox="0 0 24 24"
                              >
                                <path
                                  d="M11.06 20.1a2 2 0 0 1-.65-.48a2.47 2.47 0 0 1-.67-1.14a4.2 4.2 0 0 0-1.31-2.06a3.57 3.57 0 0 0-1-3.28a3.28 3.28 0 0 0-4.59-.35a3.29 3.29 0 0 0 .35 4.6a3.87 3.87 0 0 0 2.21 1.12h.36a2.85 2.85 0 0 0 1.53-.44a2.05 2.05 0 0 1 .51.93A4.46 4.46 0 0 0 9 21a4.3 4.3 0 0 0 1.2.88a1 1 0 0 0 .44.1a1 1 0 0 0 .44-1.9Zm-4.74-3.77a.86.86 0 0 1-.7.19A1.8 1.8 0 0 1 4.56 16c-.57-.56-.73-1.39-.36-1.77a.82.82 0 0 1 .56-.2a1.8 1.8 0 0 1 1.24.53a1.8 1.8 0 0 1 .55 1.06a.86.86 0 0 1-.23.71m15-6.12a2.2 2.2 0 0 1-.91-.59a2.47 2.47 0 0 1-.67-1.14a4.2 4.2 0 0 0-1.31-2.06a3.57 3.57 0 0 0-1.05-3.28a3.28 3.28 0 0 0-4.59-.35a3.29 3.29 0 0 0 .35 4.6a3.87 3.87 0 0 0 2.26 1.12h.36a2.85 2.85 0 0 0 1.53-.44a2.05 2.05 0 0 1 .51.93a4.54 4.54 0 0 0 1.2 2a4.36 4.36 0 0 0 1.7 1.08a1.3 1.3 0 0 0 .32.05a1 1 0 0 0 .95-.68a1 1 0 0 0-.65-1.24m-5-3.88a.86.86 0 0 1-.7.19A1.8 1.8 0 0 1 14.56 6c-.57-.56-.73-1.39-.36-1.77a.82.82 0 0 1 .56-.2a1.8 1.8 0 0 1 1.24.53a1.8 1.8 0 0 1 .55 1.06a.86.86 0 0 1-.23.71m5.39 14.12a4.45 4.45 0 0 0-3.23-3.23a3.2 3.2 0 0 1-1.39-.82a2.93 2.93 0 0 1-.8-1.38A4.65 4.65 0 0 0 13 11.77a2.9 2.9 0 0 1-1.38-.8a3 3 0 0 1-.81-1.39a4.7 4.7 0 0 0-1-1.86a3.9 3.9 0 0 0 .19-1.5a4.75 4.75 0 0 0-1.4-2.8A4.78 4.78 0 0 0 5.78 2A3.43 3.43 0 0 0 3 3a3.43 3.43 0 0 0-1 2.78a4.75 4.75 0 0 0 1.4 2.8A4.78 4.78 0 0 0 6.22 10h.43a3.4 3.4 0 0 0 2-.6a2.6 2.6 0 0 1 .31.71a5.12 5.12 0 0 0 3.6 3.59a2.61 2.61 0 0 1 1.83 1.84a5.11 5.11 0 0 0 3.6 3.6a2.57 2.57 0 0 1 1.8 1.86a3 3 0 0 0 .16.46a1 1 0 0 0 .88.54a1.2 1.2 0 0 0 .44-.1a1 1 0 0 0 .48-1.33s-.03-.1-.04-.12M7.64 7.64c-.64.63-1.92.41-2.81-.47A2.78 2.78 0 0 1 4 5.56a1.47 1.47 0 0 1 .35-1.2a1.4 1.4 0 0 1 1-.36a2.7 2.7 0 0 1 1.83.83A2.78 2.78 0 0 1 8 6.44a1.47 1.47 0 0 1-.36 1.2"
                                />
                              </svg>

                              Sperm Immotile
                            </span>
                            <span>{{$params2->sperm_immotile}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 fill-primary"
                                viewBox="0 0 48 48"
                              >
                                <g fill="">
                                  <path
                                    d="M23.486 16.04C24.63 15.441 25 14.787 25 14.333c0-.396-.274-.942-1.136-1.489l1.072-1.688c1.137.72 2.064 1.801 2.064 3.177c0 1.571-1.197 2.751-2.586 3.479C22.977 18.564 21.06 19 19 19s-3.977-.436-5.414-1.188C12.196 17.084 11 15.904 11 14.333c0-1.376.927-2.456 2.064-3.177l1.072 1.688c-.862.547-1.136 1.093-1.136 1.49c0 .453.37 1.107 1.514 1.706c1.097.575 2.681.96 4.486.96s3.39-.385 4.486-.96"
                                  />
                                  <path
                                    fill-rule="evenodd"
                                    d="M22.995 24.543C28.22 23.31 32 19.728 32 15.5C32 10.253 26.18 6 19 6S6 10.253 6 15.5c0 2.976 1.872 5.632 4.803 7.374c-4.474 2.662-6.512 7.517-4.551 10.912c1.981 3.432 7.297 4.072 11.873 1.43c4.433-2.56 6.546-7.262 4.87-10.673m4.017-3.94C28.99 19.158 30 17.33 30 15.5s-1.011-3.658-2.988-5.103C25.037 8.954 22.211 8 19 8c-3.21 0-6.037.954-8.012 2.397C9.01 11.842 8 13.67 8 15.5s1.011 3.658 2.988 5.103C12.963 22.046 15.789 23 19 23c3.21 0 6.037-.954 8.012-2.397M11.95 24.52q.559-.321 1.122-.563c1.085.407 2.259.706 3.495.877l-.142 1.246c.645.073.98.32 1.124.57c.164.284.201.79-.192 1.513c-.384.704-1.112 1.461-2.123 2.045s-2.03.836-2.833.816c-.821-.02-1.242-.307-1.405-.59c-.144-.25-.192-.663.068-1.26l-1.835-.797c-.418.963-.528 2.083.035 3.057c.643 1.115 1.881 1.56 3.088 1.59c1.226.03 2.605-.347 3.882-1.084s2.293-1.743 2.88-2.82c.577-1.06.81-2.355.167-3.47a2.8 2.8 0 0 0-.516-.651L19 25q.96 0 1.883-.099q.112.155.207.318c.606 1.048.668 2.454.003 4.01c-.664 1.555-2.019 3.13-3.968 4.255c-1.95 1.126-3.991 1.511-5.67 1.31c-1.679-.203-2.866-.96-3.471-2.008c-.606-1.049-.667-2.455-.003-4.01s2.019-3.13 3.968-4.256"
                                    clip-rule="evenodd"
                                  />
                                  <path
                                    d="M36.597 34.369c-.095.35-.458.761-1.29 1.007c-.812.24-1.918.26-3.102-.058c-1.185-.317-2.132-.888-2.716-1.501c-.598-.629-.707-1.166-.613-1.517c.082-.309.367-.657 1.006-.91l-.733-1.86c-1.012.398-1.906 1.136-2.205 2.253c-.343 1.278.233 2.505 1.096 3.412c.877.922 2.166 1.658 3.647 2.055s2.966.404 4.186.044c1.2-.354 2.313-1.129 2.655-2.407c.3-1.117-.106-2.203-.783-3.054l-1.565 1.245c.428.538.5.982.416 1.291"
                                  />
                                  <path
                                    fill-rule="evenodd"
                                    d="M42.245 36.457c-1.071 3.998-6.261 6.081-11.592 4.653s-8.784-5.828-7.713-9.826s6.261-6.081 11.592-4.653s8.784 5.828 7.713 9.826m-1.932-.518c-.336 1.255-1.354 2.358-3.012 3.023c-1.659.666-3.843.83-6.13.216c-2.289-.613-4.099-1.846-5.202-3.252c-1.104-1.406-1.434-2.87-1.097-4.124c.336-1.255 1.353-2.358 3.012-3.023c1.659-.666 3.843-.829 6.13-.216s4.098 1.846 5.202 3.252s1.433 2.87 1.097 4.124m-4.478-11.175c2.395.642 4.727-.294 5.208-2.09c.482-1.796-1.07-3.773-3.465-4.414c-2.395-.642-4.726.294-5.208 2.09c-.48 1.796 1.07 3.773 3.465 4.414m2.577-1.987c.503-.202.658-.467.7-.62c.04-.154.039-.462-.296-.888c-.335-.427-.935-.858-1.755-1.077c-.82-.22-1.556-.148-2.06.055c-.502.201-.658.467-.699.62c-.041.154-.04.462.295.888c.336.427.936.858 1.756 1.078s1.555.147 2.059-.056"
                                    clip-rule="evenodd"
                                  />
                                </g>
                              </svg>
                            </span>
                            <span>{{$params2->other_cells}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 fill-primary"
                                viewBox="0 0 48 48"
                              >
                                <g fill="">
                                  <path
                                    d="M25 14.333c0 .454-.37 1.108-1.514 1.707c-1.097.575-2.681.96-4.486.96s-3.389-.385-4.486-.96C13.37 15.441 13 14.787 13 14.333c0-.396.274-.942 1.136-1.489l-1.071-1.688c-1.138.72-2.065 1.801-2.065 3.177c0 1.571 1.197 2.751 2.586 3.479C15.023 18.564 16.94 19 19 19s3.977-.436 5.414-1.188c1.39-.728 2.586-1.908 2.586-3.479c0-1.376-.927-2.456-2.064-3.177l-1.072 1.688c.862.547 1.136 1.093 1.136 1.49"
                                  />
                                  <path
                                    fill-rule="evenodd"
                                    d="M6 15.5c0 2.976 1.873 5.632 4.803 7.374c-4.474 2.662-6.511 7.517-4.551 10.912c1.981 3.432 7.297 4.072 11.873 1.43c4.434-2.56 6.546-7.262 4.87-10.673C28.22 23.31 32 19.728 32 15.5C32 10.253 26.18 6 19 6S6 10.253 6 15.5m21.013 5.103C28.989 19.158 30 17.33 30 15.5s-1.01-3.658-2.988-5.103C25.037 8.954 22.212 8 19 8c-3.21 0-6.037.954-8.012 2.397C9.01 11.842 8 13.67 8 15.5s1.011 3.658 2.988 5.103C12.963 22.046 15.789 23 19 23s6.037-.954 8.012-2.397m-10.447 4.23q1.071.15 2.198.165c.197.186.372.402.516.652c.644 1.115.41 2.41-.167 3.47c-.587 1.077-1.603 2.083-2.88 2.82s-2.656 1.114-3.882 1.083c-1.207-.03-2.445-.474-3.088-1.589c-.563-.974-.453-2.094-.035-3.056l1.835.797c-.26.596-.212 1.01-.068 1.259c.163.283.584.57 1.406.59c.801.02 1.82-.232 2.832-.816s1.74-1.34 2.123-2.045c.393-.722.356-1.23.192-1.513c-.144-.25-.478-.497-1.124-.57z"
                                    clip-rule="evenodd"
                                  />
                                  <path
                                    d="M35.836 24.764c2.395.642 4.726-.294 5.208-2.09c.48-1.796-1.07-3.773-3.466-4.414c-2.395-.642-4.726.294-5.208 2.09c-.48 1.796 1.07 3.773 3.466 4.414"
                                  />
                                  <path
                                    fill-rule="evenodd"
                                    d="M42.245 36.457c-1.071 3.998-6.261 6.081-11.592 4.653s-8.784-5.828-7.713-9.826s6.261-6.081 11.592-4.653s8.785 5.828 7.713 9.826m-6.938-1.082c.832-.245 1.196-.655 1.29-1.006c.082-.309.01-.753-.417-1.291l1.565-1.245c.677.85 1.083 1.937.784 3.054c-.343 1.278-1.455 2.053-2.656 2.407c-1.22.36-2.705.353-4.186-.044s-2.77-1.133-3.647-2.055c-.863-.907-1.438-2.134-1.096-3.412c.3-1.117 1.194-1.855 2.206-2.253l.733 1.86c-.64.252-.924.601-1.007.91c-.094.35.015.888.613 1.517c.584.613 1.531 1.184 2.716 1.501c1.184.318 2.29.297 3.102.057"
                                    clip-rule="evenodd"
                                  />
                                </g>
                              </svg>

                              Round Cells
                            </span>
                            <span>{{$params2->round_cells}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 fill-primary"
                                viewBox="0 0 48 48"
                              >
                                <g fill="">
                                  <path
                                    d="M25 14.333c0 .454-.37 1.108-1.514 1.707c-1.097.575-2.681.96-4.486.96s-3.389-.385-4.486-.96C13.37 15.441 13 14.787 13 14.333c0-.396.274-.942 1.136-1.489l-1.071-1.688c-1.138.72-2.065 1.801-2.065 3.177c0 1.571 1.197 2.751 2.586 3.479C15.023 18.564 16.94 19 19 19s3.977-.436 5.414-1.188c1.39-.728 2.586-1.908 2.586-3.479c0-1.376-.927-2.456-2.064-3.177l-1.072 1.688c.862.547 1.136 1.093 1.136 1.49"
                                  />
                                  <path
                                    fill-rule="evenodd"
                                    d="M6 15.5c0 2.976 1.873 5.632 4.803 7.374c-4.474 2.662-6.511 7.517-4.551 10.912c1.981 3.432 7.297 4.072 11.873 1.43c4.434-2.56 6.546-7.262 4.87-10.673C28.22 23.31 32 19.728 32 15.5C32 10.253 26.18 6 19 6S6 10.253 6 15.5m21.013 5.103C28.989 19.158 30 17.33 30 15.5s-1.01-3.658-2.988-5.103C25.037 8.954 22.212 8 19 8c-3.21 0-6.037.954-8.012 2.397C9.01 11.842 8 13.67 8 15.5s1.011 3.658 2.988 5.103C12.963 22.046 15.789 23 19 23s6.037-.954 8.012-2.397m-10.447 4.23q1.071.15 2.198.165c.197.186.372.402.516.652c.644 1.115.41 2.41-.167 3.47c-.587 1.077-1.603 2.083-2.88 2.82s-2.656 1.114-3.882 1.083c-1.207-.03-2.445-.474-3.088-1.589c-.563-.974-.453-2.094-.035-3.056l1.835.797c-.26.596-.212 1.01-.068 1.259c.163.283.584.57 1.406.59c.801.02 1.82-.232 2.832-.816s1.74-1.34 2.123-2.045c.393-.722.356-1.23.192-1.513c-.144-.25-.478-.497-1.124-.57z"
                                    clip-rule="evenodd"
                                  />
                                  <path
                                    d="M35.836 24.764c2.395.642 4.726-.294 5.208-2.09c.48-1.796-1.07-3.773-3.466-4.414c-2.395-.642-4.726.294-5.208 2.09c-.48 1.796 1.07 3.773 3.466 4.414"
                                  />
                                  <path
                                    fill-rule="evenodd"
                                    d="M42.245 36.457c-1.071 3.998-6.261 6.081-11.592 4.653s-8.784-5.828-7.713-9.826s6.261-6.081 11.592-4.653s8.785 5.828 7.713 9.826m-6.938-1.082c.832-.245 1.196-.655 1.29-1.006c.082-.309.01-.753-.417-1.291l1.565-1.245c.677.85 1.083 1.937.784 3.054c-.343 1.278-1.455 2.053-2.656 2.407c-1.22.36-2.705.353-4.186-.044s-2.77-1.133-3.647-2.055c-.863-.907-1.438-2.134-1.096-3.412c.3-1.117 1.194-1.855 2.206-2.253l.733 1.86c-.64.252-.924.601-1.007.91c-.094.35.015.888.613 1.517c.584.613 1.531 1.184 2.716 1.501c1.184.318 2.29.297 3.102.057"
                                    clip-rule="evenodd"
                                  />
                                </g>
                              </svg>

                              White Blood Cells
                            </span>
                            <span>{{$params2->white_blood_cells}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M175 389.4c-9.8 16-15 34.3-15 53.1c-10 3.5-20.8 5.5-32 5.5c-53 0-96-43-96-96L32 64C14.3 64 0 49.7 0 32S14.3 0 32 0L96 0l64 0 64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 245.9-49 79.6zM96 64l0 96 64 0 0-96L96 64zM352 0L480 0l32 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 150.9L629.7 406.2c6.7 10.9 10.3 23.5 10.3 36.4c0 38.3-31.1 69.4-69.4 69.4l-309.2 0c-38.3 0-69.4-31.1-69.4-69.4c0-12.8 3.6-25.4 10.3-36.4L320 214.9 320 64c-17.7 0-32-14.3-32-32s14.3-32 32-32l32 0zm32 64l0 160c0 5.9-1.6 11.7-4.7 16.8L330.5 320l171 0-48.8-79.2c-3.1-5-4.7-10.8-4.7-16.8l0-160-64 0z"
                                />
                              </svg>

                              Normal Forms
                            </span>
                            <span>{{$params2->normal_forms_piece}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M175 389.4c-9.8 16-15 34.3-15 53.1c-10 3.5-20.8 5.5-32 5.5c-53 0-96-43-96-96L32 64C14.3 64 0 49.7 0 32S14.3 0 32 0L96 0l64 0 64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 245.9-49 79.6zM96 64l0 96 64 0 0-96L96 64zM352 0L480 0l32 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 150.9L629.7 406.2c6.7 10.9 10.3 23.5 10.3 36.4c0 38.3-31.1 69.4-69.4 69.4l-309.2 0c-38.3 0-69.4-31.1-69.4-69.4c0-12.8 3.6-25.4 10.3-36.4L320 214.9 320 64c-17.7 0-32-14.3-32-32s14.3-32 32-32l32 0zm32 64l0 160c0 5.9-1.6 11.7-4.7 16.8L330.5 320l171 0-48.8-79.2c-3.1-5-4.7-10.8-4.7-16.8l0-160-64 0z"
                                />
                              </svg>

                              Abnormal Forms
                            </span>
                            <span>{{$params2->abnormal_forms_piece}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 stroke-primary"
                                viewBox="0 0 48 48"
                              >
                                <g fill="none" stroke-width="4">
                                  <path
                                    fill="currentColor"
                                    fill-rule="evenodd"
                                    d="M18.237 24.475c1.856 1.299 2.33 2.674 3.609 3.57c1.4.98 2.947 1.5 4.169 1.014c2.307-.916 3.976-3.908 6.011-6.815c3.96-5.655 3.954-14.385.26-16.971c-3.692-2.586-11.843.433-15.802 6.088c-1.935 2.763-4.47 6.445-4.317 8.002c.129 1.311.57 2.042 1.958 3.275s2.132.45 4.112 1.837Z"
                                    clip-rule="evenodd"
                                  />
                                  <path
                                    stroke-linecap="round"
                                    d="M13.618 22.317q-5.312 5.847-1.403 8.885q3.908 3.038 9.815-2.995"
                                  />
                                  <path
                                    stroke-linecap="round"
                                    d="M12.239 31.227q-4.645 5.081-1.71 9.477c2.937 4.396 8.755 4.155 11.595.879s8.184-11.396 14.059-9.727s4.877 8.088.939 8.762"
                                  />
                                </g>
                              </svg>

                              Head Defects
                            </span>
                            <span>{{$params2->head_defects_piece}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 fill-primary"
                                viewBox="0 0 48 48"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M31.194 8.632c2.923-2.923 7.494-3.653 10.174-.973s1.95 7.25-.973 10.174c-2.298 2.297-5.519 3.206-8.125 2.267a.3.3 0 0 0-.148-.018l-.027.008l-.023.023a4.32 4.32 0 0 1-3.298 1.37l-3.013-.112c-1.61-.06-2.807 1.578-2.283 3.059l.256.723c1.447 4.089-1.828 8.432-6.161 8.23l-1.836-.084a.435.435 0 0 0-.435.498l.29 1.523c.565 2.956-1.544 5.823-4.532 6.206l-1.365.174a2.372 2.372 0 0 1-.602-4.704l1.468-.188a.437.437 0 0 0 .37-.496l-.29-1.523c-.63-3.303 2.06-6.398 5.42-6.242l1.835.086c.955.044 1.67-.934 1.362-1.803l-.256-.724c-1.657-4.683 2.069-9.673 7.039-9.488l2.78.104l.034-.033l.007-.025a.3.3 0 0 0-.012-.136c-.807-2.563.11-5.663 2.344-7.896m-2.34 8.058v-.001zm11.1-7.617c-1.62-1.62-4.893-1.48-7.345.973c-1.815 1.815-2.392 4.165-1.852 5.882c.214.68.134 1.55-.485 2.171l-.175.176c-.286.299-.691.47-1.117.454l-3.014-.112c-3.582-.134-6.257 3.492-5.079 6.822l.256.723c.79 2.23-.99 4.578-3.34 4.469l-1.835-.086c-2.072-.096-3.75 1.84-3.363 3.87l.29 1.522c.262 1.368-.708 2.679-2.08 2.855l-1.468.188a.371.371 0 1 0 .094.737l1.365-.175c1.86-.239 3.167-2.04 2.822-3.848l-.29-1.522c-.291-1.525.943-2.943 2.492-2.871l1.836.085c2.937.137 5.148-2.837 4.183-5.566l-.256-.723c-1.003-2.835 1.246-5.836 4.242-5.724l3.014.112a2.32 2.32 0 0 0 1.772-.748l.011-.012l.048-.048c.65-.652 1.57-.71 2.268-.459c1.728.623 4.161.072 6.033-1.8c2.452-2.452 2.593-5.725.973-7.345"
                                  clip-rule="evenodd"
                                />
                              </svg>

                              Mid-piece Defects
                            </span>
                            <span>{{$params2->mid_piece_defect}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 fill-primary"
                                viewBox="0 0 48 48"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M31.194 8.632c2.923-2.923 7.494-3.653 10.174-.973s1.95 7.25-.973 10.174c-2.298 2.297-5.519 3.206-8.125 2.267a.3.3 0 0 0-.148-.018l-.027.008l-.023.023a4.32 4.32 0 0 1-3.298 1.37l-3.013-.112c-1.61-.06-2.807 1.578-2.283 3.059l.256.723c1.447 4.089-1.828 8.432-6.161 8.23l-1.836-.084a.435.435 0 0 0-.435.498l.29 1.523c.565 2.956-1.544 5.823-4.532 6.206l-1.365.174a2.372 2.372 0 0 1-.602-4.704l1.468-.188a.437.437 0 0 0 .37-.496l-.29-1.523c-.63-3.303 2.06-6.398 5.42-6.242l1.835.086c.955.044 1.67-.934 1.362-1.803l-.256-.724c-1.657-4.683 2.069-9.673 7.039-9.488l2.78.104l.034-.033l.007-.025a.3.3 0 0 0-.012-.136c-.807-2.563.11-5.663 2.344-7.896m-2.34 8.058v-.001zm11.1-7.617c-1.62-1.62-4.893-1.48-7.345.973c-1.815 1.815-2.392 4.165-1.852 5.882c.214.68.134 1.55-.485 2.171l-.175.176c-.286.299-.691.47-1.117.454l-3.014-.112c-3.582-.134-6.257 3.492-5.079 6.822l.256.723c.79 2.23-.99 4.578-3.34 4.469l-1.835-.086c-2.072-.096-3.75 1.84-3.363 3.87l.29 1.522c.262 1.368-.708 2.679-2.08 2.855l-1.468.188a.371.371 0 1 0 .094.737l1.365-.175c1.86-.239 3.167-2.04 2.822-3.848l-.29-1.522c-.291-1.525.943-2.943 2.492-2.871l1.836.085c2.937.137 5.148-2.837 4.183-5.566l-.256-.723c-1.003-2.835 1.246-5.836 4.242-5.724l3.014.112a2.32 2.32 0 0 0 1.772-.748l.011-.012l.048-.048c.65-.652 1.57-.71 2.268-.459c1.728.623 4.161.072 6.033-1.8c2.452-2.452 2.593-5.725.973-7.345"
                                  clip-rule="evenodd"
                                />
                              </svg>

                              Tail Defects
                            </span>
                            <span>{{$params2->tail_defect}}</span>
                          </div>
                          <div class="flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M175 389.4c-9.8 16-15 34.3-15 53.1c-10 3.5-20.8 5.5-32 5.5c-53 0-96-43-96-96L32 64C14.3 64 0 49.7 0 32S14.3 0 32 0L96 0l64 0 64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 245.9-49 79.6zM96 64l0 96 64 0 0-96L96 64zM352 0L480 0l32 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 150.9L629.7 406.2c6.7 10.9 10.3 23.5 10.3 36.4c0 38.3-31.1 69.4-69.4 69.4l-309.2 0c-38.3 0-69.4-31.1-69.4-69.4c0-12.8 3.6-25.4 10.3-36.4L320 214.9 320 64c-17.7 0-32-14.3-32-32s14.3-32 32-32l32 0zm32 64l0 160c0 5.9-1.6 11.7-4.7 16.8L330.5 320l171 0-48.8-79.2c-3.1-5-4.7-10.8-4.7-16.8l0-160-64 0z"
                                />
                              </svg>

                              Antisperm Antibody
                            </span>
                            <span>{{$params2->antisperm}}</span>
                          </div>
                          <div class="col-span-2 flex flex-col gap-2">
                            <span class="flex items-center gap-2 font-semibold">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"
                                class="h-6 w-6 fill-primary"
                              >
                                <path
                                  d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM224 160c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 48 48 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16l48 0 0-48z"
                                />
                              </svg>

                              Comments
                            </span>
                            <span>{{$params2->comment}}</span>
                          </div>
                        </div>
                       </div>

                       <!-- male -->
<!-- xyz! -->
                       <hr>
                       @elseif($thegender == "female")
                       <!-- female preview -->
                          <!-- female preview -->
                          <div class="p-6.5 female-donation-result donation-result">
                          <div class="text-primary"><a href="/donatinghistory/edit/{{$params2->id}}"><b>Edit</b></a></div>
                          <!--  -->
                          <div class="mt-4 grid grid-cols-2 gap-6 gap-y-8">
                            <div class="flex flex-col gap-2">
                              <span class="flex items-center gap-2 font-semibold">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  class="h-6 w-6 fill-primary"
                                  viewBox="0 0 48 48"
                                >
                                  <g fill="">
                                    <path
                                      d="M25 14.333c0 .454-.37 1.108-1.514 1.707c-1.097.575-2.681.96-4.486.96s-3.389-.385-4.486-.96C13.37 15.441 13 14.787 13 14.333c0-.396.274-.942 1.136-1.489l-1.071-1.688c-1.138.72-2.065 1.801-2.065 3.177c0 1.571 1.197 2.751 2.586 3.479C15.023 18.564 16.94 19 19 19s3.977-.436 5.414-1.188c1.39-.728 2.586-1.908 2.586-3.479c0-1.376-.927-2.456-2.064-3.177l-1.072 1.688c.862.547 1.136 1.093 1.136 1.49"
                                    />
                                    <path
                                      fill-rule="evenodd"
                                      d="M6 15.5c0 2.976 1.873 5.632 4.803 7.374c-4.474 2.662-6.511 7.517-4.551 10.912c1.981 3.432 7.297 4.072 11.873 1.43c4.434-2.56 6.546-7.262 4.87-10.673C28.22 23.31 32 19.728 32 15.5C32 10.253 26.18 6 19 6S6 10.253 6 15.5m21.013 5.103C28.989 19.158 30 17.33 30 15.5s-1.01-3.658-2.988-5.103C25.037 8.954 22.212 8 19 8c-3.21 0-6.037.954-8.012 2.397C9.01 11.842 8 13.67 8 15.5s1.011 3.658 2.988 5.103C12.963 22.046 15.789 23 19 23s6.037-.954 8.012-2.397m-10.447 4.23q1.071.15 2.198.165c.197.186.372.402.516.652c.644 1.115.41 2.41-.167 3.47c-.587 1.077-1.603 2.083-2.88 2.82s-2.656 1.114-3.882 1.083c-1.207-.03-2.445-.474-3.088-1.589c-.563-.974-.453-2.094-.035-3.056l1.835.797c-.26.596-.212 1.01-.068 1.259c.163.283.584.57 1.406.59c.801.02 1.82-.232 2.832-.816s1.74-1.34 2.123-2.045c.393-.722.356-1.23.192-1.513c-.144-.25-.478-.497-1.124-.57z"
                                      clip-rule="evenodd"
                                    />
                                    <path
                                      d="M35.836 24.764c2.395.642 4.726-.294 5.208-2.09c.48-1.796-1.07-3.773-3.466-4.414c-2.395-.642-4.726.294-5.208 2.09c-.48 1.796 1.07 3.773 3.466 4.414"
                                    />
                                    <path
                                      fill-rule="evenodd"
                                      d="M42.245 36.457c-1.071 3.998-6.261 6.081-11.592 4.653s-8.784-5.828-7.713-9.826s6.261-6.081 11.592-4.653s8.785 5.828 7.713 9.826m-6.938-1.082c.832-.245 1.196-.655 1.29-1.006c.082-.309.01-.753-.417-1.291l1.565-1.245c.677.85 1.083 1.937.784 3.054c-.343 1.278-1.455 2.053-2.656 2.407c-1.22.36-2.705.353-4.186-.044s-2.77-1.133-3.647-2.055c-.863-.907-1.438-2.134-1.096-3.412c.3-1.117 1.194-1.855 2.206-2.253l.733 1.86c-.64.252-.924.601-1.007.91c-.094.35.015.888.613 1.517c.584.613 1.531 1.184 2.716 1.501c1.184.318 2.29.297 3.102.057"
                                      clip-rule="evenodd"
                                    />
                                  </g>
                                </svg>

                                Down Regulation Protocol (DRG) Used
                              </span>
                              <span>{{$params2->dwn_reg_prct}}</span>
                            </div>
                            <div class="flex flex-col gap-2">
                              <span class="flex items-center gap-2 font-semibold">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  class="h-6 w-6 fill-primary"
                                  viewBox="0 0 48 48"
                                >
                                  <g fill="">
                                    <path
                                      d="M25 14.333c0 .454-.37 1.108-1.514 1.707c-1.097.575-2.681.96-4.486.96s-3.389-.385-4.486-.96C13.37 15.441 13 14.787 13 14.333c0-.396.274-.942 1.136-1.489l-1.071-1.688c-1.138.72-2.065 1.801-2.065 3.177c0 1.571 1.197 2.751 2.586 3.479C15.023 18.564 16.94 19 19 19s3.977-.436 5.414-1.188c1.39-.728 2.586-1.908 2.586-3.479c0-1.376-.927-2.456-2.064-3.177l-1.072 1.688c.862.547 1.136 1.093 1.136 1.49"
                                    />
                                    <path
                                      fill-rule="evenodd"
                                      d="M6 15.5c0 2.976 1.873 5.632 4.803 7.374c-4.474 2.662-6.511 7.517-4.551 10.912c1.981 3.432 7.297 4.072 11.873 1.43c4.434-2.56 6.546-7.262 4.87-10.673C28.22 23.31 32 19.728 32 15.5C32 10.253 26.18 6 19 6S6 10.253 6 15.5m21.013 5.103C28.989 19.158 30 17.33 30 15.5s-1.01-3.658-2.988-5.103C25.037 8.954 22.212 8 19 8c-3.21 0-6.037.954-8.012 2.397C9.01 11.842 8 13.67 8 15.5s1.011 3.658 2.988 5.103C12.963 22.046 15.789 23 19 23s6.037-.954 8.012-2.397m-10.447 4.23q1.071.15 2.198.165c.197.186.372.402.516.652c.644 1.115.41 2.41-.167 3.47c-.587 1.077-1.603 2.083-2.88 2.82s-2.656 1.114-3.882 1.083c-1.207-.03-2.445-.474-3.088-1.589c-.563-.974-.453-2.094-.035-3.056l1.835.797c-.26.596-.212 1.01-.068 1.259c.163.283.584.57 1.406.59c.801.02 1.82-.232 2.832-.816s1.74-1.34 2.123-2.045c.393-.722.356-1.23.192-1.513c-.144-.25-.478-.497-1.124-.57z"
                                      clip-rule="evenodd"
                                    />
                                    <path
                                      d="M35.836 24.764c2.395.642 4.726-.294 5.208-2.09c.48-1.796-1.07-3.773-3.466-4.414c-2.395-.642-4.726.294-5.208 2.09c-.48 1.796 1.07 3.773 3.466 4.414"
                                    />
                                    <path
                                      fill-rule="evenodd"
                                      d="M42.245 36.457c-1.071 3.998-6.261 6.081-11.592 4.653s-8.784-5.828-7.713-9.826s6.261-6.081 11.592-4.653s8.785 5.828 7.713 9.826m-6.938-1.082c.832-.245 1.196-.655 1.29-1.006c.082-.309.01-.753-.417-1.291l1.565-1.245c.677.85 1.083 1.937.784 3.054c-.343 1.278-1.455 2.053-2.656 2.407c-1.22.36-2.705.353-4.186-.044s-2.77-1.133-3.647-2.055c-.863-.907-1.438-2.134-1.096-3.412c.3-1.117 1.194-1.855 2.206-2.253l.733 1.86c-.64.252-.924.601-1.007.91c-.094.35.015.888.613 1.517c.584.613 1.531 1.184 2.716 1.501c1.184.318 2.29.297 3.102.057"
                                      clip-rule="evenodd"
                                    />
                                  </g>
                                </svg>

                                Antagonant Protocol (AGP) Used
                              </span>
                              <span>{{$params2->Ant_Used}}</span>
                            </div>
                            <div class="flex flex-col gap-2">
                              <span class="flex items-center gap-2 font-semibold">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 640 512"
                                  class="h-6 w-6 fill-primary"
                                >
                                  <path
                                    d="M175 389.4c-9.8 16-15 34.3-15 53.1c-10 3.5-20.8 5.5-32 5.5c-53 0-96-43-96-96L32 64C14.3 64 0 49.7 0 32S14.3 0 32 0L96 0l64 0 64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 245.9-49 79.6zM96 64l0 96 64 0 0-96L96 64zM352 0L480 0l32 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 150.9L629.7 406.2c6.7 10.9 10.3 23.5 10.3 36.4c0 38.3-31.1 69.4-69.4 69.4l-309.2 0c-38.3 0-69.4-31.1-69.4-69.4c0-12.8 3.6-25.4 10.3-36.4L320 214.9 320 64c-17.7 0-32-14.3-32-32s14.3-32 32-32l32 0zm32 64l0 160c0 5.9-1.6 11.7-4.7 16.8L330.5 320l171 0-48.8-79.2c-3.1-5-4.7-10.8-4.7-16.8l0-160-64 0z"
                                  />
                                </svg>

                                Human Chorionic Gonadotropin (hCG) Used
                              </span>
                              <span>{{$params2->hCG}}</span>
                            </div>
                            <div class="flex flex-col gap-2">
                              <span class="flex items-center gap-2 font-semibold">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 640 512"
                                  class="h-6 w-6 fill-primary"
                                >
                                  <path
                                    d="M175 389.4c-9.8 16-15 34.3-15 53.1c-10 3.5-20.8 5.5-32 5.5c-53 0-96-43-96-96L32 64C14.3 64 0 49.7 0 32S14.3 0 32 0L96 0l64 0 64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 245.9-49 79.6zM96 64l0 96 64 0 0-96L96 64zM352 0L480 0l32 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 150.9L629.7 406.2c6.7 10.9 10.3 23.5 10.3 36.4c0 38.3-31.1 69.4-69.4 69.4l-309.2 0c-38.3 0-69.4-31.1-69.4-69.4c0-12.8 3.6-25.4 10.3-36.4L320 214.9 320 64c-17.7 0-32-14.3-32-32s14.3-32 32-32l32 0zm32 64l0 160c0 5.9-1.6 11.7-4.7 16.8L330.5 320l171 0-48.8-79.2c-3.1-5-4.7-10.8-4.7-16.8l0-160-64 0z"
                                  />
                                </svg>

                                Follicle-Stimulating Hormone (FSH) Used
                              </span>
                              <span>{{$params2->FSH}}</span>
                            </div>
                            <div class="flex flex-col gap-2">
                              <span class="flex items-center gap-2 font-semibold">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  class="h-6 w-6 stroke-primary"
                                  viewBox="0 0 48 48"
                                >
                                  <g fill="none" stroke-width="4">
                                    <path
                                      fill="currentColor"
                                      fill-rule="evenodd"
                                      d="M18.237 24.475c1.856 1.299 2.33 2.674 3.609 3.57c1.4.98 2.947 1.5 4.169 1.014c2.307-.916 3.976-3.908 6.011-6.815c3.96-5.655 3.954-14.385.26-16.971c-3.692-2.586-11.843.433-15.802 6.088c-1.935 2.763-4.47 6.445-4.317 8.002c.129 1.311.57 2.042 1.958 3.275s2.132.45 4.112 1.837Z"
                                      clip-rule="evenodd"
                                    />
                                    <path
                                      stroke-linecap="round"
                                      d="M13.618 22.317q-5.312 5.847-1.403 8.885q3.908 3.038 9.815-2.995"
                                    />
                                    <path
                                      stroke-linecap="round"
                                      d="M12.239 31.227q-4.645 5.081-1.71 9.477c2.937 4.396 8.755 4.155 11.595.879s8.184-11.396 14.059-9.727s4.877 8.088.939 8.762"
                                    />
                                  </g>
                                </svg>

                                Human Menopausal Gonadotropin (hMG) Used
                              </span>
                              <span>{{$params2->hMG}}</span>
                            </div>
                            <div class="flex flex-col gap-2">
                              <span class="flex items-center gap-2 font-semibold">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  class="h-6 w-6 text-primary"
                                  viewBox="0 0 24 24"
                                >
                                  <path
                                    fill="currentColor"
                                    d="M16.2 3.5c-1-1-2.3-1.5-3.5-1.5s-2.6.5-3.5 1.5L3.4 9.1c-2 2-2 5.1 0 7.1s5.1 2 7.1 0l5.7-5.7c1.9-1.9 1.9-5.1 0-7m-1.4 5.6L12 11.9L8.4 8.4L4 12.8c0-.8.2-1.7.9-2.3l5.7-5.7c.5-.5 1.3-.8 2-.8s1.5.3 2.1.8c1.2 1.3 1.2 3.1.1 4.3m4.8-2c0 .8-.2 1.5-.4 2.3c1 1.2 1 3-.1 4.1l-2.8 2.8l-1.5-1.5l-2.8 2.8c-1.3 1.3-3.1 2-4.8 2c.2.3.4.6.7.9c2 2 5.1 2 7.1 0l5.7-5.7c2-2 2-5.1 0-7.1c-.5-.2-.8-.4-1.1-.6"
                                  />
                                </svg>

                                Duration of Drugs
                              </span>
                              <span>{{$params2->drugs_duration}}</span>
                            </div>
                            <div class="flex flex-col gap-2">
                              <span class="flex items-center gap-2 font-semibold">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  class="h-6 w-6 fill-primary"
                                  viewBox="0 0 24 24"
                                >
                                  <path
                                    fill="currentColor"
                                    d="M5.5 15v-4.5H4V9h3v6zM9 15v-2.5q0-.425.288-.712T10 11.5h2v-1H9V9h3.5q.425 0 .713.288T13.5 10v1.5q0 .425-.288.713t-.712.287h-2v1h3V15zm6 0v-1.5h3v-1h-2v-1h2v-1h-3V9h3.5q.425 0 .713.288T19.5 10v4q0 .425-.288.713T18.5 15z"
                                  />
                                </svg>

                                Number of Follicles Generated
                              </span>
                              <span>{{$params2->follicles_generated}}</span>
                            </div>
                            <div class="flex flex-col gap-2">
                              <span class="flex items-center gap-2 font-semibold">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 448 512"
                                  class="h-6 w-6 fill-primary"
                                >
                                  <path
                                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"
                                  />
                                </svg>

                                Number of positives
                              </span>
                              <span>{{$params2->positives}}</span>
                            </div>
                            <div class="col-span-2 flex flex-col gap-2">
                              <span class="flex items-center gap-2 font-semibold">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 512 512"
                                  class="h-6 w-6 fill-primary"
                                >
                                  <path
                                    d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM224 160c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 48 48 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16l48 0 0-48z"
                                  />
                                </svg>

                                Comments
                              </span>
                              <span>{{$params2->comment}}</span>
                            </div>
                          </div>
                          <!--  -->
                        </div>
                        <hr>
                        @endif
                        @endforeach
                      </div>
                      <div
                        class="p-6.5 bg-white shadow-default"
                      >
                        <!--  -->
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Date of Sample Collection
                            </label>
                            <input
                              type="date"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-sperm-sample-collection-date"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Time of Sample Collection
                            </label>
                            <input
                              type="time"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-sperm-sample-collection-time"
                            />
                          </div>
                        </div>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Duration of Abstinence
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="donation-male-sperm-duration-abstinence"
                              >
                                @for ($i = 0; $i <= 15; $i++)
                                  <option value="{{ $i }} Days" class="text-body">{{ $i }} Days</option>
                                @endfor
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
                              Difficulty in Producing
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="donation-male-sperm-difficulty-producing"
                              >
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
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

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Was All the Sample Collected
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="donation-male-sperm-sample-collected"
                              >
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
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
                              Time of Production
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="donation-male-sperm-production-time"
                              >
                                @for ($i = 0; $i <= 50; $i++)
                                  <option value="Up to {{ $i }} Hours" class="text-body">Up to {{ $i }} Hours</option>
                                @endfor
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

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Time of Analysis
                            </label>
                            <input
                              type="time"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-sperm-analysis-time"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Volume of Production
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="donation-male-sperm-production-volume"
                              >
                                @for ($i = 0; $i <= 15; $i++)
                                  <option value="Up to {{ $i }} Mls" class="text-body">Up to {{ $i }} Mls</option>
                                @endfor
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

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Liquefaction
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="donation-male-sperm-liquefaction"
                              >
                                <option value="Normal Viscosity">Normal Viscosity</option>
                                <option value="High Viscosity">High Viscosity</option>
                                <option value="Low Viscosity">Low Viscosity</option>
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
                              Debris
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="donation-male-sperm-debris"
                              >
                                <option value="Cellular debris">Cellular debris</option>
                                <option value="Bacterial or fungal particles">Bacterial or fungal particles</option>
                                <option value="Other foreign particles">Other foreign particles</option>
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

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Sperm Agglutination
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="donation-male-sperm-agglutination"
                              >
                                <option value="Head-to-head agglutination">Head-to-head agglutination</option>
                                <option value="Tail-to-tail agglutination">Tail-to-tail agglutination</option>
                                <option value="Mixed agglutination">Mixed agglutination</option>
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
                              Sperm Concentration
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="donation-male-sperm-concentration"
                              >
                                <option value="Normal concentration">Normal concentration</option>
                                <option value="Low concentration (Oligospermia)">Low concentration (Oligospermia)</option>
                                <option value="Moderate concentration">Moderate concentration</option>
                                <option value="High concentration (Oligozoospermia)">High concentration (Oligozoospermia)</option>
                                <option value="Varied concentration">Varied concentration</option>
                                <option value="Zero concentration (Azoospermia)">Zero concentration (Azoospermia)</option>
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

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Total Count in Ejaculate
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="donation-male-ejaculate-count"
                              >
                                @for ($i = 0; $i <= 150; $i++)
                                  <option value="{{ $i }} X 10 ^ 6 ml or more" class="text-body">{{ $i }} X 10 ^ 6 ml or more</option>
                                @endfor
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
                              Sperm Motility
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-sperm-motility"
                            />
                          </div>
                        </div>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Fast Progression
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-fast-progression"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Slow Progression
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-slow-progression"
                            />
                          </div>
                        </div>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Non Progression
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-non-progression"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Sperm Motile
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-sperm-motile"
                            />
                          </div>
                        </div>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Sperm Immotile
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-sperm-immotile"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Other Cells (X10^6/ml)
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <input
                                type="number"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                id="donation-male-other-cells"
                              />
                            </div>
                          </div>
                        </div>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                            Round Cells
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-round-cells"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              White Blood Cells
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-White-blood-cells"
                            />
                          </div>
                        </div>

                        <h3 class="text-lg font-semibold text-black-2 male-donation-form">
                          Morphology
                        </h3>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Normal Forms
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-normal-forms-piece"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Abnormal Forms
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-abnormal-forms-piece"
                            />
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Head Defects
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-head-defects-piece"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Mid-piece Defects
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-mid-piece-defect"
                            />
                          </div>
                        </div>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Tail Defects
                            </label>
                            <input
                              type="number"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-tail-defect"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Antisperm Antibody
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                id="donation-male-antisperm"
                                @change="isOptionSelected = true"
                              >
                                <option value="yes" class="text-body">Yes</option>
                                <option value="no" class="text-body">No</option>
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row male-donation-form">
                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Comments
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-comment"
                            ></textarea>
                            <!--  -->
                            <button 
                              class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                              id="update_male_donor_form"
                            >Update</button>
                          </div>
                        </div>

                        <hr class="hr-donor-settings" />
                        <!-- Female Form -->

                        <div class="mt-4 flex flex-col gap-4 female-donation-form">
                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Down Regulation Protocol Used
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="female-donor-dwn-reg-prct"
                              >
                                <option value="Buserelin" class="text-body">Buserelin</option>
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

                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Antagonant Protocol Used
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="female-donor-Ant-Used"
                              >
                                  <option value="Cetrotide">Cetrotide</option>
                                  <option value="Cetrorelix">Cetrorelix</option>
                                  <option value="Degarelix">Degarelix</option>
                                  <option value="Ganirelix Acetate">Ganirelix Acetate</option>
                                  <option value="Elagolix">Elagolix</option>
                                  <option value="Abarelix">Abarelix</option>
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

                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Human Chorionic Gonadotropin (hCG) Used
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="female-donor-hCG"
                              >
                                <option value="Ovidrel">Ovidrel </option>
                                <option value="Pregnyl">Pregnyl</option>
                                <option value="Profasi">Profasi</option>
                                <option value="Novarel">Novarel</option>
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

                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Follicle-Stimulating Hormone (FSH) Medications
                              Used
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="female-donor-FSH"
                              >
                                <option value="Bravelle">Bravelle</option>
                                <option value="Fertinex">Fertinex</option>
                                <option value="Gonal-F">Gonal-F</option>
                                <option value="Follistim">Follistim</option>
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

                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Human Menopausal Gonadotropin (hMG) Medications
                              Used
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="female-donor-hMG"
                              >
                                <option value="Menopur">Menopur</option>
                                <option value="Menotropin">Menotropin</option>
                                <option value="Pergonal">Pergonal</option>
                                <option value="Follistim">Follistim</option>
                                <option value="GnRH (Gonadotropin-releasing hormone)">GnRH (Gonadotropin-releasing hormone)</option>
                                <option value="Factrel">Factrel</option>
                                <option value="Lutrepulse">Lutrepulse</option>
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

                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Duration of Drugs
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="female-donor-drugs-duration"
                              >
                                @for ($i = 0; $i <= 15; $i++)
                                  <option value="{{ $i }} Days" class="text-body">{{ $i }} Days</option>
                                @endfor
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

                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Number of Follicles Generated
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="female-donor-follicles-generated"
                              >
                                @for ($i = 0; $i <= 15; $i++)
                                  <option value="{{ $i }} Follicles" class="text-body">{{ $i }} Follicles</option>
                                @endfor
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

                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Number of Positives
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="female-donor-positives"
                              >
                                @for ($i = 0; $i <= 15; $i++)
                                  <option value="{{ $i }} Positives" class="text-body">{{ $i }} Positives</option>
                                @endfor
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

                          <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                            <div class="w-full">
                              <label
                                class="mb-3 block text-sm font-medium text-black dark:text-white"
                              >
                                Comments
                              </label>
                              <textarea
                                rows="3"
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                id="female-donor-comment"
                              ></textarea>

                              <button 
                              class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                              id="update_female_donor_form"
                            >Update</button>
                            <i class="fa-solid fa-circle-notch"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                        <!--  -->
                      </div>
                      <div class="p-6.5" x-cloak x-show="donorMode === 'edit'">
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Full Name of Partner
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="partner_name"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Do you consider yourself to be healthy?
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="healthy_question"
                              >
                                <option value="" class="text-body">
                                  Do you consider yourself to be healthy?
                                </option>
                                <option value="" class="text-body">Yes</option>
                                <option value="" class="text-body">No</option>
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
                              Select any Health Family History (1)
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="health_history_1"
                              >
                                <option value="" class="text-body">
                                  Select any Health Family History (1)
                                </option>
                                <option value="" class="text-body">Yes</option>
                                <option value="" class="text-body">No</option>
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
                              Select any Health Family History (2)
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="health_history_2"
                              >
                                <option value="" class="text-body">
                                  Select any Health Family History (2)
                                </option>
                                <option value="" class="text-body">Yes</option>
                                <option value="" class="text-body">No</option>
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
                              Provide Further Details About Above Chronic
                              Illness
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="chronic_illness_details1"
                            ></textarea>
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Provide Further Details About Above Chronic
                              Illness
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="chronic_illness_details2"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Have You Ever Undergone any Fertility Tests or
                              Treatments?
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="fertility_test_treatment"
                              >
                                <option value="" class="text-body">
                                  Have You Ever Undergone any Fertility Tests or
                                  Treatments?
                                </option>
                                <option value="" class="text-body">Yes</option>
                                <option value="" class="text-body">No</option>
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
                              Have You Ever been Diagnosed with any STI?
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="sti_diagnosis"
                              >
                                <option value="" class="text-body">
                                  Have You Ever been Diagnosed with any STI?
                                </option>
                                <option value="" class="text-body">Yes</option>
                                <option value="" class="text-body">No</option>
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
                              If yes above, Please Provide Details
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="fertility_tests_details"
                            ></textarea>
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              If yes above, Please Provide Details
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="sti_diagnosis_details"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Are You Currently Taking any Medications or
                              Supplements
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="taking_medications"
                              >
                                <option value="" class="text-body">Yes</option>
                                <option value="" class="text-body">No</option>
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
                              Do You Have any Known Allergies to Medications,
                              Foods or Environmental Factors
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="known_allergies"
                              >
                                <option value="" class="text-body">Yes</option>
                                <option value="" class="text-body">No</option>
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
                              If Yes Above, Please List the Supplements and
                              Provide Extra Details
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="taking_medications_details"
                            ></textarea>
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              If Yes Above, Please List Items You're Allergic to
                              and Provide Extra Details
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="known_allergies_details"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Do You Smoke?
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="smoke_status"
                              >
                                <option value="" class="text-body">Yes</option>
                                <option value="" class="text-body">No</option>
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
                              Do you Consume Alcohol either socially or
                              consistently?
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="alcohol_status"
                              >
                                <option value="" class="text-body">Yes</option>
                                <option value="" class="text-body">No</option>
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
                              If Yes Above Briefly Explain Your Smoking History
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="smoke_status_details"
                            ></textarea>
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              If Yes Above Briefly Explain Your
                              Alcohol-Consumption History, Stating How Much You
                              Take Per Day
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="alcohol_status_details"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Do You Consume Hard Drugs either socially or
                              consistently?
                            </label>
                            <div
                              x-data="{ isOptionSelected: false }"
                              class="relative z-20 bg-transparent dark:bg-form-input"
                            >
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="hard_drugs"
                              >
                                <option value="" class="text-body">Yes</option>
                                <option value="" class="text-body">No</option>
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
                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              If Yes Above Briefly Explain Your Drug-Use
                              History, Stating How Much of Drugs You Take Per
                              Day
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="hard_drugs_details"
                            ></textarea>
                          </div>
                        </div>
                        <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                          <div class="w-full">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Comments
                            </label>
                            <textarea
                              rows="3"
                              class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 text-sm font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="comments"
                            ></textarea>
                          </div>
                        </div>
                        ooooooooooooooooooo!
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>