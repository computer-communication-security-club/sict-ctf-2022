## Challenge -ын source кодыг localhost дээр ажиллуулж үзэхээр оруулав.

>###  Todo List
 - source folder дотор ажиллана.
-  **sudo apt install docker.io**

- **docker build -t gauss .**

- **docker run -dit --name gauss -p 10001:10001 --restart always  gauss**

- nc localhost 10001