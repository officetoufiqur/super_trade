<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Service Choose Edit',
        href: '/service/trading',
    },
];

const props = defineProps<{
    serviceChoose: {
        id: number;
        language: string;
        service_choose_card_icon: string;
        service_choose_card_title_eng: string;
        service_choose_card_sub_title_eng: string;
        service_choose_card_title_fr: string;
        service_choose_card_sub_title_fr: string;
    };
}>();

const form = useForm({
    id: props.serviceChoose.id,
    language: props.serviceChoose.language,
    service_choose_card_icon: props.serviceChoose.service_choose_card_icon,
    service_choose_card_title_eng: props.serviceChoose.service_choose_card_title_eng,
    service_choose_card_sub_title_eng: props.serviceChoose.service_choose_card_sub_title_eng,
    service_choose_card_title_fr: props.serviceChoose.service_choose_card_title_fr,
    service_choose_card_sub_title_fr: props.serviceChoose.service_choose_card_sub_title_fr,
});

const submit = () => {
    form.post('/service/choose/update/' + props.serviceChoose.id);
};

</script>

<template>

    <Head title="Service Choose Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Service Choose Edit</h1>
                <Link :href="'/service/choose'"><button
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
                        <InputLabel forr="service_choose_card_icon" :label="'Choose Card Icon English'" v-model="form.service_choose_card_icon"
                            type="text" :placeholder="'Enter your card icon'" />
                        <InputLabel forr="service_choose_card_title_eng" :label="'Choose Card Title English'"
                            v-model="form.service_choose_card_title_eng" type="text"
                            :placeholder="'Enter your title english'" />
                        <InputLabel forr="service_choose_card_sub_title_eng" :label="'Choose Card Sub Title English'"
                            v-model="form.service_choose_card_sub_title_eng" type="text"
                            :placeholder="'Enter your card sub title english'" />
                    </div>

                    <div v-if="form.language === 'france'" class="lg:grid grid-cols-2 mt-5 gap-5">
                        <InputLabel forr="service_choose_card_icon" :label="'Choose Card Icon French'" v-model="form.service_choose_card_icon"
                            type="text" :placeholder="'Enter your card icon'" />
                        <InputLabel forr="service_choose_card_title_fr" :label="'Choose Card Title French'"
                            v-model="form.service_choose_card_title_fr" type="text"
                            :placeholder="'Enter your title french'" />
                        <InputLabel forr="service_choose_card_sub_title_fr" :label="'Choose Card Sub Title French'"
                            v-model="form.service_choose_card_sub_title_fr" type="text"
                            :placeholder="'Enter your card sub title french'" />
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Update</button>
                </form>
            </div>

        </div>
    </AppLayout>
</template>
