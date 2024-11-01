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
                          Edit Medical History
                    </h3>
                  <div>
                    <div
                      class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                    >
                      <div class="p-6.5">
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
                              value="{{$params->partner_name}}"
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
                                <option value="" class="text-body">--</option>
                                <option value="yes" class="text-body" @if($params->healthy_question == "yes") selected @endif>Yes</option>
                                <option value="no" class="text-body" @if($params->healthy_question == "no") selected @endif>No</option>
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
                                <option value="" class="text-body">--</option>
                                <option value="yes" class="text-body" @if($params->health_history_1 == "yes") selected @endif>Yes</option>
                                <option value="no" class="text-body" @if($params->health_history_1 == "no") selected @endif>No</option>
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
                                <option value="" class="text-body">--</option>
                                <option value="yes" class="text-body" @if($params->health_history_2 == "yes") selected @endif>Yes</option>
                                <option value="no" class="text-body" @if($params->health_history_2 == "no") selected @endif>No</option>
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
                            >{{$params->chronic_illness_details1}}</textarea>
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
                            >{{$params->chronic_illness_details2}}</textarea>
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
                                <option value="" class="text-body">--</option>
                                <option value="yes" class="text-body" @if($params->fertility_test_treatment == "yes") selected @endif>Yes</option>
                                <option value="no" class="text-body" @if($params->fertility_test_treatment == "no") selected @endif>No</option>
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
                                <option value="yes" class="text-body" @if($params->sti_diagnosis == "yes") selected @endif>Yes</option>
                                <option value="no" class="text-body" @if($params->sti_diagnosis == "no") selected @endif>No</option>
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
                            >{{$params->fertility_tests_details}}</textarea>
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
                            >{{$params->sti_diagnosis_details}}</textarea>
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
                                <option value="" class="text-body">--</option>
                                <option value="yes" class="text-body" @if($params->taking_medications == "yes") selected @endif>Yes</option>
                                <option value="no" class="text-body" @if($params->taking_medications == "no") selected @endif>No</option>
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
                                <option value="" class="text-body">--</option>
                                <option value="yes" class="text-body" @if($params->known_allergies == "yes") selected @endif>Yes</option>
                                <option value="no" class="text-body" @if($params->known_allergies == "no") selected @endif>No</option>
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
                            >{{$params->taking_medications_details}}</textarea>
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
                            >{{$params->known_allergies_details}}</textarea>
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
                                <option value="" class="text-body">--</option>
                                <option value="yes" class="text-body" @if($params->smoke_status == "yes") selected @endif>Yes</option>
                                <option value="no" class="text-body" @if($params->smoke_status == "no") selected @endif>No</option>
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
                                <option value="" class="text-body">--</option>
                                <option value="yes" class="text-body" @if($params->alcohol_status == "yes") selected @endif>Yes</option>
                                <option value="no" class="text-body" @if($params->alcohol_status == "no") selected @endif>No</option>
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
                            >{{$params->smoke_status_details}}</textarea>
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
                            >{{$params->alcohol_status_details}}</textarea>
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
                                <option value="" class="text-body">--</option>
                                <option value="yes" class="text-body" @if($params->hard_drugs == "yes") selected @endif>Yes</option>
                                <option value="no" class="text-body" @if($params->hard_drugs == "no") selected @endif>No</option>
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
                            >{{$params->hard_drugs_details}}</textarea>
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
                            >{{$params->comments}}</textarea>
                          </div>
                        </div>
                        <button 
                          class="inline-flex items-center justify-center rounded-md bg-primary px-10 py-2 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                          id="update_edited_medical_hist"
                          ownerid="{{$params->owner_id}}"
                          postid="{{$params->id}}"
                        >Update</button>
                        <i class="fa-solid fa-circle-notch fa-spin" id="processing-medical-history" style="display: none;"></i>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </form>
            </div>
            @endforeach
          </div>