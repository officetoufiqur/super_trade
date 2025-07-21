<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <!-- 🔹 Background Video -->
    <video autoplay muted loop playsinline class="fixed top-0 left-0 z-0 h-full w-full object-cover">
        <source src="assets/video/background.mp4" type="video/mp4" />
    </video>

    <!-- 🔹 Black Overlay -->
    <div class="fixed top-0 left-0 z-10 h-full w-full bg-black/40"></div>

    <!-- 🔹 Overlay Content -->
    <div class="relative z-20 min-h-[50vh]">
        <!-- 🔹 Navbar Fixed to Top -->
        <header class="mb-6 w-full text-sm not-has-[nav]:hidden max-w-7xl mx-auto mt-7">
            <nav class="flex items-center justify-end gap-4">
                <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                    class="inline-block rounded-sm border border-[#74B53B] px-5 py-1.5 text-sm leading-normal text-white hover:border-[#344248]">
                    Dashboard
                </Link>
                <template v-else>
                    <Link :href="route('login')"
                        class="inline-block rounded-sm text-lg border border-transparent px-5 py-1.5 leading-normal text-white hover:border-[#74B53B]">
                        Log in
                    </Link>
                </template>
            </nav>
        </header>

        <!-- 🔹 Centered Main Content -->
        <div class="flex min-h-[80vh] items-center justify-center px-6">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-white drop-shadow-lg">Welcome to our website.</h1>
                <p class="mt-2 text-white">Enjoy your experience</p>
            </div>
        </div>

    </div>
</template>
