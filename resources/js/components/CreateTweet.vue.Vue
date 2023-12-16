<!-- CreateTweet.vue -->
<template>
  <div>
    <!-- Your existing form for writing tweet content -->
    <textarea v-model="tweetContent"></textarea>

    <!-- Button to open the image upload section -->
    <button @click="toggleImageUploadSection">Upload Image</button>

    <!-- Conditionally show the ImageUpload component based on a flag -->
    <div v-if="showImageUploadSection">
      <image-upload @image-uploaded="handleImageUploaded"></image-upload>
    </div>

    <button @click="submitTweet">Done</button>
  </div>
</template>

<script>
import ImageUpload from './ImageUpload.vue';

export default {
  components: {
    ImageUpload,
  },
  data() {
    return {
      tweetContent: '',
      uploadedImage: null,
      showImageUploadSection: false,
    };
  },
  methods: {
    toggleImageUploadSection() {
      this.showImageUploadSection = !this.showImageUploadSection;
    },
    handleImageUploaded(image) {
      this.uploadedImage = image;
    },
    submitTweet() {
      // Implement your logic to send both content and image to the server
      // You can use axios to make an API request to your Laravel backend
      // Remember to include the CSRF token in your request
    },
  },
};
</script>
