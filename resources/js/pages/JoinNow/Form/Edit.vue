<script setup lang="ts">
import InputLabel from '@/components/my-components/InputLabel.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, useForm } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Join Form Edit',
        href: '/join/form',
    },
];

const props = defineProps<{
    joinForm: {
         id: number;
        language: string;
        join_form_icon_eng: string;
        join_form_title_eng: string;
        join_form_sub_title_eng: string;
        join_form_cname_label_eng: string;
        join_form_cname_placeholder_eng: string;
        join_form_name_label_eng: string;
        join_form_name_placeholder_eng: string;
        join_form_phone_label_eng: string;
        join_form_phone_placeholder_eng: string;
        join_form_email_label_eng: string;
        join_form_email_placeholder_eng: string;
        join_form_business_label_eng: string;
        join_form_business_placeholder_eng: string;
        join_form_address_label_eng: string;
        join_form_address_placeholder_eng: string;
        join_form_about_us_label_eng: string;
        join_form_about_us_placeholder_eng: string;
        join_form_about_us_menu1_eng: string;
        join_form_about_us_menu2_eng: string;
        join_form_about_us_menu3_eng: string;
        join_form_about_us_menu4_eng: string;
        join_form_about_us_menu5_eng: string;
        join_form_about_us_menu6_eng: string;
        join_form_icon_fr: string;
        join_form_title_fr: string;
        join_form_sub_title_fr: string;
        join_form_cname_label_fr: string;
        join_form_cname_placeholder_fr: string;
        join_form_name_label_fr: string;
        join_form_name_placeholder_fr: string;
        join_form_phone_label_fr: string;
        join_form_phone_placeholder_fr: string;
        join_form_email_label_fr: string;
        join_form_email_placeholder_fr: string;
        join_form_business_label_fr: string;
        join_form_business_placeholder_fr: string;
        join_form_address_label_fr: string;
        join_form_address_placeholder_fr: string;
        join_form_about_us_label_fr: string;
        join_form_about_us_placeholder_fr: string;
        join_form_about_us_menu1_fr: string;
        join_form_about_us_menu2_fr: string;
        join_form_about_us_menu3_fr: string;
        join_form_about_us_menu4_fr: string;
        join_form_about_us_menu5_fr: string;
        join_form_about_us_menu6_fr: string;
    };
}>();


const form = useForm({
    id: props.joinForm.id,
    language: props.joinForm.language,
    join_form_icon_eng: props.joinForm.join_form_icon_eng,
    join_form_title_eng: props.joinForm.join_form_title_eng,
    join_form_sub_title_eng: props.joinForm.join_form_sub_title_eng,
    join_form_cname_label_eng: props.joinForm.join_form_cname_label_eng,
    join_form_cname_placeholder_eng: props.joinForm.join_form_cname_placeholder_eng,
    join_form_name_label_eng: props.joinForm.join_form_name_label_eng,
    join_form_name_placeholder_eng: props.joinForm.join_form_name_placeholder_eng,
    join_form_phone_label_eng: props.joinForm.join_form_phone_label_eng,
    join_form_phone_placeholder_eng: props.joinForm.join_form_phone_placeholder_eng,
    join_form_email_label_eng: props.joinForm.join_form_email_label_eng,
    join_form_email_placeholder_eng: props.joinForm.join_form_email_placeholder_eng,
    join_form_business_label_eng: props.joinForm.join_form_business_label_eng,
    join_form_business_placeholder_eng: props.joinForm.join_form_business_placeholder_eng,
    join_form_address_label_eng: props.joinForm.join_form_address_label_eng,
    join_form_address_placeholder_eng: props.joinForm.join_form_address_placeholder_eng,
    join_form_about_us_label_eng: props.joinForm.join_form_about_us_label_eng,
    join_form_about_us_placeholder_eng: props.joinForm.join_form_about_us_placeholder_eng,
    join_form_about_us_menu1_eng: props.joinForm.join_form_about_us_menu1_eng,
    join_form_about_us_menu2_eng: props.joinForm.join_form_about_us_menu2_eng,
    join_form_about_us_menu3_eng: props.joinForm.join_form_about_us_menu3_eng,
    join_form_about_us_menu4_eng: props.joinForm.join_form_about_us_menu4_eng,
    join_form_about_us_menu5_eng: props.joinForm.join_form_about_us_menu5_eng,
    join_form_about_us_menu6_eng: props.joinForm.join_form_about_us_menu6_eng,
    join_form_icon_fr: props.joinForm.join_form_icon_fr,
    join_form_title_fr: props.joinForm.join_form_title_fr,
    join_form_sub_title_fr: props.joinForm.join_form_sub_title_fr,
    join_form_cname_label_fr: props.joinForm.join_form_cname_label_fr,
    join_form_cname_placeholder_fr: props.joinForm.join_form_cname_placeholder_fr,
    join_form_name_label_fr: props.joinForm.join_form_name_label_fr,
    join_form_name_placeholder_fr: props.joinForm.join_form_name_placeholder_fr,
    join_form_phone_label_fr: props.joinForm.join_form_phone_label_fr,
    join_form_phone_placeholder_fr: props.joinForm.join_form_phone_placeholder_fr,
    join_form_email_label_fr: props.joinForm.join_form_email_label_fr,
    join_form_email_placeholder_fr: props.joinForm.join_form_email_placeholder_fr,
    join_form_business_label_fr: props.joinForm.join_form_business_label_fr,
    join_form_business_placeholder_fr: props.joinForm.join_form_business_placeholder_fr,
    join_form_address_label_fr: props.joinForm.join_form_address_label_fr,
    join_form_address_placeholder_fr: props.joinForm.join_form_address_placeholder_fr,
    join_form_about_us_label_fr: props.joinForm.join_form_about_us_label_fr,
    join_form_about_us_placeholder_fr: props.joinForm.join_form_about_us_placeholder_fr,
    join_form_about_us_menu1_fr: props.joinForm.join_form_about_us_menu1_fr,
    join_form_about_us_menu2_fr: props.joinForm.join_form_about_us_menu2_fr,
    join_form_about_us_menu3_fr: props.joinForm.join_form_about_us_menu3_fr,
    join_form_about_us_menu4_fr: props.joinForm.join_form_about_us_menu4_fr,
    join_form_about_us_menu5_fr: props.joinForm.join_form_about_us_menu5_fr,
    join_form_about_us_menu6_fr: props.joinForm.join_form_about_us_menu6_fr
});


