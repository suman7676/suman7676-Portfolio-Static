<template>
    <section class="relative overflow-hidden">

        <div class="relative bg-gray-50 pt-12 lg:pt-20 pb-12 md:pb-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full lg:w-1/2 px-4 mb-12 md:mb-20 lg:mb-0 flex items-center">
                        <div class="w-full text-center lg:text-left">
                            <div class="max-w-md mx-auto lg:mx-0">
                                <h2 class="mb-3 text-3xl lg:text-3xl font-bold font-heading">
                                    <span>Hi I Am SUMAN AHAMMED </span>
                                    <span class=" text-4xl text-green-600"><br>Full Stack Developer</span>
                                </h2>
                            </div>
                            <div class="max-w-sm mx-auto lg:mx-0">
                                <p class="mb-6 text-gray-400 leading-loose">Hi I'm a full-stack developer with the love of a UI/UX design. Listed skills include all things LARAVEL FRAMEWORK, JavaScript, such as  Vue.js, and  as well as UI/UX design .
                                </p>
                                <div><Link class="inline-block mb-3 lg:mb-0 lg:mr-3 w-full lg:w-auto py-2 px-6 leading-loose bg-green-600 hover:bg-green-700 text-white font-semibold rounded-l-xl rounded-t-xl transition duration-200" href="/Contact">Get Started</Link>
                                    <Link class="inline-block w-full lg:w-auto py-2 px-6 leading-loose font-semibold bg-white hover:bg-gray-50 rounded-l-xl rounded-t-xl transition duration-200" href="/Resume">MY Resume</Link></div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 px-4 flex items-center justify-center">
                        <div class="relative" style="z-index: 0;">

                            <img class="ring-offset-4 ring-8  h-[428px] w-[428px] max-w-lg object-cover rounded-full shadow-gray-500/20 border-solid border-2  hover:border-green-500" src="/resources/atis-assets/elements/sumon pic.jpeg" alt="">

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

</template>

<script setup>
import {Link} from "@inertiajs/vue3";
</script>

<style scoped>

</style>
