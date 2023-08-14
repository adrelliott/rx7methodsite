@aware(['hideFooter'])
<footer class="border-t border-gray-300 bg-gray-200">
    <div class="dark:bg-dark absolute inset-0 pointer-events-none" aria-hidden="true"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 dark:text-slate-300">
        <div class="grid grid-cols-12 gap-4 gap-y-8 sm:gap-8 py-8 md:py-12">
            <div class="col-span-12 lg:col-span-6">
                <div class="mb-2"><a class="inline-block font-bold text-xl" href="/">AstroWind</a></div>
                <div class="text-sm text-muted">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio rerum quaerat vel laboriosam harum, accusantium libero modi, magnam tenetur ad nihil in a molestiae ut ipsa eius, nisi impedit saepe.
                </div>
                @isset($showSocials)
                {{-- Not showing these for now --}}
                <ul class="flex my-4 ">
                    <li>
                        <a class="text-muted dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 inline-flex items-center"
                            aria-label="Twitter" href="#"><svg width="1em" height="1em" viewBox="0 0 24 24"
                                class="w-5 h-5" data-icon="tabler:brand-twitter">
                                <symbol id="ai:tabler:brand-twitter">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M22 4.01c-1 .49-1.98.689-3 .99c-1.121-1.265-2.783-1.335-4.38-.737S11.977 6.323 12 8v1c-3.245.083-6.135-1.395-8-4c0 0-4.182 7.433 4 11c-1.872 1.247-3.739 2.088-6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58-1.04 6.522-3.723 7.651-7.742a13.84 13.84 0 0 0 .497-3.753c0-.249 1.51-2.772 1.818-4.013z">
                                    </path>
                                </symbol>
                                <use xlink:href="#ai:tabler:brand-twitter"></use>
                            </svg></a></li>
                    <li><a class="text-muted dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 inline-flex items-center"
                            aria-label="Instagram" href="#"><svg width="1em" height="1em"
                                viewBox="0 0 24 24" class="w-5 h-5" data-icon="tabler:brand-instagram">
                                <symbol id="ai:tabler:brand-instagram">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                        <path d="M4 8a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H8a4 4 0 0 1-4-4z">
                                        </path>
                                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 1 0-6 0m7.5-4.5v.01"></path>
                                    </g>
                                </symbol>
                                <use xlink:href="#ai:tabler:brand-instagram"></use>
                            </svg></a></li>
                    <li><a class="text-muted dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 inline-flex items-center"
                            aria-label="Facebook" href="#"><svg width="1em" height="1em" viewBox="0 0 24 24"
                                class="w-5 h-5" data-icon="tabler:brand-facebook">
                                <symbol id="ai:tabler:brand-facebook">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M7 10v4h3v7h4v-7h3l1-4h-4V8a1 1 0 0 1 1-1h3V3h-3a5 5 0 0 0-5 5v2H7"></path>
                                </symbol>
                                <use xlink:href="#ai:tabler:brand-facebook"></use>
                            </svg></a></li>
                    <li><a class="text-muted dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 inline-flex items-center"
                            aria-label="RSS" href="/rss.xml"><svg width="1em" height="1em" viewBox="0 0 24 24"
                                class="w-5 h-5" data-icon="tabler:rss">
                                <use xlink:href="#ai:tabler:rss"></use>
                            </svg></a></li>
                    <li><a class="text-muted dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 inline-flex items-center"
                            aria-label="Github" href="https://github.com/onwidget/astrowind"><svg width="1em"
                                height="1em" viewBox="0 0 24 24" class="w-5 h-5" data-icon="tabler:brand-github">
                                <symbol id="ai:tabler:brand-github">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2"
                                        d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2c2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 0 0-1.3-3.2a4.2 4.2 0 0 0-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 0 0-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 0 0-.1 3.2A4.6 4.6 0 0 0 4 9.5c0 4.6 2.7 5.7 5.5 6c-.6.6-.6 1.2-.5 2V21">
                                    </path>
                                </symbol>
                                <use xlink:href="#ai:tabler:brand-github"></use>
                            </svg></a></li>
                    </ul>
                @endisset
            </div>
            @unless($hideFooter)
                <div class="col-span-6 lg:col-span-3 text-right">
                    <div class="dark:text-gray-300 font-medium mb-2">Product</div>
                    <ul class="text-sm">
                        <li class="mb-2"><a
                                class="text-muted hover:text-gray-700 hover:underline dark:text-gray-400 transition duration-150 ease-in-out"
                                href="#">Features</a></li>
                        <li class="mb-2"><a
                                class="text-muted hover:text-gray-700 hover:underline dark:text-gray-400 transition duration-150 ease-in-out"
                                href="#">Security</a></li>
                        <li class="mb-2"><a
                                class="text-muted hover:text-gray-700 hover:underline dark:text-gray-400 transition duration-150 ease-in-out"
                                href="#">Team</a></li>
                        <li class="mb-2"><a
                                class="text-muted hover:text-gray-700 hover:underline dark:text-gray-400 transition duration-150 ease-in-out"
                                href="#">Enterprise</a></li>
                        <li class="mb-2"><a
                                class="text-muted hover:text-gray-700 hover:underline dark:text-gray-400 transition duration-150 ease-in-out"
                                href="#">Customer stories</a></li>
                        <li class="mb-2"><a
                                class="text-muted hover:text-gray-700 hover:underline dark:text-gray-400 transition duration-150 ease-in-out"
                                href="#">Pricing</a></li>
                        <li class="mb-2"><a
                                class="text-muted hover:text-gray-700 hover:underline dark:text-gray-400 transition duration-150 ease-in-out"
                                href="#">Resources</a></li>
                    </ul>
                </div>
                <div class="col-span-6 lg:col-span-3 text-right">
                    <div class="dark:text-gray-300 font-medium mb-2">Platform</div>
                    <ul class="text-sm">
                        <li class="mb-2"><a
                                class="text-muted hover:text-gray-700 hover:underline dark:text-gray-400 transition duration-150 ease-in-out"
                                href="#">Developer API</a></li>
                        <li class="mb-2"><a
                                class="text-muted hover:text-gray-700 hover:underline dark:text-gray-400 transition duration-150 ease-in-out"
                                href="#">Partners</a></li>
                        <li class="mb-2"><a
                                class="text-muted hover:text-gray-700 hover:underline dark:text-gray-400 transition duration-150 ease-in-out"
                                href="#">Atom</a></li>
                        <li class="mb-2"><a
                                class="text-muted hover:text-gray-700 hover:underline dark:text-gray-400 transition duration-150 ease-in-out"
                                href="#">Electron</a></li>
                        <li class="mb-2"><a
                                class="text-muted hover:text-gray-700 hover:underline dark:text-gray-400 transition duration-150 ease-in-out"
                                href="#">AstroWind Desktop</a></li>
                    </ul>
                </div>
            @endunless
        </div>
        <div class="flex flex-row justify-center py-6 md:py-8 mx-auto">
            <div class="text-sm mr-4 text-cenetr">
                <div class="flex justify-center gap-4 text-sm">
                    <a href="/about">About</a>
                    <a href="/about/privacy">Privacy</a>
                    <a href="/about/cookies">Cookies</a>
                    <a href="/contact">Contact</a>
                </div>
            
                <p class="text-xs mt-2 text-center">
                    &copy {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
