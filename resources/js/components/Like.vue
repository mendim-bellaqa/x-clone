// resources/js/components/LikeCount.vue
<template>
    <div class="text-sm">{{ likesCount }} Likes</div>
</template>

<script>
export default {
    props: ['likesCount'],
};
</script>
