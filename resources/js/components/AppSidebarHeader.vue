<script setup lang="ts">
import Breadcrumbs from '@/components/Breadcrumbs.vue';
import { SidebarTrigger } from '@/components/ui/sidebar';
import type { BreadcrumbItemType } from '@/types';
import NavUser from '@/components/NavUser.vue';
import { Bell } from 'lucide-vue-next';
import { ref } from 'vue';


withDefaults(defineProps<{
    breadcrumbs?: BreadcrumbItemType[];
}>(), {
    breadcrumbs: () => []
});

const notification = ref(false);
const toggleNotification = () => {
    notification.value = !notification.value
}
</script>

<template>
    <header
        class="flex bg-gray-50 z-50 justify-between h-16 shrink-0 cursor-pointer items-center gap-2 border-b border-sidebar-border/70 px-6 transition-[width,height] ease-linear group-has-data-[collapsible=icon]/sidebar-wrapper:h-12 md:px-4">
        <div class="flex items-center gap-2">
            <SidebarTrigger class="-ml-1" />
            <template v-if="breadcrumbs && breadcrumbs.length > 0">
                <Breadcrumbs :breadcrumbs="breadcrumbs" />
            </template>
        </div>
        <div class="flex items-center">
            <div class="mr-5 relative">
                <a class="cursor-pointer" @click="toggleNotification">
                    <Bell class="bg-gray-100 border w-8 h-8 p-1.5 rounded-full" />
                </a>

                <!-- Dropdown menu -->
                <div class="z-50 my-4 w-100 absolute border text-base list-none shadow-lg bg-white divide-y divide-gray-100 rounded-lg right-0"
                    :class="{ 'hidden': !notification }" id="notification_dropdown">
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">notification data</a>
                        </li>
                    </ul>
                </div>
            </div>

            <NavUser />
        </div>
    </header>
</template>
