<template>

    <div class="bg-gray-100">
        <div class="container mx-auto py-8">
            <div class="grid grid-cols-4 sm:grid-cols-12 gap-6 px-4">
                <div class="col-span-4 sm:col-span-3">
                    <div class="bg-white shadow rounded-lg p-6">
                        <div class=" r flex flex-col items-center">
                            <img class="  rounded-full" src="/resources/atis-assets/elements/sumon pic.jpeg">
                            </img>
                            <h1 class="text-xl font-bold">Full Stack Developer</h1>

                            <div class="mt-6 flex flex-wrap gap-4 justify-center">
                                <Link href="/Contact" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">contact</Link>
                                <a href="/Download" class="bg-blue-500 hover:bg-blue-400 text-white py-2 px-4 rounded">Download Resume</a>
                            </div>
                        </div>
                        <hr class="my-6 border-t border-gray-300">
                        <div class="flex flex-col">
                            <span class="text-xl text-red-700 uppercase font-bold tracking-wider mb-2">Skills</span>
                            <ul>
                                <li class="mb-2">Laravel</li>
                                <li class="mb-2">Php</li>
                                <li class="mb-2">JavaScript</li>
                                <li class="mb-2">Vue.js</li>
                                <li class="mb-2">HTML/CSS</li>
                                <li class="mb-2">Tailwind Css</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-span-4 sm:col-span-9">
                    <div class="bg-white shadow rounded-lg p-6">
                        <h2 class="text-2xl text-blue-700 font-bold mb-4">About Me</h2>
                        <p class="text-gray-700">Hi I'm a full-stack developer with the love of a UI/UX design.
                            Listed skills include all things LARAVEL FRAMEWORK, JavaScript, such as  Vue.js, and
                            as well as UI/UX design.
                            Sometimes simple is best, and the slick black branding, typography,
                            and copy show off personality as well as skills.
                            This online portfolio is a good example of an SPA, where clicking a menu
                            item scrolls you to the relevant section.
                        </p>




                    </div>


                    <h2 class="text-2xl text-blue-700 font-bold mt-6 mb-4">Experience</h2>
                    <div class="mb-6">
                        <div class="flex justify-between flex-wrap gap-2 w-full">
                            <span class="text-red-700 font-bold">Front-End Developer</span>
                            <p>
                                <span class="text-gray-700 mr-2">simpliLearn Company</span>
                                <span class="text-gray-700">(2017 - 2019)</span>
                            </p>
                        </div>
                        <p class="mt-2">
                            I'm build the front-end portion of websites and web applications—the part users see and interact with. I create websites and applications using web languages such as HTML, CSS, and JavaScript that allow users to access and interact with the site or app.
                        </p>
                    </div>
                    <div class="mb-6">
                        <div class="flex justify-between flex-wrap gap-2 w-full">
                            <span class="text-red-700 font-bold">Back-End Developer</span>
                            <p>
                                <span class="text-gray-700 mr-2">Workable Company</span>
                                <span class="text-gray-700">(2019 - 2022)</span>
                            </p>
                        </div>
                        <p class="mt-2">

                            My role write code and tests, build prototypes, resolve issues, and profile and analyze bottlenecks
                            Design robust APIs to support mobile and desktop clients
                            Manage and optimize scalable distributed systems in the cloud
                            Optimize web applications for performance and scalability
                            Develop automated tests to ensure business needs are met, and allow for regression testing.

                        </p>
                    </div>
                    <div class="mb-6">
                        <div class="flex justify-between flex-wrap gap-2 w-full">
                            <span class="text-red-700 font-bold">Full Stack Developer</span>
                            <p>
                                <span class="text-gray-700 mr-2">Indeed Company</span>
                                <span class="text-gray-700">(2023 - 2024)</span>
                            </p>
                        </div>
                        <p class="mt-2">
                            Managing the complete software development process from conception to deployment
                            Maintaining and upgrading the software following deployment
                            Managing the end-to-end life cycle for the production of software and applications
                            Overseeing and guiding the analyzing, writing, building, and deployment of software
                            Overseeing the automated testing and providing feedback to management during the development process
                            Modifying and testing changes to previously developed programs.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
















</template>

<script setup>
import {Link} from "@inertiajs/vue3";
</script>

<style scoped>

</style>
