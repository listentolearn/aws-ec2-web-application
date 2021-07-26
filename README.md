# aws-ec2-web-application

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](https://example.com)

This project is built to host a PHP application in AWS EC2 instance.


### Built With

The project is built using,
* AWS resources
* Terraform
* Ansible


<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

* Create a free tier AWS account.
* Create an IAM user with programmable access and make a note of the access and secret keys.

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/listentolearn/aws-ec2-dynamic-website
   ```
2. [Install Terraform](https://www.terraform.io/downloads.html)
3. [Install Ansible](https://docs.ansible.com/ansible/latest/installation_guide/intro_installation.html)



<!-- USAGE EXAMPLES -->
## Usage

Hosting this application involves three parts.

### Part 1: Standing up the Infrastructure

The infrastructure is setup in AWS using Terraform.

1. cd into the infrastructure folder in the cloned repository.
2. Run the following commands in order
    - terraform init
    - terraform plan
    - terraform apply

This will provision the required infrastructure and provides the EC2 instance public IP as the output.

### Part 2: Installing the application

The next step is to install the required softwares in the EC2 instance and deploy the php application along with the MySQL database. This is done using ansible.

1. Open the inventory.yml file under ansible directory and replace 0.0.0.0 with the public IP copied at the end of part 1.
2. Replace the contents of the ./ansible/secrets/ssh.private with your private key. This is the private key corresponding to the public key used in Part 1 while provisioning the infrastructure using terraform.
3. Run the ansible playbook using the below command
    - ansible-playbook -i inventory.yml application.yml

### Part 3: Tear down the application

Run the below command to tear down the application.

    - terrafrom destroy