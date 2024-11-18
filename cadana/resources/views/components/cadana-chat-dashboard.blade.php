        <!-- ===== Main Content Start ===== -->
        <main class="flex-1">
          <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="flex w-full flex-col">
              <!-- Breadcrumb Start -->
              <div
                class="mb-4 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
              >
                <h2 class="text-title-md font-bold text-black">Chats</h2>
              </div>
              <!-- Breadcrumb End -->

              <!-- ====== Profile Section Start -->
              <div
                class="flex flex-1 flex-col gap-8 xl:flex-row"
                x-data="{ open: false }"
              >
                <div
                  class="w-full rounded-sm border border-stroke bg-white py-6 shadow-default dark:border-strokedark dark:bg-boxdark lg:block xl:col-span-4 xl:w-4/12"
                  :class="open ? 'hidden' : 'block'"
                >
                  <div class="">
                    <a
                      @click="open = true"
                      class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                    >
                      <div class="relative h-14 w-14 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
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
                  </div>
                </div>
                <div
                  :class="open ? 'flex' : 'hidden'"
                  class="relative flex h-full w-full flex-1 flex-col rounded-sm border border-stroke bg-white py-6 shadow-default xl:col-span-4 xl:w-8/12"
                >
                  <div
                    class="flex items-center gap-3 border-b px-3.5 pb-6.5 xl:px-6.5"
                  >
                    <button
                      @click="open = false"
                      class="text-black-2 xl:hidden"
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
                          d="M15.75 19.5 8.25 12l7.5-7.5"
                        />
                      </svg>
                    </button>
                    <div class="flex items-center gap-3">
                      <div class="h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <span class="font-medium">John Doe</span>
                    </div>
                  </div>
                  <div
                    class="flex h-full max-h-[55vh] flex-1 flex-col-reverse gap-4 overflow-auto border-b p-6.5 lg:max-h-[35vh] xl:max-h-[55vh]"
                  >
                    <div class="flex w-full items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-bl-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit amet.
                      </p>
                    </div>
                    <div class="flex w-full flex-row-reverse items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-br-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Similique iste, voluptatibus incidunt officiis
                        aspernatur distinctio perspiciatis quod est porro
                        laudantium quam id sed modi. Et?
                      </p>
                    </div>
                    <div class="flex w-full items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-bl-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit amet.
                      </p>
                    </div>
                    <div class="flex w-full flex-row-reverse items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-br-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Similique iste, voluptatibus incidunt officiis
                        aspernatur distinctio perspiciatis quod est porro
                        laudantium quam id sed modi. Et?
                      </p>
                    </div>
                    <div class="flex w-full items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-bl-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit amet.
                      </p>
                    </div>
                    <div class="flex w-full flex-row-reverse items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-br-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Similique iste, voluptatibus incidunt officiis
                        aspernatur distinctio perspiciatis quod est porro
                        laudantium quam id sed modi. Et?
                      </p>
                    </div>
                    <div class="flex w-full items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-bl-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit amet.
                      </p>
                    </div>
                    <div class="flex w-full flex-row-reverse items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-br-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Similique iste, voluptatibus incidunt officiis
                        aspernatur distinctio perspiciatis quod est porro
                        laudantium quam id sed modi. Et?
                      </p>
                    </div>
                    <div class="flex w-full items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-bl-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit amet.
                      </p>
                    </div>
                    <div class="flex w-full flex-row-reverse items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-br-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Similique iste, voluptatibus incidunt officiis
                        aspernatur distinctio perspiciatis quod est porro
                        laudantium quam id sed modi. Et?
                      </p>
                    </div>
                    <div class="flex w-full items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-bl-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit amet.
                      </p>
                    </div>
                    <div class="flex w-full flex-row-reverse items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-br-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Similique iste, voluptatibus incidunt officiis
                        aspernatur distinctio perspiciatis quod est porro
                        laudantium quam id sed modi. Et?
                      </p>
                    </div>
                    <div class="flex w-full items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-bl-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit amet.
                      </p>
                    </div>
                    <div class="flex w-full flex-row-reverse items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-br-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Similique iste, voluptatibus incidunt officiis
                        aspernatur distinctio perspiciatis quod est porro
                        laudantium quam id sed modi. Et?
                      </p>
                    </div>
                    <div class="flex w-full items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-bl-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit amet.
                      </p>
                    </div>
                    <div class="flex w-full flex-row-reverse items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <p
                        class="w-fit max-w-sm rounded-2xl rounded-br-none bg-primary px-4 py-3 text-sm font-medium text-white"
                      >
                        Lorem ipsum dolor sit, amet consectetur adipisicing
                        elit. Similique iste, voluptatibus incidunt officiis
                        aspernatur distinctio perspiciatis quod est porro
                        laudantium quam id sed modi. Et?
                      </p>
                    </div>
                    <div class="flex w-full flex-row-reverse items-end gap-2">
                      <div class="relative h-10 w-10 rounded-full">
                        <img src="src/images/user/user-03.png" alt="User" />
                      </div>
                      <img
                        src="src/images/cover/cover-01.png"
                        alt=""
                        class="h-54 w-54 rounded-xl"
                      />
                    </div>
                  </div>
                  <div
                    class="flex items-end justify-between gap-2 px-6.5 pt-6.5"
                  >
                    <button
                      type="button"
                      class="inline-flex items-center justify-center self-center rounded-md bg-neutral-50 text-sm font-medium tracking-wide text-neutral-500 transition-colors duration-100 hover:bg-neutral-100 hover:text-neutral-600 focus:ring-2 focus:ring-neutral-100 focus:ring-offset-2"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5"
                        />
                      </svg>
                    </button>
                    <textarea
                      name=""
                      x-data="{ 
                        resize () { 
                            $el.style.height = '0px'; 
                            $el.style.height = $el.scrollHeight + 'px' 
                        } 
                    }"
                      x-init="resize()"
                      @input="resize()"
                      rows="1"
                      id=""
                      class="h-full max-h-[100px] min-h-[30px] flex-1 overflow-y-auto rounded-xl bg-gray-100 py-3 px-4 text-xs font-medium outline-none xl:min-h-[40px] xl:text-sm"
                      placeholder="Write your message here..."
                    ></textarea>
                    <button
                      type="button"
                      class="focus:shadow-outline inline-flex items-center justify-center rounded-full bg-primary px-3 py-3 text-sm font-medium tracking-wide text-white transition-colors duration-200 hover:bg-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="h-4 w-4"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
                        />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <!-- ====== Profile Section End -->
            </div>
          </div>
        </main>