<template>
          <div>
            <label for="media" class="group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-blue-300 cursor-pointer">
              <svg class="h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
              <input type="file" id="media" name="media" class="hidden" accept="image/*,video/*" @change="handleFileChange">
            </label>
          </div>
        </template>
        
        <script>
        export default {
          methods: {
            handleFileChange(event) {
              // Handle file change logic here
              const file = event.target.files[0];
              console.log('Selected File:', file);
        
              // You can implement further logic, like uploading the file to the server
            }
          }
        };
        </script>
        
        <style scoped>
        /* Add any scoped styles if needed */
        </style>
        