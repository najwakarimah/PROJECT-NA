import mysql.connector

# Koneksi ke database
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",  # ganti sesuai MySQL kamu
    database="soal_db"
)
cursor = db.cursor()

# Ambil semua soal
cursor.execute("SELECT * FROM soal")
soal_list = cursor.fetchall()

# Jawaban pengguna
skor = 0
for soal in soal_list:
    print(f"\n{soal[1]}")
    print(f"A. {soal[2]}")
    print(f"B. {soal[3]}")
    print(f"C. {soal[4]}")
    print(f"D. {soal[5]}")
    
    jawab = input("Jawaban kamu (A/B/C/D): ").upper()
    if jawab == soal[6]:
        print("✅ Benar!")
        skor += 1
    else:
        print(f"❌ Salah! Jawaban benar: {soal[6]}")

# Nilai akhir
print(f"\nSkor akhir kamu: {skor}/{len(soal_list)}")

cursor.close()
db.close()
