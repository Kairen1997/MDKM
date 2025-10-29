// Sidebar functionality for MDKM Website

// Sidebar functionality
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.querySelector('.sidebar-overlay');
    const mainContent = document.querySelector('.main-content');
    
    sidebar.classList.toggle('open');
    overlay.classList.toggle('active');
    
    // On desktop, adjust main content margin
    if (window.innerWidth > 768) {
        mainContent.classList.toggle('with-sidebar');
    }
}

function closeSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.querySelector('.sidebar-overlay');
    const mainContent = document.querySelector('.main-content');
    
    sidebar.classList.remove('open');
    overlay.classList.remove('active');
    mainContent.classList.remove('with-sidebar');
}

// Submenu toggle functionality
function toggleSubmenu(element) {
    const submenuItem = element.closest('.has-submenu');
    const isOpen = submenuItem.classList.contains('open');
    
    // Close all other submenus
    document.querySelectorAll('.has-submenu').forEach(item => {
        item.classList.remove('open');
    });
    
    // Toggle current submenu
    if (!isOpen) {
        submenuItem.classList.add('open');
    }
}

// Close sidebar when clicking on sidebar links
document.addEventListener('DOMContentLoaded', function() {
    // Handle submenu toggle clicks
    document.querySelectorAll('.submenu-toggle').forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            toggleSubmenu(this);
        });
    });
    
    // Handle regular menu link clicks
    document.querySelectorAll('.sidebar-menu a:not(.submenu-toggle)').forEach(link => {
        link.addEventListener('click', function() {
            // Remove active class from all links
            document.querySelectorAll('.sidebar-menu a').forEach(a => a.classList.remove('active'));
            // Add active class to clicked link
            this.classList.add('active');
            
            // Close sidebar on mobile
            if (window.innerWidth <= 768) {
                closeSidebar();
            }
        });
    });

    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(e) {
        const sidebar = document.getElementById('sidebar');
        const toggle = document.querySelector('.sidebar-toggle');
        
        if (window.innerWidth <= 768 && 
            !sidebar.contains(e.target) && 
            !toggle.contains(e.target) && 
            sidebar.classList.contains('open')) {
            closeSidebar();
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.querySelector('.main-content');
        
        if (window.innerWidth <= 768) {
            mainContent.classList.remove('with-sidebar');
        } else if (sidebar.classList.contains('open')) {
            mainContent.classList.add('with-sidebar');
        }
    });
});
