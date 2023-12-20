# Open House Management Platform

This repository contains the source code for the Open House Management Platform developed for NUST-SEECS.

## Project Overview

The Open House Management Platform is a comprehensive solution designed to facilitate the efficient organization and evaluation of Final Year Projects (FYP) at NUST-SEECS. The platform aims to streamline the FYP evaluation process, providing a user-friendly interface for guests (evaluators), FYP groups, and administrators.

## Key Features

- **User Account Management:**
  - Dedicated accounts for guests (evaluators), FYP groups, and administrators.
  - Customizable preferences for evaluators, including project categories and specialty areas.

- **Project Assignment:**
  - Random assignment of projects to evaluators based on preferences and keywords.
  - Limiting each evaluator to assess 3-5 projects for balanced evaluation.

- **Evaluation Process:**
  - Display of project locations to evaluators for easy navigation.
  - Rating system on a scale of 1-10 for project assessment.
  - Bonus: Rubric-based evaluation system with defined metrics.

- **Student Access:**
  - Students can view the number of evaluators who assessed their project.
  - Individual evaluator scores remain confidential.

## Technical Stack

- **Server-Side:** Laravel
- **Client-Side:** Laravel Blade
- **Database:** MySQL

## Getting Started

Follow the instructions in the [SETUP.md](SETUP.md) file to set up the project locally.

## Version Control Practices

We follow the [GitFlow](https://nvie.com/posts/a-successful-git-branching-model/) branching strategy and use [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/) for meaningful commit messages.

## Collaboration

Feel free to contribute to the project by forking the repository and creating pull requests. For major changes, please open an issue to discuss the proposed changes.
