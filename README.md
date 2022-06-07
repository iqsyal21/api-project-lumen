# backend versi 1
ini baru di test dari postman, untuk CRUD udah ok. 

list endpoint

* POST   | /api/register
* POST   | /api/login
* GET    | /api/laporan | auth |
* GET    | /api/laporan/{id} | auth |
* DELETE | /api/laporan/{id} | auth |
* PUT    | /api/laporan/{id} | auth |
* POST   | /api/laporan | auth |

**POST : /api/register**
<p>
    "status": 200, <br>
    "pesan": "berhasil membuat akun", <br>
    "data": { <br>
        "name": "tes2", <br>
        "email": "tes2@gmail.com", <br>
        "password": "$2y$10$maTV0jpqBSizZsr2Qt6kaexTDY0pury26A0j8nLoFx0FfJET0lRem", <br>
        "level": "user" <br>
    }
</p>

**POST : /api/login**
<p>
    "status": 200, <br>
    "pesan": "login berhasil", <br>
    "data": { <br>
        "id": 1, <br>
        "name": "tes", <br>
        "email": "tes@gmail.com", <br>
        "level": "user", <br>
        "api_token": "Wg55VoOyiWOln3LCANwD05XFXs66mi4m", <br>
        "created_at": "2022-06-03T01:29:33.000000Z", <br>
        "updated_at": "2022-06-03T01:32:29.000000Z" <br>
    }
</p>

**POST : /api/laporan**
<p>
    "status": 200, <br>
    "pesan": "data sudah ditambahkan", <br>
    "data": { <br>
        "id_user": "3", <br>
        "name": "user2", <br>
        "phone": "123456789", <br>
        "image": "http://localhost:8000/upload/food.jpeg", <br>
        "location": "lokasi user 2", <br>
        "status": "tes" <br>
    }
</p>
