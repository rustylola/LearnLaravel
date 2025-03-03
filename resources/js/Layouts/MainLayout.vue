<template>
    <Link href="/">Main Page</Link>
    <Link href="/show">Show Page</Link>
    <div>
        Timer: {{ counter }}
    </div>
    <slot></slot>
</template>

<script setup>

    // Additional Comment: slot layout sample

    import { ref } from 'vue';
    import { Link } from '@inertiajs/vue3'
    
    // Reactive data ref()
    const counter = ref(0);
    const props = defineProps({
        message: String
    });
    console.log(props);
    setInterval(() => {
        counter.value++
    }, 1000);
    
</script>