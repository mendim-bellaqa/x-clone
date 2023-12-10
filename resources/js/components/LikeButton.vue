// resources/js/components/LikeButton.vue
<template>
    <div @click="toggleLike" class="cursor-pointer">
        <svg :class="{ 'text-red-500': liked }" class="h-6 w-6" fill="currentColor">
            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
        </svg>
    </div>
</template>

<script>
export default {
    data() {
        return {
            liked: false,
        };
    },
    methods: {
        toggleLike() {
            if (!this.liked) {
                // Perform a request to "like" the tweet
                // You can use Axios or another library to make the request.
                // For simplicity, we'll just toggle the like state.    
                this.liked = !this.liked;
            } else {
                // Handle "unliking" here
                this.liked = !this.liked;
            }
        },
    },
};
</script>
