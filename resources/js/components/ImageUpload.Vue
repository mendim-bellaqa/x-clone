<!-- ImageUpload.vue -->
<template>
          <div>
            <input type="file" @change="handleFileUpload">
            <button @click="uploadImage">Upload</button>
            <div v-if="previewImage">
              <img :src="previewImage" alt="Image Preview">
            </div>
          </div>
        </template>
        
        <script>
        export default {
          data() {
            return {
              selectedFile: null,
              previewImage: null,
            };
          },
          methods: {
            handleFileUpload(event) {
              this.selectedFile = event.target.files[0];
              this.previewImage = URL.createObjectURL(this.selectedFile);
            },
            uploadImage() {
              // Implement your upload logic here
              // You may use axios or any other method to send the file to the server
              // After successful upload, you can emit an event to notify the parent component
              this.$emit('image-uploaded', this.selectedFile);
            },
          },
        };
        </script>
        