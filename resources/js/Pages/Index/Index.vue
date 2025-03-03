<template>
    <Link href="/show">Show Page</Link>
    <div>
        The message is {{ message }}
    </div>
</template>
 
<script setup>
    import { Link } from '@inertiajs/vue3';

    const props = defineProps({
        message: String
    });

</script>
