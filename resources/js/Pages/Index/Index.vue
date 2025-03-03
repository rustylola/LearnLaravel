<template>
    <div>
        Hello!, World! {{ counter }}
        Index Page
    </div>
    <Link href="/show">Show Page</Link>
    <div>
        The message is {{ message }}
    </div>
</template>
 
<script setup>
    import {ref} from 'vue'
    import {Link} from '@inertiajs/vue3'
    const counter = ref(0);
    const props = defineProps({
        message: String
    });
    console.log(props);
    setInterval(() => {
        counter.value++
    }, 1000);
</script>