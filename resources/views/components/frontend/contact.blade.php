<section id="contact" class="section bg-light-primary dark:bg-dark-primary">
    <div class="container mx-auto">
        <div class="flex flex-col items-center text-center">
            <h2 class="section-title">Contact Me</h2>
            <p class="subtitle">
            The company itself is a very successful company. I will escape
                by labor but by the desire of rejecting him from never
            </p>
        </div>
        <div class="flex flex-col md:flex-row md:gap-x-8">
            <div
                class="flex flex-1 flex-col
                        items-start
                        space-y-8
                        mb-12
                        lg:mb-0 lg:pt-2">
                <div class="flex flex-col lg:flex-row gap-x-4">
                    <div
                        class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                          </svg>

                    </div>
                    <div>
                        <h4 class="font-body text-xl mb-1">Have a question?</h4>
                        <p class="text-paragraph mb-1">I am here to help you.</p>
                        <p class="text-accent font-normal">Email me at mannaiabir32@gmail.com</p>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-x-4">
                    <div
                        class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-9 h-9">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>

                    </div>
                    <div>
                        <h4 class="font-body text-xl mb-1">My current location</h4>
                        <p class="text-paragraph mb-1">Tunisia,Siliana,Bouarada.</p>
                        <p class="text-paragraph mb-1">Tunisia,Kef.</p> </br>
                        <p class="text-accent font-normal">Serving clients worldwide.</p>
                    </div>
                </div>
            </div>
            <form x-data="form" @submit.prevent="submitForm" class="space-y-8 w-full max-w-md">
                <div x-show="showMessage"
                    class="p-4 text-sm text-light-tail-100 bg-light-tail-500 dark:bg-dark-navy-100 rounded-lg dark:text-dark-navy-500"
                    role="alert">
                    <div class="max-w-7xl mx-auto">Thank you for contactin me</div>
                </div>
                @csrf
                <div class="flex gap-8">
                    <div>
                        <input class="input" type="text" name="name" x-model="form.name"
                            placeholder="Your Name" />
                        <template x-if="errors.name">
                            <span x-text="errors.name[0]" class="text-sm text-red-400"></span>
                        </template>
                    </div>
                    <div>
                        <input class="input" type="email" name="email" x-model="form.email"
                            placeholder="Your Email" />
                        <template x-if="errors.email">
                            <span x-text="errors.email[0]" class="text-sm text-red-400"></span>
                        </template>
                    </div>
                </div>
                <textarea name="body" x-model="form.body" class="textarea" placeholder="Your message" spellcheck="false"></textarea>
                <template x-if="errors.body">
                    <span x-text="errors.body[0]" class="text-sm text-red-400"></span>
                </template> <button type="submit"
                    class="btn btn-lg bg-accent hover:bg-light-secondary dark:bg-dark-secondary text-black dark:text-white hover:text-light-tail-500 dark:hover:text-dark-navy-100">
                    Send</button>
            </form>
        </div>
    </div>
</section>