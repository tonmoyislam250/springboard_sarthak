<footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <h2>Top <br>OutSourcing <br>Partners</h2>
            <div class="social-icons">
                <a href="https://www.facebook.com/RickAstley/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://x.com/elonmusk" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/officialrickastley/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-section">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About us</a></li>
                <li>
                    <a href="javascript:void(0);" class="services-toggle">Services</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/services/web-development') }}">Web Development</a></li>
                        <li><a href="{{ url('/services/mobile-apps') }}">Mobile Apps</a></li>
                        <li><a href="{{ url('/services/digital-marketing') }}">Digital Marketing</a></li>
                        <li><a href="{{ url('/services/cloud-solutions') }}">Cloud Solutions</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/solutions') }}">Solutions</a></li>
                <li><a href="{{ url('/industries') }}">Industries</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact</h3>
            <p>Address: 123 Top Solutions Drive, Innovation City, USA</p>
            <p>Phone: +1-800-123-4567</p>
            <p>Email: <a href="mailto:info@Topoutsourcingpartners.com">info@Topoutsourcingpartners.com</a></p>
            <a href="{{ url('/contact') }}" class="footer-button">Get in touch</a>
        </div>
    </div>
</footer>

<style>
/* Style for the dropdown menu */
.footer-section ul .dropdown-menu {
    display: none; /* Hide dropdown by default */
    position: absolute;
    background-color: #fff;
    list-style: none;
    padding: 10px;
    margin: 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    z-index: 1000;
}

.footer-section ul li:hover .dropdown-menu {
    display: block; /* Show dropdown on hover */
}

.footer-section ul .dropdown-menu li {
    margin: 5px 0;
}

.footer-section ul .dropdown-menu li a {
    color: #333;
    text-decoration: none;
    padding: 5px 10px;
    display: block;
}

.footer-section ul .dropdown-menu li a:hover {
    background-color: #f0f0f0;
    color: #000;
}
</style>

<script>
    // Toggle dropdown menu on click
    document.addEventListener('DOMContentLoaded', function () {
        const servicesToggle = document.querySelector('.services-toggle');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        servicesToggle.addEventListener('click', function (e) {
            e.preventDefault();
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });
    });
</script>
