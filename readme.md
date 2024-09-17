# เปิด xampp
---
![Screenshot from 2024-09-17 23-41-56](https://github.com/user-attachments/assets/67c37c57-da4d-4d9d-aec3-29c8627ece28) \
กดปุ่ม Start ของแถว Apache และ MySQL\
รอให้เขียว

# สร้างฐานข้อมูล
---
![Screenshot from 2024-09-17 23-37-22](https://github.com/user-attachments/assets/22815731-097f-4ff0-8e00-c430a4e537b5)\
กดปถ่ม Admin ตรงแถว MySQL\
![Screenshot from 2024-09-17 23-47-47](https://github.com/user-attachments/assets/8eac629a-1b2e-4768-a343-027b6c36358f)\
ดูแถบด้านข้าง ถ้าไม่มีกดตรงลูกศรมุมซ้ายบน\
![Untitled](https://github.com/user-attachments/assets/a4c52d52-67ee-447d-a6e2-a86a19a780ad)\
![Screenshot from 2024-09-17 23-47-47e](https://github.com/user-attachments/assets/966cb337-1e20-4736-97f3-f21f0b8667e8)\
กด New\
![image](https://github.com/user-attachments/assets/4ad9ec44-43d6-4e08-991a-d89c1c6eabc9)\
เขียนชื่อฐานข้อมูลตรง  Databases name แล้วกด create\
![aesdrqwrfdf](https://github.com/user-attachments/assets/75950639-d9f8-4259-ae3b-673d8d29da35)\
กด SQL ตรงแถบด้านบน แล้วใส่โค้ดนี้
```
CREATE TABLE carx(
cid varchar(7) UNIQUE,
    c_name varchar(40),
    c_color varchar(10)
);
```
กด Go\
![Screenshot from 2024-09-17 23-59-43e](https://github.com/user-attachments/assets/dff4bb99-c4b5-4e97-9dc3-f49dfe58f5eb)\

# โหลดไฟล์ไปลง
---
เปิด xampp\
![Screenshot from 2024-09-17 23-40-12e](https://github.com/user-attachments/assets/71087045-5c82-4103-bfac-287d251de654)\
กดปุ่ม Explorer กด folder htdocs สรา้งโฟลเดอใหม่ชื่อตัวเอง\
![asdgjkjhghjk](https://github.com/user-attachments/assets/3a82d8d1-6aed-44ca-8f5e-30feaa64c8fe)\
![image](https://github.com/user-attachments/assets/7f24d208-8790-498d-b40c-c3d255db5850)\
![downloadZip](https://github.com/user-attachments/assets/123e48db-d793-4a65-999c-582a719cc6f3)\
โหลดไฟล์ กด code กด download zip เปิดไฟล์แล้วก้อปไปวางใน htdocs ในโฟลเดอ ชื่อตัวเอง\
เปิด http://127.0.0.1/ชื่อโฟลเดอตัวเอง/ชื่อไฟลที่เปิด 
```
เช่น
http://127.0.0.1/myname/show_car.php
```

