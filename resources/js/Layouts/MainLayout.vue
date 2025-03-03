<template>
    <Link href="/">Main Page</Link>
    <Link href="/show">Show Page</Link>
    <div>
        Timer: {{ counter }}
    </div>
    <slot></slot>
</template>

<script setup>
    import { ref } from 'vue';
    import { Link } from '@inertiajs/vue3'
    
    const counter = ref(0);
    
    setInterval(() => {
        counter.value++
    }, 1000);
    
</script>