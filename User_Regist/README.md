# Aturan Main
1.) Sebelum anda membuka file **User_Regist** berikut, anda harus membuat database dengan ketentuan berikut :

    a.) nama database:
        user-verification

    b.) ketentuan kolom (terdapat 6 kolom):
        id type int(11) AUTO_INCREMENT PRIMARY KEY
        username type varchar(100)
        email type varchar(200) UNIQUE
        verified type tinyint(4)
        token type varchar(100)
        password type varchar(100)

2.) Setelah itu download composer, karena kita nantinya akan menggunakan library dari swift mailer, cara download : https://www.youtube.com/watch?v=tb8b7AMnk1g atau jika masih bingung versi bahasa indonya https://www.youtube.com/watch?v=15XYja-juSA&t=1s

# Setting Manual 
1.) Masuk ke file `controllers/emailController.php` , pada line ke 11-13 terdapat konfigurasi email. disitu anda diminta untuk memasukkan email dan password anda sebagai si pengirim verifikasi email. contoh :

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
        ->setUsername("email@example.com")
        ->setPassword("xxxxxxxxxxxxxxx");

2.) Masih di file yang sama, pada line 47 masukkan email anda persis seperti setting pada nomor 1

3.) Masih di file yang sama, pada line 84 masukkan email anda persis seperti setting pada nomor 1


# Penting!!!!!!!
![WhatsApp Image 2020-12-28 at 10 34 14](https://user-images.githubusercontent.com/61005674/103190503-d4de4c80-4903-11eb-9001-60db00075f9e.jpeg)

jika waktu mencoba dan terjadi error pada gambar tersebut, itu di karenakan pada kondisi tersebut error = 0, untuk PHP versi 7.4 keatas akan terdapat peringatan seperti pada gambar. untuk cara mengatasinya anda bisa downgrade PHP anda terlebih dahulu, caranya : 
https://www.youtube.com/watch?v=wtgiEluCbhc
dan seharusnya jika berhasil akan menjadi seperti berikut: 
![WhatsApp Image 2020-12-28 at 11 31 45](https://user-images.githubusercontent.com/61005674/103190656-7e254280-4904-11eb-85c3-8d7c47f1e551.jpeg)

sebenarnya juga tidak perlu melakukan downgrade, tetapi harus melakukan perubahan pada code nya. karena disini masih belum ketemu solusinya, maka solusi utama yaitu harus downgrade. tidak menutup kemungkinan jika anda ingin memperbaiki codenya :D.
