document.addEventListener('DOMContentLoaded', function () {
    const socialLinks = document.querySelectorAll('#social a');
    
    socialLinks.forEach(link => {
        link.setAttribute('target', '_blank');
    });
});