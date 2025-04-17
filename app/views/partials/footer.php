<footer class="site-footer">
    <div class="footer-container">
        <p>&copy; <?= date('Y') ?> VanillaX</p>
        <a href="https://github.com/yourusername/vanillax" target="_blank" rel="noopener noreferrer">
            GitHub
        </a>
    </div>
</footer>

<style>
    .site-footer {
        display: flex;
        justify-content: center;
        padding-bottom: 2rem;
        padding-top: 2rem;
    }

    .footer-container {
        max-width: 1080px;
        width: 100%;
        border-top: 1px solid #ddd;
        padding-top: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .footer-container p {
        margin: 0;
        font-size: 0.9rem;
        color: #555;
    }

    .footer-container a {
        text-decoration: none;
        font-size: 0.9rem;
        color: #333;
    }

    .footer-container a:hover {
        color: #0ea5e9;
    }
</style>