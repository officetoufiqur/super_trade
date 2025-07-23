<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Service Card Create',
        href: '/service/card',
    },
];

const props = defineProps<{
    serviceCard: {
        id: number;
        language: string;
        section_card_icon: string;
        section_card_title_eng: string;
        section_card_sub_title_eng: string;
        section_card_title_fr: string;
        section_card_sub_title_fr: string;
    };
}>();

const form = useForm({
    id: props.serviceCard.id,
    language: props.serviceCard.language,
    section_card_icon: props.serviceCard.section_card_icon,
    section_card_title_eng: props.serviceCard.section_card_title_eng,
    section_card_sub_title_eng: props.serviceCard.section_card_sub_title_eng,
    section_card_title_fr: props.serviceCard.section_card_title_fr,
    section_card_sub_title_fr: props.serviceCard.section_card_sub_title_fr,
});

const submit = () => {
    form.post('/service/card/update/' + props.serviceCard.id);
};

</script>

<template>

    <Head title="Service Card Create" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Service Card Create</h1>
                <Link :href="'/service/card'"><button
                    class="bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Back</button>
                </Link>
            </div>

            <div class="border border-gray-200 p-10 mt-3 shadow rounded">
                <form @submit.prevent="submit">
                    <div class="">
                        <div>
                            <label for="">Language</label>
                            <select class="border border-gray-300 rounded px-3 py-2.5 w-full mt-1"
                                v-model="form.language">
                                <option value="english">English</option>
                                <option value="france">French</option>
                            </select>
                        </div>
                    </div>

                    <div v-if="form.language === 'english'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="section_card_icon" :label="'Card Icon'" v-model="form.section_card_icon"
                            type="text" :placeholder="'Enter your card icon url'" />
                        <InputLabel forr="section_card_title_eng" :label="'Card Title English'"
                            v-model="form.section_card_title_eng" type="text"
                            :placeholder="'Enter your title english'" />
                        <InputLabel forr="section_card_sub_title_eng" :label="'Card Sub Title English'"
                            v-model="form.section_card_sub_title_eng" type="text"
                            :placeholder="'Enter your card sub title english'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="section_card_icon" :label="'Card Icon'" v-model="form.section_card_icon"
                            type="text" :placeholder="'Enter your card icon url'" />
                        <InputLabel forr="section_card_title_fr" :label="'Card Title France'"
                            v-model="form.section_card_title_fr" type="text" :placeholder="'Enter your title france'" />
                        <InputLabel forr="section_card_sub_title_fr" :label="'Card Sub Title France'"
                            v-model="form.section_card_sub_title_fr" type="text"
                            :placeholder="'Enter your card sub title france'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