function submit() {
    form.post('/join/form/update/' + props.joinForm.id);
}

</script>

<template>

    <Head title="Join Form Edit" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="pt-10 lg:px-20 px-5">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-medium mb-4">Join Form Edit</h1>
                <Link :href="'/join/form'"><button
                    class="bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">Back</button>
                </Link>
            </div>

            <div class="border border-gray-200 p-7 mt-3 mb-10 shadow rounded">
                <form @submit.prevent="submit">
                    <div>
                        <!-- Language Selection -->
                        <div>
                            <label for="language">Language</label>
                            <select class="border border-gray-300 rounded px-3 py-2.5 w-full mt-1"
                                v-model="form.language">
                                <option value="english">English</option>
                                <option value="france">French</option>
                            </select>
                        </div>

                        <!-- ENGLISH FORM -->
                        <div v-if="form.language === 'english'" class="mt-5 space-y-6">
                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_form_icon_eng" label="Form Icon (English)" v-model="form.join_form_icon_eng" type="text" />
                                <InputLabel forr="join_form_title_eng" label="Title (English)" v-model="form.join_form_title_eng" type="text" />
                                <InputLabel forr="join_form_sub_title_eng" label="Sub Title (English)" v-model="form.join_form_sub_title_eng" type="text" />
                            </div>

                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_form_cname_label_eng" label="Company Name Label (English)" v-model="form.join_form_cname_label_eng" type="text" />
                                <InputLabel forr="join_form_cname_placeholder_eng" label="Company Name Placeholder (English)" v-model="form.join_form_cname_placeholder_eng" type="text" />
                                <InputLabel forr="join_form_name_label_eng" label="Name Label (English)" v-model="form.join_form_name_label_eng" type="text" />
                                <InputLabel forr="join_form_name_placeholder_eng" label="Name Placeholder (English)" v-model="form.join_form_name_placeholder_eng" type="text" />
                            </div>

                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_form_phone_label_eng" label="Phone Label (English)" v-model="form.join_form_phone_label_eng" type="text" />
                                <InputLabel forr="join_form_phone_placeholder_eng" label="Phone Placeholder (English)" v-model="form.join_form_phone_placeholder_eng" type="text" />
                                <InputLabel forr="join_form_email_label_eng" label="Email Label (English)" v-model="form.join_form_email_label_eng" type="text" />
                                <InputLabel forr="join_form_email_placeholder_eng" label="Email Placeholder (English)" v-model="form.join_form_email_placeholder_eng" type="text" />
                            </div>

                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_form_business_label_eng" label="Business Label (English)" v-model="form.join_form_business_label_eng" type="text" />
                                <InputLabel forr="join_form_business_placeholder_eng" label="Business Placeholder (English)" v-model="form.join_form_business_placeholder_eng" type="text" />
                                <InputLabel forr="join_form_address_label_eng" label="Address Label (English)" v-model="form.join_form_address_label_eng" type="text" />
                                <InputLabel forr="join_form_address_placeholder_eng" label="Address Placeholder (English)" v-model="form.join_form_address_placeholder_eng" type="text" />
                            </div>

                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_form_about_us_label_eng" label="About Us Label (English)" v-model="form.join_form_about_us_label_eng" type="text" />
                                <InputLabel forr="join_form_about_us_placeholder_eng" label="About Us Placeholder (English)" v-model="form.join_form_about_us_placeholder_eng" type="text" />
                                <InputLabel forr="join_form_about_us_menu1_eng" label="About Us Menu 1 (English)" v-model="form.join_form_about_us_menu1_eng" type="text" />
                                <InputLabel forr="join_form_about_us_menu2_eng" label="About Us Menu 2 (English)" v-model="form.join_form_about_us_menu2_eng" type="text" />
                                <InputLabel forr="join_form_about_us_menu3_eng" label="About Us Menu 3 (English)" v-model="form.join_form_about_us_menu3_eng" type="text" />
                                <InputLabel forr="join_form_about_us_menu4_eng" label="About Us Menu 4 (English)" v-model="form.join_form_about_us_menu4_eng" type="text" />
                                <InputLabel forr="join_form_about_us_menu5_eng" label="About Us Menu 5 (English)" v-model="form.join_form_about_us_menu5_eng" type="text" />
                                <InputLabel forr="join_form_about_us_menu6_eng" label="About Us Menu 6 (English)" v-model="form.join_form_about_us_menu6_eng" type="text" />
                            </div>
                        </div>

                        <!-- FRENCH FORM -->
                        <div v-if="form.language === 'france'" class="mt-5 space-y-6">
                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_form_icon_fr" label="Form Icon (French)" v-model="form.join_form_icon_fr" type="text" />
                                <InputLabel forr="join_form_title_fr" label="Title (French)" v-model="form.join_form_title_fr" type="text" />
                                <InputLabel forr="join_form_sub_title_fr" label="Sub Title (French)" v-model="form.join_form_sub_title_fr" type="text" />
                            </div>

                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_form_cname_label_fr" label="Company Name Label (French)" v-model="form.join_form_cname_label_fr" type="text" />
                                <InputLabel forr="join_form_cname_placeholder_fr" label="Company Name Placeholder (French)" v-model="form.join_form_cname_placeholder_fr" type="text" />
                                <InputLabel forr="join_form_name_label_fr" label="Name Label (French)" v-model="form.join_form_name_label_fr" type="text" />
                                <InputLabel forr="join_form_name_placeholder_fr" label="Name Placeholder (French)" v-model="form.join_form_name_placeholder_fr" type="text" />
                            </div>

                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_form_phone_label_fr" label="Phone Label (French)" v-model="form.join_form_phone_label_fr" type="text" />
                                <InputLabel forr="join_form_phone_placeholder_fr" label="Phone Placeholder (French)" v-model="form.join_form_phone_placeholder_fr" type="text" />
                                <InputLabel forr="join_form_email_label_fr" label="Email Label (French)" v-model="form.join_form_email_label_fr" type="text" />
                                <InputLabel forr="join_form_email_placeholder_fr" label="Email Placeholder (French)" v-model="form.join_form_email_placeholder_fr" type="text" />
                            </div>

                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_form_business_label_fr" label="Business Label (French)" v-model="form.join_form_business_label_fr" type="text" />
                                <InputLabel forr="join_form_business_placeholder_fr" label="Business Placeholder (French)" v-model="form.join_form_business_placeholder_fr" type="text" />
                                <InputLabel forr="join_form_address_label_fr" label="Address Label (French)" v-model="form.join_form_address_label_fr" type="text" />
                                <InputLabel forr="join_form_address_placeholder_fr" label="Address Placeholder (French)" v-model="form.join_form_address_placeholder_fr" type="text" />
                            </div>

                            <div class="lg:grid grid-cols-2 gap-5">
                                <InputLabel forr="join_form_about_us_label_fr" label="About Us Label (French)" v-model="form.join_form_about_us_label_fr" type="text" />
                                <InputLabel forr="join_form_about_us_placeholder_fr" label="About Us Placeholder (French)" v-model="form.join_form_about_us_placeholder_fr" type="text" />
                                <InputLabel forr="join_form_about_us_menu1_fr" label="About Us Menu 1 (French)" v-model="form.join_form_about_us_menu1_fr" type="text" />
                                <InputLabel forr="join_form_about_us_menu2_fr" label="About Us Menu 2 (French)" v-model="form.join_form_about_us_menu2_fr" type="text" />
                                <InputLabel forr="join_form_about_us_menu3_fr" label="About Us Menu 3 (French)" v-model="form.join_form_about_us_menu3_fr" type="text" />
                                <InputLabel forr="join_form_about_us_menu4_fr" label="About Us Menu 4 (French)" v-model="form.join_form_about_us_menu4_fr" type="text" />
                                <InputLabel forr="join_form_about_us_menu5_fr" label="About Us Menu 5 (French)" v-model="form.join_form_about_us_menu5_fr" type="text" />
                                <InputLabel forr="join_form_about_us_menu6_fr" label="About Us Menu 6 (French)" v-model="form.join_form_about_us_menu6_fr" type="text" />
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="mt-5 bg-[#74B53B] text-white font-bold py-2 px-6 cursor-pointer rounded hover:bg-[#344248] duration-300">
                            Update
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </AppLayout>
</template>

