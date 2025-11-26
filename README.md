# LLU Technical Demo - Drupal 10 Architecture

![Drupal Version](https://img.shields.io/badge/Drupal-10.1+-blue.svg?logo=drupal)
![Environment](https://img.shields.io/badge/Environment-DDEV-orange.svg?logo=docker)
![Status](https://img.shields.io/badge/Status-Active_Development-green.svg)

## 📖 Project Overview
This repository is a technical demo that showcases a containerized Drupal 10 architecture, focusing on custom module development, standard-compliant coding practices, and modern site-building techniques.

**Goal:** Build scalable, maintainable Drupal solutions beyond standard configuration.

## 🚀 Tech Stack
* **CMS:** Drupal 10
* **Language:** PHP 8.1+
* **Local Environment:** DDEV - Docker-based
* **Database:** MariaDB
* **Web Server:** NGINX
* **Package Management:** Composer
* **CLI Tooling:** Drush

## 🛠 Features
* **Containerized Setup:** Run in local environment using DDEV.
* **Custom Module (`llu_features`):** * Drupal Plugin API via custom Blocks.
    * Utilizes dependency injection and services.
    * Adheres to Drupal Coding Standards (PSR-4).
* **Theming:** Olivero.
* **Configuration Management:** Site configuration exported to YAML for deployment consistency.

## 💻 Installation Guide for your Local Machine
To spin up this project locally, ensure you have **Docker Desktop** and **DDEV** installed.

1.  **Clone the repository:**
    ```bash
    git clone [https://github.com/](https://github.com/)[YOUR_USERNAME]/llu-drupal-demo.git
    cd llu-drupal-demo
    ```

2.  **Start the environment:**
    ```bash
    ddev start
    ```

3.  **Install dependencies:**
    ```bash
    ddev composer install
    ```

4.  **Install the site (Fresh Install):**
    ```bash
    ddev drush site:install --account-name=admin --account-pass=admin -y
    ```
    *(Note: If a database dump is provided later, use `ddev import-db` instead)*

5.  **Access the site:**
    ```bash
    ddev launch
    ```

## 📂 Directory Structure
* `/web/modules/custom/`: Custom module logic.
* `/web/themes/custom/`: Custom frontend themes.
* `/config/sync/`: Configuration management YAML files.

## 👤 Author
**[Steven Ray Armenta]** *Aspiring Full Stack Developer for Loma Linda University* https://www.linkedin.com/in/stevenarmenta/
