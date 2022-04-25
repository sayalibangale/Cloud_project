# Beach Cleaning Website

As the name indicates, this website is intended for those users who are interested in beach cleaning. In this website we have given user the choice to either participate in a beach clean which is already organized or to organize a beach clean. Also, we have added blogs which shows the past beach cleans that have taken place through this website. A user profile page is also created where the user can have a look at the past beach cleanups that he/she has attended and the upcoming beach cleanups for which he/she has registered. Also there is an admin dashboard for the admin to manage the website.



## DEPLOY THE APPLICATION ON EC2 WITH FEW EASY STEPS

- Go to aws management console 
- In services, choose Instances and then launch an instance 
- Choose AMI: Microsoft Windows Server 2022 Base (in Free Tier)
- Instance Type: t2.micro
- No change in Instance Details.
- No change is Storage. Assigned storage is sufficient.
- Add a tag: No change 
- Security Group Configuration: Add Rules: Custom TCP protocol and set port number to 8080. Add HTTP and HTTPS rules as well.	
- When asked for Key Pair, select Create a new Key Pair. Name the Key Pair and create. A .pem file will be downloaded. Know the location of this file for further use.
- Launch the instance
- Go to EC2>>Instances and wait for the Instance State to display Running and Status Check to display 2/2 checks passed before proceeding.


## Screenshots
![a](https://user-images.githubusercontent.com/65482651/165068316-6e892bbb-d312-4da2-9531-8b191fe1626e.JPG)
![2](https://user-images.githubusercontent.com/65482651/165068458-d2b086b2-9204-4315-9a07-af5e7996ffba.JPG)
![3](https://user-images.githubusercontent.com/65482651/165068470-95780f7c-c2f6-4ce8-8808-b9721b71633d.JPG)
![7](https://user-images.githubusercontent.com/65482651/165068607-0020bd5e-d6d9-4c51-a038-7f207987df5a.JPG)
