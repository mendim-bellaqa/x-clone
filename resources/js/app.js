// Function to open the popup
function openPopup() {
          var popup = document.getElementById("popup");
          popup.style.display = "block";
      }
      
      // Function to close the popup
      function closePopup() {
          var popup = document.getElementById("popup");
          popup.style.display = "none";
      }
      
      // Add event listeners to the edit and delete buttons
      document.getElementById("editButton").addEventListener("click", function() {
          // Handle the edit button click
          // You can implement your edit logic here
          closePopup();
      });
      
      document.getElementById("deleteButton").addEventListener("click", function() {
          // Handle the delete button click
          // You can implement your delete logic here
          closePopup();
      });
      
      // Close the popup if the user clicks outside of it
      window.onclick = function(event) {
          var popup = document.getElementById("popup");
          if (event.target != popup) {
              popup.style.display = "none";
          }
      }
      