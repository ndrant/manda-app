<style>
body {
    background-color: #f4f4f4;
}
</style>

<script setup>
import { Head, Link } from "@inertiajs/vue3";

const props = defineProps({
    auth: Object,
});
</script>

<template>
    <Head title="Home" />

    <div class="flex flex-col justify-center items-center">
        <div class="w-48 my-12">
            <img
                src="https://dadaku.info/assets/img/dada-hitam.png"
                alt="logo"
            />
        </div>
        <div class="grid grid-cols-3 justify-items-center w-[310px]">
            <template
                v-for="menu in $page.props.auth.user.menus"
                :key="menu.id_menu"
            >
                <div
                    class="relative flex justify-center w-full"
                    v-if="menu.jenis_menu === 'main'"
                >
                    <div class="relative w-[72px] h-[103.5px]">
                        <Link
                            :href="route(menu.link_url)"
                            class="box-2 w-[72px] h-[72px] absolute top-0 flex items-center justify-center text-3xl text-[#75838b] before:bg-gradient-to-b before:from-[#cdcdcd] before:to-transparent before:rotate-45 before:w-[72px] before:h-[90px] before:absolute before:top-[25px] before:right-[34px] before:-z-50"
                        >
                            <i :class="`bi bi-${menu.icon}`"></i>
                        </Link>
                    </div>
                    <span
                        class="z-50 absolute font-segoe text-[#75838b] text-[10px] bottom-[16px] uppercase"
                        v-html="menu.nama_menu"
                    ></span>
                </div>
            </template>
            <div class="relative flex justify-center w-full">
                <div class="relative w-[72px] h-[103.5px]">
                    <Link
                        :href="route('logout')"
                        class="box-2 w-[72px] h-[72px] absolute top-0 flex items-center justify-center text-3xl text-[#75838b] before:bg-gradient-to-b before:from-[#cdcdcd] before:to-transparent before:rotate-45 before:w-[72px] before:h-[90px] before:absolute before:top-[25px] before:right-[34px] before:-z-50"
                        method="post"
                        as="button"
                    >
                        <i class="bi bi-arrow-bar-right"></i>
                    </Link>
                </div>
                <span
                    class="z-50 absolute font-segoe text-[#75838b] text-[10px] bottom-[16px] uppercase"
                    >Logout</span
                >
            </div>
        </div>
        <div class="my-6">
            <span class="font-segoe text-[#75838b]"
                >EVERYTHING IS POSSIBLE</span
            >
        </div>
    </div>
</template>
