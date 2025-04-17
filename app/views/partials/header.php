<header class="site-header">
    <div class="header-container">
        <nav>
            <a href="/">Home</a>
            <a href="/users">Users</a>
        </nav>
        <nav>
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        </nav>
    </div>
</header>

<style>
    .site-header {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .header-container {
        max-width: 1080px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 2rem;
        border-bottom: 1px solid #ddd;
    }

    .site-header nav {
        display: flex;
        column-gap: 2rem;
    }

    .site-header nav a {
        text-decoration: none;
        color: #333;
        font-weight: 500;
        font-size: 1rem;
    }

    .site-header nav a:hover {
        color: #0ea5e9;
    }
</style>