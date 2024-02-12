document.addEventListener('DOMContentLoaded', function () {
    const socialLinks = document.querySelectorAll('#social a');
    
    socialLinks.forEach(link => {
        link.setAttribute('target', '_blank');
    });
});

  // Function to increment the visitor count
  function incrementCounter() {
    // Retrieve current count from localStorage
    let count = localStorage.getItem('visitorCount');
    // Convert count to number (or initialize as 0 if null)
    count = parseInt(count) || 0;
    // Increment count
    count++;
    // Update localStorage with new count
    localStorage.setItem('visitorCount', count);
    // Update counter display
    document.getElementById('counter').textContent = count;
  }

  // When the page loads, increment the counter
  window.addEventListener('load', incrementCounter);

