### SETUP.md

## Open House Management Platform Setup Guide

This document provides step-by-step instructions for **setting up and using** the Open House Management Platform. Follow these guidelines to ensure a smooth installation process.

### Table of Contents

1. [Prerequisites](#prerequisites)
2. [Installation](#installation)
3. [User Account Creation](#user-account-creation)
4. [Project Assignment and Evaluation](#project-assignment-and-evaluation)
5. [Platform Efficiency and Assessment](#platform-efficiency-and-assessment)

---

### 1. Prerequisites

Before proceeding with the installation, make sure you have the following prerequisites installed:

- PHP (Recommended version: 7.4 or higher)
- Composer (Dependency manager for PHP)
- MySQL (or any other supported database)
- Node.js and npm (for frontend assets)

### 2. Installation

1. Clone the GitHub repository:

    ```bash
    git clone https://github.com/Me-AU/open-house-management.git
    cd open-house-management
    ```

2. Install PHP dependencies using Composer:

    ```bash
    composer install
    ```

3. Install frontend dependencies using npm:

    ```bash
    npm install
    ```

4. Create a copy of the `.env.example` file and rename it to `.env`. Update the database configuration and generate the application key:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. Migrate the database:

    ```bash
    php artisan migrate
    ```

6. Start the development server:

    ```bash
    php artisan serve
    ```

The platform should now be accessible at `http://localhost:8000`.

### 3. User Account Creation

1. Visit the platform in your web browser.
2. Register a new account as a Guest (evaluator) or a FYP group, or log in as an Admin.
3. Guests (evaluators) can set preferences such as project categories and specialty areas.
4. FYP groups, representing Final Year Project teams, can manage their project details, including assigning keywords and providing essential information about their projects after registration.

### 4. Project Assignment and Evaluation

1. Admin sets the physical location of each FYP project on the demonstration floor.
2. Projects are randomly assigned to evaluators based on matching keywords and evaluator preferences.
3. Each evaluator is assigned to evaluate between 3-5 projects.

### 5. Platform Efficiency and Assessment

The Open House Management Platform enhances the efficiency of the FYP evaluation process in the following ways:

- **Automated Project Assignment:** The platform automates the project assignment process, ensuring a fair and unbiased distribution of projects to evaluators based on their preferences and expertise.

- **Anonymous Evaluation:** Evaluators can assess projects without knowing the identities of the students. This anonymity promotes fair assessments and reduces potential biases.

- **Efficient Rubric-based Evaluation:** The inclusion of a rubric-based evaluation system allows for a structured assessment process, ensuring consistency and objectivity in project evaluations.

- **Student Access Control:** Students can view the number of evaluators who assessed their project, promoting transparency, while individual evaluator scores remain confidential to maintain fairness.

---

Feel free to reach out if you encounter any issues during the setup process. Happy evaluating!
