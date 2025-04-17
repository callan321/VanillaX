# VanillaX

A minimalist, no-framework PHP & SQLite app inspired by RuneScape's Grand Exchange — for real-world trading.

## Dev Requirements

- PHP 8.x
- Laravel Herd (or any Apache/Nginx server, Dev setup is configured for Herd)
- go-task (optional, but recommended for running commands easily)

## Setup

### Using Go-Task

#### Initialize the database

First, install go-task if you haven't already https://taskfile.dev/installation/.

```bash
task setup    
```

#### Open at http://vanillax.test/

```bash
task dev    
```

### Manual Setup

If you prefer not to use go-task, refer to the [Taskfile.yml](./Taskfile.yml) and run the commands manually in the same order:

1. Initialize the database:
   ```bash
   php database/setup.php
   ```

2. Open your browser and navigate to http://vanillax.test/

## Taskfile Reference

This project uses a [Taskfile.yml](./Taskfile.yml) with the following commands:


