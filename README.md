# Network Marketing & MLM Platform

A robust, enterprise-grade Multi-Level Marketing (MLM) platform built on top of the **Laravel** framework. This system handles user registration, downline tree structures (Binary/Matrix/Unilevel), commission calculations, and real-time genealogy visualizations.

---

## ⚡ Quick Start

Follow these steps to set up the application locally or on a staging server.

### 1. Prerequisites
Ensure your system meets the following requirements:
* **PHP** 8.2 or higher
* **Composer** 2.x
* **MySQL** 8.0+ or **PostgreSQL** 14+
* **Redis** (Highly recommended for high-volume commission queues)
* **Node.js & NPM** (For frontend assets and genealogy graphs)

### 2. Installation
Clone the repository and install the project dependencies:

```bash
# Clone the repository
git clone https://github.com
cd mlm-platform

# Install PHP dependencies
composer install

# Install and build frontend assets
npm install
npm run build
```

### 3. Environment Configuration
Copy the sample environment file and generate your application key:

```bash
cp .env.example .env
php artisan key:generate
```

Open the `.env` file and configure your database, mail server, and queue drivers:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mlm_db
DB_USERNAME=root
DB_PASSWORD=secret

QUEUE_CONNECTION=redis
```

### 4. Database & Tree Initialization
Run the database migrations and seeders to establish core configurations, roles, and the root/genesis member node:

```bash
# Run migrations and seed database
php artisan migrate --seed
```

---

## 🛠️ Key Artisan Commands

This application provides specialized custom Artisan commands to manage network calculations and tree auditing.

### Commission Processing
To calculate downline commissions, binary matching bonuses, or matrix pool payouts:
```bash
# Process daily/weekly matching bonuses
php artisan mlm:process-commissions --period=daily
```

### Tree Verification
Audit the nested set or adjacency list model integrity to ensure there are no orphaned nodes or loops in the network:
```bash
# Verify downline tree integrity
php artisan mlm:verify-tree
```

---

## ⚙️ Queue Worker Management

Calculating payouts across deep multi-level networks can be resource-intensive. **Never** process calculations synchronously on production. 

Run a dedicated worker to handle commission distribution, spillover assignments, and user registration webhooks:

```bash
php artisan queue:work --queue=commissions,default
```

In a production environment, use a process manager like **Supervisor** to ensure the queue worker stays running continuously.

---

## 🔒 Safety & Compliance Notice

When deploying Network Marketing or MLM platforms, ensure your structural layout, compensation plans, and retail product associations strictly adhere to the financial and consumer protection regulations of your target operating jurisdictions. 
