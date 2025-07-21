<script setup lang="ts">
import { defineProps } from 'vue';

interface TableData {
    [key: string]: any;
    id: number;
    contact_id?: number | string;
}

interface TableColumn {
    key: string;
    label: string;
    icon?: any;
    sortable?: boolean;
}

defineProps<{
    plans: TableData[];
    columns: TableColumn[];
    title?: string;
}>();

</script>

<template>
    <div class="">
        <div class="lg:flex md:flex items-center gap-2 justify-between mb-2">
            <h2 class="text-2xl font-semibold mb-4">{{ title }}</h2>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border">
                <thead class="bg-[#74B53B]/20 text-sm text-gray-600">
                    <tr>
                        <th v-for="col in columns" :key="col.key" class="px-4 py-2 text-left cursor-pointer select-none">
                            {{ col.label }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in plans" :key="item.id">
                        <td v-for="col in columns" :key="col.key"
                            class="border text-[13px] md:text-[15px] lg:[16px] border-gray-200 px-4 py-2">
                            <slot :name="col.key" :item="item">
                                {{ item[col.key] ?? 'N/A' }}
                            </slot>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
