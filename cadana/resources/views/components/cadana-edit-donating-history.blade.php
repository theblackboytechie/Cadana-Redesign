<div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        @foreach($params as $params)
            <div class="mx-auto w-full">
              <!-- Breadcrumb Start -->
              <div
                class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
              >
                <h2 class="text-title-md2 font-bold text-black dark:text-white">
                  Donor Settings
                </h2>

                <nav>
                  <ol class="flex items-center gap-2">
                    <li>
                      <a class="font-medium" href="index.html">Dashboard /</a>
                    </li>
                    <li>
                      <a class="font-medium" href="donors.html">Donor /</a>
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
                  <a
                    href="/usersettings/{{$params->owner_id}}"
                    class="group flex items-center gap-3.5 font-medium"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full border border-primary text-center text-sm transition group-hover:bg-primary group-hover:text-white"
                      :class="formStep === 1 ? 'bg-primary text-white' : 'text-black-2'"
                    >
                      0
                    </div>
                    <span
                      class="group-hover:text-primary"
                      >Return</span
                    >
                    </a>
                </div>
                <div class="w-8/12 bg-white">
                    <h3 class="p-6 font-medium text-black dark:text-white">
                          Edit Donation History
                    </h3>
                  <div>
                    <div
                      class="p-6.5 rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
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
                              value="{{$params->collection_date}}"
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
                              value="{{$params->collection_time}}"
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
                                value="{{$params->collection_time}}"
                              >
                                <option value="yes" @if($params->collection_time == "yes") selected @endif class="text-body">Yes</option>
                                <option value="no" @if($params->collection_time == "no") selected @endif class="text-body">No</option>
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
                                <option value="yes" @if($params->difficulty_producing == "yes") selected @endif class="text-body">Yes</option>
                                <option value="no" @if($params->difficulty_producing == "no") selected @endif class="text-body">No</option>
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
                                <option value="yes" @if($params->all_sample_collected == "yes") selected @endif class="text-body">Yes</option>
                                <option value="no" @if($params->all_sample_collected == "yes") selected @endif class="text-body">No</option>
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
                                <option value="yes" @if($params->production_time == "yes") selected @endif class="text-body">Yes</option>
                                <option value="no" @if($params->production_time == "yes") selected @endif class="text-body">No</option>
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
                              value="{{$params->analysis_time}}"
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
                                <option value="yes" @if($params->production_volume == "yes") selected @endif class="text-body">Yes</option>
                                <option value="no" @if($params->production_volume == "no") selected @endif class="text-body">No</option>
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
                                <option value="yes" @if($params->liquefaction == "yes") selected @endif class="text-body">Yes</option>
                                <option value="no" @if($params->liquefaction == "no") selected @endif class="text-body">No</option>
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
                                <option value="yes" @if($params->debris == "yes") selected @endif class="text-body">Yes</option>
                                <option value="no" @if($params->debris == "no") selected @endif class="text-body">No</option>
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
                                <option value="yes" @if($params->agglutination == "yes") selected @endif class="text-body">Yes</option>
                                <option value="no" @if($params->agglutination == "no") selected @endif class="text-body">No</option>
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
                                <option value="yes" @if($params->concentration == "yes") selected @endif class="text-body">Yes</option>
                                <option value="no" @if($params->concentration == "no") selected @endif class="text-body">No</option>
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
                                <option value="yes" @if($params->ejaculate_count == "yes") selected @endif class="text-body">Yes</option>
                                <option value="no" @if($params->ejaculate_count == "no") selected @endif class="text-body">No</option>
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
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-sperm-motility"
                              value="{{$params->sperm_motility}}"
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
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-fast-progression"
                              value="{{$params->fast_progression}}"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Slow Progression
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-slow-progression"
                              value="{{$params->slow_progression}}"
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
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-non-progression"
                              value="{{$params->non_progression}}"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Sperm Motile
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-sperm-motile"
                              value="{{$params->sperm_motile}}"
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
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-sperm-immotile"
                              value="{{$params->sperm_immotile}}"
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
                              <select
                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                :class="isOptionSelected && 'text-black dark:text-white'"
                                @change="isOptionSelected = true"
                                id="donation-male-other-cells"
                              >
                                <option value="yes" @if($params->other_cells == "yes") selected @endif class="text-body">Yes</option>
                                <option value="no" @if($params->other_cells == "no") selected @endif class="text-body">No</option>
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
                            Round Cells
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-round-cells"
                              value="{{$params->round_cells}}"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              White Blood Cells
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-White-blood-cells"
                              value="{{$params->white_blood_cells}}"
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
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-normal-forms-piece"
                              value="{{$params->normal_forms_piece}}"
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
                              value="{{$params->abnormal_forms_piece}}"
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
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-head-defects-piece"
                              value="{{$params->head_defects_piece}}"
                            />
                          </div>
                          <div class="w-full xl:w-1/2">
                            <label
                              class="mb-3 block text-sm font-medium text-black dark:text-white"
                            >
                              Mid-piece Defects
                            </label>
                            <input
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-mid-piece-defect"
                              value="{{$params->mid_piece_defect}}"
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
                              type="text"
                              class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                              id="donation-male-tail-defect"
                              value="{{$params->tail_defect}}"
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
                                <option value="yes" @if($params->antisperm == "yes") selected @endif class="text-body">Yes</option>
                                <option value="no" @if($params->antisperm == "no") selected @endif class="text-body">No</option>
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
                            >{{$params->comment}}</textarea>
                            <!--  -->
                            <button 
                                class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                                id="update_edited_male_donor_form"
                                ownerid="{{$params->owner_id}}"
                                postid="{{$params->id}}"
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
                              >
                                <option value="" class="text-body">
                                  Down Regulation Protocol Used
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
                              >
                                <option value="" class="text-body">
                                  Antagonant Protocol Used
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
                              >
                                <option value="" class="text-body">
                                  Human Chorionic Gonadotropin (hCG) Used
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
                              >
                                <option value="" class="text-body">
                                  Follicle-Stimulating Hormone (FSH) Medications
                                  Used
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
                              >
                                <option value="" class="text-body">
                                  Human Menopausal Gonadotropin (hMG)
                                  Medications Used
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
                              >
                                <option value="" class="text-body">
                                  Duration of Drugs
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
                              >
                                <option value="" class="text-body">
                                  Number of Follicles Generated
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
                              >
                                <option value="" class="text-body">
                                  Number of Positives
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
                              ></textarea>
                            </div>
                          </div>
                        </div>
                        <!--  -->
                    </div>
                  </div>
                </div>
              </form>
            </div>
            @endforeach
          </div>