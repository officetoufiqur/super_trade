<script setup lang="ts">
import NavMain from '@/components/NavMain.vue';
import { Sidebar, SidebarContent, SidebarHeader, SidebarMenu, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavItem } from '@/types';
import { Link } from '@inertiajs/vue3';
import { HouseIcon, LayoutGrid } from 'lucide-vue-next';

const mainNavItems: NavItem[] = [
  {
    title: 'Dashboard',
    href: '/dashboard',
    icon: LayoutGrid,
  },
  {
    title: 'Home',
    icon: HouseIcon,
    subMenu: [
      {
        title: 'Banner',
        href: '/banner',
      },
    ]
  }
];

</script>

<template>
    <Sidebar collapsible="icon" variant="inset">
        <div class="mt-5">
            <SidebarHeader>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <Link :href="route('dashboard')">
                        <div class="flex">
                            <!-- <div class="flex ml-3 aspect-square size-10 items-center justify-center rounded-md">
                                <img class="w-14" src="/assets/img/icon.png" alt="icon">
                            </div> -->
                            <div class="ml-1 grid flex-1 text-left text-sm">
                                <img class="w-40" src="/assets/img/logo.webp" alt="">
                            </div>
                        </div>
                        </Link>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarHeader>
        </div>

        <SidebarContent>
            <NavMain :items="mainNavItems" />
        </SidebarContent>
    </Sidebar>
    <slot />
</template>